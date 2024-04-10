<x-layout>
    <article class="max-w-5xl bg-black/50 backdrop-blur-lg rounded-lg border border-neutral-800 text-white p-10">
        <h1 class="text-4xl text-center py-2">{{ $blog->title }}</h1>
        <h2 class="text-center pb-10">By: {{ $blog->user->name . ' | ' . Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</h2>
        <div class="leading-10 text-justify" id="blog-content">{!! $blog->body !!}</div>
    </article>
    <script>
        document.getElementById('blogs-nav-link').classList.add("bg-neutral-900/50",  "rounded-md");
        document.querySelector('#blogs-nav-link > a').classList.add("text-transparent", "bg-clip-text",  "bg-gradient-to-r");
    </script>
</x-layout>