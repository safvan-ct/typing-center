@extends('layouts.web')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 text-lg-start text-center">
                    <h1 class="display-4">
                        Welcome to <span class="text-uae-green">AL-AQSA</span>
                    </h1>
                    <p class="subtitle">
                        Your Trusted Partner for Visa & Business Solutions.
                    </p>
                    <p class="tagline">
                        Simplifying Your Future in the Emirates. Expert. Reliable. Fast.
                    </p>

                    <div class="button-group-creative">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#consultantModal"
                            data-source="hero_callback" class="btn btn-primary-red">
                            Book Now
                        </a>
                        <div class="button-separator d-lg-block"></div>
                        <a href="{{ route('web.about') }}" class="btn btn-explore">
                            Learn More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mt-4 mt-lg-0 hero-image-container">
                    <img src="{{ globalFileView($generalSettings['welcome'] ?? '') ?? asset('img/hero.png') }}"
                        alt="Professional Consulting Service in Dubai" class="img-fluid"
                        style="max-height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <div class="news-ticker-container">
        <div class="ticker-label">
            <span>UPDATES</span>
        </div>

        <div class="ticker-wrap">
            <div class="ticker-move">
                <div class="ticker-item">⚡ New Visa Regulations 2024: Fast track processing now available for 15+ countries!
                </div>
                <div class="ticker-item">🌍 Special discounts on European Student Visas for a limited time only.</div>
                <div class="ticker-item">🛂 Passport renewal services now integrated into our mobile app.</div>
                <div class="ticker-item">⭐ Over 10,000 successful visa approvals reached this month!</div>
            </div>
        </div>
    </div>

    <section class="client-carousel-section py-5 bg-light {{ $posters->isEmpty() ? 'd-none' : '' }}">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-12">
                    <h2 class="section-heading text-center">
                        <span class="section-heading-underline fw-bold text-uppercase">Our Services</span>
                    </h2>
                </div>
            </div>

            <div class="swiper PosterSwiper">
                <div class="swiper-wrapper">
                    @foreach ($posters as $poster)
                        <div class="swiper-slide text-center">
                            <div class="poster-container">
                                <img src="{{ $poster->image_src }}" style="max-height:80%; width: 100%; object-fit:cover;"
                                    alt="{{ $poster->name }}" class="img-thumbnail">

                                <button class="creative-btn" data-bs-toggle="modal" data-bs-target="#consultantModal"
                                    data-source="poster_callback">
                                    {{-- <span class="btn-icon">⚡</span> --}}
                                    <span class="btn-text">BOOK NOW</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-prev text-danger"></div>
                <div class="swiper-button-next text-danger"></div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="immigration-banner position-relative overflow-hidden rounded-4 shadow-lg">
            <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&q=80&w=1470"
                alt="Dubai Skyline" class="banner-img">

            <div class="banner-overlay"></div>

            <div class="row g-0 position-relative h-100 align-items-center px-4 px-md-5 py-5" style="z-index: 10;">
                <div class="col-lg-7 text-white">
                    <span class="badge bg-gold text-dark mb-3 fw-bold px-3 py-2">
                        <i class="bi bi-shield-check me-1"></i> AUTHORIZED SERVICE PROVIDER
                    </span>
                    <h1 class="display-5 fw-bold mb-3">Expert Immigration & <br><span class="text-gold">Emirates ID</span>
                        Services</h1>
                    <p class="lead opacity-90 mb-4">Fast-track your residency with our premium typing and document
                        processing services. We handle the paperwork, you enjoy the results.</p>

                    <div class="row g-2 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check2-circle text-gold fs-5"></i>
                                <span>New Visa & Residency</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check2-circle text-gold fs-5"></i>
                                <span>Emirates ID Renewal</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check2-circle text-gold fs-5"></i>
                                <span>Medical Fitness Typing</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-check2-circle text-gold fs-5"></i>
                                <span>Golden Visa Assistance</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 ps-lg-5">
                    <div class="cta-glass-card p-4 text-center text-white">
                        <h4 class="mb-1">Apply Online</h4>
                        <p class="small text-white-50">Quick 5-minute application</p>
                        <hr class="border-white opacity-25">
                        <div class="price-box mb-3">
                            <span class="fs-6 opacity-75">Starting from</span>
                            <div class="display-6 fw-bold">AED 199</div>
                        </div>
                        <button class="btn btn-gold btn-lg w-100 rounded-pill fw-bold py-3 shadow" data-bs-toggle="modal"
                            data-bs-target="#consultantModal" data-source="eid_ad_callback">
                            BOOK NOW <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                        <div class="mt-3 d-flex justify-content-center gap-3 small">
                            <span><i class="bi bi-clock me-1"></i> 24-48h Process</span>
                            <span><i class="bi bi-headset me-1"></i> 24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <img src="{{ globalFileView($generalSettings['who_we_are'] ?? '') ?? asset('img/who-we-are.png') }}"
                            alt="WHO WE ARE" class="img-fluid ad-image"
                            style="box-shadow: 0 10px 20px rgba(0,0,0,0.15); max-width: 100%; max-height: 350px; object-fit: cover;">

                        <button class="promo-banner rotate-n-12" data-bs-toggle="modal" data-bs-target="#consultantModal"
                            data-source="who_we_are_callback">
                            APPLY NOW !
                        </button>

                        <div class="promo-footer text-center">
                            VISIT VISA / INSIDE COUNTRY VISA CHANGE
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="labor-service-banner">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <div class="col-lg-5">
                    <div class="service-float-card shadow-lg">
                        <div class="card-header-accent"></div>
                        <div class="p-4 p-md-5">
                            <h6 class="text-uppercase tracking-widest text-secondary mb-2">MOHRE Authorized</h6>
                            <h2 class="fw-bold text-dark mb-4">Labour & Work <br><span class="text-primary-uae">Contract
                                    Services</span></h2>

                            <div class="labor-services-list mb-4">
                                <div class="s-item">
                                    <div class="s-icon"><i class="bi bi-file-earmark-text"></i></div>
                                    <div><strong>Offer Letter</strong>
                                        <p class="small text-muted mb-0">Processing & Submission</p>
                                    </div>
                                </div>
                                <div class="s-item">
                                    <div class="s-icon"><i class="bi bi-people"></i></div>
                                    <div><strong>Labour Card</strong>
                                        <p class="small text-muted mb-0">New & Renewals</p>
                                    </div>
                                </div>
                                <div class="s-item">
                                    <div class="s-icon"><i class="bi bi-bank"></i></div>
                                    <div><strong>WPS Issues</strong>
                                        <p class="small text-muted mb-0">Wage Protection System</p>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary-uae w-100 py-3 rounded-3 fw-bold" data-bs-toggle="modal"
                                data-bs-target="#consultantModal" data-source="labour_ad_callback">
                                BOOK SERVICE NOW
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1 d-none d-lg-block">
                    <div class="stats-box text-white">
                        <h1 class="display-3 fw-bold">100%</h1>
                        <p class="lead">Compliance with UAE Labour Law</p>
                        <div class="d-flex gap-4 mt-4">
                            <div class="stat-pill">Secure</div>
                            <div class="stat-pill">Legal</div>
                            <div class="stat-pill">Fast</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-shape"></div>
        <img src="https://images.unsplash.com/photo-1541976590-713941681591?q=80&w=1470&auto=format&fit=crop"
            class="banner-bg-img" alt="UAE Construction Labor">
    </section>

    <div class="container py-5">
        <div class="swiper GovCenterSwiper">
            <div class="swiper-wrapper">
                @foreach ($govtCenters as $item)
                    <div class="swiper-slide text-center">
                        <div class="uae-card card-amer">
                            <div class="card-icon d-none"><i class="bi bi-passport"></i></div>
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->tagline }}</p>
                            <ul class="service-list d-none">
                                <li><i class="bi bi-check2"></i> Visa Renewal</li>
                                <li><i class="bi bi-check2"></i> Emirates ID</li>
                            </ul>
                            <a href="{{ route('web.center-details', $item->slug) }}" class="btn-uae">
                                Visit {{ $item->name }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination text-danger"></div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="visa-ad-banner position-relative overflow-hidden rounded-4 shadow-lg">
            <img src="https://images.unsplash.com/photo-1544016768-982d1554f0b9?auto=format&fit=crop&q=80&w=1200"
                alt="Travel World" class="banner-bg">

            <div class="row g-0 align-items-center position-relative h-100 banner-content">
                <div class="col-lg-7 p-4 p-md-5 text-white">
                    <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill fw-bold text-uppercase">
                        Fast Track Approval
                    </span>
                    <h2 class="display-5 fw-bold mb-3">Global Visa Services</h2>
                    <p class="lead mb-4">Get your Tourist, Business, or Work Visa processed in record time. Professional
                        assistance for over 50+ countries.</p>

                    <ul class="list-unstyled d-flex flex-wrap gap-3 mb-4 visa-features">
                        <li><i class="bi bi-check-circle-fill text-info"></i> 99% Success Rate</li>
                        <li><i class="bi bi-check-circle-fill text-info"></i> 24/7 Support</li>
                        <li><i class="bi bi-check-circle-fill text-info"></i> No Hidden Fees</li>
                    </ul>
                </div>

                <div class="col-lg-5 p-4 text-center">
                    <div class="glass-cta p-4 rounded-4">
                        <h4 class="text-white mb-2">Starts at only</h4>
                        <div class="price-tag display-6 fw-bold text-warning mb-3">AED 349.00</div>
                        <button class="btn btn-light btn-lg w-100 rounded-pill fw-bold shadow hover-grow"
                            data-bs-toggle="modal" data-bs-target="#consultantModal" data-source="visa_ad_callback">
                            BOOK NOW <i class="bi bi-arrow-right-short"></i>
                        </button>
                        <p class="text-white-50 mt-3 small">*T&C Apply. Processing time varies by country.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 bg-white {{ $services->isEmpty() ? 'd-none' : '' }}">
        <div class="container">
            <h2 class="section-heading text-center mb-5">
                <span class="section-heading-underline fw-bold text-uppercase">Our Key Services</span>
            </h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach ($services as $item)
                    <div class="col mb-4">
                        <div class="card service-card h-100 d-flex flex-column mx-auto">

                            <div class="header-bg">
                                <div class="icon-container">
                                    <div class="icon-image">
                                        <img src="{{ $item->image_url ?? asset('img/service.png') }}"
                                            alt="{{ $item->name }}">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body text-center d-flex flex-column">
                                <h4 class="card-title">{{ $item->name }}</h4>

                                <p class="card-text text-secondary">
                                    {{ $item->tagline ?? $generalSettings['service_tagline'] }}
                                </p>

                                <div class="mt-auto">
                                    <a href="{{ route('web.service-details', $item->slug) }}"
                                        class="read-more-link-small">
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

    <x-web.clients :clients="$partners" />
@endsection

@push('scripts')
    <script>
        new Swiper('.PosterSwiper', {
            loop: true,
            spaceBetween: 20,

            breakpoints: {
                0: {
                    slidesPerView: 1, // mobile
                },
                768: {
                    slidesPerView: 3, // desktop
                }
            },

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        new Swiper('.GovCenterSwiper', {
            loop: true,
            spaceBetween: 20,

            breakpoints: {
                0: {
                    slidesPerView: 1, // mobile
                },
                768: {
                    slidesPerView: 4, // desktop
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            }
        });
    </script>
@endpush
