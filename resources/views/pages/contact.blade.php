<x-layout>
    <section class="p-5  text-white flex flex-col justify-center items-center grow gap-5 w-screen max-w-7xl ">
        <div class="w-5/6 mx-auto">
            <h1 class="text-4xl font-medium pb-5">messenger</h1>
            @livewire('ContactMe')
        </div>
    </section>
    <script>
        document.getElementById('contact-nav-link').classList.add("bg-neutral-900/50", "rounded-md");
        document.querySelector('#contact-nav-link > a').classList.add("text-transparent", "bg-clip-text",  "bg-gradient-to-r");
    </script>
</x-layout>
