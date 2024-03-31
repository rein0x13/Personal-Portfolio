@if ($paginator->hasPages())
    {{-- https://laravel-livewire.com/docs/2.x/pagination#paginating-data --}}
    <div class="pagination d-flex justify-content-between">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <span wire:click="previousPage" class="px-2 text-light" rel="prev" style="cursor:pointer">&laquo; Previous
            </span>
        @else
            <span class="px-2 text-gray">&laquo; Previous
            </span>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <span wire:click="nextPage" class="px-2 text-light" rel="next" style="cursor:pointer">
                Next &raquo;</span>
        @endif
    </div>
@endif
