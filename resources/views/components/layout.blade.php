<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>rein_0x13</title>
    <link rel="icon" href="{{asset('favicon.png')}}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top "
        style="backdrop-filter: blur(15px); background-color:#00000055;">
        <div class="container">
            <a href="https://github.com/rein0x13" target="_blank" class="navbar-brand gradient-text">rein_0x13</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <span class="ri-menu-4-line"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" id="profile-nav-link">
                        <a wire:navigate href="{{ route('profile') }}" class="nav-link">PROFILE</a>
                    </li>
                    <li class="nav-item" id="background-nav-link">
                        <a wire:navigate href="{{ route('background') }}" class="nav-link">BACKGROUND</a>
                    </li>
                    <li class="nav-item" id="blogs-nav-link">
                        <a wire:navigate href="{{ route('blogs.list') }}" class="nav-link">BLOGS</a>
                    </li>
                    <li class="nav-item" id="contact-nav-link">
                        <a wire:navigate href="{{ route('contact') }}" class="nav-link">CONTACT</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a href="{{ route('filament.dashboard.home') }}"
                                class="nav-link  ms-lg-5">DASHBOARD</a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('filament.dashboard.auth.login') }}"
                                class="nav-link ms-lg-5">LOGIN</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    {{-- @yield('content') --}}

    {{ $slot }}
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
