<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ url('/') }}">
            <img src="{{ url('/') }}/frontend/assets/images/logo-3dexpert.png" alt="" class="logo-light" height="21" />
            <img src="{{ url('/') }}/frontend/assets/images/logo-3dexpert.png" alt="" class="logo-dark" height="21" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto" id="mySidenav">
                <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelas') }}" class="nav-link">Kategori Kelas</a>
                </li>
                <li class="nav-item">
                    <a href="#demo" class="nav-link">Kelas Saya</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link"> <i class="fa fa-user-circle"></i> Profil</a>

                </li>
            </ul>

        </div>
    </div>
</nav>
