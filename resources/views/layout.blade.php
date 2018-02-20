<!doctype html>
<html lang="{{\App::getLocale()}}">
<head>
    <title>KamilaAgency {{$model->metaTitle}}</title>

    <meta name="description" content="{{$model->metaDescription}}">

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FONT CSS-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link type="text/css" rel="stylesheet" href="/font/font-icon/font-awesome/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="/font/font-icon/font-medic/font-medic.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link type="text/css" rel="stylesheet" href="/libs/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/libs/owl.carousel/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="/libs/slick-slider/slick.css">
    <link type="text/css" rel="stylesheet" href="/libs/slick-slider/slick-theme.css">

    <!-- STYLE CSS-->
    <link type="text/css" rel="stylesheet" href="/css/layout.css">
    <link type="text/css" rel="stylesheet" href="/css/components.css">
    <link type="text/css" rel="stylesheet" href="/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="/css/gf.css">

    <link rel="shortcut icon" href="/logo_smoll_jvo_icon.ico" type="image/x-icon">
</head>
<body>

@include('okModal')
@include('responseModal')
@include('modal')
@include('orderColl')

<!--BEGIN PAGE LOADER-->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div><img src="/images/logo/logo-smoll.png" alt="" class="img-responsive"></div>
<div class="body-wrapper">
    <!-- MENU MOBILE-->
    <div class="wrapper-mobile-nav">
        <div class="header-topbar">
            Меню
        </div>
        <div class="header-main">
            <div class="menu-mobile">
                <ul class="nav-links nav navbar-nav">
                    <li><a href="{{route('home',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">{{trans('lang.mob-nav-general')}}</span></a></li>
                    <li><a href="{{route('rulers',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">{{trans('lang.mob-nav-rulers')}}</span></a></li>
                    <li><a href="{{route('blogs-list',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">{{trans('lang.mob-nav-blog')}}</span></a></li>
                    <li><a href="{{route('responses',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">{{trans('lang.mob-nav-responses')}}</span></a></li>
                    <li><a href="{{route('contact',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">{{trans('lang.mob-nav-contact')}}</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- WRAPPER CONTENT-->
    <div class="wrapper-content">

        @include('header')

        @yield('content')

        @include('footer')
        <!-- BUTTON BACK TO TOP-->
        <div class="btn-wrapper back-to-top"><a href="#top" class="btn btn-transparent"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
</div>


<!-- LIBRARY JS-->
<script src="/libs/jquery/jquery-2.2.3.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/libs/detect-browser/browser.js"></script>
<script src="/libs/smooth-scroll/jquery-smoothscroll.js"></script>

<script src="/libs/wow-js/wow.min.js"></script>
<script src="/libs/slick-slider/slick.min.js"></script>
<script src="/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="/libs/jquery.vticker.js"></script>
<script src="/libs/jquery.appear.js"></script>
<script src="/libs/jquery.countTo.js"></script>
<!-- MAIN JS-->

<script src="/js/jquery.matchHeight.js"></script>

<script src="/js/main.js"></script>
<script src="/js/modalContact.js"></script>

<script src="/js/contactPage.js"></script>

<script src="/js/orderColl.js"></script>

<script src="/js/showResponseModal.js"></script>

<!-- LOADING SCRIPTS FOR PAGE-->
<script src="/js/header.js"></script>
<script src="/libs/isotope/isotope.min.js"></script>
{{--<script src="/js/pages/contact.js"></script>--}}
</body>
</html>