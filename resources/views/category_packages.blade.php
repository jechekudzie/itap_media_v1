@extends('layouts.website')

@section('content')

    <main class="page-wrapper">
        <!-- Hero -->
        <section class="bg-dark dark-mode py-4">
            <div class="container pb-2 py-lg-3">

                <!-- Breadcrumb -->
                <nav class="pb-4 mb-lg-3" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/service/categories')}}"><i class=""></i>White Wedding</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">Packages</li>
                    </ol>
                </nav>
                <h1 class="text-center mb-0">White Wedding Pricing for You</h1>
            </div>
            <div style="height: 300px;"></div>
        </section>


        <!-- Pricing plans -->
        <section class="container position-relative zindex-2" style="margin-top: -300px;">
            <div class="price-switch-wrapper">
                <div class="dark-mode pb-2 pb-lg-3">
                </div>
                <div class="table-responsive-lg">
                    <div class="d-flex align-items-center pb-4">

                        <!-- Pricing plan -->
                        <div class="border rounded-3 rounded-end-0 shadow-sm me-n1"
                             style="width: 32%; min-width: 16rem;">
                            <div class="card bg-light h-100 border-0 border-end rounded-end-0 py-3 py-sm-4 py-lg-5">
                                <div class="card-body text-center">
                                    <h3 class="mb-2">Standard</h3>
                                    <div class="fs-lg pb-4 mb-3">{{--Best for small teams--}}</div>
                                    <div class="display-5 text-dark mb-1" data-monthly-price>$15</div>
                                    <div class="d-none display-5 text-dark mb-1" data-annual-price>$12</div>
                                    <div class="text-muted mb-5">per x hours</div>
                                </div>
                                <div class="card-footer border-0 text-center pt-0 pb-4">
                                    <a href="#" class="btn btn-outline-primary btn-lg">Book now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Featurd pricing plan -->
                        <div
                            class="bg-danger position-relative rounded-3 shadow-danger shadow-dark-mode-none zindex-2 p-4"
                            style="width: 36%; min-width: 18rem;">
                            <div class="card bg-transparent border-light py-3 py-sm-4 py-lg-5">
                                <div class="card-body text-light text-center">
                                    <h3 class="text-light mb-2">Medium</h3>
                                    <div class="fs-lg opacity-70 pb-4 mb-3">{{--Best for growing teams--}}</div>
                                    <div class="display-5 mb-1" data-monthly-price>$25</div>
                                    <div class="d-none display-5 mb-1" data-annual-price>$20</div>
                                    <div class="opacity-50 mb-5 text-white" style="color: white">per x hours</div>
                                </div>
                                <div class="card-footer border-0 text-center pt-0 pb-4">
                                    <a href="#" class="btn btn-light btn-lg shadow-secondary">Book now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing plan -->
                        <div class="border rounded-3 rounded-start-0 shadow-sm" style="width: 32%; min-width: 16rem;">
                            <div class="card bg-light h-100 border-0 rounded-start-0 py-3 py-sm-4 py-lg-5">
                                <div class="card-body text-center">
                                    <h3 class="mb-2">Premium</h3>
                                    <div class="fs-lg pb-4 mb-3">{{--Best for large teams--}}</div>
                                    <div class="display-5 text-dark mb-1" data-monthly-price>$50</div>
                                    <div class="d-none display-5 text-dark mb-1" data-annual-price>$40</div>
                                    <div class="text-muted mb-5">per x hours</div>
                                </div>
                                <div class="card-footer border-0 text-center pt-0 pb-4">
                                    <a href="#" class="btn btn-outline-primary btn-lg">Book now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Plans comparison -->
        <section class="container py-5 my-md-3 my-lg-5">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start">
                    <h2 class="h1 mb-4">Package Comparison</h2>
                    <p class="fs-lg mb-md-0">Choose the option suits your event.</p>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col text-md-center pb-2 mb-4">
                            <h3 class="h5 mb-2 mb-md-3">Standard</h3>
                            <ul class="d-md-none list-unstyled">
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Videographers:&nbsp;</span>
                                    2
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Member support via email:&nbsp;</span>
                                    Standard
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Live chat support:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">IT security and legal review:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Projects:&nbsp;</span>
                                    4 projects
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Comments and sharing:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Zoom integration:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Ongoing strategy calls:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Analytics dashboard:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Get custom integrations:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                            </ul>
                            <button class="btn btn-outline-primary w-100 w-md-auto">Book now</button>
                        </div>

                        <div class="col text-md-center pb-2 mb-4">
                            <h3 class="h5 mb-2 mb-md-3">Medium</h3>
                            <ul class="d-md-none list-unstyled">
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Users:&nbsp;</span>
                                    3 included
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Member support via email:&nbsp;</span>
                                    3 hours
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Live chat support:&nbsp;</span>
                                    10+ members
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">IT security and legal review:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Projects:&nbsp;</span>
                                    Unlimited
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Comments and sharing:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Zoom integration:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Ongoing strategy calls:&nbsp;</span>
                                    <i class="bx bx-x lead text-muted"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Analytics dashboard:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Get custom integrations:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                            </ul>
                            <button class="btn btn-outline-primary w-100 w-md-auto">Book now</button>
                        </div>

                        <div class="col text-md-center mb-3">
                            <h3 class="h5 mb-2 mb-md-3">Premium</h3>
                            <ul class="d-md-none list-unstyled">
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Users:&nbsp;</span>
                                    10 +
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Member support via email:&nbsp;</span>
                                    With highest priority
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Live chat support:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">IT security and legal review:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Projects:&nbsp;</span>
                                    Unlimited
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Comments and sharing:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Zoom integration:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Ongoing strategy calls:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2">
                                    <span class="text-dark fw-medium">Analytics dashboard:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                                <li class="d-flex align-items-center p-2 bg-secondary">
                                    <span class="text-dark fw-medium">Get custom integrations:&nbsp;</span>
                                    <i class="bx bx-check lead text-primary"></i>
                                </li>
                            </ul>

                            <button class="btn btn-outline-primary w-100 w-md-auto">Book now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th style="width: 34%;"></th>
                        <th style="width: 22%;">{{--Free--}}</th>
                        <th style="width: 22%;">{{--Pro--}}</th>
                        <th style="width: 22%;">{{--Enterprise--}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="text-start">Videographers</th>
                        <td><i class="bx bx-minus-circle"></i></a> <span class="bi" width="24" height="24">2</span> <a href=""><i class="bx bx-plus-circle"></i></a> </td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Photographers</th>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    </tr>
                    </tbody>

                    <tbody>
                    <tr>
                        <th scope="row" class="text-start">Coverage</th>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Deliverables</th>
                        <td></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-start">Accessories</th>
                        <td></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </section>

    </main>

@endsection
