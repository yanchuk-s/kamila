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

    {{--<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>--}}

    <script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>

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
                            <h2>Правила сотрудничества
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12 rulers-adm">

                                <form enctype="multipart/form-data" method="post" class="admin-add-some" id="add-rulers" name="adminAddRulers">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$rulers->id}}" name="id">
                                    <div class="description-blog-uk">
                                        <p class="incorect-input incorect-editor-uk"><i class="fas fa-exclamation-triangle"></i>Введите текст на Украинском!</p>
                                        <label for="editoruk">Текст на Украинском:</label>
                                        <textarea id="editoruk">{{$rulers->text_uk}}</textarea>
                                    </div>

                                    <div class="description-blog-ru">
                                        <p class="incorect-input incorect-editor-ru"><i class="fas fa-exclamation-triangle"></i>Введите текст на Русском!</p>
                                        <label for="editorru">Текст на Русском:</label>
                                        <textarea id="editorru">{{$rulers->text_ru}}</textarea>
                                    </div>


                                    <div class="btn-wrapper">
                                        <button type="submit" id="add-rulers-save" class="btn btn-make-app">Сохранить
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

<script src="/js/ckedit.js"></script>

<script src="/js/editRulers.js"></script>





</body>
</html>