@props(['clients'])

<section class="client-carousel-section py-5 bg-white {{ $clients->isEmpty() ? 'd-none' : '' }}">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-12">
                <h2 class="section-heading text-center">
                    <span class="section-heading-underline fw-bold text-uppercase">Govt. Sectors</span>
                </h2>
            </div>
        </div>

        <div class="swiper ClientSwiper">
            <div class="swiper-wrapper">
                @foreach ($clients as $client)
                    <div class="swiper-slide text-center">
                        <img src="{{ $client->image_src }}" style="width: 100%; height: 80px; object-fit: contain;"
                            alt="{{ $client->name }}" class="img-thumbnail">
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev text-danger"></div>
            <div class="swiper-button-next text-danger"></div>
        </div>
    </div>
</section>
