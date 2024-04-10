<div wire:poll.visible.10s class="lg:p-5" id="seminars">
    <h1 class="text-4xl font-medium">seminars</h1>
    <div class="md:flex flex-wrap flex-col justify-between">
        @foreach ($seminars as $seminar)
            <div class="mx-2 rounded-md bg-neutral-950/50 border border-neutral-800 backdrop-blur-lg p-10 mt-5">
                <h5 class="text-xl font-medium text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">{{ $seminar->name }}</h5>
                {{-- @dump($seminar->parseDescription()) --}}
                <p class="text-sm mt-1 mb-4">{{ $seminar->parseSubheading() }}</p>
                {{-- <p><span>{{ $seminar->subheading }}</span> | <span
                            style="color: #dab072;">{{ $seminar->date }}</span></p> --}}
                <p>{{ $seminar->description }}</p>
            </div>
        @endforeach
    </div>
</div>