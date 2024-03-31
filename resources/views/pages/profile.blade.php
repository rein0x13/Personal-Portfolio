<x-layout>
    <section class="hero bg-black d-flex align-items-center justify-content-center min-vh-100">
        <div class="container pt-5">
            <p class="text-light">Hello, I'm</p>
            <h1 class="gradient-text" style="font-size: 3rem; font-weight:700">Jeremiah Barrientos</h1>
            <p class="text-light">
                I'm an aspiring backend PHP web developer from Eastern Visayas,
                Philippines. I'm a tinkerer at heart and love creating web applications.
            </p>
            <h4 class="button card bg-black d-flex flex-row gradient-button text-white" id="cta-button">Message me<i
                    class="ri-arrow-right-s-line"></i></h4>
        </div>
    </section>
    <script>
        document.getElementById('profile-nav-link').classList.add("gradient-text");
        document.getElementById('cta-button').addEventListener('click', () => window.location.href =
            "{{ route('contact') }}");
    </script>
    <script src="main.js"></script>
</x-layout>
