{{-- <div wire:poll.keep.alive.10s class="lg:p-5 lg:w-5/6" id="blogs"> --}}
<div wire:poll.visible.10s class="lg:p-5 lg:w-5/6" id="blogs">
    <div class="md:flex flex-row-reverse justify-between">

        <div class="mx-2 rounded-md bg-neutral-950/50 border border-neutral-800 backdrop-blur-lg p-10 mt-5 h-fit min-w-80 md:sticky top-20"  id="blog-sidebar">
            <h1 class="text-5xl py-3 font-medium text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">blogs</h1>
            <label for="search" class="block pb-1">Search</label>
            <input wire:model.live.debounce.500ms="search" type="search" class="w-full text-light bg-transparent"
                name="search" placeholder="Powered by Livewire" id="search">
            <div class="mt-4">
                {{ $blogs->links('paginator') }}
                {{-- {{ $blogs->links() }} --}}
            </div>
        </div>

        <div class="flex flex-wrap flex-col grow">
            @foreach ($blogs as $blog)
                @include('livewire.includes.blog-card')
            @endforeach

        </div>
    </div>
</div>
