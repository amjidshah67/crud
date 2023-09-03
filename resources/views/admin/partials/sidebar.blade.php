<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('users.index') }}">
                <i class="bi bi-grid"></i>
                <span>Users</span>
            </a><!-- End Users Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('services.index') }}">
                <i class="bi bi-grid"></i>
                <span>Service</span>
            </a><!-- End service Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('brands.index') }}">
                <i class="bi bi-grid"></i>
                <span>Brand</span>
            </a><!-- End brand Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('pages.index') }}">
                <i class="bi bi-grid"></i>
                <span>Pages</span>
            </a><!-- End page Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('faqes.index') }}">
                <i class="bi bi-grid"></i>
                <span>FAQS</span>
            </a><!-- End faqs Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('skilles.index') }}">
                <i class="bi bi-grid"></i>
                <span>Skills</span>
            </a><!-- End skill Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('categories.index') }}">
                <i class="bi bi-grid"></i>
                <span>Categories</span>
            </a><!-- End categories Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('productes.index') }}">
                <i class="bi bi-grid"></i>
                <span>Products</span>
            </a><!-- End products Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('Teames.index') }}">
                <i class="bi bi-grid"></i>
                <span>Team</span>
            </a><!-- End Team Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('Pakages.index') }}">
                <i class="bi bi-grid"></i>
                <span>Pakages</span>
            </a><!-- End pakage Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('ContactQuerie.index') }}">
                <i class="bi bi-grid"></i>
                <span>Cotact Queries</span>
            </a><!-- End contact Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('NewsLetter.index') }}">
                <i class="bi bi-grid"></i>
                <span> News Letters </span>
            </a><!-- End news letter Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/faq') }}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/contact')}}">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/error') }}">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/blank') }}">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
