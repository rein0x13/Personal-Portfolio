@if ($paginator->hasPages())
    {{-- https://laravel-livewire.com/docs/2.x/pagination#paginating-data --}}
    <div class="pagination flex justify-between">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <span wire:click="previousPage" class="text-light" rel="prev" style="cursor:pointer">&laquo; Previous
            </span>
        @else
            <span class=" text-gray-800">&laquo; Previous
            </span>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <span wire:click="nextPage" class="text-light" rel="next" style="cursor:pointer">
                Next &raquo;</span>
        @endif
    </div>
@endif
