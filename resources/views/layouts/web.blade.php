<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/css/styles.css') }}" />
</head>

<body>
    <div class="top-bar d-none d-md-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <div>
                <a href="tel:+971041234567" class="me-4"><i class="fas fa-phone-alt me-1"></i> (+971) 04 123 4567</a>
                <a href="mailto:info@yourcentre.ae"><i class="fas fa-envelope me-1"></i> info@yourcentre.ae</a>
            </div>
        </div>
    </div>

    <header class="shadow-sm sticky-top bg-white">
        <nav class="navbar navbar-expand-lg container-fluid-mobile px-3 px-md-0">
            <div class="container-xl d-flex justify-content-between w-100">
                <a href="{{ route('web.index') }}" class="navbar-brand">
                    <span class="text-uae-green me-1">UAE</span><span class="text-danger">CENTRE</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('web.index') ? 'active' : '' }}"
                                aria-current="page"href="{{ route('web.index') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('web.about') ? 'active' : '' }}"
                                href="{{ route('web.about') }}">
                                About Us
                            </a>
                        </li>

                        @foreach ($sharedCategories as $category)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarServicesDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $category->name }}
                                </a>
                                @php
                                    $items = $category->subCategories;
                                    $useTwoColumns = $items->count() > 6;
                                @endphp

                                <ul class="dropdown-menu {{ $useTwoColumns ? 'dropdown-2cols' : '' }}">
                                    @foreach ($items as $item)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('web.service', $item->slug) }}">
                                                {{ $item->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach

                        <li class="nav-item">
                            <a class="nav-link " href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a href="consultation.html" class="btn btn-danger text-white fw-bold py-2 px-4">
                                Book a Consultation!
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="text-center text-lg-start pt-4">
        <div class="container text-white">
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase border-bottom border-danger pb-2 mb-3">About Us</h5>
                    <p class="text-white-50">Established in 2018, we are the most eminent visas and immigration
                        consultant service provider in the region.</p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase border-bottom border-danger pb-2 mb-3">Useful Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-white-50">Tourist Visas</a></li>
                        <li><a href="#" class="text-white-50">Online Services</a></li>
                        <li><a href="#" class="text-white-50">Locate Branches</a></li>
                        <li><a href="#" class="text-white-50">Careers</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase border-bottom border-danger pb-2 mb-3">Address</h5>
                    <p class="mb-1 text-white-50">Main Office: Rose-8 Building, Karama, Dubai-UAE</p>
                    <p class="mb-1 text-white-50">Email: info@yourcentre.ae</p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase border-bottom border-danger pb-2 mb-3">Drop Us A Line</h5>
                    <p class="mb-1 fw-bold">Call Us Now!</p>
                    <p class="mb-1 text-white-50">(+971) 04 123 4567</p>
                    <p class="mb-1 text-white-50">(+971) 50 123 4567</p>
                </div>

            </div>
        </div>

        <div class="text-center p-3 mt-4" style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; 2025 YourCentre. All rights reserved.
        </div>
    </footer>

    <a href="https://wa.me/971582530133?text=Hello%20I%20would%20like%20to%20know%20more%20about%20your%20services"
        target="_blank" class="whatsapp-float" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.dropdown-submenu > a').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    if (window.innerWidth < 992) {
                        e.preventDefault();
                        e.stopPropagation();
                        let parentListItem = this.closest('.dropdown-submenu');
                        parentListItem.classList.toggle('show');
                    }
                });
            });
        });
    </script>
</body>

</html>
