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
                        <a href="{{ route('web.about') }}" class="btn btn-explore">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mt-4 mt-lg-0 hero-image-container">
                    <img src="{{ globalFileView($generalSettings['welcome'] ?? '') }}"
                        alt="Professional Consulting Service in Dubai" class="img-fluid"
                        style="max-height: 400px; object-fit: cover;">
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
                        <img src="{{ globalFileView($generalSettings['who_we_are'] ?? '') }}"
                            alt="Promotional Image for Visa Services with Dubai Skyline" class="img-fluid ad-image"
                            style="box-shadow: 0 10px 20px rgba(0,0,0,0.15); max-width: 100%; max-height: 350px; object-fit: cover;">

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
                                        <img src="{{ $item->image_url ?? globalFileView($generalSettings['service_icon'] ?? '') }}"
                                            alt="Service Icon">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body text-center d-flex flex-column">
                                <h4 class="card-title">{{ $item->name }}</h4>

                                <p class="card-text text-secondary">
                                    {{ $item->description ?? ($generalSettings['service_desc'] ?? '') }}
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

    <x-web.cta-banner />

    <x-web.clients :clients="$partners"/>
@endsection
