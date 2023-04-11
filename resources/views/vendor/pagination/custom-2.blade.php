@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-start">
    @if ($paginator->onFirstPage())
    <li class="no-padding page-item disabled">
      <span class="page-link">@lang('pagination.previous')</span>
    </li>
    @else
    <li class="no-padding page-item">
      <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
    </li>
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
      <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
    </li>
    @else
    <li class="no-padding page-item disabled">
      <span class="page-link">@lang('pagination.next')</span>
    </li>
    @endif
  </ul>
  @endif