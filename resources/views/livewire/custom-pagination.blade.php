@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="pagePrev disabled">
                <p>Previous</p>
            </div>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagePrev">
                Previous
            </a>
        @endif
        <div class="pages">
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        
                            @if ($page == $paginator->currentPage())
                                <div class="page active">
                                    <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
                                </div>
                            @else
                                <div class="page">
                                    <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
                                </div>
                            @endif
                    @endforeach
                @endif
                
            @endforeach
        </div>


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pageNext">
                Next
            </a>
        @else
            <span class="pageNext disabled">
                Next
            </span>
        @endif
    </nav>
@endif