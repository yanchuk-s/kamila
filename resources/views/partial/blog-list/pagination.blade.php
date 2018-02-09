@php($pages = \App\Helpers\Paginator::createPagination($model->page, $model->limit, $model->blogsTotalCount))
@php($isPrev = array_shift($pages))
@php($isNext = array_pop($pages))
@if($model->blogsTotalCount > $model->limit)
    <div class="col-md-12">
        <nav class="pagination-wrapper">
            <ul class="pagination">

                {{--PREV PAGE--}}
                @if($isPrev)
                    <li class="pagi-inner">

                        @if($model->page - 1 == 1)
                            <a href=" {{route('blogs-list',['language'=> $model->language=='ru' ? null : $model->language])}}" aria-label="Previous" class="pagi-link">
                                <span aria-hidden="true">Назад</span>
                            </a>
                        @else
                            <a href=" {{route('blogs-list-pagination',['page'=>$model->page - 1 == 1 ? '' : $model->page - 1 ,'language'=> $model->language=='ru' ? null : $model->language])}}" aria-label="Previous" class="pagi-link">
                                <span aria-hidden="true">Назад</span>
                            </a>
                        @endif

                    </li>
                @else
                    <li class="pagi-inner">
                        <a aria-label="Previous" class="pagi-link">
                            <span aria-hidden="true">Назад</span>
                        </a>
                    </li>
                @endif

                {{--MAIN LINKS--}}
                @foreach($pages as $page)
                    <li class="pagi-inner {{ $page == $model->page ? 'active' : '' }}">
                        @if($page == '...')
                            <a class="pagi-link">
                                {{ $page }}
                            </a>
                        @else
                            @if($page == $model->page)
                                <a class="pagi-link">
                                    {{ $page }}
                                </a>
                            @else

                                @if($model->page == 1)
                                    <a href=" {{route('blogs-list-pagination',['page'=>$page == 1 ? '' : $page ,'language'=> $model->language=='ru' ? null : $model->language])}}" class="pagi-link">
                                        {{ $page }}
                                    </a>

                                @else
                                    <a href=" {{route('blogs-list',['language'=> $model->language=='ru' ? null : $model->language])}}" class="pagi-link">
                                        {{ $page }}
                                    </a>
                                @endif


                            @endif
                        @endif

                    </li>
                @endforeach


                {{--NEXT PAGE--}}
                @if($isNext)
                    <li class="pagi-inner">

                        <a href="{{route('blogs-list-pagination',['page'=>$model->page + 1 ,'language'=> $model->language=='ru' ? null : $model->language])}}" aria-label="Next" class="pagi-link">
                            <span aria-hidden="true">Далее</span>
                        </a>
                    </li>
                @else
                    <li class="pagi-inner">
                        <a aria-label="Next" class="pagi-link">
                            <span aria-hidden="true">Далее</span>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
    </div>
@endif