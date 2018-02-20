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
                                    <div class="btn-wrapper fadeInUp animated delay-4"><a data-toggle="modal" data-target=".anketamodal" class="btn">{{trans('lang.sliderBtn')}}</a></div>
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
                                <h5 class="header-feature">{{trans('lang.firstCircle')}}</h5>
                            </div>
                            <div data-wow-delay="0.2s" class="feature-2 style-3 big item wow flipInY circle-center" style="visibility: visible; animation-delay: 0.2s; animation-name: flipInY;">
                                <img src="/images/circle-img/balloons.png" alt="">
                                <h5 class="header-feature">{{trans('lang.secondCircle')}}</h5>
                            </div>
                            <div data-wow-delay="0.4s" class="feature-2 style-3 big item wow flipInY circle-center" style="visibility: visible; animation-delay: 0.4s; animation-name: flipInY;">
                                <img src="/images/circle-img/marriage.png" alt="">
                                <h5 class="header-feature">{{trans('lang.threeCircle')}}</h5>
                            </div>
                            <div data-wow-delay="0.6s" class="feature-2 style-3  item wow flipInY circle-center" style="visibility: visible; animation-delay: 0.6s; animation-name: flipInY;">
                                <img src="/images/circle-img/wedding-rings.png" alt="">
                                <h5 class="header-feature">{{trans('lang.fourCircle')}}</h5>
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
                                    <h4 class="sub-header">{{trans('lang.about-us-h4')}}</h4></div>
                                <h2 class="header style-italic">{{trans('lang.about-us-h2')}}</h2>
                                <div id="accordionLeft" role="tablist" aria-multiselectable="true" class="panel-group faq-group">
                                    <div class="panel panel-default faq-panel">
                                        <div id="headingOneLeft" role="tab" class="panel-heading active">
                                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordionLeft" href="#collapseOneLeft" aria-expanded="true" aria-controls="collapseOneLeft">Dating Company «Kamila Agency»</a></h4></div>
                                        <div id="collapseOneLeft" role="tabpanel" aria-labelledby="headingOneLeft" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="description">{{trans('lang.tab-desc1')}}</div>
                                                <div class="description">{{trans('lang.tab-desc2')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default faq-panel">
                                        <div id="headingTwoLeft" role="tab" class="panel-heading">
                                            <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordionLeft" href="#collapseTwoLeft" aria-expanded="false" aria-controls="collapseTwoLeft" class="collapsed">{{trans('lang.teamTab')}}</a></h4></div>
                                        <div id="collapseTwoLeft" role="tabpanel" aria-labelledby="headingTwoLeft" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="list-unstyled list-our-mission">
                                                    <li class="description">{{trans('lang.teamDesc1')}}
                                                    </li>
                                                    <li class="description">{{trans('lang.teamDesc2')}}
                                                    </li>
                                                    <li class="description">{{trans('lang.teamDesc3')}}
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
                                            {{trans('lang.textAfterPhoto')}}
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
                                <h4 class="counter-inner">2319</h4><span class="description-counter">{{trans('lang.timerAnket')}}</span></div>
                        </div>
                        <div class="col-md-4 col-sm-4 progress-inner">
                            <img src="/images/circle-img/marriage.png" alt="">
                            <div data-value="1584" class="progress-counter">
                                <h4 class="counter-inner">1584</h4><span class="description-counter">{{trans('lang.timerVstrech')}}</span></div>
                        </div>
                        <div class="col-md-4 col-sm-4 progress-inner">
                            <img src="/images/circle-img/wedding-rings.png" alt="">
                            <div data-value="13" class="progress-counter">
                                <h4 class="counter-inner">13</h4><span class="description-counter">{{trans('lang.timerMeried')}}</span></div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="whatwedo padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="typo-line">
                    <h4 class="sub-header">{{trans('lang.CooperationRulesTitle')}}</h4></div>
                <h2 class="header">{{trans('lang.CooperationRulesTitle')}}</h2>
                <div class="row">
                    <div class="services-wrapper">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-female" aria-hidden="true"></i> <i class="icon2 fa fa-female" aria-hidden="true"></i></div>
                                <div class="line"></div>
                                <div class="description">{{trans('lang.homeRulersDesc1')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-picture-o" aria-hidden="true"></i> <i class="icon2 fa fa-picture-o" aria-hidden="true"></i></div>                                            <div class="line"></div>
                                <div class="description">
                                    <ul class="list-unstyled list-our-mission">

                                        <li>
                                            {{trans('lang.homeRulersDesc2Li1')}}
                                        </li>
                                        <li >
                                            {{trans('lang.homeRulersDesc2Li2')}}
                                        </li>
                                        <li >
                                            {{trans('lang.homeRulersDesc2Li3')}}
                                        </li>
                                        <li >
                                            {{trans('lang.homeRulersDesc2Li4')}}
                                        </li>
                                        <li >
                                            {{trans('lang.homeRulersDesc2Li5')}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-map-marker" aria-hidden="true"></i> <i class="icon2 fa fa-map-marker" aria-hidden="true"></i></div>                                            <div class="line"></div>
                                <div class="description">{{trans('lang.homeRulersDesc3')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services-item item">
                            <div class="services-content">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-exclamation" aria-hidden="true"></i> <i class="icon2 fa fa-exclamation" aria-hidden="true"></i></div>                                            <div class="line"></div>
                                <div class="description">{{trans('lang.homeRulersDesc4')}}
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
                    <h4 class="sub-header sub-header-red">{{trans('lang.homeResponsesTitle')}}</h4>
                </div>
                <h2 class="header header-white">{{trans('lang.homeResponsesTitle')}}</h2>
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

