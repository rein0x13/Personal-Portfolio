@extends('head')

@section('content')
    <section class="bg-black pt-5 text-light">
        <div class="container pt-5">
            <h1 class="pb-5">Contact Me</h1>
            <div class=" text-light px-5">
                <form action="" class="contact-form">
                    <div class="mb-3 d-flex justify-content-end">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control custom-bg-dark text-light" id="name"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" class="form-control custom-bg-dark text-light" id="contact"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="floatingTextarea" class="form-label">Message</label>
                        <textarea class="form-control custom-bg-dark text-light" rows="5" id="floatingTextarea"></textarea>
                    </div>
                    <button type="submit" id="contact-btn" class="btn gradient-text gradient-button">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('contact-nav-link').classList.add("gradient-text");
    </script>
@endsection
