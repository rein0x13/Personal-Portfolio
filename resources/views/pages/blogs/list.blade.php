<x-layout>
    <section class="p-5  text-white flex flex-col justify-center items-center grow gap-5">
        @livewire('Blogs')
        <script>
            document.getElementById('blogs-nav-link').classList.add("bg-neutral-900/50",  "rounded-md");
            document.querySelector('#blogs-nav-link > a').classList.add("text-transparent", "bg-clip-text",  "bg-gradient-to-r");
        </script>
    </section>
</x-layout>
