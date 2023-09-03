<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>HeroBiz<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('herobiz') }}" class="active">Home 1 - index.html</a></li>
                        <li><a href="{{ route('index-two') }}">Home 2 - index-2.html</a></li>
                        <li><a href="{{ route('index-three') }}">Home 3 - index-3.html</a></li>
                        <li><a href="{{ route('index-four') }}">Home 4 - index-4.html</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li>
                            <a href="#">Column 1 link 1</a>
                            <a href="#">Column 1 link 2</a>
                            <a href="#">Column 1 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 2 link 1</a>
                            <a href="#">Column 2 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 3 link 1</a>
                            <a href="#">Column 3 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 4 link 1</a>
                            <a href="#">Column 4 link 2</a>
                            <a href="#">Column 4 link 3</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>

    </div>
</header><!-- End Header -->
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <img src="{{ asset('assets/herobiz/assets/img/hero-carousel/hero-carousel-3.svg') }}" class="img-fluid animated">
        <h2>Welcome to <span>HeroBiz</span></h2>
        <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
    </div>
</section>

</div>
