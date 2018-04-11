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

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

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
                                <a href="/admin/add-clients" class="adm-head-btn">Добавить анкету</a>
                                <h2>Анкеты</h2>
                            </div>
                            <div class="row">

                                @foreach($model->clients as $client)

                                    <div class="col-md-4">
                                        <div class="client-item">
                                            <div class="client-photo">
                                                <a href="/admin/client/{{ $client->id }}">
                                                    <img src="{{ $client->image_path }}" alt="">
                                                </a>
                                            </div>
                                            <div class="client-info">
                                                <div class="client-name">
                                                    <a href="">{{ $client->name }}, <span class="old-years">{{ $client->age }} лет</span></a>
                                                </div>
                                                <div class="client-btn">
                                                    <div class="view-more">
                                                        <a href="/admin/client/{{ $client->id }}">Подробнее</a>
                                                    </div>
                                                    <div class="delete-edit">
                                                        <a class="client-edit" href="/admin/edit-client/{{ $client->id }}"><i class="far fa-edit"></i></a>
                                                        <a data-delete-client href="#" data-client-id="{{ $client->id }}" class="client-delete"><i class="far fa-trash-alt"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="admin-pagination">

                            @include('admin.partial.clientPagination')

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="/js/summeredit.js"></script>

<script src="/js/ckedit.js"></script>

<script src="/js/deleteClient.js"></script>

</body>
</html>