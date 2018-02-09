@extends('layout')

@section('content')

    <section class="blog-wrapper blog-2col-sidebar padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 content-with-sidebar-right">

                        <div class="blogs-section-title blogs-section-title-responses">
                            <h1>Отзывы</h1>
                        </div>

                        <div class="responses-block">
                            @foreach($model->response as $response)
                                <div class="dialogbox">
                                    <div class="response-text">
                                        <span class="tip tip-up"></span>
                                        <div class="user_date">
                                            <span class="user">
                                                {{ $response->user_name }}
                                            </span>
                                            <span class="date">
                                                {{ $response->created_at->format('d-m-Y') }}
                                            </span>
                                        </div>
                                        <div class="message">
                                            <span>{{$response->response}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                </div>

            </div>
        </div>
    </section>


@endsection