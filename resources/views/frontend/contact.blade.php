@extends('layouts.frontend')

@section('title', 'Contact Us — AgroNet Solutions')
@section('meta_description', 'Get in touch with AgroNet Solutions. Find our Daman manufacturing facility address, call +91 79 2345 6789, email info@agronetsolutions.in, or submit a request for a free quote.')

@section('content')

<!-- Contact breadcrumb area start -->
<section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix">
    <div class="breadcrumb__bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb.jpg') }}"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__list">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>Contact</span>
                    </div>
                    <h3 class="breadcrumb__title">Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact breadcrumb area end -->

<!-- contact area start -->
<section class="tp-contact-breadcrumb-area pt-120 pb-120 p-relative">
    <div class="tp-contact-breadcrumb-shape">
        <img src="{{ asset('assets/img/contact/contact/shape.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tp-contact-wrap">
                    <h4 class="tp-contact-title">Factory Details</h4>
                    <p style="font-size: 16px; line-height: 1.8; color: var(--tp-text-body);">
                        GIDC Industrial Estate,<br>
                        Kachigam, Daman - 396210<br>
                        India
                    </p>
                    <span style="font-weight: 700; font-size: 18px; color: var(--tp-theme-primary); display: block; margin-top: 15px;"><a href="tel:+917923456789">+91 79 2345 6789</a></span>
                    <span style="font-size: 16px; font-weight: 600; display: block; margin-top: 5px;"><a href="mailto:info@agronetsolutions.in">info@agronetsolutions.in</a></span>
                    <div class="tp-contact-social mt-30">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tp-contact-form-wrapper">
                    @if(session('success'))
                    <div class="alert alert-success mb-30" role="alert" style="border-radius: 8px; font-weight: 600; background-color: #e6f7ee; border-color: #1F7A4D; color: #1F7A4D;">
                        <i class="fa-solid fa-circle-check mr-10"></i> {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger mb-30" role="alert" style="border-radius: 8px; font-weight: 600; background-color: #fde8e8; border-color: #f05252; color: #f05252;">
                        <ul class="mb-0" style="list-style-type: none; padding-left: 0;">
                            @foreach($errors->all() as $error)
                            <li><i class="fa-solid fa-triangle-exclamation mr-10"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="tp-contact-input-form">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <input type="text" name="name" placeholder="Name" required>
                                        <span><i class="fa-light fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                        <span><i class="fa-light fa-envelope"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                        <span><i class="fa-light fa-phone"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-input p-relative">
                                        <input type="text" name="company" placeholder="Company Name" required>
                                        <span><i class="fa-light fa-building"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tp-contact-input p-relative">
                                        <textarea name="message" placeholder="How can we help you? Feel free to write details like net dimensions, colors, GSM, or custom requirements..." required style="height: 150px; line-height: 1.5;"></textarea>
                                        <span class="icon-1"><i class="fa-light fa-pen"></i></span>
                                    </div>
                                </div>
                                <div class="tp-contact-btn">
                                    <button type="submit" class="tp-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->

<!-- contact map start -->
<div class="tp-contact-map-area">
    <div class="tp-contact-map" style="position: relative; width: 100%; height: 500px;">
        <div id="map-status" class="map-overlay-status">
            <i id="map-status-icon" class="fa-solid fa-spinner fa-spin mr-10 text-primary"></i>
            <span id="map-status-text">Detecting your location...</span>
        </div>
        <div id="route-map" style="width: 100%; height: 100%;"></div>
    </div>
</div>
<!-- contact map end -->

@endsection

@section('extra_css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
<style>
    .tp-contact-map {
        filter: none !important;
    }
    /* Green Branded Map Theme */
    .leaflet-tile {
        filter: sepia(100%) hue-rotate(80deg) saturate(1.8) contrast(1.1) brightness(0.95) !important;
    }
    .map-overlay-status {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(4px);
        padding: 12px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        font-family: var(--tp-ff-heading);
        font-size: 14px;
        font-weight: 600;
        color: var(--tp-heading-secondary);
        display: flex;
        align-items: center;
        border-left: 4px solid var(--tp-theme-primary);
        max-width: calc(100% - 30px);
        transition: all 0.3s ease;
    }
    .map-overlay-status.error {
        border-left-color: #ff4d4f;
    }
    /* Completely hide turn-by-turn text instructions */
    .leaflet-routing-container {
        display: none !important;
    }
</style>
@endsection

@section('extra_js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const destLat = 20.3820251;
    const destLng = 72.8427844;
    const destAddress = "GIDC Industrial Estate, Kachigam, Daman - 396210";
    
    const statusEl = document.getElementById('map-status');
    const statusTextEl = document.getElementById('map-status-text');
    const statusIconEl = document.getElementById('map-status-icon');
    
    // Initialize map centered at destination by default
    let map = L.map('route-map').setView([destLat, destLng], 14);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Destination Marker
    const destIcon = L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });
    
    const destMarker = L.marker([destLat, destLng], { icon: destIcon }).addTo(map)
        .bindPopup(`<b>AgroNet Solutions Factory</b><br>${destAddress}`)
        .openPopup();

    function setStatus(text, type = 'info') {
        statusTextEl.innerHTML = text;
        if (type === 'error') {
            statusEl.classList.add('error');
            statusIconEl.className = 'fa-solid fa-circle-exclamation mr-10 text-danger';
        } else if (type === 'success') {
            statusEl.classList.remove('error');
            statusIconEl.className = 'fa-solid fa-circle-check mr-10 text-success';
            setTimeout(() => {
                statusEl.style.opacity = '0';
                setTimeout(() => statusEl.style.display = 'none', 300);
            }, 5000);
        } else {
            statusEl.classList.remove('error');
            statusIconEl.className = 'fa-solid fa-spinner fa-spin mr-10 text-primary';
        }
    }

    // Try Browser Geolocation
    if ("geolocation" in navigator) {
        setStatus("Detecting your location to draw the route...");
        
        navigator.geolocation.getCurrentPosition(
            function (position) {
                const userLat = position.coords.latitude;
                const userLng = position.coords.longitude;
                
                setStatus("Location found! Calculating driving route...", 'info');
                
                // Add User Marker
                const userIcon = L.icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41]
                });
                
                L.marker([userLat, userLng], { icon: userIcon }).addTo(map)
                    .bindPopup("<b>Your Location</b>");
                
                try {
                    const routingControl = L.Routing.control({
                        waypoints: [
                            L.latLng(userLat, userLng),
                            L.latLng(destLat, destLng)
                        ],
                        show: false,
                        addWaypoints: false,
                        draggableWaypoints: false,
                        routeWhileDragging: false,
                        router: L.Routing.osrmv1({
                            serviceUrl: 'https://router.project-osrm.org/route/v1'
                        }),
                        lineOptions: {
                            styles: [{ color: '#1F7A4D', opacity: 0.8, weight: 6 }]
                        },
                        createMarker: function() { return null; } // Don't create default markers since we created custom ones
                    }).addTo(map);
                    
                    routingControl.on('routesfound', function() {
                        setStatus("Route loaded successfully!", 'success');
                    });
                    
                    routingControl.on('routingerror', function(e) {
                        console.error(e);
                        setStatus("Could not calculate route. Showing direct destination.", 'error');
                    });
                } catch (err) {
                    console.error(err);
                    setStatus("Routing service error. Showing destination address.", 'error');
                }
            },
            function (error) {
                let errorMsg = "Location access denied. Displaying factory address.";
                if (error.code === error.POSITION_UNAVAILABLE) {
                    errorMsg = "Location unavailable. Displaying factory address.";
                } else if (error.code === error.TIMEOUT) {
                    errorMsg = "Location request timed out. Displaying factory address.";
                }
                
                setStatus(errorMsg + ` <a href="https://www.google.com/maps/dir/?api=1&destination=${destLat},${destLng}" target="_blank" class="ml-10 text-decoration-underline" style="color: var(--tp-theme-primary); font-weight: 700;">Open Google Maps</a>`, 'error');
            },
            {
                enableHighAccuracy: true,
                timeout: 8000,
                maximumAge: 0
            }
        );
    } else {
        setStatus(`Geolocation not supported. <a href="https://www.google.com/maps/dir/?api=1&destination=${destLat},${destLng}" target="_blank" class="ml-10 text-decoration-underline" style="color: var(--tp-theme-primary); font-weight: 700;">Open Google Maps</a>`, 'error');
    }
});
</script>
@endsection
