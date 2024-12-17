<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./admin/images/logos/favicon.png" />
  <link rel="stylesheet" href="./admin/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
   @include('admin.sidebar');
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
   @include('admin.header');
   <h1 class="text-center display-6 mt-5">ALL SONGS</h1>
   <div class="container mt-2">
    <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <th>ID</th>
                <th>SongName</th>
                <th>song description</th>
                <th>artist</th>
                <th>genre</th>
                <th>year</th>
                <th>language</th>
                <th>Audio or Video</th>

                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        @foreach($song as $s )
        <tr>
          <td>{{$s->id}}</td>
          <td>{{$s->songname}}</td>
          <td>{{$s->songdescription}}</td>
          <td>{{$s->artist}}</td>
          <td>{{$s->genre}}</td>
          <td>{{$s->year}}</td>
          <td>{{$s->language}}</td>
          <td>{{$s->audiofile}}</td>

          <td><a href="{{url('delete_songs',$s->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>
        @endforeach

        </tbody>

    </table>
   </div>
      <!--  Header End -->


    </div>
  </div>
  <script src="./admin/libs/jquery/dist/jquery.min.js"></script>
  <script src="./admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./adminjs/sidebarmenu.js"></script>
  <script src="./admin/js/app.min.js"></script>
  <script src="./admin/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./admin/libs/simplebar/dist/simplebar.js"></script>
  <script src="./admin/js/dashboard.js"></script>
</body>

</html>
