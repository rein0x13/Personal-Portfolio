@if ($paginator->hasPages())
    {{-- Reference: https://www.golinuxcloud.com/setup-laravel-pagination/ --}}
    <div class="pagination d-flex justify-content-between">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a class="px-2 text-light" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous
            </a>
        @else
            <span class="px-2 text-gray">&laquo; Previous
            </span>
        @endif



        {{-- <span class="active px-2 gradient-text"><strong>{{ $paginator->currentPage() }}</strong></span> --}}


        {{-- Numbered Page Links --}}
        {{-- @foreach ($elements as $element)
            @if (is_array($element))
                @php
                    $count = 1;
                @endphp
                @foreach ($element as $page => $url)
                    @if ($count >= 4)
                        @php
                            break;
                        @endphp
                    @endif
                    @if ($page == $paginator->currentPage())
                        <span class="active px-2 gradient-text"><strong>{{ $page }}</strong></span>
                    @else
                        <a class="px-2 text-light" href="{{ $url }}"
                            style="text-decoration: none">{{ $page }}</a>
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach
            @endif
        @endforeach --}}

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="px-2 text-light"href="{{ $paginator->nextPageUrl() }}" rel="next">
                Next &raquo;</a>
        @endif
    </div>
@endif
