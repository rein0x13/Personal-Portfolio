@extends('head')

@section('content')
    <section class="bg-black py-5 text-light bg-img-darkened" style="min-height: 100vh">
        <div class="container pt-5 ">
            <h1 class="pb-2">messenger</h1>
            @livewire('ContactMe')
        </div>
    </section>
    <script>
        document.getElementById('contact-nav-link').classList.add("gradient-text");
    </script>
@endsection
