<!-- HEADER-->
<header>
    <div class="header-topbar bg-vet-clinic">
        <div class="container">
            <div class="topbar-left">

                <ul class="list-inline list-unstyled">
                    <li>
                        <div class="information-toppar ticker-inner"><i class="icons fa fa-envelope-o" aria-hidden="true"></i>
                            <p class="text">info.kamilaagency.com</p>
                        </div>
                    </li>
                    <li>
                        <div class="information-toppar ticker-inner"><i class="icons fa fa-map-marker"></i>
                            <p class="text">г.Ровно, ул. Гагарина 39, оф.25</p>
                        </div>
                    </li>
                    <li>
                        <div class="information-toppar ticker-inner"><i class="icons fa fa-phone"></i>
                            <p class="text">+380686850956</p>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="topbar-right">
                <ul class="list-inline list-unstyled social-topbar">
                    <li>
                        <div class="lang">
                            <a href="{{route('home',['language'=> 'uk'])}}">Укр</a> /
                            <a href="{{route('home',['language'=> null])}}">Рус</a>
                        </div>
                    </li>
                    <li><a href="#" class="link twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="link facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="link google"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-main header-vet-clinic">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="hamburger-menu">
                    <div class="hamburger-menu-wrapper">
                        <div class="icons"></div>
                    </div>
                </div>
                <div class="navbar-header pull-left">
                    <div class="logo">
                        <a href="/" class="header-logo"><img src="/images/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <nav class="navigation pull-right">
                    <ul class="nav-links nav navbar-nav">
                        <li><a href="{{route('home',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">Главная</span></a></li>
                        <li><a href="{{route('rulers',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">Правила сотрудничества</span></a></li>
                        <li><a href="{{route('blogs-list',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">Блог</span></a></li>
                        <li><a href="{{route('responses',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">Отзывы</span></a></li>
                        <li><a href="{{route('contact',['language'=> $model->language=='ru' ? null : $model->language])}}" class="main-menu"><span class="text">Контакты</span></a></li>
                    </ul>

                    <div class="btn-anketa btn-wrapper">
                        <a class="btn" data-toggle="modal" data-target=".anketamodal">Заполнить анкету</a>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>