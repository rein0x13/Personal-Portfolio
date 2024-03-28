@extends('head')

@section('content')
    <section class="bg-black pt-5 text-light bg-img-darkened" style="min-height: 100vh">
        <div class="container pt-5 ">
            <h1 class="pb-5">contact_me</h1>
            <div class=" text-light p-5 card custom-bg-dark">
                <form action="" class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label gradient-text">name</label>
                        <input type="text" class="form-control custom-bg-dark text-light" id="name"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label gradient-text">contact</label>
                        <input type="text" class="form-control custom-bg-dark text-light" id="contact"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="floatingTextarea" class="form-label gradient-text">message</label>
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
