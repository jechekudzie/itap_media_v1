@extends('layouts.website')

@section('content')
    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">
        <!-- Hero slider + BG parallax -->
        <section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
            <div class="jarallax-img"
                 style="background-image: url(website/assets/img/landing/software-company/banner.jpeg);">
            </div>
            <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

                <!-- Slider controls (Prev / next) -->
                <button type="button" id="hero-prev"
                        class="btn btn-prev btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 start-0 translate-middle-y d-none d-md-inline-flex ms-n3 ms-lg-2">
                    <i class="bx bx-chevron-left fs-1"></i>
                </button>
                <button type="button" id="hero-next"
                        class="btn btn-next btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 end-0 translate-middle-y d-none d-md-inline-flex me-n3 me-lg-2">
                    <i class="bx bx-chevron-right fs-1"></i>
                </button>

                <!-- Slider -->
                <div class="container text-center py-xl-5">
                    <div class="row justify-content-center pt-lg-5">
                        <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                            <div class="swiper pt-5 pb-4 py-md-5"
                                 data-swiper-options='{
              "effect": "fade",
              "speed": 500,
              "autoplay": {
                "delay": 5500,
                "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": "#hero-prev",
                "nextEl": "#hero-next"
              }
            }'>
                                <div class="swiper-wrapper">

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <h2 class="display-2 from-start mb-lg-4">Film and Photography Solutions
                                        </h2>
                                        <div class="from-end">
                                            <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">Key Statement comes here for film and photography</p>
                                        </div>
                                        <div class="scale-up delay-1">
                                            <a href="#" class="btn btn-danger shadow-danger btn-lg">Book with us</a>
                                        </div>

                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <h2 class="display-2 from-start mb-lg-4">Award-Winning - iTAP Media Philosophy</h2>
                                        <div class="from-end">
                                            <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">Key Statement Comes Here.</p>
                                        </div>
                                        <div class="scale-up delay-1">
                                            <a href="#" class="btn btn-danger shadow-danger btn-lg">Read More</a>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <h2 class="display-2 from-start mb-lg-4">iTAP Media Business Case</h2>
                                        <div class="from-end">
                                            <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">Business Case for corporates.</p>
                                        </div>
                                        <div class="scale-up delay-1">
                                            <a href="#" class="btn btn-danger shadow-danger btn-lg">Work with
                                                us</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pagination (bullets) -->
                                <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="container d-flex flex-column flex-sm-row align-items-center justify-content-between position-relative zindex-5 pb-5">
                <div class="d-flex mb-4 mb-sm-0">
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin rounded-circle me-2">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook rounded-circle me-2">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter rounded-circle me-2">
                        <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-youtube rounded-circle me-2">
                        <i class="bx bxl-youtube"></i>
                    </a>
                </div>
                <a href="#" class="nav-link px-0">
                    Our Portfolio
                    <i class="bx bx-right-arrow-circle fs-4 ms-2"></i>
                </a>
            </div>
        </section>

        <!-- Hero -->

        <section class="pt-lg-4 mt-lg-3">
            <div class="position-relative overflow-hidden">

                <!-- Image -->
                <div class="container-fluid position-relative position-lg-absolute top-0 start-0 h-100">
                    <div class="row h-100 me-n4 me-n2">
                        <div class="col-lg-7 position-relative">
                            <div class="d-none d-sm-block d-lg-none" style="height: 400px;"></div>
                            <div class="d-sm-none" style="height: 300px;"></div>
                            <div
                                class="jarallax position-absolute top-0 start-0 w-100 h-100 rounded-3 rounded-start-0 overflow-hidden"
                                data-jarallax data-speed="0.3">
                                <div class="jarallax-img"
                                     style="background-image: url(website/assets/img/landing/financial/banner2.jpeg);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container position-relative zindex-5 pt-lg-5 px-0 px-lg-3">
                    <div class="row pt-lg-5 mx-n4 mx-lg-n3">
                        <div class="col-xl-6 col-lg-7 offset-lg-5 offset-xl-6 pb-5">
                            <!-- Card -->
                            <div class="card bg-dark border-light overflow-hidden py-4 px-2 p-sm-4">
                                <span class="position-absolute top-0 start-0 w-100 h-100"
                                      style="background-color: rgba(255,255,255,.05);">
                                </span>
                                <div class="bg-light card-body position-relative zindex-5">>
                                    <h1 class="display-5 text-dark pb-3 mb-3">Check Available Dates</h1>
                                    <p class="fs-lg text-dark opacity-70 mb-5 text-black">Statement comes here.</p>
                                    <div class="d-flex flex-column flex-sm-row ">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-danger shadow-danger btn-lg mb-3 mb-sm-0 me-sm-4">Check Calendar &nbsp; <i style="font-size: xx-large;" class="bx bx-calendar"></i></button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#searchOption" class="btn btn-outline-danger  btn-lg mb-3 mb-sm-0 me-sm-4"> &nbsp; <i style="font-size: xx-large;" class="bx bx-search"></i></button>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <h1 style="text-align: center;padding-top: 25px;" class="display-2">Our Core Business</h1>
        <!-- Page container -->
        <section class="bg-secondary position-relative pt-5 py-lg-5 mt-3 mt-md-4">

            <!-- Swiper tabs (Project images) -->
            <div class="swiper-tabs position-md-absolute top-0 end-0 w-md-50 h-100">
                <div id="project-1"
                     class="swiper-tab position-md-absolute w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover active"
                     style="background-image: url(/website/assets/img/portfolio/slider/core_services.jpeg);">
                    <div class="ratio ratio-1x1"></div>
                </div>
                <div id="project-2"
                     class="swiper-tab position-md-absolute w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover"
                     style="background-image: url(/website/assets/img/portfolio/slider/core_services.jpeg);">
                    <div class="ratio ratio-1x1"></div>
                </div>
                <div id="project-3"
                     class="swiper-tab position-md-absolute w-100 h-100 bg-position-center bg-repeat-0 bg-size-cover"
                     style="background-image: url(/website/assets/img/portfolio/slider/core_services.jpeg);">
                    <div class="ratio ratio-1x1"></div>
                </div>
            </div>
            <div class="container pt-1 pt-lg-2">
                <div class="row">
                    <div class="col-lg-5 col-md-6">

                        <!-- Project description (Slider) -->
                        <div class="d-none d-lg-block" style="height: 160px;"></div>
                        <div class="d-none d-md-block d-lg-none" style="height: 80px;"></div>
                        <div class="swiper pt-4 pt-md-0"
                             data-swiper-options='{
                "spaceBetween": 30,
                "loop": true,
                "tabs": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "fraction"
                },
                "navigation": {
                  "prevEl": ".btn-prev",
                  "nextEl": ".btn-next"
                }
              }'>
                            <div class="swiper-wrapper">

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#project-1">
                                    <h2 class="h1 mb-4">Video Production</h2>
                                    <p class="pb-3 mb-3">
                                        Our service covers a wide range of needs, including events, commercials,
                                        documentaries, promotional videos, corporate videos, and more. With
                                        state-of-the-art
                                        equipment and a team of talented professionals,
                                    </p>

                                    <a href="portfolio-single-project.html"
                                       class="btn btn-primary  mt-n2">Read more</a>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#project-2">
                                    <h2 class="h1 mb-4">Photography</h2>
                                    <p class="pb-3 mb-3">We capture stunning images that tell your story. Whether it's
                                        event coverage, product photography, corporate headshots, or lifestyle
                                        photography,
                                        we strive to convey your brand's essence through compelling visuals.
                                    </p>

                                    <a href="portfolio-single-project.html"
                                       class="btn btn-primary mt-n2">Read more</a>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#project-3">
                                    <h2 class="h1 mb-4">Live Streaming/Broadcasting</h2>
                                    <p class="pb-3 mb-3">
                                        Our service permits global audience reach in real-time. Whether it's a corporate
                                        event, conference, concert, or any other live event, our experienced team
                                        ensures
                                        seamless streaming and high-quality production.
                                    </p>

                                    <a href="portfolio-single-project.html"
                                       class="btn btn-primary mt-n2">Read more</a>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#project-3">
                                    <h2 class="h1 mb-4">Production Planning and Management</h2>
                                    <p class="pb-3 mb-3">
                                        We provide comprehensive production planning and management services to
                                        streamline your multimedia projects. Our team meticulously plans every aspect,
                                        from pre-production to post-production, ensuring efficient workflows, budget
                                        optimization, and timely delivery. We handle logistics, scheduling, resource
                                        allocation, and coordination to bring your vision to fruition.

                                    </p>

                                    <a href="portfolio-single-project.html"
                                       class="btn btn-primary mt-n2">Read more</a>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#project-3">
                                    <h2 class="h1 mb-4">Graphic Modelling</h2>
                                    <p class="pb-3 mb-3">
                                        We create stunning visual designs to enhance your brand's identity. We
                                        specialise in 2D and 3D graphics, animation, motion graphics, and visual
                                        effects. From logos and illustrations to product renderings and virtual
                                        environments, we bring your ideas to life.
                                    </p>

                                    <a href="portfolio-single-project.html"
                                       class="btn btn-primary mt-n2">Read more</a>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#project-3">
                                    <h2 class="h1 mb-4">Consulting and Training</h2>
                                    <p class="pb-3 mb-3">
                                        We provide consultancy and training to individuals and organisations seeking to
                                        enhance their multimedia capabilities. Our experienced consultants offer expert
                                        advice on multimedia strategies, equipment operation and selection, workflow
                                        optimization, and more. We also conduct training programs tailored to the
                                        specific needs of our clients, equipping them with the skills and knowledge
                                        necessary to excel in the multimedia industry.


                                        <a href="portfolio-single-project.html"
                                           class="btn btn-primary mt-n2">Read more</a>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide" data-swiper-tab="#project-3">
                                    <h2 class="h1 mb-4">Content Distribution</h2>
                                    <p class="pb-3 mb-3">
                                        We assist in the distribution and promotion of your multimedia content across
                                        various platforms and channels. From social media marketing and online
                                        advertising to content syndication and search engine optimization, we help
                                        maximise your reach and engage your target audience effectively.

                                    </p>

                                    <a href="portfolio-single-project.html"
                                       class="btn btn-primary mt-n2">Read more</a>
                                </div>

                            </div>
                            <div class="d-none d-lg-block" style="height: 160px;"></div>
                            <div class="d-none d-md-block d-lg-none" style="height: 80px;"></div>
                            <div class="d-md-none" style="height: 40px;"></div>

                            <!-- Prev / Next buttons + Counter -->
                            <div class="d-flex align-items-center ps-2 pb-5">
                                <button type="button" class="btn btn-prev btn-icon btn-sm position-static">
                                    <i class="bx bx-chevron-left"></i>
                                </button>
                                <div class="swiper-pagination position-static w-auto mx-3"
                                     style="min-width: 30px;"></div>
                                <button type="button" class="btn btn-next btn-icon btn-sm position-static">
                                    <i class="bx bx-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br/>
        <br/>
        <hr/>
        <br/>
        <br/>

        <h1 style="text-align: center;padding-top: 25px;" class="display-2">Who do we service?</h1>
        <!-- Service -->
        <section class="container mb-md-3 mb-lg-5 pb-5">
            <div class="row">
                <div class="col-md-6 pb-2 pb-md-0 mb-4 mb-md-0">
                    <div class="pe-lg-5">
                        <img src="/website/assets/img/services/service_coverage.jpeg" class="rounded-3" alt="Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="h3 mb-sm-4">Family</h2>
                    <p class="d-md-none d-xl-block pb-2 pb-md-3 mb-3">Enriching Lives, Cherish Every Precious Moment,
                        Inspiring Connections</p>
                    <div class="border rounded-3 mb-4 mb-lg-5">
                        <div class="row row-cols-1 row-cols-sm-2 g-0">
                            <div class="col d-flex align-items-center border-end-sm border-bottom p-3">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Weddings</h3>
                                    <p class="fs-xs mb-0">We specialise in capturing the love, joy, and cherished
                                        moments of weddings, creating timeless memories for couples and their families.
                                        .</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center border-bottom p-3">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Family Ceremony</h3>
                                    <p class="fs-xs mb-0">Our skilled team documents milestone celebrations and
                                        religious ceremonies, preserving the significance and emotions of these precious
                                        family events.
                                    </p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center border-end-sm p-3">

                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Family shoots</h3>
                                    <p class="fs-xs mb-0">We excel in capturing the essence of family bonds through
                                        professional photography, creating beautiful portraits and candid moments.</p>
                                </div>
                            </div>

                            <hr class="d-sm-none">

                            <div class="col d-flex align-items-center border-end-sm p-3">

                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Funerals</h3>
                                    <p class="fs-xs mb-0">With sensitivity and respect, we provide funeral photography
                                        services to honour and remember loved ones, capturing the solemnity of the
                                        occasion.
                                    </p>
                                </div>
                            </div>


                            <hr class="d-sm-none">
                            <div class="col d-flex align-items-center border-end-sm p-3">
                                <hr class="d-sm-none">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Family Parties</h3>
                                    <p class="fs-xs mb-0">Our team is adept at documenting the fun, laughter, and
                                        togetherness of family gatherings, ensuring that precious memories are
                                        preserved.
                                    </p>
                                </div>
                            </div>
                            <hr class="d-sm-none">

                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row">
                        <a href="{{url('/services')}}" class="btn btn-primary mb-3 mb-sm-0 me-sm-3">Book Now</a>
                        <a href="#" class="btn btn-outline-danger">
                            Learn more
                            <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service -->
        <section class="container pt-2 pt-lg-3 mb-md-3 mb-lg-5 pb-5">
            <div class="row">
                <div class="col-md-6 order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
                    <div class="ps-lg-5">
                        <img src="/website/assets/img/services/service_coverage.jpeg" class="rounded-3" alt="Image">
                    </div>
                </div>
                <div class="col-md-6 ordr-md-1">
                    <h2 class="h3 mb-sm-4">Corporate</h2>
                    <p class="d-md-none d-xl-block pb-2 pb-md-3 mb-3">Showcasing Professionalism and Inspiring
                        Success</p>
                    <div class="border rounded-3 mb-4 mb-lg-5">
                        <div class="row row-cols-1 row-cols-sm-2 g-0">
                            <div class="col d-flex align-items-center border-end-sm border-bottom p-3">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Conferences and Seminars</h3>
                                    <p class="fs-xs mb-0">We expertly capture keynote
                                        speeches, panel discussions, and networking moments, showcasing the
                                        professionalism and knowledge-sharing within the corporate world.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center border-bottom p-3">

                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Product Launches</h3>
                                    <p class="fs-xs mb-0">We capture the excitement and energy of product launches,
                                        highlighting key features and generating buzz.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center border-end-sm p-3">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Awards & Ceremonies</h3>
                                    <p class="fs-xs mb-0">We ensure that the recognition and achievements of individuals
                                        and companies are captured flawlessly through our services.
                                    </p>
                                </div>
                            </div>

                            <div class="col d-flex align-items-center border-end-sm p-3">

                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Corporate Galas and Dinners</h3>
                                    <p class="fs-xs mb-0">Our team excels in capturing the elegance and grandeur of
                                        corporate galas, delivering visual narratives that reflect the organisation's
                                        brand image.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row">
                        <a href="{{url('/services')}}" class="btn btn-primary mb-3 mb-sm-0 me-sm-3">Book Now</a>
                        <a href="#" class="btn btn-outline-danger">
                            Learn more
                            <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service -->
        <section class="container mb-md-3 mb-lg-5 pb-5">
            <div class="row">
                <div class="col-md-6 pb-2 pb-md-0 mb-4 mb-md-0">
                    <div class="pe-lg-5">
                        <img src="/website/assets/img/services/service_coverage.jpeg" class="rounded-3" alt="Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="h3 mb-sm-4">Commercial</h2>
                    <p class="d-md-none d-xl-block pb-2 pb-md-3 mb-3">Pioneering the Art of Timeless Storytelling.</p>
                    <div class="border rounded-3 mb-4 mb-lg-5">
                        <div class="row row-cols-1 row-cols-sm-2 g-0">
                            <div class="col d-flex align-items-center border-end-sm border-bottom p-3">

                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Trade Shows and Exhibitions</h3>
                                    <p class="fs-xs mb-0">We are experienced in capturing
                                        the vibrancy and innovation of commercial events, highlighting exhibitors and
                                        their offerings.
                                    </p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center border-bottom p-3">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Brand Activation</h3>
                                    <p class="fs-xs mb-0">Our services encompass documenting engaging brand activation,
                                        capturing the audience's experience and creating compelling promotional content
                                        for the best placement.
                                    </p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center border-end-sm p-3">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Marketing Campaigns</h3>
                                    <p class="fs-xs mb-0">We offer visual content creation for marketing campaigns,
                                        including promotional videos and captivating images that resonate with the
                                        target audience.</p>
                                </div>
                            </div>
                            <hr class="d-sm-none">
                            <div class="col d-flex align-items-center p-3">
                                <div class="ps-2 ms-1">
                                    <h3 class="h6 mb-0">Corporate Videos</h3>
                                    <p class="fs-xs mb-0">We produce high-quality corporate videos, ranging from
                                        promotional videos and training materials to captivating company profiles.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row">
                        <a href="{{url('/services')}}" class="btn btn-primary mb-3 mb-sm-0 me-sm-3">Book Now</a>
                        <a href="#" class="btn btn-outline-danger">
                            Learn more
                            <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to action banner -->
        <section class="container">
            <div class="card bg-white border-primary shadow-sm px-4 px-lg-0">
                <div class="row align-items-center py-3">
                    <div class="col-xl-5 col-md-6 offset-lg-1 text-center text-md-start py-4 py-lg-5">
                        <h2 class="h1">Call to action Banner/</h2>
                        <h3 class="h4 text-primary">Call to action statement comes here, think of something touchy</h3>
                        <p class="mb-4 mb-lg-5">Call to action description.</p>
                        <a href="#" class="btn btn-primary">Button for call yo action</a>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-6">
                        <lottie-player class="mx-auto" src="website/assets/json/animation-financial-landing.json"
                                       background="transparent" speed="1" loop autoplay
                                       style="max-width: 416px;"></lottie-player>
                    </div>
                </div>
            </div>
        </section>


        <!-- Why Us -->
        <section class="container py-5 my-2 my-md-4 my-lg-5">
            <h2 class="h1 text-center pt-1 pt-xl-3 mb-lg-4">Why Us?</h2>
            <div class="swiper mx-n2"
                 data-swiper-options='{
            "slidesPerView": 1,
            "spaceBetween": 8,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 2
              },
              "800": {
                "slidesPerView": 3
              },
              "1200": {
                "slidesPerView": 4
              }
            }
          }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide h-auto py-3">
                        <div class="card h-100 card-body card-hover mx-2">
                            <i class="bx bx-time-five display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                            <h3 class="h5 pt-3 pb-1 mb-2">Extensive Experience</h3>
                            <p class="mb-0">12 years in the industry, proven track record - successful projects and satisfied clients.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto py-3">
                        <div class="card h-100 card-body card-hover mx-2">
                            <i class="bx bx-group display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                            <h3 class="h5 pt-3 pb-1 mb-2">Diverse Clientele</h3>
                            <p class="mb-0">Wide range of productions from different sectors, showcasing versatility and adaptability.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto py-3">
                        <div class="card h-100 card-body card-hover mx-2">
                            <i class="bx bx-expand display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                            <h3 class="h5 pt-3 pb-1 mb-2">Customised Solutions</h3>
                            <p class="mb-0">Understand the uniqueness of each project, and meet the specific requirements.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto py-3">
                        <div class="card h-100 card-body card-hover mx-2">
                            <i class="bx bxl-creative-commons display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                            <h3 class="h5 pt-3 pb-1 mb-2">Creativity</h3>
                            <p class="mb-0">Strive to push creative boundaries and stay updated with the latest industry trends.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto py-3">
                        <div class="card h-100 card-body card-hover mx-2">
                            <i class="bx bx-group display-5 fw-normal card-icon" style="color: #b4b7c9;"></i>
                            <h3 class="h5 pt-3 pb-1 mb-2">Professional Team</h3>
                            <p class="mb-0">Pellentesque rhoncus viverra vestibulum, purus purus quisque quisque sed.
                                Cras vestibulum facilisis dictumst consequat.</p>
                        </div>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative d-xl-none pt-3 mt-4"></div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-center pt-3 pt-sm-4">
                <a href="#" class="btn btn-primary btn-lg">Book with Us</a>
            </div>
        </section>


        <!-- Testimonials -->
        <section class="container py-5 mb-2 mt-md-2 mb-md-4 mt-lg-4 mb-lg-5">
            <div class="row pt-xl-1 pb-xl-3">
                <div class="col-lg-3 col-md-4">
                    <h2 class="text-center text-md-start mx-auto mx-md-0 pt-md-2" style="max-width: 300px;">What Our <br
                            class="d-none d-md-inline">Clients Say <br class="d-none d-md-inline">About Us:</h2>

                    <!-- Slider controls (Prev / next buttons) -->
                    <div class="d-flex justify-content-center justify-content-md-start pb-4 mb-2 pt-2 pt-md-4 mt-md-5">
                        <button type="button" id="prev-testimonial" class="btn btn-prev btn-icon btn-sm me-2">
                            <i class="bx bx-chevron-left"></i>
                        </button>
                        <button type="button" id="next-testimonial" class="btn btn-next btn-icon btn-sm ms-2">
                            <i class="bx bx-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="swiper mx-n2"
                         data-swiper-options='{
                "slidesPerView": 1,
                "spaceBetween": 8,
                "loop": true,
                "navigation": {
                  "prevEl": "#prev-testimonial",
                  "nextEl": "#next-testimonial"
                },
                "breakpoints": {
                  "500": {
                    "slidesPerView": 2
                  },
                  "1000": {
                    "slidesPerView": 2
                  },
                  "1200": {
                    "slidesPerView": 3
                  }
                }
              }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide h-auto pt-4">
                                <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-danger shadow-danger pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-3 mb-0">
                                            <p class="mb-0">Text of what the clients said about the service that they got</p>
                                        </blockquote>
                                        <div class="card-footer border-0 text-nowrap pt-0">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                        </div>
                                    </div>
                                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                                        <img src="website/assets/img/avatar/03.jpg" width="48" class="rounded-circle"
                                             alt="Fannie Summers">
                                        <div class="ps-3">
                                            <h6 class="fs-sm fw-semibold mb-0">Client Name</h6>
                                            <span class="fs-xs text-muted">Event Type eg. Wedding</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto pt-4">
                                <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-danger shadow-danger pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-3 mb-0">
                                            <p class="mb-0">Text of what the clients said about the service that they got</p>
                                        </blockquote>
                                        <div class="card-footer border-0 text-nowrap pt-0">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                        </div>
                                    </div>
                                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                                        <img src="website/assets/img/avatar/03.jpg" width="48" class="rounded-circle"
                                             alt="Fannie Summers">
                                        <div class="ps-3">
                                            <h6 class="fs-sm fw-semibold mb-0">Client Name</h6>
                                            <span class="fs-xs text-muted">Event Type eg. Wedding</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide h-auto pt-4">
                                <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-danger shadow-danger pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-3 mb-0">
                                            <p class="mb-0">Text of what the clients said about the service that they got</p>
                                        </blockquote>
                                        <div class="card-footer border-0 text-nowrap pt-0">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                        </div>
                                    </div>
                                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                                        <img src="website/assets/img/avatar/03.jpg" width="48" class="rounded-circle"
                                             alt="Fannie Summers">
                                        <div class="ps-3">
                                            <h6 class="fs-sm fw-semibold mb-0">Client Name</h6>
                                            <span class="fs-xs text-muted">Event Type eg. Wedding</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide h-auto pt-4">
                                <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                        <span
                                            class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                            <i class="bx bxs-quote-left"></i>
                                        </span>
                                        <blockquote class="card-body pb-3 mb-0">
                                            <p class="mb-0">Text of what the clients said about the service that they got</p>
                                        </blockquote>
                                        <div class="card-footer border-0 text-nowrap pt-0">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                            <i class="bx bx-star text-muted opacity-75"></i>
                                        </div>
                                    </div>
                                    <figcaption class="d-flex align-items-center ps-4 pt-4">
                                        <img src="website/assets/img/avatar/03.jpg" width="48" class="rounded-circle"
                                             alt="Fannie Summers">
                                        <div class="ps-3">
                                            <h6 class="fs-sm fw-semibold mb-0">Client Name</h6>
                                            <span class="fs-xs text-muted">Event Type eg. Wedding</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact form -->
        {{--<section class="position-relative py-5">
            <div class="container position-relative zindex-5 py-2 py-md-4 py-lg-5">
                <div class="row justify-content-center text-center pt-xl-2 pb-4 mb-1 mb-lg-3">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-11">
                        <h2 class="mb-4">Let's Change the Game Together</h2>
                        <p class="text-muted mb-0">For all your enquiries you can contact us.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <form class="row needs-validation" novalidate>
                            <div class="col-sm-6 mb-4">
                                <label for="fn" class="form-label">First name</label>
                                <input type="text" id="fn" class="form-control" required>
                                <div class="invalid-feedback">Please, enter your first name!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="ln" class="form-label">Last name</label>
                                <input type="text" id="ln" class="form-control" required>
                                <div class="invalid-feedback">Please, enter your last name!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" id="email" class="form-control" required>
                                <div class="invalid-feedback">Please, provide a valid email address!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" id="phone" class="form-control"
                                       data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                                       placeholder="+1 ___ ___ __">
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="city" class="form-label">City</label>
                                <select id="city" class="form-select" required>
                                    <option value="" disabled selected>Choose city</option>
                                    <option value="Boston">Boston</option>
                                    <option value="Chicago">Chicago</option>
                                    <option value="Los Angeles">Los Angeles</option>
                                    <option value="Miami">Miami</option>
                                    <option value="New York">New York</option>
                                    <option value="Philadelphia">Philadelphia</option>
                                </select>
                                <div class="invalid-feedback">Please, choose your city!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="company" class="form-label">Your company</label>
                                <input type="text" id="company" class="form-control">
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="position" class="form-label">Your position</label>
                                <select id="position" class="form-select">
                                    <option value="Owner">Owner</option>
                                    <option value="CEO">CEO</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Accountant">Accountant</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="people" class="form-label">People in company</label>
                                <select id="people" class="form-select">
                                    <option value="0-10">0-10</option>
                                    <option value="10-25">10-25</option>
                                    <option value="25-50">25-50</option>
                                    <option value="50-100">50-100</option>
                                </select>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" class="form-control" rows="4" required></textarea>
                                <div class="invalid-feedback">Please, enter your message!</div>
                            </div>
                            <div class="col-12 text-center pt-2 pt-md-3 pt-lg-4">
                                <button type="submit" class="btn btn-primary shadow-primary btn-lg">Send a
                                    request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- BG shape -->
            <div class="position-absolute end-0 bottom-0 text-primary">
                <svg width="469" height="343" viewBox="0 0 469 343" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd"
                          d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z"
                          fill="currentColor"/>
                    <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd"
                          d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z"
                          fill="currentColor"/>
                </svg>
            </div>
        </section>--}}
    </main>
@stop
