@if ($paginator->hasPages())
    <div class="pagination mt-5 mb-5">
        @if ($paginator->onFirstPage())
            <a href="JavaScript:Void(0)">&laquo;</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">&laquo;</a>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <a href="#">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="JavaScript:Void(0)" class="active">{{ $page }}</a>
                    @else
                       <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach


        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
        @else
        <a href="JavaScript:Void(0)">&raquo;</a>
        @endif
    </div>

@endif

