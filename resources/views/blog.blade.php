@extends('layout')

@section('content')

    <section class="blog-detail-wrapper padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-with-sidebar-right">
                    <div class="post-detail">
                        <div class="post-single">
                           <div class="single_blog-img">
                               <img src="{{ $model->blog->image_path }}" alt="">
                           </div>
                            <div class="post-meta post-meta-single-blog">
                                <div class="post-date"><span class="date"> {{ $model->blog->created_at->format('d') }} </span> {{ $model->blog->created_at->format('m-Y') }}</div>
                                <ul class="list-meta list-inline list-unstyled">
                                    <li><i class="fa fa-eye" aria-hidden="true"></i>{{ $model->blog->view_count }} Просмотров</li>
                                </ul>
                                <div class="share">
                                    <ul class="list-inline list-unstyled list-socials">
                                        <li><a href="#" title="Twitter" class="socials-link"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="Facebook" class="socials-link"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title="Google Plus" class="socials-link"><i class="fa fa-google-plus">       </i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h1 class="post-title">{{ $model->blog->title }}</h1>
                            <div class="post-single-content">
                                <p>{{ $model->blog->description }} </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-sidebar recent-post-wrapper">
                        <h4 class="title">ПОХОЖИЕ БЛОГИ</h4>
                        <div class="post-list list-unstyled">

                            @foreach($model->randomBlogs as $randomBlog)

                                <div class="recent-blogs-item">
                                    <div class="recent-blog_img">
                                        <a href="/blog/{{ $randomBlog->slug }}"><img src="{{ $randomBlog->image_path }}" alt=""></a>
                                    </div>
                                    <div class="recent-blog-body">
                                        <a href="/blog/{{ $randomBlog->slug }}" class="title-a">{{ $randomBlog->title }}</a>
                                        <ul class="list-meta list-inline list-unstyled">
                                            <li><i class="fa fa-eye" aria-hidden="true"></i>{{ $randomBlog->view_count }} Просмотров</li>
                                        </ul>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>

                    <div class="widget-sidebar category-wrapper">
                        <h4 class="title">категории</h4>
                        <ul class="category-list list-unstyled">
                            <li class="category">
                                <a href="/blogs-list" class="category-link">
                                    Все
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>

                            @foreach($model->categoryes as $category)

                                <li class="category">
                                    <a href="/category/{{ $category->slug }}" class="category-link">
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