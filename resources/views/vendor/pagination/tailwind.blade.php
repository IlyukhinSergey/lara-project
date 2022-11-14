@if ($paginator->hasPages())
    <ul class="page-nav">
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-nav__item"><a href="#" class="page-nav__item__link" style="color: rebeccapurple">{{ $page }}</a></li>
                                @else
                                    <li class="page-nav__item"><a href="{{ $url }}" class="page-nav__item__link">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </span>
            </div>
        </div>
    </ul>
@endif
