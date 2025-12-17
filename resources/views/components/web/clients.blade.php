@props(['clients'])

<section class="client-carousel-section py-5 bg-white {{ $clients->isEmpty() ? 'd-none' : '' }}">
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
                @foreach ($clients as $index => $data)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="row justify-content-center text-center align-items-center">
                            @foreach ($data as $client)
                                <div class="col-6 col-sm-4 col-md-{{ $clients->count() < 6 ? '3' : '2' }}">
                                    <img src="{{ $client->image_url }}" class="img-fluid client-logo"
                                        style="max-height: 80px;" alt="Client Logo">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach



                {{-- <div class="carousel-item active">
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
                </div> --}}

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
