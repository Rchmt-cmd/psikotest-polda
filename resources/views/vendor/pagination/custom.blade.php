@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-start">
        @if ($paginator->onFirstPage())
        <li class="no-padding page-item disabled">
            <a class="page-link text-primary" href="#" tabindex="-1">Previous</a>
        </li>
        @else
        <li class="no-padding page-item"><a class="page-link text-primary"
                href="?page={{ $paginator->currentPage() - 1 }}">Previous</a></li>
        @endif

        {{-- @foreach ($elements as $element)
        @if (is_string($element))
        <li class="no-padding page-item disabled">{{ $element }}</li>
        @endif
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="no-padding page-item active">
            <a class="page-link text-primary">{{ $page }}</a>
        </li>
        @else
        <li class="no-padding page-item">
            <a class="page-link text-primary" href="{{ $url }}">{{ $page }}</a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach --}}

        @if ($paginator->hasMorePages())
        <li class="no-padding page-item">
            <a class="page-link text-primary" href="?page={{ $paginator->currentPage() + 1 }}" rel="next">Next</a>
        </li>
        @else
        <li class="no-padding page-item disabled">
            <a class="page-link text-primary" href="#">Next</a>
        </li>
        @endif
    </ul>
    @endif