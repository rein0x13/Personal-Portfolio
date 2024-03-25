@extends('head')

@section('content')
    <x-nav>
    </x-nav>
    <section class="card bg-black text-light pt-5">
        {{-- Education --}}
        <div class="container pt-5">
            <h1>Education</h1>
            <div class="d-md-flex flex-wrap flex-row justify-content-between">
                @foreach ($schools as $school)
                    <div class="card custom-bg-dark text-light p-5 flex-fill m-2">
                        <h5 class="gradient-text">{{ $school->name }}</h5>
                        <p>2022-Present</p>
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
            @foreach ($skills as $skill)
                <div class="container p-2">
                    <h6>{{ $skill->name }}</h6>
                    <div class="progress" role="progressbar" aria-valuemax="100">
                        <div class="progress-bar bg-{{ $skill->color }}" style="width: {{ $skill->percentage }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Past Works --}}
        <div class="container pt-5">
            <h1>Past Works</h1>
            <div class="d-md-flex flex-wrap flex-row justify-content-between">
                @foreach ($schools as $school)
                    <div class="card custom-bg-dark text-light p-5 flex-fill m-2">
                        <h5 class="gradient-text">{{ $school->name }}</h5>
                        <p>2022-Present</p>
                        <p>{{ $school->course }}</p>
                        <div class="container">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
