@extends('layout')
@section('content')

    <style>
        .link-style {
            color: #fff;
        }

        .link-style:hover {
            color: #2774A7;
        }
    </style>

    <main id="main" data-aos="fade">
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Contact</h2>
                        <p>If you have any inquiries or would like to collaborate, feel free to reach out!</p>
                    </div>
                </div>
            </div>
        </div>

        <section id="contact" class="contact">
            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>
                                    <a href="mailto:khaledjr1234@gmail.com?subject=Contact%20(Your Name)%20-%20Photo%20Gallery"
                                       target="_blank" class="link-style">
                                        khaledhossain.dev@hotmail.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+880 1572 362997</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-lg-9">
                        <form action="{{ route('create-contact') }}" method="post" class="php-email-form">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name"/>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="d-flex justify-content-center gap-4 pt-2">
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                                <div class="text-center">
                                    <button type="reset">Refresh</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
