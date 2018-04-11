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
                    <div class="admin_main ">
                        <div class="section-admin-title">
                            <h2>Добавить отзыв</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <form method="post" class="admin-add-some" name="addResponse">
                                    {{ csrf_field() }}

                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input name="userName" id="user_name" type="text" class="form-control" placeholder="Имя пользователя">
                                    </div>

                                    <p class="incorect-input incorect-image-path"><i class="fas fa-exclamation-triangle"></i>Выберите картинку!</p>
                                    <span class="imgtosize">Картинка не больше 100px х 100px!</span>
                                    <div class="input-group choose-img">
                                        <label class="input-group-btn">
                                            <span class="btn-choose-img">
                                                Выбрать картинку<input name="responseImg" id="response-input-img" type="file" style="display: none;" multiple>
                                            </span>
                                        </label>
                                        <input type="text" class="form-control input-file-name" readonly disabled>
                                    </div>

                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <textarea name="responsDescr" id="respons-descr" placeholder="Отзыв" ></textarea>
                                    </div>
                                    <div class="btn-wrapper">
                                        <button type="submit" id="add-response" class="btn btn-make-app btn-spiner">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                            <span>Добавить</span>
                                        </button>
                                    </div>
                                    <div class="clearfix"> </div>
                                </form>

                            </div>
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

<script src="/js/addResponse.js"></script>


</body>
</html>