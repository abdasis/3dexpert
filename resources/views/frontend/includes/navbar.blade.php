<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid py-3">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="{{ url('/') }}">
                    <img src="{{ url('/') }}/frontend/assets/images/logo-3dexpert.png" alt="" class="logo-light" height="40" />
                    <img src="{{ url('/') }}/frontend/assets/images/logo-3dexpert.png" alt="" class="logo-dark" height="40" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav  ml-auto" style="position: absolute; right: 50px; padding: 10px;" id="mySidenav">
                        <li class="nav-item active">
                            <b><a href="{{ url('/') }}" class="nav-link font-16 font-weight-bold">Home</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="{{ route('kelas') }}" class="nav-link font-16 font-weight-bold">Kategori Kelas</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="{{ route('kelas-saya') }}" class="nav-link font-16 font-weight-bold">Kelas Saya</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="{{ route('order.invoice') }}" class="nav-link font-16 font-weight-bold">Transaksi</a>
                            </b>
                        </li>
                        <li class="nav-item ml-1">
                            <b><a href="{{ route('profile') }}" class="nav-link font-16 font-weight-bold"> <i class="fa fa-user-circle"></i> Profil</a>
                            </b>
                        </li>
                    </ul>
                </div>
            </div>

</nav>
