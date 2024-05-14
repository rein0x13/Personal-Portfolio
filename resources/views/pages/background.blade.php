<x-layout>
    <section class="p-5  text-white flex flex-col justify-center items-center grow gap-5 max-w-7xl">

        {{-- Experience --}}
        <livewire:experiences>
        {{-- Education --}}
        <livewire:schools>
        {{-- Skills --}}
        <livewire:skills>
        {{-- Past Works --}}
        <livewire:works>
        {{-- Seminars --}}
        <livewire:seminars>
        {{-- </div> --}}

        <script>
           document.getElementById('background-nav-link').classList.add("bg-neutral-900/50",  "rounded-md");
        document.querySelector('#background-nav-link > a').classList.add("text-transparent", "bg-clip-text",  "bg-gradient-to-r");
        </script>
    </section>
</x-layout>
