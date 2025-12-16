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
                @foreach ($services as $item)
                    <div class="col mb-4">
                        <div class="card service-card h-100 d-flex flex-column mx-auto">

                            <div class="header-bg">
                                <div class="icon-container">
                                    <div class="icon-image">
                                        <img src="{{ $item->image_url }}" alt="Service Icon">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body text-center d-flex flex-column">
                                <h4 class="card-title">{{ $item->name }}</h4>

                                <p class="card-text text-secondary">
                                    {{ $item->description ?? 'lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat' }}
                                </p>

                                <div class="mt-auto">
                                    <a href="{{ route('web.service-details', $item->slug) }}" class="read-more-link-small">
                                        Read More <span class="ms-1">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
