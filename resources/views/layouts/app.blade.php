<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>3D Expert - Show Your Inovation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/frontend/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend/assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/materialdesignicons.min.css" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/all.min.css" />

    </head>

    <body>

        <!--Navbar Start-->
        @include('frontend.includes.navbar')
        <!-- Navbar End -->

        @yield('content')


        <!-- footer start -->
        @include('frontend.includes.footer')
        <!-- footer end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{ url('/') }}/frontend/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/jquery.easing.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/scrollspy.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/all.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.kursus-terbaru').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3
                });
            });
        </script>

        <!-- custom js -->
        <script src="{{ url('/') }}/frontend/assets/js/app.js"></script>
    </body>

</html>
