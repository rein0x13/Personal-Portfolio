<div wire:poll.visible.10s class="lg:p-5 w-full" id="experiences">
    <h1 class="text-4xl font-medium">experience</h1>
    <div class="md:flex flex-wrap flex-col justify-between">
        @foreach ($experiences as $experience)
            <div wire:key="{{$experience->id}}" class="mx-2 rounded-md bg-neutral-950/50 border border-neutral-800 backdrop-blur-lg p-10 mt-5">
                <h5 class="text-xl font-medium text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-300">{{ $experience->title }}</h5>
                {{-- FIX THIS LINE --}}
                {{-- <p class='text-sm mt-1 mb-4'>{{ '2023-Present' }}</p> --}}
                <p class='text-sm mt-1 mb-4'>{{ $experience->years }}</p>
                @if (!empty($experience->details[0]['detail']))
                    <ul class="list-disc list-inside mx-5">
                        @foreach ($experience->details as $detail)
                            <li>{{ $detail['detail'] }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</div>