<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KamilaAgency</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT CSS-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link type="text/css" rel="stylesheet" href="/font/font-icon/font-awesome/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="/font/font-icon/font-medic/font-medic.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">


    <link type="text/css" rel="stylesheet" href="/css/layout.css">
    <link type="text/css" rel="stylesheet" href="/css/components.css">
    <link type="text/css" rel="stylesheet" href="/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="/css/gf.css">

    <link type="text/css" rel="stylesheet" href="/css/admin/admin.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>


@if(auth()->check())

    @include('admin.adminModal')

    @include('admin.adminHeader')

    <div class="admin_section">
        <div class="container">
        <div class="row">
            <div class="col-md-2">

                @include('admin.adminNavbar')

            </div>
            <div class="col-md-10">
                <div class="container-admin">
                    <div class="admin_main slider-page">
                        <div class="section-admin-title">
                            <a href="/admin/add-slider" class="adm-head-btn">Добавить слайдер</a>
                            <h2>Слайдер</h2>
                        </div>
                        <div class="row">

                            @foreach($model->slider as $slider)

                                <div class="col-md-12">

                                    <div class="admin-blog-item">
                                        <div class="left-flex">
                                            <div class="ad-item-img">
                                                <div class="img-fit">
                                                   <img src="{{ $slider->image_slide }}" alt="">
                                                </div>
                                            </div>
                                            <div class="blog-info">
                                                <div class="blog-date-post"> {{ $slider->created_at->format('d-m-Y') }}</div>
                                                <div class="title-post">
                                                    <h4 class="recent-news-title">{{ $slider->title }}</h4>
                                                </div>
                                                <div class="recent-news-description">{{ $slider->text }}</div>

                                            </div>
                                        </div>
                                        <div class="right-flex">
                                            <div class="admin-blog-btn">
                                                <a href="{{route('showSliderEdit',['id' => $slider->id])}}" class="edit-btn">Редактировать</a>
                                                <a data-delete-slide href="#" data-slide-id="{{ $slider->id }}" class="delete-btn">Удалить</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </div>

    @include('admin.adminFooter')

@else
    <h1>NO!</h1>
@endif



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

<script src="/js/login.js"></script>


<script src="/js/deleteSlider.js"></script>

</body>
</html>