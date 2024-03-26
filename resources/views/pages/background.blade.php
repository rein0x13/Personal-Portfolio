@extends('head')

@section('content')
    <x-nav>
    </x-nav>
    <section class="card bg-black text-light pt-5">

        {{-- Education --}}
        <div class="container pt-5">
            <h1>Experience</h1>
            <div class="d-md-flex flex-wrap flex-column justify-content-between">
                {{-- @foreach ($schools as $school) --}}
                <div class="card custom-bg-dark text-light p-5 flex-fill m-2">
                    <h5 class="gradient-text">{{ 'Collaboration with Creative Dev Labs Innovative Solutions' }}</h5>
                    <p>{{ '2023-Present' }}</p>
                    <ul>
                        <li>{{ 'Worked with the Creative Dev Labs team in developing the Clinica Zamoras System' }}</li>
                        <li>{{ 'Helped co-workers with PHP and Object-Oriented Programming roadblocks' }}</li>
                        <li>{{ 'Learned and applied GitHub workflows' }}</li>
                        <li>{{ 'Ongoing experience with Laravel, Filament, Livewire, and Alpine.js' }}</li>
                    </ul>
                    <div class="container">
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>

        {{-- Education --}}
        <div class="container pt-5">
            <h1>Education</h1>
            <div class="d-md-flex flex-wrap flex-row justify-content-between">
                @foreach ($schools as $school)
                    <div class="card custom-bg-dark text-light p-5 flex-fill m-2">
                        <h5 class="gradient-text">{{ $school->name }}</h5>
                        <p>{{ $school->year }}</p>
                        <p>{{ $school->course }}</p>
                        <div class="container">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Skills --}}
        <div class="container pt-5">
            <h1 class="mb-3">Skills</h1>
            <div class="card custom-bg-dark text-light m-2 p-4">
                @foreach ($skills as $skill)
                    <div class="container p-2">
                        <h6>{{ $skill->name }}</h6>
                        <div class="progress" role="progressbar" aria-valuemax="100">
                            <div class="progress-bar bg-{{ $skill->color }}" style="width: {{ $skill->percentage }}%">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        {{-- Past Works --}}
        <div class="container pt-5">
            <h1>Past Works</h1>
            <div class="d-md-flex flex-wrap flex-row justify-content-between">
                @foreach ($works as $work)
                    <div class="card custom-bg-dark text-light p-5 flex-fill m-2">
                        <h5 class="gradient-text">{{ $work->name }}</h5>
                        <p>{{ $work->description }}</p>
                        <ul>
                            @foreach ($work->techStacks as $stack)
                                <li>{{ $stack->skill->name }}</li>
                            @endforeach
                        </ul>
                        <div class="container">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Seminars --}}
        <div class="container pt-5">
            <h1>Seminars</h1>
            <div class="d-md-flex flex-wrap flex-column justify-content-between">
                @foreach ($seminars as $seminar)
                    <div class="card custom-bg-dark text-light p-5 flex-fill m-2">
                        <h5 class="gradient-text">{{ $seminar->name }}</h5>
                        <p><span>{{ $seminar->subheading }}</span> | <span
                                style="color: #dab072;">{{ $seminar->date }}</span></p>
                        <p>{{ $seminar->description }}</p>
                        <div class="container">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <script>
            document.getElementById('background-nav-link').classList.add("gradient-text");
        </script>
    </section>
@endsection
