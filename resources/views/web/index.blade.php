@extends('layouts.web')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 text-lg-start text-center">
                    <h1 class="display-4">
                        Welcome to <span class="text-uae-green">UAE Centre</span>
                    </h1>
                    <p class="subtitle">
                        Your Trusted Partner for Visa & Business Solutions.
                    </p>
                    <p class="tagline">
                        Simplifying Your Future in the Emirates. Expert. Reliable. Fast.
                    </p>

                    <div class="button-group-creative">
                        <a href="#" class="btn btn-primary-red">Book Now</a>
                        <div class="button-separator d-none d-lg-block"></div>
                        <a href="{{ route('web.service-list') }}" class="btn btn-explore">
                            Explore Services <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mt-4 mt-lg-0 hero-image-container">
                    <img src="https://placehold.co/600x400" alt="Professional Consulting Service in Dubai"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <p class="about-subtitle">WHO WE ARE</p>
                    <h1 class="about-main-heading mb-4 fw-bold">
                        Immigration And Business Services <span class="text-primary-red">At One Place</span>
                    </h1>
                    <p class="mb-5 text-muted">
                        Our goal is to be the PRO concierge service of choice for businesses and individuals across the
                        UAE.
                    </p>

                    <div class="service-item">
                        <div class="service-number">01</div>
                        <div>
                            <h5 class="service-title">Immigration Services</h5>
                            <p class="mb-0 text-secondary">
                                We provide immigration visa typing services and entry permits in the Emirates of Dubai.
                            </p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service-number">02</div>
                        <div>
                            <h5 class="service-title">Emirates ID & Medical Typing</h5>
                            <p class="mb-0 text-secondary">
                                As UAE law, each members live in UAE has to be registered with the Emirates ID
                                Authority.
                            </p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service-number">03</div>
                        <div>
                            <h5 class="service-title">All Visa Services</h5>
                            <p class="mb-0 text-secondary">
                                Renewal and new residency, revocation lof residency or transfer to a new passport, short
                                & long-term visits.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="ad-container">
                        <img src="https://placehold.co/600x400" alt="Promotional Image for Visa Services with Dubai Skyline"
                            class="img-fluid ad-image" style="box-shadow: 0 10px 20px rgba(0,0,0,0.15);">

                        <button class="promo-banner rotate-n-12">APPLY NOW !</button>

                        <div class="promo-footer text-center">
                            VISIT VISA / INSIDE COUNTRY VISA CHANGE
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-heading text-center mb-5">
                <span class="section-heading-underline">Our Key Services</span>
            </h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col mb-4">
                    <div class="card service-card mx-auto">
                        <div class="header-bg">
                            <div class="icon-container">
                                <div class="icon-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
                                        <path
                                            d="M7 5.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-1 0v.5ZM4.5 9a.5.5 0 0 1 1 0v.5a.5.5 0 0 1-1 0V9Z" />
                                        <path
                                            d="M2 1.5A1.5 1.5 0 0 1 3.5 0h8A1.5 1.5 0 0 1 13 1.5V16H2V1.5ZM3.5 1A.5.5 0 0 0 3 1.5V2h10V1.5a.5.5 0 0 0-.5-.5h-8ZM12 3H3V15h9V3Z" />
                                        <path d="M12 11H3V8h9v3Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center">
                            <h4 class="card-title mb-3">All Visa Services</h4>
                            <p class="card-text text-secondary mb-4">
                                Renewal and revocation of residency, transfer to new passport, short & long-term
                                visits.
                            </p>
                            <a href="service-details.html" class="read-more-link-small">
                                Read More <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card service-card mx-auto">
                        <div class="header-bg">
                            <div class="icon-container">
                                <div class="icon-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
                                        <path
                                            d="M7 5.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-1 0v.5ZM4.5 9a.5.5 0 0 1 1 0v.5a.5.5 0 0 1-1 0V9Z" />
                                        <path
                                            d="M2 1.5A1.5 1.5 0 0 1 3.5 0h8A1.5 1.5 0 0 1 13 1.5V16H2V1.5ZM3.5 1A.5.5 0 0 0 3 1.5V2h10V1.5a.5.5 0 0 0-.5-.5h-8ZM12 3H3V15h9V3Z" />
                                        <path d="M12 11H3V8h9v3Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center">
                            <h4 class="card-title mb-3">Emirates ID & Medical Typing</h4>
                            <p class="card-text text-secondary mb-4">
                                Renewal and revocation of residency, transfer to new passport.
                            </p>
                            <a href="#" class="read-more-link-small">
                                Read More <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card service-card mx-auto">
                        <div class="header-bg">
                            <div class="icon-container">
                                <div class="icon-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
                                        <path
                                            d="M7 5.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-1 0v.5ZM4.5 9a.5.5 0 0 1 1 0v.5a.5.5 0 0 1-1 0V9Z" />
                                        <path
                                            d="M2 1.5A1.5 1.5 0 0 1 3.5 0h8A1.5 1.5 0 0 1 13 1.5V16H2V1.5ZM3.5 1A.5.5 0 0 0 3 1.5V2h10V1.5a.5.5 0 0 0-.5-.5h-8ZM12 3H3V15h9V3Z" />
                                        <path d="M12 11H3V8h9v3Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center">
                            <h4 class="card-title mb-3">Immigration Services</h4>
                            <p class="card-text text-secondary mb-4">
                                Renewal and revocation of residency, transfer to new passport, short & long-term
                                visits.
                            </p>
                            <a href="#" class="read-more-link-small">
                                Read More <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card service-card mx-auto">
                        <div class="header-bg">
                            <div class="icon-container">
                                <div class="icon-image">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
                                        <path
                                            d="M7 5.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-1 0v.5ZM4.5 9a.5.5 0 0 1 1 0v.5a.5.5 0 0 1-1 0V9Z" />
                                        <path
                                            d="M2 1.5A1.5 1.5 0 0 1 3.5 0h8A1.5 1.5 0 0 1 13 1.5V16H2V1.5ZM3.5 1A.5.5 0 0 0 3 1.5V2h10V1.5a.5.5 0 0 0-.5-.5h-8ZM12 3H3V15h9V3Z" />
                                        <path d="M12 11H3V8h9v3Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center">
                            <h4 class="card-title mb-3">New Born Baby Visa</h4>
                            <p class="card-text text-secondary mb-4">
                                Renewal and revocation of residency, transfer to new passport, short & long-term
                                visits.
                            </p>
                            <a href="#" class="read-more-link-small">
                                Read More <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cta-banner-refined">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-8">
                    <h2 class="cta-title-refined">Are You Looking For Immigration Services?</h2>
                    <p class="cta-contact-text-refined">
                        **Get in Touch with Us!** Call us: <span class="contact-bold">(+971) 04 396 9911</span> or
                        email
                        us: <span class="contact-bold">info@amercentre.ae</span>
                    </p>
                </div>

                <div class="col-lg-4 text-center text-lg-end">
                    <button class="btn btn-consultation-refined">Free Consultation</button>
                </div>
            </div>
        </div>
    </div>

    <section class="client-carousel-section py-5 bg-white">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2 class="section-heading text-center">
                        <span class="section-heading-underline">Our Valued Partners</span>
                    </h2>
                </div>
            </div>

            <div id="clientCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row text-center align-items-center">
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 1"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 2"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 2"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 4"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 2"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 4"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row text-center align-items-center">
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 1"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 2"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 2"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 4"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 2"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                            <div class="col-2"><img src="https://placehold.co/600x400" alt="Logo 4"
                                    class="img-fluid client-logo" style="max-height: 80px;"></div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection
