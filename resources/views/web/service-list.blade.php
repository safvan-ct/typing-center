@extends('layouts.web')

@section('content')
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
                        **Get in Touch with Us!** Call us: <span class="contact-bold">(+971) 04 396 9911</span> or email
                        us: <span class="contact-bold">info@amercentre.ae</span>
                    </p>
                </div>

                <div class="col-lg-4 text-center text-lg-end">
                    <button class="btn btn-consultation-refined">Free Consultation</button>
                </div>
            </div>
        </div>
    </div>
@endsection
