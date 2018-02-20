@extends('layout')

@section('content')

    <section class="blog-wrapper blog-2col-sidebar padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 content-with-sidebar-right">

                        <div class="blogs-section-title blogs-section-title-responses">
                            <h1>{{trans('lang.rulers-h1')}}</h1>
                        </div>

                        <div class="services-wrapper rulers-div">
                            {!! $model->ruler->text !!}
                        </div>
                 

                </div>

            </div>
        </div>
    </section>


@endsection