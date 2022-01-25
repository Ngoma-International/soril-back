
@if ($paginator->hasPages())
    <ul>

        @if ($paginator->onFirstPage())
            <li class="shape disabled">
                <a>
                    <span>←</span>
                </a>
            </li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">←</a></li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="shape disabled">
                    <a>
                        <span>{{ $element }}</span>
                    </a>
                </li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="shape active my-active">
                            <a>
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @else
                        <li class="shape"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li class="shape"><a href="{{ $paginator->nextPageUrl() }}" rel="next">→</a></li>
        @else
            <li class="shape disabled">
                <a>
                    <span>→</span>
                </a>
            </li>
        @endif
    </ul>
@endif
