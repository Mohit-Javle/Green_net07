<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'AgroNet Solutions manufactures high-quality HDPE shade nets, agricultural nets, greenhouse nets, and construction safety nets. 20+ years of manufacturing excellence.')">
    <title>@yield('title', 'AgroNet Solutions') — Premium Shade Net & Agricultural Net Manufacturer</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}?v=3">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_visa_and_immigration.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    @yield('extra_css')
</head>
<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="tp-preloader-content">
                    <div class="tp-preloader-logo">
                        <div class="tp-preloader-circle">
                            <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle stroke="#EAEBED" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                                <circle stroke="var(--tp-theme-primary)" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                            </svg>
                        </div>
                        <i class="fa-solid fa-leaf" style="font-size: 60px; color: var(--tp-theme-primary); line-height: 180px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas-close-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="{{ route('home') }}">
                            <div class="logo-wrapper d-flex align-items-center">
                                <i class="fa-solid fa-leaf text-success mr-2" style="font-size: 28px;"></i>
                                <div class="logo-text-group" style="text-align: left; line-height: 1.1;">
                                    <span class="logo-brand font-weight-bold" style="font-size: 24px; color: var(--tp-heading-secondary); display: block; font-family: var(--tp-ff-heading);">AgroNet</span>
                                    <span class="logo-sub text-muted" style="font-size: 10px; letter-spacing: 2px; font-weight: 700;">SOLUTIONS</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="tp-main-menu-mobile fix d-xl-none mb-40"></div>
                
                <div class="offcanvas__contact">
                    <h4 class="offcanvas__title">Contacts</h4>
                    <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                            <a href="https://maps.google.com" target="_blank">GIDC Industrial Estate, Kachigam, Daman - 396210</a>
                        </div>
                    </div>
                    <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                            <a href="mailto:info@agronetsolutions.in">info@agronetsolutions.in</a>
                        </div>
                    </div>
                    <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                            <a href="tel:+917923456789">+91 79 2345 6789</a>
                        </div>
                    </div>
                </div>
                <div class="offcanvas__social">
                    <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="icon linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- header area start -->
    <header class="tp-header-area p-relative">
        <div class="tp-header-top d-none d-xl-block fix">
            <div class="container container-large">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-header-top-info d-flex align-items-center">
                            <a href="https://maps.google.com" target="_blank" class="text-nowrap"><span><i class="fa-sharp fa-solid fa-location-dot"></i></span>GIDC Industrial Estate, Kachigam, Daman - 396210</a>
                            <a href="mailto:info@agronetsolutions.in" class="text-nowrap"><span><i class="fa-solid fa-envelope"></i></span>info@agronetsolutions.in</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-header-top-right d-flex justify-content-end">
                            <div class="tp-header-top-right-color d-flex align-items-center">
                                <div class="tp-header-top-btn">
                                    <span><a href="{{ route('about') }}">About Us</a></span>
                                    <span><a href="{{ route('products.index') }}">Products</a></span>
                                    <span><a href="{{ route('contact') }}">Contact</a></span>
                                </div>
                                <div class="tp-header-top-social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-header-main-sticky tp-header-main p-relative">
            <div class="container container-large">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-6">
                        <div class="tp-header-logo">
                            <a href="{{ route('home') }}">
                                <div class="logo-wrapper d-flex align-items-center">
                                    <i class="fa-solid fa-leaf text-success mr-2" style="font-size: 32px; color: var(--tp-theme-primary) !important;"></i>
                                    <div class="logo-text-group" style="text-align: left; line-height: 1.1;">
                                        <span class="logo-brand font-weight-bold" style="font-size: 28px; color: var(--tp-heading-secondary); display: block; font-family: var(--tp-ff-heading);">AgroNet</span>
                                        <span class="logo-sub text-muted" style="font-size: 11px; letter-spacing: 2px; font-weight: 700;">SOLUTIONS</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 d-none d-xl-block">
                        <div class="tp-header-main-menu">
                            <div class="tp-main-menu">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li class="has-dropdown">
                                            <a href="{{ route('products.index') }}">Products</a>
                                            <ul class="submenu">
                                                @foreach(\App\Models\Category::where('is_active', true)->orderBy('sort_order')->get() as $cat)
                                                <li><a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a></li>
                                                @endforeach
                                                <li><a href="{{ route('products.index') }}">All Products</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('home') }}#categories">Industries</a></li>
                                        <li><a href="{{ route('home') }}#gallery">Gallery</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-9 col-md-9 col-6">
                        <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                            <div class="tp-header-contact d-xl-flex align-items-center">
                                <div class="tp-header-contact-inner d-none d-xl-flex align-items-center">
                                    <div class="tp-header-contact-icon">
                                        <span><i class="fa-solid fa-phone-volume" style="color: var(--tp-theme-primary); font-size: 20px;"></i></span>
                                    </div>
                                    <div class="tp-header-contact-content pl-10" style="white-space: nowrap;">
                                        <p style="margin-bottom: 0; line-height: 1.2;">Talk to an expert</p>
                                        <span><a href="tel:+917923456789" style="white-space: nowrap; font-weight: 700; color: var(--tp-heading-secondary);">+91 79 2345 6789</a></span>
                                    </div>
                                </div>
                                
                                <!-- Header Quote Basket Button (Visible on both desktop & mobile) -->
                                <div id="header-quote-basket" class="p-relative mr-15 ml-15" style="cursor: pointer; font-size: 20px; color: var(--tp-heading-secondary); transition: all 0.3s ease; display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 50%; background-color: #fafbfc; border: 1px solid #e2e8f0;" onmouseover="this.style.borderColor='var(--tp-theme-primary)'; this.style.color='var(--tp-theme-primary)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='var(--tp-heading-secondary)'">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <span id="quote-basket-count-header" class="badge" style="position: absolute; top: -5px; right: -5px; background-color: var(--tp-theme-secondary); color: white; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 700; border: 2px solid white; padding: 0;">0</span>
                                </div>

                                <div class="tp-header-btn pl-20 d-none d-xl-block">
                                    <a class="tp-btn d-none d-xl-block" href="{{ route('contact') }}" style="white-space: nowrap; padding: 12px 28px;">Get Free Quote</a>
                                </div>
                                <div class="tp-header-hamburger d-xl-none offcanvas-open-btn">
                                    <button class="hamburger-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <main>
        @yield('content')
    </main>    <!-- footer area start -->
    <footer class="tp-footer-area p-relative">
        <style>
            .tp-footer-widget-social a {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.08);
                color: #ffffff;
                margin-right: 10px;
                font-size: 16px;
                transition: all 0.3s ease;
            }
            .tp-footer-widget-social a:hover {
                background: var(--tp-theme-secondary);
                color: #ffffff;
                transform: translateY(-3px);
            }
            .tp-footer-copyright-links a {
                color: rgba(255, 255, 255, 0.65) !important;
                padding: 0 10px;
                text-decoration: none;
                transition: color 0.3s ease;
                display: inline-block;
            }
            .tp-footer-copyright-links a:hover {
                color: var(--tp-theme-secondary) !important;
            }
            .tp-footer-widget-contact a {
                text-decoration: none;
                transition: color 0.3s ease;
            }
            .tp-footer-widget-contact a:hover {
                color: var(--tp-theme-secondary) !important;
            }
        </style>
        <div class="tp-footer-bg" style="background-color: var(--tp-theme-1);"></div>
        <div class="tp-footer-top pt-80 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-1 mb-30">
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-logo mb-35">
                                    <a href="{{ route('home') }}">
                                        <div class="logo-wrapper d-flex align-items-center">
                                            <i class="fa-solid fa-leaf text-success mr-2" style="font-size: 32px; color: var(--tp-theme-primary) !important;"></i>
                                            <div class="logo-text-group" style="text-align: left; line-height: 1.1;">
                                                <span class="logo-brand font-weight-bold" style="font-size: 28px; color: #ffffff; display: block; font-family: var(--tp-ff-heading);">AgroNet</span>
                                                <span class="logo-sub text-muted" style="font-size: 11px; letter-spacing: 2px; font-weight: 700;">SOLUTIONS</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <p class="mb-35" style="color: rgba(255, 255, 255, 0.75);">Leading manufacturer of premium quality shade nets, agricultural nets, greenhouse nets, and protective nets. Sourced from 100% virgin HDPE.</p>
                                <div class="tp-footer-widget-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-2 mb-30">
                            <h3 class="tp-footer-widget-title text-white">Quick Links</h3>
                            <div class="tp-footer-widget-content">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('products.index') }}">Products</a></li>
                                    <li><a href="{{ route('home') }}#categories">Industries</a></li>
                                    <li><a href="{{ route('home') }}#gallery">Gallery</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-3 mb-30">
                            <h3 class="tp-footer-widget-title text-white">Our Products</h3>
                            <div class="tp-footer-widget-content">
                                <ul>
                                    @foreach(\App\Models\Category::where('is_active', true)->orderBy('sort_order')->take(5)->get() as $cat)
                                    <li><a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-4 mb-30">
                            <h3 class="tp-footer-widget-title text-white">Contact Info</h3>
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-widget-contact">
                                    <div class="d-flex align-items-start mb-15">
                                        <span style="color: var(--tp-theme-secondary); font-size: 16px; margin-top: 4px; display: inline-block; width: 25px;"><i class="fa-solid fa-location-dot"></i></span>
                                        <p style="color: rgba(255, 255, 255, 0.75); margin-bottom: 0; line-height: 1.5;">GIDC Industrial Estate,<br>Kachigam, Daman - 396210</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-15">
                                        <span style="color: var(--tp-theme-secondary); font-size: 16px; display: inline-block; width: 25px;"><i class="fa-solid fa-envelope"></i></span>
                                        <p style="color: rgba(255, 255, 255, 0.75); margin-bottom: 0;"><a href="mailto:info@agronetsolutions.in" style="color: rgba(255, 255, 255, 0.75);">info@agronetsolutions.in</a></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span style="color: var(--tp-theme-secondary); font-size: 16px; display: inline-block; width: 25px;"><i class="fa-solid fa-phone"></i></span>
                                        <p style="color: rgba(255, 255, 255, 0.75); margin-bottom: 0;"><a href="tel:+917923456789" style="color: rgba(255, 255, 255, 0.75);">+91 79 2345 6789</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-footer-copyright p-relative" data-bg-color="#071b11" style="background-color: #071b11;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="tp-footer-copyright-inner">
                            <p style="color: rgba(255, 255, 255, 0.65); margin-bottom: 0;">© Copyright {{ date('Y') }} by AgroNet Solutions. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 text-lg-end">
                        <div class="tp-footer-copyright-links" style="color: rgba(255, 255, 255, 0.65);">
                            <a href="#">Privacy Policy</a> |
                            <a href="#">Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-knob.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Quote Basket Sidebar Drawer Overlay -->
    <div id="quote-basket-overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 99998; opacity: 0; visibility: hidden; transition: all 0.3s ease-in-out;"></div>

    <!-- Quote Basket Sidebar Drawer Panel -->
    <div id="quote-basket-drawer" style="position: fixed; top: 0; right: -420px; width: 420px; max-width: 100%; height: 100%; background-color: #ffffff; box-shadow: -10px 0 40px rgba(0,0,0,0.15); z-index: 99999; transition: right 0.3s ease-in-out; display: flex; flex-direction: column; overflow: hidden;">
        <!-- Drawer Header -->
        <div class="drawer-header d-flex align-items-center justify-content-between" style="padding: 20px 25px; border-bottom: 1px solid #f0f2f5; background-color: var(--tp-theme-1); color: #ffffff;">
            <h4 style="margin: 0; color: #ffffff; font-family: var(--tp-ff-heading); font-size: 18px; font-weight: 700;"><i class="fa-solid fa-basket-shopping mr-10" style="color: var(--tp-theme-secondary);"></i> Quote Request Basket</h4>
            <button id="close-quote-basket" style="background: none; border: none; color: #ffffff; font-size: 20px; outline: none; cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <!-- Drawer Content -->
        <div class="drawer-body" style="flex: 1; overflow-y: auto; padding: 25px;">
            <div id="basket-items-container">
                <!-- Items will be injected dynamically by JS -->
            </div>
            
            <!-- Quick Inquiry Form -->
            <div id="basket-form-container" class="mt-30 pt-30" style="border-top: 1px solid #f0f2f5; display: none;">
                <h5 style="font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; margin-bottom: 20px; color: var(--tp-heading-secondary);">Request Custom Quotation</h5>
                <form action="{{ route('contact.store') }}" method="POST" id="basket-quote-form">
                    @csrf
                    <!-- Hidden input to hold product names -->
                    <input type="hidden" name="subject" value="Quote request from Interactive Basket">
                    <input type="hidden" name="message" id="basket-items-message">
                    
                    <div style="margin-bottom: 15px;">
                        <input type="text" name="name" placeholder="Your Name*" required style="width: 100%; height: 50px; border: 1px solid #e0e2e3; padding-left: 20px; border-radius: 4px; outline: none;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <input type="email" name="email" placeholder="Your Email*" required style="width: 100%; height: 50px; border: 1px solid #e0e2e3; padding-left: 20px; border-radius: 4px; outline: none;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <input type="text" name="phone" placeholder="Your Phone Number*" required style="width: 100%; height: 50px; border: 1px solid #e0e2e3; padding-left: 20px; border-radius: 4px; outline: none;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <input type="text" name="company" placeholder="Company Name*" required style="width: 100%; height: 50px; border: 1px solid #e0e2e3; padding-left: 20px; border-radius: 4px; outline: none;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <textarea id="basket-custom-notes" placeholder="Any specific requirements (sizes, shading rates, delivery location)..." style="width: 100%; height: 100px; border: 1px solid #e0e2e3; padding: 15px 20px; border-radius: 4px; outline: none; line-height: 1.5;"></textarea>
                    </div>
                    <button type="submit" class="tp-btn w-100" style="height: 50px; line-height: 50px; padding: 0;">Submit Quote Inquiry</button>
                </form>
            </div>
            
            <div id="basket-empty-state" class="text-center py-5" style="display: block;">
                <i class="fa-solid fa-basket-shopping mb-20" style="font-size: 48px; color: #b4c2b9;"></i>
                <h5 style="color: var(--tp-heading-secondary); font-family: var(--tp-ff-heading);">Your basket is empty</h5>
                <p class="text-muted" style="font-size: 14px;">Add product nets from our catalog to request a combined custom B2B quotation.</p>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let basket = JSON.parse(localStorage.getItem('quote_basket')) || [];

        // Elements
        const basketBtn = document.getElementById('header-quote-basket');
        const basketCountEl = document.getElementById('quote-basket-count-header');
        const drawer = document.getElementById('quote-basket-drawer');
        const overlay = document.getElementById('quote-basket-overlay');
        const closeBtn = document.getElementById('close-quote-basket');
        const itemsContainer = document.getElementById('basket-items-container');
        const formContainer = document.getElementById('basket-form-container');
        const emptyState = document.getElementById('basket-empty-state');
        const customNotes = document.getElementById('basket-custom-notes');
        const itemsMessage = document.getElementById('basket-items-message');
        const quoteForm = document.getElementById('basket-quote-form');

        // Update Floating Button count
        function updateBasketCount() {
            basketCountEl.textContent = basket.length;
            if (basket.length > 0) {
                basketBtn.style.transform = 'scale(1.1)';
                setTimeout(() => basketBtn.style.transform = 'scale(1)', 300);
            }
        }

        // Render items inside drawer
        function renderBasket() {
            itemsContainer.innerHTML = '';
            if (basket.length === 0) {
                emptyState.style.display = 'block';
                formContainer.style.display = 'none';
                return;
            }

            emptyState.style.display = 'none';
            formContainer.style.display = 'block';

            basket.forEach((item, index) => {
                const itemHtml = `
                    <div class="basket-item d-flex align-items-center mb-15 p-15" style="border: 1px solid #f0f2f5; border-radius: 6px; position: relative; text-align: left;">
                        <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px; margin-right: 15px; border: 1px solid #f0f2f5;">
                        <div style="flex: 1; min-width: 0;">
                            <h6 style="margin: 0 0 4px; font-family: var(--tp-ff-heading); font-size: 14px; font-weight: 700; color: var(--tp-heading-secondary); overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">${item.name}</h6>
                            <span style="font-size: 12px; color: var(--tp-theme-primary); font-weight: 600;">Qty / Spec:</span>
                            <input type="text" value="${item.spec || '1 standard roll'}" onchange="window.updateItemSpec(${index}, this.value)" style="border: none; border-bottom: 1px dashed #b4c2b9; font-size: 12px; color: var(--tp-text-body); outline: none; background: none; width: 140px; padding: 0 2px;">
                        </div>
                        <button onclick="window.removeBasketItem(${index})" style="background: none; border: none; color: #ff5252; font-size: 16px; cursor: pointer; padding: 5px;"><i class="fa-solid fa-trash"></i></button>
                    </div>
                `;
                itemsContainer.insertAdjacentHTML('beforeend', itemHtml);
            });

            // Formulate the message string
            let formattedMessage = "Inquiry Basket Products:\n";
            basket.forEach(item => {
                formattedMessage += `- ${item.name} (Spec/Qty: ${item.spec || '1 standard roll'})\n`;
            });
            itemsMessage.value = formattedMessage;
        }

        // Add item to basket
        window.addBasketItem = function(id, name, image) {
            // Check if exists
            const exists = basket.find(item => item.id === id);
            if (exists) {
                alert('Product already in Quote Basket!');
                openBasket();
                return;
            }

            basket.push({ id, name, image, spec: '1 standard roll' });
            localStorage.setItem('quote_basket', JSON.stringify(basket));
            updateBasketCount();
            renderBasket();
            openBasket();
        };

        window.removeBasketItem = function(index) {
            basket.splice(index, 1);
            localStorage.setItem('quote_basket', JSON.stringify(basket));
            updateBasketCount();
            renderBasket();
        };

        window.updateItemSpec = function(index, value) {
            basket[index].spec = value;
            localStorage.setItem('quote_basket', JSON.stringify(basket));
            renderBasket();
        };

        // Toggle Drawer
        function openBasket() {
            drawer.style.right = '0';
            overlay.style.opacity = '1';
            overlay.style.visibility = 'visible';
        }

        function closeBasket() {
            drawer.style.right = '-420px';
            overlay.style.opacity = '0';
            overlay.style.visibility = 'hidden';
        }

        basketBtn.addEventListener('click', openBasket);
        closeBtn.addEventListener('click', closeBasket);
        overlay.addEventListener('click', closeBasket);

        // Form Submission details compilation
        quoteForm.addEventListener('submit', function() {
            let finalMessage = itemsMessage.value;
            if (customNotes.value.trim() !== '') {
                finalMessage += `\nCustomer Notes:\n${customNotes.value}`;
            }
            itemsMessage.value = finalMessage;
            
            // Clear basket on success (delayed slightly so the form submits successfully first)
            setTimeout(() => {
                basket = [];
                localStorage.removeItem('quote_basket');
                updateBasketCount();
                renderBasket();
                closeBasket();
            }, 1000);
        });

        // Initialize
        updateBasketCount();
        renderBasket();

        // Attach listeners to page buttons dynamically
        document.body.addEventListener('click', function(e) {
            const btn = e.target.closest('.add-to-quote-btn');
            if (btn) {
                e.preventDefault();
                const id = btn.getAttribute('data-id');
                const name = btn.getAttribute('data-name');
                const image = btn.getAttribute('data-image');
                window.addBasketItem(id, name, image);
            }
        });
    });
    </script>

    @yield('extra_js')
</body>
</html>
