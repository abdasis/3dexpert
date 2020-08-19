<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('nama_situs') | 3D Expert </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/backend/assets/images/favicon.ico">

		<!-- App css -->
		<link href="{{ url('/') }}/backend/assets/css/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{ url('/') }}/backend/assets/css/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        @yield('css')
		<link href="{{ url('/') }}/backend/assets/css/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
		<link href="{{ url('/') }}/backend/assets/css/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

		<!-- icons -->
		<link href="{{ url('/') }}/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout='{"topbar": {"color": "light"}}'>
        @include('sweetalert::alert')

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('backend.includes.topbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.includes.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('backend.includes.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{ url('/') }}/backend/assets/js/vendor.min.js"></script>
        @yield('js')
        <!-- App js -->
        <script src="{{ url('/') }}/backend/assets/js/app.min.js"></script>

    </body>
</html>
