@extends('layouts.web')

@section('content')
    <section class="py-3 mt-3 bg-light">
        <div class="container">
            <h2 class="section-heading text-center mb-4">
                <span class="section-heading-underline">Our Key Services</span>
            </h2>

            @foreach ($services as $service)
                <div class="col-12 mb-3">
                    <h3 class="border-bottom pb-2 color-red">{{ $service->name }}</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 mb-3">
                    @foreach ($service->subCategories as $item)
                        <div class="col mb-2">
                            <div class="card service-card h-100 d-flex flex-column mx-auto">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title fw-bold">{{ $item->name }}</h6>

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
            @endforeach
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
