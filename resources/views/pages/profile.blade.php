<x-layout>
        <section class="dark:text-white flex flex-col justify-center align-middle items-center">
            <div class="p-5 m-5">
                <p class="text-light dark:text-white/80">Hello, I'm</p>
                <h1 class="py-2 text-5xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-sky-200">Jeremiah Barrientos</h1>
                <p class="text-light dark:text-white/80">
                    I'm an aspiring backend PHP web developer from Eastern Visayas,
                    Philippines. I'm a tinkerer at heart and love creating web applications.
                </p>
                <button class="mt-5 rounded-md bg-gradient-to-r from-sky-400 to-sky-200 " id="cta-button">
                    <div class="m-[2px] py-2 px-3 text-lg rounded-md flex bg-black hover:text-transparent hover:bg-clip-text hover:font-semibold ">Message me <i class="ri-arrow-right-s-line"></i></div>
                </button>
            </div>
        </section>
    <script>
        document.getElementById('profile-nav-link').classList.add("bg-neutral-900/50", "rounded-md");
        document.querySelector('#profile-nav-link > a').classList.add("text-transparent", "bg-clip-text",  "bg-gradient-to-r");
        document.getElementById('cta-button').addEventListener('click', () => window.location.href =
            "{{ route('contact') }}");
    </script>
</x-layout>
