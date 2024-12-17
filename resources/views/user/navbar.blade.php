<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="./index.html"><h1 class="display-4 text-white my-3">SOUNDS</h1></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                
                            
                            <li><a href="./videos.html">Videos</a></li>

                            <li><a href="./contact.html">Contact</a></li>
                            @if(Auth::user())
                                <li><x-app-layout></x-app-layout></li>
                            
                            @else
                                <li>
                                    <a href="/login">LOGIN</a></li>
                                 <li>  <a href="/register">register</a>

                                </li>
                            

                            
                            @endif
                        </ul>
                    </nav>
                    <div class="header__right__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
