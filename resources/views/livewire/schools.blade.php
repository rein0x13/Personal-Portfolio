<div wire:poll.visible.10s class="lg:p-5 w-full" id="education">
    <h1 class="text-4xl font-medium">education</h1>
    <div class="md:flex flex-wrap">
        @foreach ($schools as $school)
            <div class="mx-2 rounded-md bg-neutral-950/50 border border-neutral-800 backdrop-blur-lg p-10 mt-5 grow lg:w-[40%]">
                <h5 class="text-xl font-medium text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">{{ $school->name }}</h5>
                <p class="mb-4 text-sm">{{ $school->year }}</p>
                <p>{{ $school->course }}</p>
            </div>
        @endforeach
    </div>
</div>
