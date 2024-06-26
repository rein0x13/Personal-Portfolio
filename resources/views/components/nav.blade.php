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
                        <a href="{{ route('filament.dashboard.home') }}" {{-- class="nav-link card text-light bg-black ps-lg-5 ms-lg-5 gradient-button">DASHBOARD</a> --}}
                            class="nav-link  ms-lg-5">DASHBOARD</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a href="{{ route('filament.dashboard.auth.login') }}" {{-- class="nav-link card text-light bg-black ps-lg-5 ms-lg-5 gradient-button">LOGIN</a> --}}
                            class="nav-link ms-lg-5">LOGIN</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
