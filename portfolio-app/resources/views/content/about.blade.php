@extends('layout')
@section('content')
    <main id="main" data-aos="fade">
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>About</h2>
                        <p class="py-3">Hello, I am a results-driven individual poised to
                            bring a strategic
                            and innovative approach to software engineering. A natural leader with a collaborative mindset, I have successfully managed teams to achieve goals and exceed expectations. My commitment to continuous learning and professional development is reflected in my track record of staying ahead of the industry's best practices.</p>

                        <a class="cta-btn" href="{{ route('contact') }}">Available for hire</a>

                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" class="img-fluid"
                             alt="" style="border-radius: 8px; max-height: 800px;">
                    </div>
                    <div class="col-lg-8 content" style="padding-left: 60px;">
                        <h2>Casual Photographer from Dhaka</h2>
                        <p class="fst-italic py-3">
                            Software Engineer Intern at Skylark Soft Ltd. company, working with
                            PHP, Laravel, Vue.js, ReactJS and MySQL.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-caret-right-fill"></i>
                                        <strong>Birthday:</strong> <span>2 July 2000</span></li>
                                    <li><i class="bi bi-caret-right-fill"></i>
                                        <strong>Website:</strong> <span><a
                                                href="https://khaledhossain.vercel.app/" style="color: #fff;">khaledhossain
                                                .dev</a></span></li>
                                    <li><i class="bi bi-caret-right-fill"></i>
                                        <strong>Phone:</strong> <span>+880 1572 362997</span></li>
                                    <li><i class="bi bi-caret-right-fill"></i>
                                        <strong>City:</strong> <span>Dhaka, Bangladesh</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-caret-right-fill"></i> <strong>Age:</strong>
                                        <span>23</span></li>
                                    <li><i class="bi bi-caret-right-fill"></i>
                                        <strong>Degree:</strong> <span>BSc. in CSE</span></li>
                                    <li><i class="bi bi-caret-right-fill"></i> <strong>Email:</strong>
                                        <span>khaledhossain.dev@hotmail.com</span></li>
                                    <li><i class="bi bi-caret-right-fill"></i> <strong>Freelance:</strong> <span>Available</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-justify">
                            <p class="py-3"> {{-- Fix::justify the texts --}}
                                Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                            </p>
                            <p class="m-0"> {{-- Fix::justify the texts --}}
                                Recusandae est praesentium consequatur eos voluptatem. Vitae dolores aliquam itaque odio nihil. Neque ut neque ut quae voluptas. Maxime corporis aut ut ipsum consequatur. Repudiandae sunt sequi minus qui et. Doloribus molestiae officiis.
                                Soluta eligendi fugiat omnis enim.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section> <!-- End About Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                @if($testimonials && count($testimonials) > 0)
                    <div class="section-header">
                        <h2>Testimonials</h2>
                        <p>What they are saying</p>
                    </div>
                @endif

                <div class="slides-3 swiper card" style="background: #202020; border: solid 1px
                #202020; color: #fff; border-radius: 8px;">

                    <div class="swiper-wrapper">

                        @foreach($testimonials as $testimonial)
                        {{--@for($i=1; $i<=5; $i++)--}}
                            <div class="swiper-slide">
                                <div class="testimonial-item" style="border-radius: 8px; border:
                                solid 1px
                                #262626; box-shadow: 0 2px 5px #262626">
                                    <div class="stars">
                                        @for ($i = 0; $i < $testimonial->star; $i++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                    </div>
                                    <p>
                                        {{ $testimonial->description }}
                                    </p>
                                    {{--<p>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    </p>--}}
                                    <div class="profile mt-auto">
                                        <img src="{{ asset
                                        ('assets/img/testimonials/testimonials-' .$loop->iteration .'.jpg') }}"
                                             class="testimonial-img" alt="">
                                        {{--<h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>--}}
                                        <h3>{{ $testimonial->name }}</h3>
                                        <h4>{{ $testimonial->designation }}</h4>
                                    </div>
                                </div>
                            </div> <!-- End testimonial item -->
                      {{--@endfor--}}
                      @endforeach

                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section> <!-- End Testimonials Section -->

    </main> <!-- End #main -->
@endsection
