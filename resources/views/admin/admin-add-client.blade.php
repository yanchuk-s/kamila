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
                                <h2>Добавить анкету</h2>
                            </div>
                            <form enctype="multipart/form-data" method="post" name="addClient">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="incorect-input incorect-image-path"><i class="fas fa-exclamation-triangle"></i>Выберите картинку!</p>
                                    <span class="imgtosize">Картинка не больше 600px х 600px!</span>
                                    <div class="input-group choose-general-img">
                                        <label for="exampleInputFile">Выберите главное фото</label>
                                        <input name="client-img" type="file" id="general-photo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="comment-name">ИФО* :</label>
                                        <input name="name" type="text" class="input-default" id="name" placeholder="ИФО">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="atherAgency">В каком агентстве Вы уже (были) зарегистрированы*:</label>
                                        <input name="atherAgency" type="text" class="input-default" id="atherAgency" placeholder="В каком агентстве Вы уже (были) зарегистрированы">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="dateOfBirth">Дата рождения*:</label>
                                        <input name="dateOfBirth" type="text" class="input-default" id="dateOfBirth" placeholder="Дата рождения">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="age">Возраст*:</label>
                                        <input name="age" type="text" class="input-default" id="age" placeholder="Возраст">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="HomeAddress">Домашний адрес*:</label>
                                        <input name="HomeAddress" type="text" class="input-default" id="HomeAddress" placeholder="Домашний адрес">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="phoneNumber">Номер телефона*:</label>
                                        <input name="phoneNumber" type="text" class="input-default" id="phoneNumber" placeholder="Номер телефона">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="mail">E-mail*:</label>
                                        <input name="mail" type="text" class="input-default" id="mail" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="socialNetworks">Как подписаны в социальных сетях:*:</label>
                                        <input name="socialNetworks" type="text" class="input-default" id="socialNetworks" placeholder="Как подписаны в социальных сетях">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="hight">Рост, см:*:</label>
                                        <input name="hight" type="text" class="input-default" id="hight" placeholder="Рост, см">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="weight">Вес, кг*:</label>
                                        <input name="weight" type="text" class="input-default" id="weight" placeholder="Вес, кг">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="hairColor">Цвет волос*:</label>
                                        <select name="hairColor" class="form-control" id="hairColor">
                                            <option value selected disabled></option>
                                            @foreach($model->haircolors as $color)
                                                    <option value="{{$color}}">{{$color}}</option>
                                            @endforeach
                                            {{--<option value selected disabled></option>--}}
                                            {{--<option value="Блондинка">Блондинка</option>--}}
                                            {{--<option value="Брюнетка">Брюнетка</option>--}}
                                            {{--<option value="Рыжеволосая">Рыжеволосая</option>--}}
                                            {{--<option value="Шатенка">Шатенка</option>--}}
                                            {{--<option value="Русая">Русая</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="eyeColor">Цвет глаз*:</label>
                                        <select name="eyeColor" class="form-control" id="eyeColor">
                                            <option value selected disabled></option>
                                            @foreach($model->eyecolors as $eyecolors)
                                                <option value="{{$eyecolors}}">{{$eyecolors}}</option>
                                            @endforeach
                                            {{--<option value="Карие">Карие</option>--}}
                                            {{--<option value="Зеленые">Зеленые</option>--}}
                                            {{--<option value="Голубые">Голубые</option>--}}
                                            {{--<option value="Серые">Серые</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="bodyType">Телосложение*:</label>
                                        <input name="bodyType" type="text" class="input-default" id="bodyType" placeholder="Телосложение">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="familyStatus">Семейный статус*:</label>
                                        <select name="familyStatus" class="form-control" id="familyStatus">
                                            <option value selected disabled></option>
                                            @foreach($model->familyStatus as $familyStatus)
                                                <option value="{{$familyStatus}}">{{$familyStatus}}</option>
                                            @endforeach
                                            {{--<option value="Не замужем">Не замужем</option>--}}
                                            {{--<option value="Разведена">Разведена</option>--}}
                                            {{--<option value="Вдова">Вдова</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="client-input">
                                        <label for="children">Дети (полная дата рождения, имена)*:</label>
                                        <input name="children" type="text" class="input-default" id="children" placeholder="Дети (полная дата рождения, имена)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="smoking">Курение*:</label>
                                        <select name="smoking" class="form-control" id="smoking">
                                            <option value selected disabled></option>
                                            @foreach($model->smoking as $smoking)
                                                <option value="{{$smoking}}">{{$smoking}}</option>
                                            @endforeach
                                            {{--<option value="Да">Да</option>--}}
                                            {{--<option value="Нет">Нет</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="alcohol">Алкоголь*:</label>
                                        <select name="alcohol" class="form-control" id="alcohol">
                                            <option value selected disabled></option>
                                            @foreach($model->alcohol as $alcohol)
                                                <option value="{{$alcohol}}">{{$alcohol}}</option>
                                            @endforeach
                                            {{--<option value="Да">Да</option>--}}
                                            {{--<option value="Нет">Нет</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="religion">Религия*:</label>
                                        <input name="religion" type="text" class="input-default" id="religion" placeholder="Религия">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="educationSpeciality">Образование, специальность*:</label>
                                        <input name="educationSpeciality" type="text" class="input-default" id="educationSpeciality" placeholder="Образование, специальность">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="client-input">
                                        <label for="occupation">Род занятий*:</label>
                                        <input name="occupation" type="text" class="input-default" id="occupation" placeholder="Род занятий">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="languages">Иностранные языки*:</label>
                                        <input name="languages" type="text" class="input-default" id="languages" placeholder="Иностранные языки">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="levelLanguages">Уровень иностраных языков*:</label>
                                        <input name="levelLanguages" type="text" class="input-default" id="levelLanguages" placeholder="Уровень иностраных языков">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="internationalPassport">Наличие загранпаспорта*:</label>
                                        <select name="internationalPassport" class="form-control" id="internationalPassport">
                                            <option value selected disabled></option>
                                            @foreach($model->internationalPassport as $ainternationalPassport)
                                                <option value="{{$ainternationalPassport}}">{{$ainternationalPassport}}</option>
                                            @endforeach
                                            {{--<option value="Да">Да</option>--}}
                                            {{--<option value="Нет">Нет</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="countriesVisited">Страны, которые посетили*:</label>
                                        <input name="countriesVisited" type="text" class="input-default" id="countriesVisited" placeholder="Страны, которые посетили">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="client-input">
                                        <label for="wantVisit">Места, которые хотите посетить*:</label>
                                        <input name="wantVisit" type="text" class="input-default" id="wantVisit" placeholder="Места, которые хотите посетить">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="animals">Животные*:</label>
                                        <input name="animals" type="text" class="input-default" id="animals" placeholder="Животные">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="favoriteSport">Любимый вид спорта*:</label>
                                        <input name="favoriteSport" type="text" class="input-default" id="favoriteSport" placeholder="Любимый вид спорта">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="favoriteColor">Любимый цвет*:</label>
                                        <input name="favoriteColor" type="text" class="input-default" id="favoriteColor" placeholder="Любимый цвет">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="favoriteFlowers">Любимые цветы (их цвет)*:</label>
                                        <input name="favoriteFlowers" type="text" class="input-default" id="favoriteFlowers" placeholder="Любимые цветы (их цвет)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="favoriteFilms">Любимые фильмы, (жанр)*:</label>
                                        <input name="favoriteFilms" type="text" class="input-default" id="favoriteFilms" placeholder="Любимые фильмы, (жанр)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="favoriteMusic">Любимая музыка*:</label>
                                        <input name="favoriteMusic" type="text" class="input-default" id="favoriteMusic" placeholder="Любимая музыка">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="cooking">Умение готовить*:</label>
                                        <input name="cooking" type="text" class="input-default" id="cooking" placeholder="Умение готовить">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="freeTime">В свободное время (выходные) любите делать*:</label>
                                        <input name="freeTime" type="text" class="input-default" id="freeTime" placeholder="В свободное время (выходные) любите делать">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="inchildhood">В детстве мечтали стать*:</label>
                                        <input name="inchildhood" type="text" class="input-default" id="inchildhood" placeholder="В детстве мечтали стать">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="threeThings">Три вещи, которые Вы бы взяли на необитаемый остров*:</label>
                                        <input name="threeThings" type="text" class="input-default" id="threeThings" placeholder="Три вещи, которые Вы бы взяли на необитаемый остров">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="qualitiesLike">Какие качества Вам не нравятся в людях*:</label>
                                        <input name="qualitiesLike" type="text" class="input-default" id="qualitiesLike" placeholder="Какие качества Вам не нравятся в людях">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="qualitiesYour">Ваши позитивные качества*:</label>
                                        <input name="qualitiesYour" type="text" class="input-default" id="qualitiesYour" placeholder="Ваши позитивные качества">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="anotherCountry">Готовы ли вы к переезду в другую страну*:</label>
                                        <input name="anotherCountry" type="text" class="input-default" id="anotherCountry" placeholder="Готовы ли вы к переезду в другую страну">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="aloneTime">Сколько времени одиноки*:</label>
                                        <input name="aloneTime" type="text" class="input-default" id="aloneTime" placeholder="Сколько времени одиноки">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <span class="incorect-client-desc-first">Заполните поле!</span>
                                    <label for="add-client-comment">
                                        Расскажите о себе, Вашем характере, интересах, мечтах, каких отношений Вы ищете, как вы
                                        представляете себе свою будущую семейную жизнь. Додайте дополнительные фото*:
                                    </label>
                                    <div id="add-client-comment"></div>
                                </div>
                                <div class="ol-md-12 about_partner">
                                    О желаемом партнере:
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="partnerOld">Возраст (от – до)*:</label>
                                        <input name="partnerOld" type="text" class="input-default" id="partnerOld" placeholder="Возраст (от – до)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="partnerHight">Рост (от – до)*:</label>
                                        <input name="partnerHight" type="text" class="input-default" id="partnerHight" placeholder="Рост (от – до)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="partnerBodyType">Телосложение*:</label>
                                        <input name="partnerBodyType" type="text" class="input-default" id="partnerBodyType" placeholder="Телосложение">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="partnerChildren">Желательны ли для Вас дети в будущем браке*:</label>
                                        <input name="partnerChildren" type="text" class="input-default" id="partnerChildren" placeholder="Желательны ли для Вас дети в будущем браке">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="partnerRace">Раса/Этническая принадлежность*:</label>
                                        <input name="partnerRace" type="text" class="input-default" id="partnerRace" placeholder="Раса/Этническая принадлежность">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="client-input">
                                        <label for="partnerReligion">Религия*:</label>
                                        <input name="partnerReligion" type="text" class="input-default" id="partnerReligion" placeholder="Религия">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="client-input">
                                        <label for="partnerEducation">Образование*:</label>
                                        <input name="partnerEducation" type="text" class="input-default" id="partnerEducation" placeholder="Образование">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="client-input">
                                        <label for="partnerHome">Совместное проживание с ним других членов семьи (приветствую, безразлично, нежелательно,
                                            исключено)*:</label>
                                        <input name="partnerHome" type="text" class="input-default" id="partnerHome" placeholder="Совместное проживание с ним других членов семьи (приветствую, безразлично, нежелательно, исклюено)">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <span class="incorect-client-desc-second">Заполните поле!</span>
                                    <label for="add-client-comment">
                                        Расскажите о своем желаемом партнере (его характер, интересы, какими качествами он должен
                                        обладать)*:
                                    </label>
                                    <div id="add-client-comment-partner"></div>
                                </div>
                            </div>
                                <div class="save-anketa">
                                    <button type="submit" id="add-client" class="btn btn-make-app admin-add-some btn-spiner">
                                        <div class="spinner">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                        <span>Сохранить</span>
                                    </button>
                                </div>
                            </form>
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


<script src="/js/addClient.js"></script>


</body>
</html>