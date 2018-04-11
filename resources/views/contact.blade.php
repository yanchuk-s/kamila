@extends('layout')

@section('content')

    <section class="blog-wrapper blog-2col-sidebar padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 content-with-sidebar-right">

                        <div class="blogs-section-title blogs-section-title-responses">
                            <h1>{{trans('lang.contactPageTitle')}}</h1>
                        </div>
                    </div>
                    <section class="contact-wrapper contact-page">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="contact-content">
                                        <div class=" item">
                                            <div class="contact-info">
                                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-map-marker"></i><i class="icon2 fa fa-map-marker"></i></div>
                                                <div class="contact-title">{{trans('lang.contactPageAdress')}}</div>
                                                <div class="description"> {{trans('lang.address')}}</div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="contact-info">
                                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-envelope"></i><i class="icon2 fa fa-envelope"></i></div>
                                                <div class="contact-title">{{trans('lang.contactPageEmail')}}</div>
                                                <div class="description"> <span class="info-inner email"> info.kamilaagency.com</span></div>
                                            </div>
                                       </div>
                                        <div class="item">
                                            <div class="contact-info">
                                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-phone"></i><i class="icon2 fa fa-phone"></i></div>
                                                <div class="contact-title">{{trans('lang.contactPagePhone')}}</div>
                                                <div class="description"><span class="info-inner phone"> +38(068)-68-50-956</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="contact-form-wrapper">
                                        <div class="contact-form-content right">
                                            <div class="contact-form-inner">
                                                <div class="contact-form-header">
                                                    <div class="typo-line">
                                                        <h4 class="sub-header">{{trans('lang.collbackFormTitle')}}</h4></div>
                                                    <div class="description">{{trans('lang.collbackFormDesc')}}</div>
                                                    <form method="post" class="appointment-form" id="contact-page-form">
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <input id="form-name" type="text" class="form-control">
                                                            <label id="inc-form-name" for="form-name">{{trans('lang.collbackFormName')}}</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <input id="form-email" type="text" class="form-control">
                                                            <label id="inc-form-email" for="form-email">{{trans('lang.collbackFormEmail')}}</label>
                                                        </div>
                                                        <div class="form-group form-md-line-input form-md-floating-label">
                                                            <textarea id="form-text" rows="4" class="form-control form-textarea"></textarea>
                                                            <label id="inc-form-text" for="form-text">{{trans('lang.collbackFormText')}}</label>
                                                        </div>
                                                        <div class="btn-wrapper">
                                                            <button id="form-send" type="submit" class="btn btn-contact-page">
                                                                <div class="spinner">
                                                                    <div class="bounce1 home"></div>
                                                                    <div class="bounce2 home"></div>
                                                                    <div class="bounce3 home"></div>
                                                                </div>
                                                                <span>{{trans('lang.collbackFormBtn')}}</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="clearfix"> </div>

                            </div>
                        </div>
                    </section>
                </div>

            </div>

    </section>


@endsection