@if ($paginator->hasPages())

<style>
    .pagination {
    display: flex;
    list-style-type: none;
    padding-left: 0;
    margin: 0;
}

.pagination li {
    margin: 0 5px; /* Add space between buttons */
}

.pagination li a, .pagination li span {
    display: block;
    padding: 8px 12px; /* Adjust padding for the buttons */
    text-decoration: none;
}
</style>
<nav>
    <ul class="pagination ">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true"><span>@lang('السابقة')</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('السابقة')</a></li>
        @endif

        {{-- Pagination Links --}}
        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
            <li class="{{ ($paginator->currentPage() == $page) ? 'active' : '' }}">
                <a href="{{ $url }}">{{ $page }}</a>
            </li>
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('التالي')</a></li>
        @else
            <li class="disabled" aria-disabled="true"><span>@lang('التالي')</span></li>
        @endif
    </ul>
</nav>
@endif
