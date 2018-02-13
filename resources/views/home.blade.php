@extends('layout')

@section('content')

<!-- WRAPPER-->
<div id="wrapper-content">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <!-- 05_Home_Vet_Clinic-->
        <section class="slider-medic slider-default vet-clinic">
            <div class="slider-wrapper slide-5 owl-carousel">

                @foreach($model->slider as $slider)

                    <div style="background-image: url({{$slider->image_slide}})" class="item item-big-9">
                        <div class="slider-wrapper-bg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="typo-1 typo-adds-on active">
                                    <h2 class="header fadeInUp animated delay-2">{{$slider->title}}</h2>
                                    {{--КАК ВЫЙТИ ЗАМУЖ ЗА ИНОСТРАНЦА?--}}
                                    {{--Отправьте лишь анкету - остальное сделаем мы. Бесплатно для женщин с Ровно!--}}
                                    <div class="description fadeInUp animated delay-3">{{$slider->text}}</div>
                                    <div class="btn-wrapper fadeInUp animated delay-4"><a data-toggle="modal" data-target=".anketamodal" class="btn">Подробнее</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <section class="howwedo vet-clinic padding-top-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-features list-unstyled list-inline">
                            <div data-wow-delay="0.0s" class="feature-2 style-3  item wow flipInY circle-center" style="visibility: visible; animation-name: flipInY;">
                                <img src="/images/circle-img/badge-with-two-ribbons.png" alt="">
                                <h5 class="header-feature">Полная юридическая защита и поддержка</h5>
                            </div>
                            <div data-wow-delay="0.2s" class="feature-2 style-3 big item wow flipInY circle-center" style="visibility: visible; animation-delay: 0.2s; animation-name: flipInY;">
                                <img src="/images/circle-img/balloons.png" alt="">
                                <h5 class="header-feature">Бесплатно для женщин и девушек</h5>
                            </div>
                            <div data-wow-delay="0.4s" class="feature-2 style-3 big item wow flipInY circle-center" style="visibility: visible; animation-delay: 0.4s; animation-name: flipInY;">
                                <img src="/images/circle-img/marriage.png" alt="">
                                <h5 class="header-feature">Индивидуальный подход к каждому клиенту</h5>
                            </div>
                            <div data-wow-delay="0.6s" class="feature-2 style-3  item wow flipInY circle-center" style="visibility: visible; animation-delay: 0.6s; animation-name: flipInY;">
                                <img src="/images/circle-img/wedding-rings.png" alt="">
                                <h5 class="header-feature">Первое брачное онлайн-агентство в Ровно</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <section class="why-choose-us-wrapper-new cancer-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="typo-line">
                                    <h4 class="sub-header">КОЕ-ЧТО О НАС</h4></div>
                                <h2 class="header style-italic">"Любовь — это стрела, пущенная кудрявым купидоном в твоё сердце".</h2>
                                <div id="accordionLeft" role="tablist" aria-multiselectable="true" class="panel-group faq-group">
                                    <div class="panel panel-default faq-panel">
                                        <div id="headingOneLeft" role="tab" class="panel-heading active">
                                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordionLeft" href="#collapseOneLeft" aria-expanded="true" aria-controls="collapseOneLeft">Dating Company «Kamila Agency»</a></h4></div>
                                        <div id="collapseOneLeft" role="tabpanel" aria-labelledby="headingOneLeft" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="description">Здравствуйте! Вас приветствует Dating Company «Kamila Agency»! Это первое брачное агентство, женский клуб в г. Ровно. Мы специализируемся на серьезных знакомствах и создании счастливых союзов. Начиная от знакомства, свиданий, визовой поддержки для интернациональных пар, и заканчивая помощью в организации свадьбы. Наши услуги АБСОЛЮТНО БЕССПЛАТНЫЕ для прекрасной половины! Если вы не состоите в официальном браке и хотите встретить мужчину с серьезными намерениями, то мы будем рады приветствовать Вас среди наших клиентов.</div>
                                                <div class="description">Любовь к своей работе, опыт, индивидуальный подход и профессиональное отношение к делу - являются ключевыми для каждого члена нашей команды. Мы постоянно усовершенствуемся, принимаем участие во всевозможных  конференциях, семинарах, тренингах, обьединяющих Свах по всей Украине. Наша команда постоянно растет и развивается. Мы всегда открыты к  сотрудничеству и обмену опытом, для того чтобы делать этот мир немного лучше. Для нас важно, чтобы качество предоставляемых услуг всегда было на самом высоком уровне!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default faq-panel">
                                        <div id="headingTwoLeft" role="tab" class="panel-heading">
                                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordionLeft" href="#collapseTwoLeft" aria-expanded="false" aria-controls="collapseTwoLeft" class="collapsed">Кто же входит в нашу команду?</a></h4></div>
                                        <div id="collapseTwoLeft" role="tabpanel" aria-labelledby="headingTwoLeft" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="list-unstyled list-our-mission">
                                                    <li class="description"> В первую очередь, это конечно же психолог, с которого и начинается знакомство девушек с агентством. Интервью с ней помогает убедится в том, что у каждого нашего клиента, будь то мужчина или женщина, только серьезные намерения! Она знает как поднять настроение, повысить самооценку и создать положительный настрой на счастливое, романтическое будущее. Она всегда рядом когда нужен совет: будь-то – Как правильно вести себя на свидании, или – Какое платье одеть. И что не мало важно - она часто проводит для наших девушек тренинги, семинары, которые открывают правду на многие аспекты нашей жизни и помогают чувствовать себя в ней намного уверенней и счастливей. Именно эти мероприятия обьединяют наших женщин и помогают найти здесь не только спутника жизни, но и друзей. Мы часто устраиваем чаепитие, вечеринки или просто совместный поход в театр.
                                                    </li>
                                                    <li class="description">Самым важным звеном нашей команды есть наши купидоны. Это профессионалы, которые вручную делают подбор для всех, кто обратился в агентство. Учитывают все пожелания клиентов и имеют четкую цель -  соединить одинокие сердца! Это непередаваемое ощущение видеть счастливые глаза наших уже не одиноких влюбленных!
                                                    </li>
                                                    <li class="description">Также в наши ряды входит профессиональный фотограф, визажист и парикмахер, для создания неповторимого образа! Для чего же нужна фотосессия? Во первых - одним из основных правил международных сайтов есть загрузка только профессиональных и качественных фотографий. Ну а во - вторых – чтобы сделать приятное нашим дорогим клиенткам. Всегда здорово иметь в своем архиве красивые фотографии, которыми можно похвастаться любимому мужчине и родным людям. Мы часто проводим совместные тематические фотосессии к Хеллоуину, Новому году, дню Валентина или просто приходу весны. Эти фото вы сможете увидеть придя к нам в оффис. Там же мы ответим на все интересующие Вас вопросы.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="photo_us">
                                    <img src="/images/photo_1.jpg" alt="">
                                    <div class="about-us-inner">
                                        <div class="about-us-title">
                                            С любовью, основатель и главный купидон Dating Company «Kamila Agency» – Елена Долинская
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>

        <section class="fun-fact vet-clinic">
            <div class="container">
                <div class="row">
                    <div class="progress-container">
                        <div class="col-md-4 col-sm-4 progress-inner">
                            <img src="/images/circle-img/ancete.png" alt="">
                            <div data-value="2319" class="progress-counter">
                                <h4 class="counter-inner">2319</h4><span class="description-counter">Анкет</span></div>
                        </div>
                        <div class="col-md-4 col-sm-4 progress-inner">
                            <img src="/images/circle-img/marriage.png" alt="">
                            <div data-value="1584" class="progress-counter">
                                <h4 class="counter-inner">1584</h4><span class="description-counter">Встреч</span></div>
                        </div>
                        <div class="col-md-4 col-sm-4 progress-inner">
                            <img src="/images/circle-img/wedding-rings.png" alt="">
                            <div data-value="13" class="progress-counter">
                                <h4 class="counter-inner">13</h4><span class="description-counter">Свадеб</span></div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="whatwedo padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="typo-line">
                    <h4 class="sub-header">Правила сотрудничества</h4></div>
                <h2 class="header">Правила сотрудничества</h2>
                <div class="row">
                    <div class="services-wrapper">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-female" aria-hidden="true"></i> <i class="icon2 fa fa-female" aria-hidden="true"></i></div>
                                <div class="line"></div>
                                <div class="description">Нашей клиенткой может стать только совершеннолетняя девушка в возрасте до 59 лет. Если Вы официально незамужем, хотите ходить на свидания с интересными серьезными мужчинами, в дальнейшем создавать с ними семью, то брачное агентство « Kamila Agency» ждет Вас!
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-picture-o" aria-hidden="true"></i> <i class="icon2 fa fa-picture-o" aria-hidden="true"></i></div>                                            <div class="line"></div>
                                <div class="description">
                                    <ul class="list-unstyled list-our-mission">

                                        <li>
                                            придти к нам в офис;
                                        </li>
                                        <li >
                                            заполнить анкету;
                                        </li>
                                        <li >
                                            подписать договор;
                                        </li>
                                        <li >
                                            предоставить паспорт и свидетельство о разводе, при его наличии;
                                        </li>
                                        <li >
                                            оговорить дату фотосессии с нашим клиент-менеджером.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-map-marker" aria-hidden="true"></i> <i class="icon2 fa fa-map-marker" aria-hidden="true"></i></div>                                            <div class="line"></div>
                                <div class="description">Нашей клиенткой может стать девушка из любого города Украины, или зарубежья, не состоящая в официальном браке, нацеленная на серьезные знакомства и длительные отношения, приводящие к браку. В случае если Вы не находитесь в г. Ровно, анкета заполняется в онлайн-режиме, после скайп-собеседования с нашим клиент – менеджером.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-exclamation" aria-hidden="true"></i> <i class="icon2 fa fa-exclamation" aria-hidden="true"></i></div>                                            <div class="line"></div>
                                <div class="description">Мы можем отказать девушке в регистрации, в случае если ее намерения кажутся нам не серьезными, или мы обнаружим информацию, которая противоречит нашим принципам и правилам работы.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials home-prenancy padding-top-100 padding-bottom-100">
            <div class="nav-testimonial"><a href="javascript:void(0)" class="nav-testimonial-inner-left"><i class="fa fa-angle-left"></i></a><a href="javascript:void(0)" class="nav-testimonial-inner-right"><i class="fa fa-angle-right"></i></a></div>
            <div class="container">
                <div class="typo-line typo-line-white">
                    <h4 class="sub-header sub-header-red">Отзывы</h4>
                </div>
                <h2 class="header header-white">Отзывы</h2>
                <div class="close-bracket-wrapper"><i class="icon-close-bracket"></i></div>
                <div class="slider-testimonials owl-carousel">


                    @foreach($model->homeResponse as $homeResponse)
                        <div class="item">
                            <div class="testimonial-graph">{{ $homeResponse->response }}</div>
                            <div class="typo-line"><span class="sub-header">{{$homeResponse->user_name}}</span></div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


        <section class="recent-news vet-clinic padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="typo-line">
                    <h4 class="sub-header">Блог</h4></div>
                <h2 class="header">Блог</h2>
                <div class="row">
                    <div class="recent-news-wrapper">
                        <div class="col-md-12">
                            <div class="recent-news-list">

                                @foreach($model->homeBlog as $homeBlog)


                                    <div class="recent-news-item item">
                                        <div class="blog-smoll-item-img">
                                            <a href=" {{route('blog',['slug'=>$homeBlog->slug ,'language'=> $model->language=='ru' ? null : $model->language])}}"><img src="{{ $homeBlog->image_path }} " alt=""></a>
                                        </div>
                                        <div class="recent-news-content">
                                            <div class="post-date"><span class="date"> {{$homeBlog->created_at->format('d') }} </span> {{ $homeBlog->created_at->format('m-Y') }}</div>
                                            <h3 class="recent-news-title"><a href=" {{route('blog',['slug'=>$homeBlog->slug ,'language'=> $model->language=='ru' ? null : $model->language])}}">{{ $homeBlog->title }}</a></h3>
                                            <div class="recent-news-description">{{  str_limit(strip_tags($homeBlog->description), 80)}}</div>
                                            <ul class="list-meta list-inline list-unstyled">
                                                <li><i class="fa fa-eye" aria-hidden="true"></i>{{ $homeBlog->view_count }} Просмотров</li>
                                            </ul>
                                        </div>
                                    </div>

                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- FOOTER-->

@endsection

