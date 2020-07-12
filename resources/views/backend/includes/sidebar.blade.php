<div class="left-side-menu">

    <div class="h-100 menuitem-active" data-simplebar="init">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>


                <li>
                    <a href="{{ route('admin.orders.index') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Daftar Order </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEcommerce" data-toggle="collapse">
                        <i class="mdi mdi-book"></i>
                        <span> Kursus </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('courses.create') }}">Tambah Kursus</a>
                            </li>
                            <li>
                                <a href="{{ route('courses.index') }}">Daftar Kursus</a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}">Kategori</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#klien" data-toggle="collapse">
                        <i class="mdi mdi-account"></i>
                        <span> Klien </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="klien">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('clients.create') }}">Tambah Klien</a>
                            </li>
                            <li>
                                <a href="{{ route('clients.index') }}">Daftar Klien</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i class="mdi mdi-bank-transfer"></i>
                        <span> Pembayaran </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="crm-dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="crm-contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a href="crm-opportunities.html">Opportunities</a>
                            </li>
                            <li>
                                <a href="crm-leads.html">Leads</a>
                            </li>
                            <li>
                                <a href="crm-customers.html">Customers</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
