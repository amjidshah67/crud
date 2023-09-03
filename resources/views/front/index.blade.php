@extends('front.layout.app')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">

                        <a href="" class="btn-get-started  scrollto">Get Start</a>

                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/front/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    @if(count($brands) > 0)
                        @foreach($brands as $brand)
                            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('uploads/'.$brand->image) }}" class="img-fluid"
                                     alt="">
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </section>
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-4">
                       @if(count($pages)>0)
                           @foreach($pages as $page)
                               <h5>{{ $page->title }}</h5>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-lg-4">
                    @if(count($pages)>0)
                        @foreach($pages as $page)
                            <small>{{ $page->slug }}</small>
                        @endforeach
                    @endif
                </div>
                    <div class="col-lg-4">
                        @if(count($pages)>0)
                            @foreach($pages as $page)
                                <h5>{{ $page->contents }}</h5>
                            @endforeach
                        @endif
                                         <a href="#" class="btn-learn-more">Learn More</a>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                        @if(count($faqs)>0)
                            @foreach($faqs as $faq)
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                       class="collapsed"><span> {{ $faq->id }}</span> {{ $faq->question }}? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            {{ $faq->answer }}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                           @endforeach
                        @endif
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                         style='background-image: url("{{ asset('assets/front/assets/img/why-us.png') }}");'
                         data-aos="zoom-in" data-aos-delay="150">&nbsp;
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src=" {{ asset('assets/front/assets/img/skills.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        @if(count($skills)>0)
                            @foreach($skills as $skill)
                        <div class="skills-content">
                            <div class="progress">
                                <span class="skill">{{ $skill->language }} <i class="val"></i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->progress}}" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                                @endforeach
                              @endif
                        </div>
                    </div>

                </div>
            </section><!-- End Skills Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Services</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">

                        @if(count($services)>0)
                            @foreach($services as $service)
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                             data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4><a href="">{{ $service->title }}</a></h4>
                                <p>{{ $service->slug }}</p>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                                @endforeach
                        @endif
                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">

                    <div class="row">
                        <div class="col-lg-9 text-center text-lg-start">
                            <h3>Call To Action</h3>
                            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="#">Call To Action</a>
                        </div>
                    </div>

                </div>
            </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>

                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @if(count($products)>0)
                        @foreach($products as $product)

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="{{ asset('uploads/'.$product->image)}}" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>{{$product->title }} <h4/>
                            <p> {{ $product->status}}</p>
                            <a href="{{ asset('uploads/'.$product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </section><!-- End Portfolio Section -->
            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Team</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">
                        @if(count($teams)>0)
                            @foreach($teams as $team)

                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                                <div class="pic"><img src="{{ asset('uploads/'.$team->image) }}"
                                                      class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>{{ $team->heading }}</h4>
                                    <span>{{ $team->title }}</span>
                                    <span>{{ $team->slug }}</span>
                                    <p>{{ $team->description }}</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </section><!-- End Team Section -->

            <!-- ======= Pricing Section ======= -->
            <section id="pricing" class="pricing">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Pricing</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">
                        @if(count($pakeges)>0)
                            @foreach($pakeges as $pakege)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                                <h3>{{ $pakege->heading }}</h3>
                                <h4><sup>$</sup>{{ $pakege->id }}<span>{{ $pakege->title }}</span></h4>
                                <ul>
                                    <li><i class="bx bx-check"></i>{{ $pakege->slug }}</li>
                                    <li><i class="bx bx-check"></i> {{ $pakege->description }}</li>
                                    <li><i class="bx bx-check"></i> {{ $pakege->description }}</li>

                                    </li>
                                </ul>
                                <a href="#" class="buy-btn">Get Started</a>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </section><!-- End Pricing Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Frequently Asked Questions</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
                        @if(count($faqs_2)>0)
                            @foreach($faqs_2 as $faq_2)


                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                                                               data-bs-target="#faq-list-1">{{ $faq_2->question }}? <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                        purus non.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                        @endforeach
                    @endif
                </div>
            </section><!-- End Frequently Asked Questions Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                    frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="{{ route('front-store') }}" method="post" role="form" class="php-email-form">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" ></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message">
                                    </div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->
    @endsection
