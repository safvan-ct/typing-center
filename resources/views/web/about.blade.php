@extends('layouts.web')

@section('content')
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                    <h3 class="about-subtitle fw-bold">ABOUT US</h3>
                    <h1 class="about-main-heading mb-4">
                        Immigration Services From <span class="fw-bold">Experienced Providers.</span>
                    </h1>

                    <p class="about-text-lead mb-3">
                        The Most Eminent Visas and Immigration Consultant service provider. Branches in Dubai.
                    </p>

                    <p class="about-text-body mb-4">
                        Amer Centre-Karama (UID SMART SERVICES) Was established in 2018, with expert Immigration
                        Consultants, we also provide multiple government services. Our center is operated by trained
                        staff to meet the requirements of various Nationalities. We also have a special area to cater to
                        the requirements of Companies and PRO's. <a href="#" class="read-more-link-small">Read More</a>
                    </p>

                    <div class="feature-item mb-4">
                        <div class="feature-icon-box">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div>
                            <h5 class="feature-title">Accurate Guidance</h5>
                            <p class="mb-0 text-muted">
                                Skilled professionals are always ready to provide reliable services to our clients!
                            </p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon-box">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h5 class="feature-title">Our Presence</h5>
                            <p class="mb-0 text-muted">
                                Four Branches are situated in the heart of Dubai.
                                <a href="#" class="read-more-link-small">CLICK here to Locate our branch.</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-collage">
                        <div class="row g-3">
                            <div class="col-8">
                                <img src="{{ globalFileView($generalSettings['about_large'] ?? '') }}"
                                    alt="Family traveling in airport" class="img-fluid large-image rounded-3">
                            </div>

                            <div class="col-4">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <img src="{{ globalFileView($generalSettings['about_small_1'] ?? '') }}"
                                            alt="Hands holding passports" class="img-fluid small-image rounded-3">
                                    </div>
                                    <div class="col-12">
                                        <img src="{{ globalFileView($generalSettings['about_small_2'] ?? '') }}"
                                            alt="Woman waiting at airport" class="img-fluid small-image rounded-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <p class="what-we-do text-center">WHAT WE DO</p>
            <h2 class="main-heading text-center">We Provide All Government And Business Services At One Place</h2>

            <div class="row g-3 pb-4">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="dark-service-card d-flex flex-column w-100 h-100">
                        <i class="fas fa-passport card-icon"></i>
                        <h5 class="card-title-dark">Apply Residency Visa for New Born Baby</h5>
                        <p class="card-text-dark">Apply for residency visa</p>

                        <div class="mt-auto d-flex justify-content-center">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#consultantModal"
                                class="card-arrow-dark"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="dark-service-card d-flex flex-column w-100 h-100">
                        <i class="fas fa-file-signature card-icon"></i>
                        <h5 class="card-title-dark">Change Nationality </h5>
                        <p class="card-text-dark"> Apply for change your nationality </p>

                        <div class="mt-auto d-flex justify-content-center">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#consultantModal"
                                class="card-arrow-dark"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="dark-service-card d-flex flex-column w-100 h-100">
                        <i class="fas fa-graduation-cap card-icon"></i>
                        <h5 class="card-title-dark"> Change Profession </h5>
                        <p class="card-text-dark"> Apply for change your profession </p>

                        <div class="mt-auto d-flex justify-content-center">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#consultantModal"
                                class="card-arrow-dark"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="dark-service-card d-flex flex-column w-100 h-100">
                        <i class="fas fa-calculator card-icon"></i>
                        <h5 class="card-title-dark"> Data Modification </h5>
                        <p class="card-text-dark"> Apply for modify your data </p>

                        <div class="mt-auto d-flex justify-content-center">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#consultantModal"
                                class="card-arrow-dark"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-web.cta-banner />

    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="section-heading text-center mb-3 fw-bold text-uppercase">
                <span class="section-heading-underline">Why Choose Us</span>
            </h3>

            <div class="row g-4 mb-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card p-3 h-100 feature-card shadow-sm">
                        <i class="bi bi-file-earmark-text-fill fs-3 mb-2 color-green"></i>
                        <h5 class="fw-bold">Accurate Documentation</h5>
                        <p class="text-muted mb-0">
                            Error-free typing and submission of government forms to avoid delays and rejections.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card p-3 h-100 feature-card shadow-sm">
                        <i class="bi bi-lightning-charge-fill fs-3 mb-2 color-green"></i>
                        <h5 class="fw-bold">Fast Processing</h5>
                        <p class="text-muted mb-0">
                            Quick turnaround time for visas, Emirates ID, Ejari, and other government services.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card p-3 h-100 feature-card shadow-sm">
                        <i class="bi bi-shield-check fs-3 mb-2 color-green"></i>
                        <h5 class="fw-bold">Government Approved</h5>
                        <p class="text-muted mb-0">
                            Authorized typing services compliant with UAE government regulations and systems.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card p-3 h-100 feature-card shadow-sm">
                        <i class="bi bi-translate fs-3 mb-2 color-green"></i>
                        <h5 class="fw-bold">Multilingual Assistance</h5>
                        <p class="text-muted mb-0">
                            Support available in multiple languages to serve customers from diverse backgrounds.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card p-3 h-100 feature-card shadow-sm">
                        <i class="bi bi-people fs-3 mb-2 color-green"></i>
                        <h5 class="fw-bold">Expert Guidance</h5>
                        <p class="text-muted mb-0">
                            Professional guidance on document requirements, procedures, and application status.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card p-3 h-100 feature-card shadow-sm">
                        <i class="bi bi-headset fs-3 mb-2 color-green"></i>
                        <h5 class="fw-bold">Customer Support</h5>
                        <p class="text-muted mb-0">
                            Friendly support team available to assist you throughout the application process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-web.clients :clients="$partners" />
@endsection
