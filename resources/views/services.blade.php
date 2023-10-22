@extends('layouts.website')

@section('content')

    <main class="page-wrapper">

        <!-- Page content -->
        <section class="container">


            <!-- Breadcrumb -->
            <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="landing-online-courses.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Family Services</li>
                </ol>
            </nav>


            <!-- Page title + Filters -->
            <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
                <h1 class="me-3">Family Services</h1>
                <div class="d-md-flex mb-3">
                    <div class="position-relative" style="min-width: 300px;">
                        <input type="text" class="form-control pe-5" placeholder="Search for a service eg. lobola">
                        <i class="bx bx-search text-nav fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
                    </div>
                </div>
            </div>


            <!-- Services grid -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">

                <!-- Item -->
                <div class="col pb-1 pb-lg-3 mb-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>

                            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="/website/assets/img/portfolio/courses/service.jpeg" class="card-img-top" alt="Image">
                        </div>
                        <div class="card-body pb-3">
                            <h3 class="h5 mb-2 text-center">
                                <a href="portfolio-single-course.html">Weddings</a>
                            </h3>
                            <div class="center-container">
                                <a href="{{url('/service/categories')}}" class="btn btn-block btn-outline-primary">
                                    Choose Booking
                                    <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">

                            <div class="d-flex align-items-center">
                                <i class="bx bx-like fs-xl me-1"></i>
                                 4.2K
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Item -->
                <div class="col pb-1 pb-lg-3 mb-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>

                            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="/website/assets/img/portfolio/courses/service.jpeg" class="card-img-top" alt="Image">
                        </div>
                        <div class="card-body pb-3">
                            <h3 class="h5 mb-2 text-center">
                                <a href="portfolio-single-course.html">Family Ceremony</a>
                            </h3>
                            <div class="center-container">
                                <a href="{{url('/service/categories')}}" class="btn btn-block btn-outline-primary">
                                    Choose Booking
                                    <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">

                            <div class="d-flex align-items-center">
                                <i class="bx bx-like fs-xl me-1"></i>
                                4.2K
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Item -->
                <div class="col pb-1 pb-lg-3 mb-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>

                            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="/website/assets/img/portfolio/courses/service.jpeg" class="card-img-top" alt="Image">
                        </div>
                        <div class="card-body pb-3">
                            <h3 class="h5 mb-2 text-center">
                                <a href="portfolio-single-course.html">Family Shoot</a>
                            </h3>
                            <div class="center-container">
                                <a href="{{url('/service/categories')}}" class="btn btn-block btn-outline-primary">
                                    Choose Booking
                                    <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">

                            <div class="d-flex align-items-center">
                                <i class="bx bx-like fs-xl me-1"></i>
                                4.2K
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Item -->
                <div class="col pb-1 pb-lg-3 mb-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>

                            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="/website/assets/img/portfolio/courses/service.jpeg" class="card-img-top" alt="Image">
                        </div>
                        <div class="card-body pb-3">
                            <h3 class="h5 mb-2 text-center">
                                <a href="portfolio-single-course.html">Funeral</a>
                            </h3>
                            <div class="center-container">
                                <a href="{{url('/service/categories')}}" class="btn btn-block btn-outline-primary">
                                    Choose Booking
                                    <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">

                            <div class="d-flex align-items-center">
                                <i class="bx bx-like fs-xl me-1"></i>
                                4.2K
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Item -->
                <div class="col pb-1 pb-lg-3 mb-4">
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>

                            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                                <i class="bx bx-bookmark"></i>
                            </a>
                            <img src="/website/assets/img/portfolio/courses/service.jpeg" class="card-img-top" alt="Image">
                        </div>
                        <div class="card-body pb-3">
                            <h3 class="h5 mb-2 text-center">
                                <a href="portfolio-single-course.html">Family Party</a>
                            </h3>
                            <div class="center-container">
                                <a href="{{url('/service/categories')}}" class="btn btn-block btn-outline-primary">
                                    Choose Booking
                                    <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="center-container card-footer d-flex fs-sm text-muted py-4">

                            <div class="d-flex align-items-center">
                                <i class="bx bx-like fs-xl me-1"></i>
                                4.2K
                            </div>
                        </div>
                    </article>
                </div>

            </div>

            <!-- Pagination: Basic example -->
            <nav class="pb-5" aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <i class="bx bx-chevron-left ms-n1 me-1"></i>
                            Prev
                        </a>
                    </li>
                    <li class="page-item disabled d-sm-none">
                        <span class="page-link text-body">1 / 4</span>
                    </li>
                    <li class="page-item active d-none d-sm-block" aria-current="page">
              <span class="page-link">
                1
                <span class="visually-hidden">(current)</span>
              </span>
                    </li>
                    <li class="page-item d-none d-sm-block">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item d-none d-sm-block">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item d-none d-sm-block">
                        <a href="#" class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            Next
                            <i class="bx bx-chevron-right me-n1 ms-1"></i>
                        </a>
                    </li>
                </ul>
            </nav>


        </section>
    </main>


@endsection
