<div class="container">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-md-evenly px-2 mx-md-0 justify-content-between fixed-top" @style(['z-index: 100'])>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="{{route('homepage')}}">
                <img src="{{ asset('assets/images/theme/images/logo.png') }}" alt="Sanas Logo" class="navbar-logo">
            </a>
            <a href="{{ route('auth.login.index') }}" class="btn btn-primary ms-3 d-block d-lg-none">
                <i class="fa-solid fa-user me-2"></i> Login
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">

            </div>

            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                 aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/images/theme/images/logo.png') }}" alt="Sanas Logo" class="navbar-logo">
                    </a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href=" {{ route('homepage') }}">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('resort.index') }}">Phòng</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Đặt phòng</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tin tức</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Hỗ trợ</a></li>
                    </ul>
                </div>

            </div>
            <a href="{{ route('auth.login.index') }}" class="btn btn-primary ms-3 d-none d-lg-block">
            <i class="fa-solid fa-user me-2"></i> Login
        </a>
        </nav>
    </div>
</div>
