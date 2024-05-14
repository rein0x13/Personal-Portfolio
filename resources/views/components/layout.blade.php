<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-neutral-950">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>rein_0x13</title>
    <link rel="icon" href="{{asset('favicon.png')}}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- <link href="{{asset('style.css')}}" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    {{-- <script src="build/assets/app-D2jpX1vH.js"></script> --}}
    {{-- <link rel="stylesheet" href="{{asset('build/assets/app-BFJDGLtd.css')}}"> --}}
    <style>
        body::-webkit-scrollbar {
            display: none;
        }

        #blog-content img {
            margin: 50px 0;
        }

        #blog-content .attachment__caption {
            display: none;
        }
    </style>
</head>

<body class="dark bg-rein-dark bg-no-repeat bg-cover bg-fixed flex flex-col min-h-screen">
    <header class="navbar  dark:bg-black/50 bg-white/80 backdrop-blur-lg dark:text-white p-5 sticky top-0 z-40 border-b border-b-neutral-950/50">
        <div class="flex lg:flex-row flex-col lg:align-middle lg:items-center justify-between lg:px-5">
            <div class="flex">
                <a href="https://github.com/rein0x13" target="_blank" class="navbar-brand text-lg font-extrabold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">rein_0x13</a>
                <button id="navbar-toggle" class="lg:hidden ml-auto z-50" type="button">
                    <span class="ri-menu-4-line"></span>
                </button>
            </div>
            <div class="hidden lg:block" id="navmenu">
                <ul class="navbar-nav flex flex-col align-middle pt-2 lg:p-0 lg:flex-row lg:relative lg:w-auto w-full lg:h-auto h-5/6  top-0 left-0  dark:text-white/75">
                    <li class="nav-item py-1 px-4" id="profile-nav-link">
                        <a wire:navigate href="{{ route('profile') }}" class="nav-link tracking-wide hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-sky-400 to-sky-300">PROFILE</a>
                    </li>
                    <li class="nav-item py-1 px-4" id="background-nav-link">
                        <a wire:navigate href="{{ route('background') }}" class="nav-link tracking-wide hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-sky-400 to-sky-300">BACKGROUND</a>
                    </li>
                    <li class="nav-item py-1 px-4" id="blogs-nav-link">
                        <a wire:navigate href="{{ route('blogs.list') }}" class="nav-link tracking-wide hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-sky-400 to-sky-300">BLOGS</a>
                    </li>
                    <li class="nav-item py-1 px-4" id="contact-nav-link">
                        <a wire:navigate href="{{ route('contact') }}" class="nav-link tracking-wide hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r from-sky-400 to-sky-300">CONTACT</a>
                    </li>
                    @auth
                        <li class="nav-item py-1 px-4 lg:ml-10">
                            <a href="{{ route('filament.dashboard.home') }}"
                                class="nav-link tracking-wide hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-sky-400 hover:to-sky-300">DASHBOARD</a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item py-1 px-4">
                            <a href="{{ route('filament.dashboard.auth.login') }}"
                                class="nav-link tracking-wide hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-sky-400 hover:to-sky-300">LOGIN</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </header>

    <div class="max-w-8xl m-auto">{{ $slot }}</div>

    <script>
        document.getElementById('navbar-toggle').addEventListener('click', () => {
           document.getElementById('navmenu').classList.toggle('hidden');
        });
    </script>
    @livewireScripts
</body>

</html>
