@php($pages = \App\Helpers\Paginator::createPagination($model->page, $model->limit, $model->blogsTotalCount))
@php($isPrev = array_shift($pages))
@php($isNext = array_pop($pages))
@if($model->blogsTotalCount> $model->limit)
    <div class="col-md-12">
        <nav class="pagination-wrapper">
            <ul class="pagination">

                {{--PREV PAGE--}}
                @if($isPrev)
                    <li class="pagi-inner">
                        <a href="/admin/{{ $model->page - 1 == 1 ? '' : $model->page - 1 }}" aria-label="Previous" class="pagi-link">
                            <span aria-hidden="true">Назад</span>
                        </a>
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
                                <a href="/admin/{{ $page == 1 ? '' : $page }}" class="pagi-link">
                                    {{ $page }}
                                </a>
                            @endif
                        @endif

                    </li>
                @endforeach


                {{--NEXT PAGE--}}
                @if($isNext)
                    <li class="pagi-inner">
                        <a href="/admin/{{ $model->page + 1 }}" aria-label="Next" class="pagi-link">
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