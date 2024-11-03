<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from html.ditsolution.net/zomia/app-showcase/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 00:26:20 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Informatic Solutions | Landing</title>
    <meta name="description" content="Informatic Solutions, Cameroun, Technologie, Informatique
    , Developpement logiciels, Infographie, design, innovations technologiques, sécurité informatiques,
    Formations, Laravel">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="66x66" href="{{asset('showcase/assets/images/fav-icon/icon_is.png')}}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('showcase/ajax/libs/font-awesome/6.1.0/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('showcase/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css')}}">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/owl.carousel.min.css')}}" type="text/css" media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/nivo-slider.css')}}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/animate.css')}}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/animated-text.css')}}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/all.min.css')}}" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/flaticon.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('showcase/assets/css/animate.min.css')}}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/meanmenu.min.css')}}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/owl.transitions.css')}}" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{asset('showcase/venobox/venobox.css')}}" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/widget.css')}}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('showcase/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/theme-default.css')}}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('showcase/style.css')}}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{asset('showcase/assets/css/responsive.css')}}" type="text/css" media="all" />

    @yield("css")
</head>

<body>

    <!-- loder -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <!--Zomia mobile-menu-top-logo-Start-->
    <!--=============================-->
    <div class="mobile-logo-area d-sm-block d-md-block d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mobile-menu-logo text-center">
                        <a href="#">
                            <img src="{{asset('showcase/assets/images/info_sol1.png')}}" alt="Zomia">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Zomia mobile-menu-top-logo-end-->

    @include("landing.layouts.header")

 @yield("main")
@include("landing.layouts.footer")
</body>

<!-- Mirrored from html.ditsolution.net/zomia/app-showcase/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 00:28:28 GMT -->

</html>
