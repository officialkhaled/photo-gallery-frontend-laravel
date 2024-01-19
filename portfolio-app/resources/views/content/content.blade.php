@extends('layout')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center"
             data-aos="fade">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>I'm <span>Khaled Hossain</span> a Professional Photographer from Dhaka,
                        Bangladesh</h2>
                    <p>“Look for the magic in every moment.”</p>
                    <a href="{{ route('contact') }}" class="btn-get-started">Connect with me</a>
                </div>
            </div>
        </div>
    </section> <!-- End Hero Section -->

    <main id="main" data-aos="fade">
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <!-- Start Gallery Item -->
                    @for($i=1; $i<=14; $i++)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('assets/img/gallery/gallery-' . $i . '.jpg') }}"
                                     class="img-fluid" alt="gallery_image">
                                <div
                                    class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="{{ asset('assets/img/gallery/gallery-' . $i . '.jpg') }}"
                                       title="Gallery {{ $i }}"
                                       class="glightbox preview-link"><i
                                            class="bi bi-arrows-angle-expand"></i></a>
                                    <a href="#" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    @endfor <!-- End Gallery Item -->
                </div>
            </div>
        </section> <!-- End Gallery Section -->
    </main> <!-- End #main -->
@endsection
