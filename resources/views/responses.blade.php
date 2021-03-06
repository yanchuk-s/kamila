@extends('layout')

@section('content')

    <section class="blog-wrapper blog-2col-sidebar padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 content-with-sidebar-right">

                        <div class="blogs-section-title blogs-section-title-responses">
                            <h1>{{trans('lang.responsePageTitle')}}</h1>
                        </div>
                    <div class="row">
                        <div class="services-wrapper">
                            @foreach($model->response as $response)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services-item item response-item">
                                    <div class="services-content">
                                        <div class="btn-for-icon bottom">
                                            <div class="response-user-img">
                                                <img src="{{ $response->image_response }}" alt="">
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <h3 class="services-title">{{ $response->user_name }}</h3>
                                        <div class="description"> {{ str_limit($response->response, 80) }}</div>
                                        <div class="response-btn-modal-show">
                                            <a class="response-show-all" data-response-id="{{ $response->id }}" data-open-model-repsonse> {{trans('lang.responseBtn')}} </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


@endsection