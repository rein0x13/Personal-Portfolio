<a href='{{ "/blog/{$blog->id}" }}' wire:key="{{ $blog->id }}" class="mx-2 rounded-md bg-neutral-950/50 border border-neutral-800 backdrop-blur-lg p-10 mt-5">
    <h5 class="text-xl font-medium text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">{{ $blog->title }}</h5>
    <p class="pb-2">{{ $blog->user->name }}</p>
    <p>{{ $blog->summary }}</p>
    <small> {{ $blog->created_at }}</small>
    <div class="container">
    </div>
</a>
