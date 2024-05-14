<div wire:poll.visible.10s class="lg:p-5" id="works">
    <h1 class="text-4xl font-medium">past_works</h1>
    <div class="md:flex flex-wrap w-full">
        @foreach ($works as $work)
            <div class="mx-2 rounded-md bg-neutral-950/50 border border-neutral-800 backdrop-blur-lg p-10 mt-5 grow lg:w-[40%]">
                <h5 class="text-xl font-medium text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">{{ $work->name }}</h5>
                <p class="mb-4 text-sm">{{ $work->description }}</p>
                <ul class="inline-flex flex-wrap gap-2">
                    @foreach ($work->techStacks as $stack)
                        @if (!empty($stack->skill))
                            <li class="bg-sky-800 rounded-md px-2 py-1">{{ $stack->skill->name }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>