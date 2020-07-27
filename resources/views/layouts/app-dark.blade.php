<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>3D Expert - Show Your Imagination</title>
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

        <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />

        <link href="https://unpkg.com/video.js@7/dist/video-js.min.css"
        rel="stylesheet"/>

        <!-- City -->
        <link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet"/>

        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
        <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

    </head>

    <body style="background: #000000">
        @include('sweetalert::alert')

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
          <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>

        <!-- custom js -->
        <script src="{{ url('/') }}/frontend/assets/js/app.js"></script>
        <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
        <script>
            const player = new Plyr('#player');
        </script>
    </body>

</html>
