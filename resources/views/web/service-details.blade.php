@extends('layouts.web')

@section('content')
    <style>
        .text-muted {
            color: #999999 !important;
        }
    </style>
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
                <div class="service-card-modern">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
                            <span class="service-category">Document Services</span>
                            <h1 class="service-title fw-bold mb-2">
                                {{ $service->name }}
                            </h1>
                            <p class="m-0 service-desc">
                                {{ $service->description ?? ($generalSettings['service_desc'] ?? 'Easily manage and process your applications with our premium streamlined system.') }}
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-12 text-lg-end">
                            <a href="#" class="btn btn-apply px-4 py-2">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <h2 class="mt-4 mb-3 border-bottom pb-2 color-red">Documents Required</h2>
                @if (!$service->documents->isEmpty())
                    <ul class="list-group list-group-flush documents-list mb-4 bg-white">
                        @foreach ($service->documents as $item)
                            <li class="list-group-item d-flex align-items-{{ $item->notes ? 'start' : 'center' }} px-3">
                                <i class="bi bi-check-circle-fill me-3 mt-1 fs-5 color-green"></i>
                                <div>
                                    <p class="m-0 p-0">{{ $item->title }}</p>
                                    @if ($item->notes)
                                        <small class="text-muted">Note:- {{ $item->notes }}</small>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif

                @if ($service->doc_notes)
                    <ul class="list-group list-group-flush documents-list mb-4 bg-white">
                        <li class="list-group-item px-3 pb-2 pt-2">
                            @php
                                $notesArray = array_filter(explode('@@@', $service->doc_notes));
                            @endphp

                            <small class="text-muted">Notes:-</small>
                            @if (count($notesArray))
                                <ul class="ps-3 mb-0">
                                    @foreach ($notesArray as $note)
                                        <li><small class="text-muted"> {{ $note }}</small></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    </ul>
                @endif

                @if (!$service->documentCategories->isEmpty())
                    @foreach ($service->documentCategories as $data)
                        <h5 class="pb-2 border-danger border-bottom fw-bold">{{ $data->name }}</h5>
                        <ul class="list-group list-group-flush documents-list mb-4">
                            @foreach ($data->documents as $item)
                                <li
                                    class="list-group-item d-flex align-items-{{ $item->notes ? 'start' : 'center' }} px-3">
                                    <i class="bi bi-check-circle-fill me-3 mt-1 fs-5 color-green"></i>
                                    <div>
                                        <p class="m-0 p-0">{{ $item->title }}</p>
                                        @if ($item->notes)
                                            <small class="text-muted">Notes:- {{ $item->notes }}</small>
                                        @endif
                                    </div>
                                </li>
                            @endforeach

                            @if ($data->notes)
                                <li class="list-group-item px-3 pb-2 pt-2">
                                    @php
                                        $notesArray = array_filter(explode('@@@', $data->notes));
                                    @endphp

                                    <small class="text-muted">Notes:-</small>
                                    @if (count($notesArray))
                                        <ul class="ps-3 mb-0">
                                            @foreach ($notesArray as $note)
                                                <li><small class="text-muted"> {{ $note }}</small></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        </ul>
                    @endforeach
                @endif

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
                @foreach ($relatedServices as $item)
                    <a href="{{ route('web.service-details', $item->slug) }}"
                        class="custom-card {{ $item->id == $service->id ? 'custom-card-active' : '' }}">
                        <span>{{ $item->name }}</span>
                        <i class="arrow-icon"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <x-web.cta-banner />
@endsection
