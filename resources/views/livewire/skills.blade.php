<div wire:poll.visible.10s class="lg:p-5 w-full" id="skills">
    <h1 class="text-4xl font-medium">skills</h1>
    <div class="mx-2 rounded-md bg-neutral-950/50 border border-neutral-800 backdrop-blur-lg p-10 mt-5">
        @foreach ($skills as $skill)
            <div class="my-4">
                <h6 class="pb-1">{{ $skill->name }}</h6>
                <div class="progress bg-neutral-800 rounded-md w-full h-3" role="progressbar"  aria-valuemax="100">
                    <div class="progress-bar bg-gradient-to-r from-sky-400 to-sky-300 h-3 rounded-md"
                        style="width: {{ $skill->percentage }}%">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>