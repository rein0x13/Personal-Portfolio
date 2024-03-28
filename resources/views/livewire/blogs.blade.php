<div wire:poll.keep.alive.10s class="container pt-5" id="seminars">
    <div class="d-lg-flex flex-row-reverse justify-content-between">

        <div class="p-5 m-2 card custom-bg-dark h-25" id="blog-sidebar">
            <h1 class="gradient-text">blogs</h1>
            <label for="search" class="text-light pb-1">Search</label>
            <input wire:model.live.debounce.500ms="search" type="search" class="form-control text-light bg-transparent"
                name="search" placeholder="Powered by Livewire" id="search">
            <div class="mt-4">
                {{ $blogs->links('paginator') }}
            </div>
        </div>

        <div class="d-md-flex flex-wrap flex-fill flex-column">
            @foreach ($blogs as $blog)
                @include('livewire.includes.blog-card')
            @endforeach

        </div>
    </div>
</div>
