<a href="/" wire:key="{{ $blog->id }}" class="card custom-bg-dark text-light p-5 flex-fill m-2">
    <h5 class="gradient-text">{{ $blog->title }}</h5>
    <p>{{ $blog->user->name }}</p>
    <p>{!! $blog->summary !!}</p>
    <small> {{ $blog->created_at }}</small>
    <div class="container">
    </div>
</a>
