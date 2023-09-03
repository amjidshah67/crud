<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ route('photofolio') }}" class="logo d-flex align-items-center  me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <i class="bi bi-camera"></i>
            <h1>PhotoFolio</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('photofolio') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('gallery') }}">Nature</a></li>
                        <li><a href="{{ route('gallery') }}">People</a></li>
                        <li><a href="{{ route('gallery') }}">Architecture</a></li>
                        <li><a href="{{ route('gallery') }}">Animals</a></li>
                        <li><a href="{{ route('gallery') }}">Sports</a></li>
                        <li><a href="{{ route('gallery') }}">Travel</a></li>
                        <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Sub Menu 1</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('services-photo') }}">Services</a></li>
                <li><a href="{{ route('contact-photo') }}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
