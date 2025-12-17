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

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="dark-service-card"><i class="fas fa-passport card-icon"></i>
                        <h5 class="card-title-dark">Apply Residency Visa for New Born Baby</h5>
                        <p class="card-text-dark">Apply for residency visa</p><a href="#" class="card-arrow-dark"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="dark-service-card"><i class="fas fa-file-signature card-icon"></i>
                        <h5 class="card-title-dark">Change Nationality</h5>
                        <p class="card-text-dark">Apply for change your nationality</p><a href="#"
                            class="card-arrow-dark"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="dark-service-card"><i class="fas fa-graduation-cap card-icon"></i>
                        <h5 class="card-title-dark">Change Profession</h5>
                        <p class="card-text-dark">Apply for change your profession</p><a href="#"
                            class="card-arrow-dark"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="dark-service-card"><i class="fas fa-calculator card-icon"></i>
                        <h5 class="card-title-dark">Data Modification</h5>
                        <p class="card-text-dark">Apply for modify your data</p><a href="#" class="card-arrow-dark"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-web.cta-banner />

    <section class="py-5 bg-light d-none">
        <div class="container">
            <h2 class="section-heading text-center mb-4">
                <span class="section-heading-underline">Our Key Services</span>
            </h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card service-card p-3 shadow-sm h-100">
                        <div class="card-body">
                            <h3 class="card-title text-uae-black">All Visa Services</h3>
                            <p class="card-text text-muted">Renewal and revocation of residency, transfer to a new
                                passport, short & long-term visits.</p>
                            <a href="#" class="text-decoration-none fw-bold text-danger">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-web.clients :clients="$partners" />
@endsection
