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

    </head>
<body>




    <div class="login-page">
        <div class="container">

            <div class="form-flex-block">
                <form action="/login" method="post" class="admin-login">
                    {{ csrf_field() }}
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input id="admin-email" type="text" class="form-control">
                        <label for="admin-email">Электронный адрес</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input id="admin-password" type="password" class="form-control">
                        <label for="admin-password">Пароль</label>
                    </div>
                    {{--<div class="form-group form-md-line-input login-checkbox">--}}
                    {{--<input id="save-me"  type="checkbox" class="form-control">--}}
                    {{--<label for="save-me">Запомнить меня?</label>--}}
                    {{--</div>--}}
                    <div class="btn-wrapper">
                        <button type="submit" id="admin-login" class="btn btn-make-app">Вход</button>
                    </div>
                    <div class="clearfix"> </div>
                </form>
            </div>

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

    <script src="/js/login.js"></script>


</body>
</html>