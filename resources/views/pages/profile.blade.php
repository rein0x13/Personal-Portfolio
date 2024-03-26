@extends('head')

@section('content')
    <x-nav>
    </x-nav>
    <section class="hero card bg-black d-flex align-items-center justify-content-center" style="height: 100%">
        <div class="container pt-5">
            <p class="text-light">Hello, I'm</p>
            <h1 class="gradient-text" style="font-size: 3rem">Jeremiah Barrientos</h1>
            <p class="text-light">
                I'm a backend PHP web developer from Eastern Visayas,
                Philippines. It is my passion to build websites from scratch.
            </p>
            <h4 class="button card bg-black d-flex flex-row gradient-button text-white" id="cta-button">Contact Me<i
                    class="ri-arrow-right-s-line"></i></h4>
        </div>
    </section>
    <script>
        document.getElementById('profile-nav-link').classList.add("gradient-text");
    </script>

    <script src="main.js"></script>
@endsection
