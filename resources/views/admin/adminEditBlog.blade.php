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
                            <h2>Редактировать блог
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <form enctype="multipart/form-data" method="post" class="admin-add-some admin-add-blog" id="admin-edit-blog" name="adminEditBlog">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="blogId" value="{{$blog->id}}">

                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <p class="incorect-input inc-title-uk"><i class="fas fa-exclamation-triangle"></i>Введите заголовок на Украинском!</p>
                                        <input name="titleUk" id="blog-title-uk" type="text" class="form-control" placeholder="Заголовок блога на Украинском"
                                            value="{{$blog->title_uk}}"
                                        >                                   </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <p class="incorect-input inc-title-ru"><i class="fas fa-exclamation-triangle"></i>Введите заголовок на Русском!</p>
                                        <input name="titleRu" id="blog-title-ru" type="text" class="form-control" placeholder="Заголовок блога на Русском"
                                               value="{{$blog->title_ru}}">
                                    </div>

                                    <p class="incorect-input incorect-category"><i class="fas fa-exclamation-triangle"></i>Выберете категорию!</p>
                                    <select class="form-control admin-select" name="categoryId">
                                        @foreach($categories as $category)

                                            @if($blog->category_id == $category->id)
                                                <option selected class="option-style"
                                                        value="{{ $category->id }}">{{ $category->name_ru }}
                                                </option>
                                            @else
                                                <option class="option-style"
                                                    value="{{ $category->id }}">{{ $category->name_ru }}
                                                </option>
                                            @endif
                                        @endforeach

                                    </select>

                                    <p class="incorect-input incorect-image-path"><i class="fas fa-exclamation-triangle"></i>Выберите картинку!</p>
                                    <span class="imgtosize">Картинка не больше 600px х 600px!</span>
                                    <div class="input-group choose-img">
                                        <label class="input-group-btn">
                                            <span class="btn-choose-img">
                                                Выбрать картинку<input name="blog-img" id="blog-input-img" type="file" style="display: none;" multiple>
                                            </span>
                                        </label>
                                        <input type="text" class="form-control input-file-name" readonly disabled value="{{$blog->image_path}}">
                                    </div>

                                    {{--<div class="description-blog-uk">--}}
                                        {{--<p class="incorect-input incorect-editor-uk"><i class="fas fa-exclamation-triangle"></i>Введите текст на Украинском!</p>--}}
                                        {{--<label for="editoruk">Текст на Украинском:</label>--}}
                                        {{--<textarea id="editoruk">{{$blog->description_uk}}</textarea>--}}
                                    {{--</div>--}}

                                    {{--<div class="description-blog-ru">--}}
                                        {{--<p class="incorect-input incorect-editor-ru"><i class="fas fa-exclamation-triangle"></i>Введите текст на Русском!</p>--}}
                                        {{--<label for="editorru">Текст на Русском:</label>--}}
                                        {{--<textarea id="editorru">{{$blog->description_ru}}</textarea>--}}
                                    {{--</div>--}}


                                    <form method="post">
                                        <p class="incorect-input incorect-editor-uk"><i class="fas fa-exclamation-triangle"></i>Введите текст на Украинском!</p>
                                        <label for="editblogsummUk">Текст на Украинском:</label>
                                        <div id="editblogsummUk">{!!$blog->description_uk!!}</div>
                                    </form>

                                    <form method="post">
                                        <p class="incorect-input incorect-editor-ru"><i class="fas fa-exclamation-triangle"></i>Введите текст на Русском!</p>
                                        <label for="editblogsummRu">Текст на Русском:</label>
                                        <div id="editblogsummRu">{!!$blog->description_ru!!}</div>
                                    </form>


                                    <div class="btn-wrapper">
                                        <button type="submit" id="edit-blog" class="btn btn-make-app admin-add-some btn-spiner">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                            <span>Сохранить</span>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="/js/summeredit.js"></script>

<script src="/js/ckedit.js"></script>

<script src="/js/login.js"></script>

<script src="/js/deleteResponse.js"></script>

<script src="/js/addCategory.js"></script>

<script src="/js/editBlog.js"></script>



</body>
</html>