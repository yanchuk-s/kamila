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
                            <div class="client-page">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="client_photo">
                                            <img src="{{ $model->client->image_path }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="client-general-info">
                                            <h2>Основная информация</h2>
                                            <ul>
                                                <li>Имя: <span>{{ $model->client->name }}</span></li>
                                                <li>Дата рождения: <span>{{ $model->client->dateOfBirth}}</span></li>
                                                <li>Возраст: <span>{{ $model->client->age }}</span></li>
                                                <li>Адресс: <span>{{ $model->client->HomeAddress}}</span></li>
                                                <li>Номер телефона: <span>{{ $model->client->phoneNumber}}</span></li>
                                                <li>Электронный адрес: <span>{{ $model->client->mail }}</span></li>
                                                <li>Рост: <span>{{ $model->client->hight }} см</span></li>
                                                <li>Вес: <span>{{ $model->client->weight }} кг</span></li>
                                                <li>Цвет волос: <span>{{ $model->client->hairColor }}</span></li>
                                                <li>Цвет глаз: <span>{{ $model->client->eyeColor }}</span></li>
                                                <li>Телосложение: <span>{{ $model->client->bodyType }}</span></li>
                                                <li>Семейный статус: <span>{{ $model->client->familyStatus  }}</span></li>
                                            </ul>


                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="client-other-info">
                                            <h2>Дополнительная информация</h2>
                                            <ul>
                                                <li>В каком агентстве Вы уже (были) зарегистрированы: <span>{{ $model->client->atherAgency }}</span></li>
                                                <li>Дети (полная дата рождения, имена): <span>{{ $model->client->children }}</span></li>
                                                <li>Курение: <span>{{ $model->client->smoking}}</span></li>
                                                <li>Алкоголь: <span>{{ $model->client->alcohol }}</span></li>
                                                <li>Религия: <span>{{ $model->client->religion}}</span></li>
                                                <li>Образование, специальность: <span>{{ $model->client->educationSpeciality}}</span></li>
                                                <li>Род занятий: <span>{{ $model->client->occupation }}</span></li>
                                                <li>Иностранные языки: <span>{{ $model->client->languages }}</span></li>
                                                <li>Уровень иностраных языков: <span>{{ $model->client->levelLanguages }}</span></li>
                                                <li>Наличие загранпаспорта: <span>{{ $model->client->internationalPassport }}</span></li>
                                                <li>Страны, которые посетили: <span>{{ $model->client->countriesVisited }}</span></li>
                                                <li>Места, которые хотите посетить: <span>{{ $model->client->wantVisit }}</span></li>
                                                <li>Животные: <span>{{ $model->client->animals  }}</span></li>
                                                <li>Любимый вид спорта: <span>{{ $model->client->favoriteSport }}</span></li>
                                                <li>Любимый цвет: <span>{{ $model->client->favoriteColor }}</span></li>
                                                <li>Любимые цветы (их цвет): <span>{{ $model->client->favoriteFlowers }}</span></li>
                                                <li>Любимые фильмы, (жанр): <span>{{ $model->client->favoriteFilms }}</span></li>
                                                <li>Любимая музыка: <span>{{ $model->client->favoriteMusic }}</span></li>
                                                <li>Умение готовить: <span>{{ $model->client->cooking }}</span></li>
                                                <li>В свободное время (выходные) любите делать: <span>{{ $model->client->freeTime }}</span></li>
                                                <li>В детстве мечтали стать: <span>{{ $model->client->inchildhood }}</span></li>
                                                <li>Три вещи, которые Вы бы взяли на необитаемый остров: <span>{{ $model->client->threeThings }}</span></li>
                                                <li>Какие качества Вам не нравятся в людях: <span>{{ $model->client->qualitiesLike }}</span></li>
                                                <li>Ваши позитивные качества: <span>{{ $model->client->qualitiesYour }}</span></li>
                                                <li>Готовы ли вы к переезду в другую страну: <span>{{ $model->client->anotherCountry }}</span></li>
                                                <li>Сколько времени одиноки: <span>{{ $model->client->aloneTime }}</span></li>
                                                <li>Расскажите о себе, Вашем характере, интересах, мечтах, каких отношений Вы ищете, как вы представляете себе свою будущую семейную жизнь. Додайте дополнительные фото: <span>{!! $model->client->yourDescr !!}</span></li>
                                             </ul>

                                                <h2>О желаемом партнере:</h2>

                                            <ul>
                                                <li>Возраст (от – до): <span>{{ $model->client->partnerOld }}</span></li>
                                                <li>Рост (от – до): <span>{{ $model->client->partnerHight }}</span></li>
                                                <li>Телосложение: <span>{{ $model->client->partnerBodyType }}</span></li>
                                                <li>Желательны ли для Вас дети в будущем браке: <span>{{ $model->client->partnerChildren }}</span></li>
                                                <li>Раса/Этническая принадлежность: <span>{{ $model->client->partnerRace }}</span></li>
                                                <li>Религия: <span>{{ $model->client->partnerReligion }}</span></li>
                                                <li>Образование: <span>{{ $model->client->partnerEducation }}</span></li>
                                                <li>Совместное проживание с ним других членов семьи (приветствую, безразлично, нежелательно, исключено): <span>{{ $model->client->partnerHome }}</span></li>
                                                <li>Расскажите о своем желаемом партнере (его характер, интересы, какими качествами он должен обладать): <span>{!! $model->client->partnerDescr !!}</span></li>
                                            </ul>

                                            </ul>
                                        </div>
                                    </div>
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


</body>
</html>