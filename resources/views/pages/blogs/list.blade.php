@extends('head')

@section('content')
    <section class="bg-black text-light py-5 bg-img-darkened min-vh-100">
        @livewire('Blogs')
        <script>
            document.getElementById('blogs-nav-link').classList.add("gradient-text");
        </script>
    </section>
@endsection
