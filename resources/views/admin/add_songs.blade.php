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


      <!--  Header End -->
      <h1 class="text-center display-6 mt-5">ADD AUDIO SONGS</h1>
      <div class="container">
        <form action ="/upload_song" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="my-3">
          <input type="text" name="song_name" placeholder="SONG NAME" class="form-control border-2" required>

        </div>
        <div class="my-3">
            <input type="text" name="song_description" placeholder="SONG DESCRIPTION" class="form-control border-2" required>

          </div>
        <div class="my-3">
          <input type="text" name="artist" placeholder="ARTIST" class="form-control border-2" required>

        </div>
        <div class="my-3">
          <input type="text" name="genre" placeholder="GENRE" class="form-control border-2" required>

        </div>
        <div class="my-3">
          <input type="text" name="year" placeholder="YEAR" class="form-control border-2" required>

        </div>
        <div class="my-3">
          <input type="text" name="language" placeholder="LANGUAGE" class="form-control border-2" required>

        </div>

        <div class="my-3">
            <label> PUT AUDIO SONG</label>
          <input type="file" name="image" placeholder="AUDIO " class="form-control border-2">

        </div>

        <button class="btn btn-primary" href="submitsongs">Submit song</button>
      </div>
    </div>


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
