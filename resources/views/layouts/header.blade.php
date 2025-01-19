<Header class="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navbar-custom py-2 py-lg-0">
                    <!-- Brand/Logo -->
                    <a class="navbar-brand text-white" href="{{ route('home.index') }}">NRK Imagine</a>

                    <!-- Offcanvas Toggle Button -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Fullscreen Menu Links (For Desktop) -->
                    <div class="collapse navbar-collapse navigation-menu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item position-relative">
                                <a class="nav-link" href="{{ route('architecture') }}">Architecture</a>
                            </li>
                            <li class="nav-item position-relative">
                                <a class="nav-link" href="{{ route('interior') }}">Interior</a>
                            </li>
                            <li class="nav-item position-relative">
                                <a class="nav-link" href="{{ route('profile') }}">NRK profile</a>
                            </li>
                            <li class="nav-item position-relative">
                                <a class="nav-link" href="{{ route('contactus') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Side Icons -->
                    <div class="d-none d-lg-flex gap-3">
                        <a href="" class="icon-btn">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                        <a href="" class="icon-btn">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</Header>
