<div class="cta-banner-refined">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-8">
                <h2 class="cta-title-refined">Are You Looking For Immigration Services?</h2>
                <p class="cta-contact-text-refined">
                    <b>Get in Touch with Us!</b> Call us:
                    <a class="contact-bold text-decoration-none"
                        href="tel:+{{ $generalSettings['primary_phone'] ?? '' }}">
                        {{ formatUaePhone($generalSettings['primary_phone'] ?? '') }}
                    </a>
                    or email us:
                    <a class="contact-bold text-decoration-none" href="mailto:{{ $generalSettings['email'] ?? '' }}">
                        {{ $generalSettings['email'] ?? '' }}
                    </a>
                </p>
            </div>

            <div class="col-lg-4 text-center text-lg-end">
                <button class="btn btn-consultation-refined" data-bs-toggle="modal" data-bs-target="#consultantModal">Free Consultation</button>
            </div>
        </div>
    </div>
</div>
