<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="asset/images/favicon.ico">
    <link rel="shortcut icon" href="asset/images/favicon.ico" />
    <link rel="stylesheet" href="asset/booking/css/booking.css">
    <link rel="stylesheet" href="asset/css/camera.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="asset/js/jquery.js"></script>
    <script src=asset/"js/jquery-migrate-1.2.1.js"></script>
    <script src="asset/js/script.js"></script>
    <script src="asset/js/superfish.js"></script>
    <script src="asset/js/jquery.ui.totop.js"></script>
    <script src="asset/js/jquery.equalheights.js"></script>
    <script src="asset/js/jquery.mobilemenu.js"></script>
    <script src="asset/js/jquery.easing.1.3.js"></script>
    <script src="asset/js/owl.carousel.js"></script>
    <script src="asset/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="asset/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="asset/booking/js/booking.js"></script>
    <script>
        $(document).ready(function(){
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false ,
                minHeight: '444',
                thumbnails: false,
                height: '28.28125%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <script src="asset/js/html5shiv.js"></script>
    <link rel="asset/stylesheet" media="screen" href="asset/css/ie.css">
    <!--[endif]-->
</head>
    @include('header')
            @yield('content')
            @include('footer')
       </body>

</html>