@extends('head')

@section('content')
    {{-- removed card --}}
    <section class="bg-black text-light pt-5">

        {{-- Education --}}
        <div class="container pt-5">
            <h1>Experience</h1>
            <div class="d-md-flex flex-wrap flex-column justify-content-between">
                @foreach ($experiences as $experience)
                    <div class="card custom-bg-dark text-light p-5 flex-fill m-2">
                        <h5 class="gradient-text">{{ $experience->title }}</h5>
                        <p>{{ '2023-Present' }}</p>
                        {{-- @dump($experience->details[0]['detail']) --}}
                        @if (!empty($experience->details[0]['detail']))
                            <ul>
                                @foreach ($experience->details as $detail)
                                    <li>{{ $detail['detail'] }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="container">
                        </div>
                    </div>
                @endforeach
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
                            {{-- <div class="progress-bar bg-{{ $skill->color }}" style="width: {{ $skill->percentage }}%"> --}}
                            <div class="progress-bar {{ $skill->color->getClass() }}"
                                style="width: {{ $skill->percentage }}%">
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
                                @if (!empty($stack->skill))
                                    <li>{{ $stack->skill->name }}</li>
                                @endif
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
                        {{-- @dump($seminar->parseDescription()) --}}
                        <p>{{ $seminar->parseSubheading() }}</p>
                        {{-- <p><span>{{ $seminar->subheading }}</span> | <span
                                style="color: #dab072;">{{ $seminar->date }}</span></p> --}}
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
