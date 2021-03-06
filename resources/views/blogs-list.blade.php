@extends('layout')

@section('content')

    <section class="blog-wrapper blog-2col-sidebar padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-with-sidebar-right">
                    <div class="col-md-12">
                        <div class="blogs-section-title">
                            <h1>Блоги</h1>
                        </div>
                    </div>

                    @foreach($model->blogs as $blog)

                        <div class="col-md-6">
                            <div class="recent-news-item grid-item">
                                <div class="blog-big-item-img">
                                    <a href=" {{route('blog',['slug'=>$blog->slug ,'language'=> $model->language=='ru' ? null : $model->language])}}"><img src="{{ $blog->image_path }}" alt=""></a>



                                </div>
                                <div class="recent-news-content">

                                    <div class="post-date"><span class="date"> {{ $blog->created_at->format('d') }} </span> {{ $blog->created_at->format('m-Y') }}</div>
                                    <h3 class="recent-news-title"><a href=" {{route('blog',['slug'=>$blog->slug ,'language'=> $model->language=='ru' ? null : $model->language])}}">{{ $blog->title }}</a></h3>
                                    <div class="recent-news-description">{{  str_limit(strip_tags($blog->description), 100)}}</div>
                                    <ul class="list-meta list-inline list-unstyled">
                                        <li><i class="fa fa-eye" aria-hidden="true"></i>{{ $blog->view_count }} {{trans('lang.countView')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    @endforeach


                    @include('partial.blog-list.pagination')

                </div>
                <div class="col-md-4">
                    <div class="widget-sidebar recent-post-wrapper popular-blogs-left">
                        <h4 class="title">{{trans('lang.popularBlogs')}}</h4>
                        <div class="post-list list-unstyled">


                            @foreach($model->randomBlogs as $randomBlog)

                                <div class="recent-blogs-item">
                                    <div class="recent-blog_img">
                                        <a href="{{route('blog',['slug'=>$randomBlog->slug ,'language'=> $model->language=='ru' ? null : $model->language])}}"><img src="{{ $randomBlog->image_path }}" alt=""></a>
                                    </div>
                                    <div class="recent-blog-body">
                                        <a href="{{route('blog',['slug'=>$randomBlog->slug ,'language'=> $model->language=='ru' ? null : $model->language])}}" class="title-a">{{ $randomBlog->title }}</a>
                                        <ul class="list-meta list-inline list-unstyled">
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>{{ $randomBlog->view_count }} {{trans('lang.countView')}}</li>
                                        </ul>
                                    </div>
                                </div>

                            @endforeach


                        </div>
                    </div>
                    <div class="widget-sidebar category-wrapper">
                        <h4 class="title">{{trans('lang.blogsCategory')}}</h4>
                        <ul class="category-list list-unstyled">



                            @foreach($model->categoryes as $category)

                                <li class="category">
                                    <a href="{{route('category',['slug'=>$category->slug ,'language'=> $model->language=='ru' ? null : $model->language])}}" class="category-link">
                                        {{ $category->name }}
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>

                            @endforeach


                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection