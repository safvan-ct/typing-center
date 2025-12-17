@extends('layouts.web')

@section('content')
    <div class="page-banner">
        <div class="page-banner-bg"></div>

        <div class="page-banner-overlay"></div>

        <div class="page-banner-content">
            <h1>{{ $service->name }}</h1>
            <div class="breadcrumb-nav">
                <a href="{{ route('web.index') }}">Home</a>
                <span>/</span>
                <span class="current-page">{{ $service->name }}</span>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="row">
            <div class="col-lg-9 mb-3">
                <div class="mb-4">
                    <div
                        class="p-3 bg-light rounded-3 shadow-sm border-start border-danger border-5 bg-green border-opacity-75">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <h1 class="color-white fw-bold mb-1">{{ $service->name }}</h1>
                                <p class="m-0 color-white">
                                    {{ $service->description ?? ($generalSettings['service_desc'] ?? '') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-4 mb-3 border-bottom pb-2 color-red">Documents Required</h2>
                <ul class="list-group list-group-flush documents-list">
                    <li class="list-group-item d-flex align-items-start px-3">
                        <i class="bi bi-check-circle-fill me-3 mt-1 fs-5 color-green"></i>
                        <div>
                            <p class="fw-bold mb-0">Valid Passport Copy (Front & Back)</p>
                            <small class="text-muted">Passport must have at least 6 months validity from the date of
                                travel.</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-start px-3">
                        <i class="bi bi-check-circle-fill me-3 mt-1 fs-5 color-green"></i>
                        <div>
                            <p class="fw-bold mb-0">Applicant's Photograph</p>
                            <small class="text-muted">Recent passport-size photo with white background.</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-start px-3">
                        <i class="bi bi-check-circle-fill me-3 mt-1 fs-5 color-green"></i>
                        <div>
                            <p class="fw-bold mb-0">Confirmed Flight Details</p>
                            <small class="text-muted">Return ticket copies for verification.</small>
                        </div>
                    </li>
                </ul>

                <div class="p-4 mt-4 mb-3 bg-red rounded-3 text-center shadow d-none">
                    <h3 class="color-white mb-2">Start Your Application Now!</h3>
                    <p class="color-white opacity-75">Click below to proceed to the secure application portal.</p>
                    <a href="#apply" class="btn btn-warning btn-lg fw-bold color-black mt-2">Apply for Visa</a>
                </div>

                <h2 class="mt-4 mb-3 border-bottom pb-2 color-red">Key Benefits</h2>
                <div class="row g-4 mb-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3 h-100 feature-card shadow-sm">
                            <i class="bi bi-lightning-charge-fill fs-3 mb-2 color-green"></i>
                            <h5 class="fw-bold">Fast Processing</h5>
                            <p class="text-muted mb-0">Quick and efficient visa issuance for your travel needs.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3 h-100 feature-card shadow-sm">
                            <i class="bi bi-globe fs-3 mb-2 color-green"></i>
                            <h5 class="fw-bold">Multiple Options</h5>
                            <p class="text-muted mb-0">30-day and 90-day options, inside or outside the country.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3 h-100 feature-card shadow-sm">
                            <i class="bi bi-headset fs-3 mb-2 color-green"></i>
                            <h5 class="fw-bold">24/7 Support</h5>
                            <p class="text-muted mb-0">Dedicated support team available for all queries.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card shadow-sm mb-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item sidebar-item">
                            <i class="bi bi-geo-alt me-2 color-red"></i> UAE Tourist Visa (Current)
                        </li>
                        <li class="list-group-item sidebar-item">
                            <i class="bi bi-fingerprint me-2 color-green"></i> Emirates ID Application
                        </li>
                        <li class="list-group-item sidebar-item">
                            <i class="bi bi-shield-lock me-2 color-red"></i> Medical Insurance Plans
                        </li>
                        <li class="list-group-item sidebar-item">
                            <i class="bi bi-hospital me-2 color-green"></i> Dubai Health Authority Services
                        </li>
                        <li class="list-group-item sidebar-item">
                            <i class="bi bi-briefcase me-2 color-red"></i> Business Visa Services
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <x-web.cta-banner />
@endsection
