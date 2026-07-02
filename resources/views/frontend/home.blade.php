@extends('layouts.frontend')

@section('title', 'AgroNet Solutions — Premium Shade Net & Agricultural Net Manufacturer')
@section('meta_description', 'AgroNet Solutions manufactures high-quality HDPE shade nets, agricultural nets, greenhouse nets, and construction safety nets. 20+ years of manufacturing excellence.')

@section('content')

<!-- hero area start -->
<section class="tp-hero-area p-relative">
    <div class="tp-hero-wrapper-slider">
        <div class="tp-hero-active swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide pt-200 pb-220">
                    <div class="tp-hero-bg" data-background="{{ asset('assets/img/hero/slide-1.png') }}"></div>
                    <div class="tp-hero-shape">
                        <img class="shape-1" src="{{ asset('assets/img/hero/h-s-1.png') }}" alt="">
                        <img class="shape-2" src="{{ asset('assets/img/hero/h-s-2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="tp-hero-content p-relative">
                                    <div class="tp-hero-title-wrapper">
                                        <h2 class="tp-hero-title text-white">Premium Shade Net <br>& Agricultural Net <br>Manufacturer</h2>
                                    </div>
                                    <p class="text-white mb-40 pr-100" style="font-size: 18px; line-height: 1.6; opacity: 0.9;">Providing high-quality agricultural, greenhouse, industrial, and protective net solutions across India. Built with 100% virgin UV-stabilized HDPE.</p>
                                    <div class="tp-hero-button-wrapper d-flex flex-wrap align-items-center">
                                        <div class="tp-hero-btn mr-30">
                                            <a class="tp-btn" href="{{ route('contact') }}">Get Free Quote</a>
                                        </div>
                                        <div class="tp-hero-video">
                                            <a class="popup-video" href="https://www.youtube.com/watch?v=xUuATOsh0EU">
                                                <span><i class="fa-regular fa-play"></i></span>
                                                <p class="text-white">Watch Our <br> Showcase</p>
                                            </a>
                                        </div>
                                        <div class="tp-hero-button-wrapper-shape">
                                            <img src="{{ asset('assets/img/hero/h-s-3.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide pt-200 pb-220">
                    <div class="tp-hero-bg" data-background="{{ asset('assets/img/hero/slide-2.png') }}"></div>
                    <div class="tp-hero-shape">
                        <img class="shape-1" src="{{ asset('assets/img/hero/h-s-1.png') }}" alt="">
                        <img class="shape-2" src="{{ asset('assets/img/hero/h-s-2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="tp-hero-content p-relative">
                                    <div class="tp-hero-title-wrapper">
                                        <h2 class="tp-hero-title text-white">Advanced Greenhouse <br>Nets For Optimal <br>Crop Protection</h2>
                                    </div>
                                    <p class="text-white mb-40 pr-100" style="font-size: 18px; line-height: 1.6; opacity: 0.9;">Precision-woven nets maintaining optimal humidity, light, and temperature to enhance crop yields significantly.</p>
                                    <div class="tp-hero-button-wrapper d-flex flex-wrap align-items-center">
                                        <div class="tp-hero-btn mr-30">
                                            <a class="tp-btn" href="{{ route('products.index') }}">Discover Products</a>
                                        </div>
                                        <div class="tp-hero-video">
                                            <a class="popup-video" href="https://www.youtube.com/watch?v=xUuATOsh0EU">
                                                <span><i class="fa-regular fa-play"></i></span>
                                                <p class="text-white">Watch Our <br> Showcase</p>
                                            </a>
                                        </div>
                                        <div class="tp-hero-button-wrapper-shape">
                                            <img src="{{ asset('assets/img/hero/h-s-3.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide pt-200 pb-220">
                    <div class="tp-hero-bg" data-background="{{ asset('assets/img/hero/slide-3.png') }}"></div>
                    <div class="tp-hero-shape">
                        <img class="shape-1" src="{{ asset('assets/img/hero/h-s-1.png') }}" alt="">
                        <img class="shape-2" src="{{ asset('assets/img/hero/h-s-2.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="tp-hero-content p-relative">
                                    <div class="tp-hero-title-wrapper">
                                        <h2 class="tp-hero-title text-white">Durable Construction <br>Safety Nets & <br>Woven Fabrics</h2>
                                    </div>
                                    <p class="text-white mb-40 pr-100" style="font-size: 18px; line-height: 1.6; opacity: 0.9;">Heavy-duty safety nets designed for containing debris and ensuring site safety. Meets ISO quality standards.</p>
                                    <div class="tp-hero-button-wrapper d-flex flex-wrap align-items-center">
                                        <div class="tp-hero-btn mr-30">
                                            <a class="tp-btn" href="{{ route('contact') }}">Contact Now</a>
                                        </div>
                                        <div class="tp-hero-video">
                                            <a class="popup-video" href="https://www.youtube.com/watch?v=xUuATOsh0EU">
                                                <span><i class="fa-regular fa-play"></i></span>
                                                <p class="text-white">Watch Our <br> Showcase</p>
                                            </a>
                                        </div>
                                        <div class="tp-hero-button-wrapper-shape">
                                            <img src="{{ asset('assets/img/hero/h-s-3.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-hero-pagination"></div>
    </div>
</section>
<!-- hero area end -->

<!-- features area start -->
<section class="tp-features-area pt-120 pb-90 p-relative" style="position: relative; z-index: 1;">
    <!-- Background Leaf Decoration -->
    <div class="d-none d-lg-block" style="position: absolute; left: 30px; top: 10%; z-index: -1; opacity: 0.05; transform: rotate(-30deg);">
        <i class="fa-solid fa-leaf" style="font-size: 150px; color: var(--tp-theme-secondary);"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="tp-features-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <h3 class="tp-features-title">Premium Shade Nets</h3>
                    <p>High-density green and black shade nets protecting crops from excessive sunlight, dust, and wind.</p>
                    <div class="tp-features-item-btn d-flex justify-content-between align-items-center">
                        <a href="{{ route('products.index') }}"><i class="fa-regular fa-arrow-right"></i>
                            <b>Read More</b>
                        </a>
                        <span><i class="fa-solid fa-leaf" style="color: var(--tp-theme-primary); font-size: 24px;"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tp-features-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3 class="tp-features-title">Greenhouse Solutions</h3>
                    <p>Specially woven insect and anti-hail nets creating a controlled, micro-climate environment for agriculture.</p>
                    <div class="tp-features-item-btn d-flex justify-content-between align-items-center">
                        <a href="{{ route('products.index') }}"><i class="fa-regular fa-arrow-right"></i>
                            <b>Read More</b>
                        </a>
                        <span><i class="flaticon-documents"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tp-features-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                    <h3 class="tp-features-title">Industrial Safety Nets</h3>
                    <p>Extra durable HDPE debris nets and bird protection nets for multi-story buildings and factories.</p>
                    <div class="tp-features-item-btn d-flex justify-content-between align-items-center">
                        <a href="{{ route('products.index') }}"><i class="fa-regular fa-arrow-right"></i>
                            <b>Read More</b>
                        </a>
                        <span><i class="flaticon-resume"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features area end -->

<!-- about area start -->
<section class="tp-about-area pb-120 p-relative">
    <!-- Floating background decorations for premium aesthetic -->
    <div class="d-none d-lg-block tp-float-leaf-1" style="position: absolute; left: 30px; bottom: 80px; z-index: 1; opacity: 0.08;">
        <i class="fa-solid fa-leaf" style="font-size: 80px; color: var(--tp-theme-primary);"></i>
    </div>
    <div class="d-none d-lg-block tp-float-leaf-2" style="position: absolute; right: 40px; top: 20px; z-index: 1; opacity: 0.08; transform: rotate(45deg);">
        <i class="fa-solid fa-leaf" style="font-size: 100px; color: var(--tp-theme-secondary);"></i>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="tp-about-thumb-wrapper p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="tp-about-thumb-main tp-shine">
                        <img src="{{ asset('assets/img/about/factory.png') }}" alt="AgroNet Factory" style="border-radius: 8px; width: 100%; box-shadow: 0 15px 35px rgba(0,0,0,0.05);">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tp-about-title-wrapper wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <span class="tp-section-title-pre">LET’S KNOW ABOUT AGRONET <i class="fa-solid fa-leaf"></i></span>
                    <h3 class="tp-section-title">Premium Net Solutions From Experienced Manufacturers</h3>
                    <p>AgroNet Solutions specializes in manufacturing premium quality shade nets, greenhouse nets, bird nets, insect nets, and protective safety nets. Our products are UV-stabilized, highly durable, and engineered using German technology to survive harsh weather conditions.</p>
                    <div class="tp-about-content d-flex">
                        <div class="tp-about-list">
                            <ul>
                                <li><i class="flaticon-checked"></i>Premium Quality Raw Material</li>
                                <li><i class="flaticon-checked"></i>UV Stabilized & Long Life</li>
                                <li><i class="flaticon-checked"></i>Bulk Supply & Timely Delivery</li>
                            </ul>
                            <div class="tp-about-icon d-flex align-items-center">
                                <i class="fa-solid fa-medal" style="font-size: 32px; color: var(--tp-theme-primary); margin-right: 15px;"></i>
                                <p>ISO 9001:2015 <br> Quality Certified</p>
                            </div>
                        </div>
                        <div class="tp-about-right">
                            <!-- Custom CSS-based Premium Experience Card -->
                            <div class="tp-about-experience-card d-flex align-items-center" style="background: #ffffff; border-radius: 12px; padding: 20px 25px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); border: 1px solid #f0f2f5; margin-bottom: 25px; gap: 15px;">
                                <div class="experience-icon" style="width: 50px; height: 50px; border-radius: 50%; background: rgba(200, 168, 75, 0.12); display: flex; align-items: center; justify-content: center; color: var(--tp-theme-secondary); font-size: 24px; flex-shrink: 0;">
                                    <i class="fa-solid fa-trophy"></i>
                                </div>
                                <div>
                                    <h4 style="font-family: var(--tp-ff-heading); font-size: 26px; font-weight: 800; color: var(--tp-heading-secondary); margin-bottom: 0; line-height: 1;">20</h4>
                                    <span style="font-size: 13px; color: var(--tp-text-body); font-weight: 700; line-height: 1.2; display: block; margin-top: 4px;">Years of <br> Experience</span>
                                </div>
                            </div>
                            
                            <div class="tp-about-icon-2 d-flex align-items-center">
                                <i class="fa-solid fa-truck" style="font-size: 32px; color: var(--tp-theme-primary); margin-right: 15px;"></i>
                                <p>PAN India <br> Delivery Network</p>
                            </div>
                        </div>
                    </div>
                    <div class="tp-about-signeture d-flex align-items-center">
                        <div class="tp-about-sign mr-40">
                            <h4 style="font-family: var(--tp-ff-heading); color: var(--tp-heading-secondary); margin-bottom: 2px;">AgroNet Factory</h4>
                            <p style="font-size: 13px; color: var(--tp-text-body); margin-bottom: 0;">20+ Years Manufacturing Excellence</p>
                        </div>
                        <div class="tp-about-btn">
                            <a class="tp-btn" href="{{ route('about') }}">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->

<!-- categories / products area start -->
<section id="categories" class="tp-categories-area pt-120 pb-90 p-relative" style="background-color: #ffffff; position: relative; z-index: 1;">
    <!-- Background Leaf Decoration -->
    <div class="d-none d-lg-block" style="position: absolute; right: 40px; top: 15%; z-index: -1; opacity: 0.05; transform: rotate(25deg);">
        <i class="fa-solid fa-leaf" style="font-size: 160px; color: var(--tp-theme-secondary);"></i>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-categories-title-wrapper text-center">
                    <span class="tp-section-title-pre">OUR PRODUCT RANGE <i class="fa-solid fa-leaf"></i></span>
                    <h3 class="tp-section-title">We Offer Premium Quality <br> Agricultural Nets</h3>
                </div>
            </div>
        </div>
        <div class="row pt-50 justify-content-center">
            @forelse($categories as $category)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tp-categories-item p-relative mb-45">
                    <div class="tp-categories-item-inner">
                        <div class="tp-categories-thumb">
                            @if($category->slug === 'agriculture-shade-net')
                            <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $category->name }}" style="height: 220px; width: 100%; object-fit: cover;">
                            @elseif($category->slug === 'greenhouse-net')
                            <img src="{{ asset('assets/img/hero/slide-2.png') }}" alt="{{ $category->name }}" style="height: 220px; width: 100%; object-fit: cover;">
                            @elseif($category->slug === 'bird-protection-net')
                            <img src="{{ asset('assets/img/hero/slide-3.png') }}" alt="{{ $category->name }}" style="height: 220px; width: 100%; object-fit: cover;">
                            @else
                            <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $category->name }}" style="height: 220px; width: 100%; object-fit: cover;">
                            @endif
                        </div>
                        <div class="tp-categories-content p-relative">
                            <div class="tp-categories-icon">
                                <i class="fa-solid fa-leaf" style="font-size: 22px;"></i>
                            </div>
                            <h4 class="tp-categories-title"><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></h4>
                            <p>{{ Str::limit($category->description, 80) }}</p>
                            <div class="tp-categories-shape">
                                <img src="{{ asset('assets/img/categories/shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tp-categories-btn">
                        <a href="{{ route('category.show', $category->slug) }}">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p style="color: var(--tp-text-body);">No product categories found in the database.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- categories / products area end -->

<!-- why choose us / support area start -->
<section class="tp-support-area pt-100 pb-110 p-relative" style="background-color: var(--tp-theme-1);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="tp-support-title-wrapper" style="margin-bottom: 40px;">
                    <span class="tp-section-title-pre" style="color: var(--tp-theme-secondary);">WHY CHOOSE US <i class="fa-solid fa-leaf"></i></span>
                    <h3 class="tp-section-title">Reliable HDPE Net Manufacturing <br> With Decades of Trust</h3>
                </div>
                <div class="tp-support-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="crop-tab" data-bs-toggle="tab" data-bs-target="#crop" type="button" role="tab" aria-controls="crop" aria-selected="true">Innovative Crop Protection</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="quality-tab" data-bs-toggle="tab" data-bs-target="#quality" type="button" role="tab" aria-controls="quality" aria-selected="false">Quality You Can Trust</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="versatility-tab" data-bs-toggle="tab" data-bs-target="#versatility" type="button" role="tab" aria-controls="versatility" aria-selected="false">Versatile Solutions</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="crop" role="tabpanel" aria-labelledby="crop-tab">
                            <div class="tp-support-tab-content d-flex flex-wrap" style="border-radius: 0 8px 8px 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                                <div class="tp-support-list">
                                    <ul>
                                        <li><i class="flaticon-checked"></i>UV-stabilized green shade nets</li>
                                        <li><i class="flaticon-checked"></i>Boost plant growth and productivity</li>
                                        <li><i class="flaticon-checked"></i>Protect crops from heavy rain and pests</li>
                                    </ul>
                                </div>
                                <div class="tp-support-text">
                                    <p>Our green shade nets provide excellent shadow percentage ranging from 50% to 90%, custom built for extreme hot zones across India. Keeps crops safe and boosts yield.</p>
                                </div>
                                <div class="tp-support-tab-thumb">
                                    <img src="{{ asset('assets/img/support/supprt-2.jpg') }}" alt="" style="border-radius: 4px; max-height: 120px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="quality" role="tabpanel" aria-labelledby="quality-tab">
                            <div class="tp-support-tab-content d-flex flex-wrap" style="border-radius: 0 8px 8px 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                                <div class="tp-support-list">
                                    <ul>
                                        <li><i class="flaticon-checked"></i>100% Virgin HDPE base raw material</li>
                                        <li><i class="flaticon-checked"></i>ISO 9001:2015 Standards</li>
                                        <li><i class="flaticon-checked"></i>Tested for high tensile load strength</li>
                                    </ul>
                                </div>
                                <div class="tp-support-text">
                                    <p>All nets undergo severe tension testing and UV durability checking in our Daman factory before shipment. We guarantee 5+ years of active field life.</p>
                                </div>
                                <div class="tp-support-tab-thumb">
                                    <img src="{{ asset('assets/img/support/supprt-3.jpg') }}" alt="" style="border-radius: 4px; max-height: 120px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="versatility" role="tabpanel" aria-labelledby="versatility-tab">
                            <div class="tp-support-tab-content d-flex flex-wrap" style="border-radius: 0 8px 8px 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                                <div class="tp-support-list">
                                    <ul>
                                        <li><i class="flaticon-checked"></i>Custom sizes & shading percentages</li>
                                        <li><i class="flaticon-checked"></i>Greenhouse, polyhouse, & shade houses</li>
                                        <li><i class="flaticon-checked"></i>Debris protection safety nets</li>
                                    </ul>
                                </div>
                                <div class="tp-support-text">
                                    <p>We supply massive rolls for large-scale farming as well as customized cut meshes with metallic eyelets on the borders for immediate residential use.</p>
                                </div>
                                <div class="tp-support-tab-thumb">
                                    <img src="{{ asset('assets/img/support/supprt-4.jpg') }}" alt="" style="border-radius: 4px; max-height: 120px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="padding-left: 30px;">
                <div style="position: relative; z-index: 10;">
                    <img src="{{ asset('assets/img/support/support-1.png') }}" alt="Greenhouse Installation" style="width: 100%; border-radius: 8px; box-shadow: 0 15px 40px rgba(0,0,0,0.4); border: 4px solid rgba(255,255,255,0.1);">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why choose us / support area end -->

<!-- B2B Interactive Recommender Section start -->
<section id="selector-tool" class="tp-recommender-area pt-100 pb-100 p-relative" style="background-color: #fafbfc; border-top: 1px solid #f0f2f5; border-bottom: 1px solid #f0f2f5; position: relative; z-index: 1;">
    <!-- Background Leaf Decoration -->
    <div class="d-none d-lg-block" style="position: absolute; left: 50px; bottom: 10%; z-index: -1; opacity: 0.05; transform: rotate(-45deg);">
        <i class="fa-solid fa-leaf" style="font-size: 140px; color: var(--tp-theme-secondary);"></i>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="tp-section-title-wrapper-four mb-50">
                    <span class="tp-section-title-pre" style="color: var(--tp-theme-secondary);">INTERACTIVE SELECTOR TOOL <i class="fa-solid fa-leaf"></i></span>
                    <h3 class="tp-section-title" style="font-size: 32px;">Which Shade Net is Best for Your Farm?</h3>
                    <p class="text-muted mt-10">Select your crop and challenges below to instantly discover the recommended shading rate and specifications.</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Selector Card Container -->
                <div class="recommender-card" style="background-color: #ffffff; border-radius: 16px; box-shadow: 0 15px 45px rgba(0,0,0,0.05); border: 1px solid #f0f2f5; padding: 45px; text-align: center; height: auto;">
                    <style>
                        .rec-option-btn {
                            display: inline-flex !important;
                            flex-direction: column !important;
                            align-items: center !important;
                            justify-content: center !important;
                            width: 150px !important;
                            height: 140px !important;
                            margin: 8px !important;
                            padding: 15px !important;
                            border: 1px solid #e2e8f0 !important;
                            background-color: #ffffff !important;
                            border-radius: 8px !important;
                            cursor: pointer !important;
                            transition: all 0.25s ease !important;
                            box-shadow: 0 2px 5px rgba(0,0,0,0.01) !important;
                        }
                        .rec-option-btn:hover {
                            border-color: var(--tp-theme-primary) !important;
                            background-color: #fafbfc !important;
                            transform: translateY(-3px) !important;
                            box-shadow: 0 8px 20px rgba(31, 122, 77, 0.06) !important;
                        }
                        .rec-icon {
                            font-size: 28px !important;
                            color: var(--tp-theme-primary) !important;
                            margin-bottom: 12px !important;
                            transition: transform 0.25s ease !important;
                        }
                        .rec-option-btn:hover .rec-icon {
                            transform: scale(1.1) !important;
                        }
                        .rec-text {
                            font-size: 13.5px !important;
                            font-weight: 700 !important;
                            color: var(--tp-heading-secondary) !important;
                        }
                        .step-dot {
                            width: 10px;
                            height: 10px;
                            border-radius: 50%;
                            background-color: #e2e8f0;
                            transition: all 0.3s ease;
                        }
                        .step-dot.active {
                            background-color: var(--tp-theme-primary);
                            box-shadow: 0 0 0 4px rgba(31, 122, 77, 0.15);
                        }
                        .step-line {
                            width: 40px;
                            height: 2px;
                            background-color: #e2e8f0;
                            transition: all 0.3s ease;
                        }
                        .step-line.active {
                            background-color: var(--tp-theme-primary);
                        }
                        @media (max-width: 767px) {
                            .recommender-card {
                                padding: 25px !important;
                            }
                            #rec-step-3 .row {
                                flex-direction: column !important;
                            }
                            #rec-step-3 .col-md-5 {
                                border-right: none !important;
                                border-bottom: 1px solid #e2e8f0 !important;
                                min-height: 200px !important;
                                padding: 20px !important;
                            }
                            #rec-step-3 .p-40 {
                                padding: 20px !important;
                            }
                        }
                    </style>

                    <!-- Stepper Indicator -->
                    <div class="recommender-stepper" style="display: flex; justify-content: center; align-items: center; margin-bottom: 35px; gap: 8px;">
                        <div id="step-dot-1" class="step-dot active"></div>
                        <div id="step-line-1" class="step-line"></div>
                        <div id="step-dot-2" class="step-dot"></div>
                        <div id="step-line-2" class="step-line"></div>
                        <div id="step-dot-3" class="step-dot"></div>
                    </div>
                    
                    <!-- Step 1: Crop Select -->
                    <div id="rec-step-1" class="rec-step active-step">
                        <h4 style="font-family: var(--tp-ff-heading); font-size: 20px; font-weight: 700; margin-bottom: 25px; color: var(--tp-heading-secondary);">Step 1: Choose Your Crop or Application</h4>
                        <div class="d-flex flex-wrap justify-content-center">
                            <button onclick="selectCrop('vegetables')" class="rec-option-btn">
                                <i class="fa-solid fa-pepper-hot rec-icon"></i>
                                <span class="rec-text">Vegetables</span>
                            </button>
                            <button onclick="selectCrop('nursery')" class="rec-option-btn">
                                <i class="fa-solid fa-seedling rec-icon"></i>
                                <span class="rec-text">Nursery / Seed</span>
                            </button>
                            <button onclick="selectCrop('floriculture')" class="rec-option-btn">
                                <i class="fa-solid fa-flower rec-icon"></i>
                                <span class="rec-text">Flowers</span>
                            </button>
                            <button onclick="selectCrop('tea')" class="rec-option-btn">
                                <i class="fa-solid fa-leaf rec-icon"></i>
                                <span class="rec-text">Tea / Coffee</span>
                            </button>
                            <button onclick="selectCrop('construction')" class="rec-option-btn">
                                <i class="fa-solid fa-helmet-safety rec-icon"></i>
                                <span class="rec-text">Construction</span>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Challenge Select -->
                    <div id="rec-step-2" class="rec-step" style="display: none;">
                        <h4 style="font-family: var(--tp-ff-heading); font-size: 20px; font-weight: 700; margin-bottom: 25px; color: var(--tp-heading-secondary);">Step 2: Choose Your Primary Challenge</h4>
                        <div class="d-flex flex-wrap justify-content-center">
                            <button onclick="selectChallenge('heat')" class="rec-option-btn">
                                <i class="fa-solid fa-sun rec-icon"></i>
                                <span class="rec-text">Excess Heat</span>
                            </button>
                            <button onclick="selectChallenge('birds')" class="rec-option-btn">
                                <i class="fa-solid fa-crow rec-icon"></i>
                                <span class="rec-text">Birds / Pests</span>
                            </button>
                            <button onclick="selectChallenge('rain')" class="rec-option-btn">
                                <i class="fa-solid fa-cloud-showers-heavy rec-icon"></i>
                                <span class="rec-text">Rain / Hail</span>
                            </button>
                            <button onclick="selectChallenge('wind')" class="rec-option-btn">
                                <i class="fa-solid fa-wind rec-icon"></i>
                                <span class="rec-text">Wind / Dust</span>
                            </button>
                        </div>
                        <div class="mt-30 text-center">
                            <button onclick="goBackToStep1()" style="background: none; border: none; font-size: 14px; font-weight: 700; color: var(--tp-theme-primary); cursor: pointer; display: inline-flex; align-items: center;"><i class="fa-solid fa-chevron-left mr-5"></i> Go Back</button>
                        </div>
                    </div>

                    <!-- Step 3: Recommendation Results -->
                    <div id="rec-step-3" class="rec-step" style="display: none; text-align: left;">
                        <div class="row align-items-center" style="border: 1px solid #e2e8f0; border-radius: 12px; background-color: #fafbfc; overflow: hidden; padding: 0; margin: 0;">
                            <div class="col-md-5 text-center p-0" style="background-color: #ffffff; border-right: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; min-height: 280px; padding: 20px !important;">
                                <img id="rec-product-image" src="" alt="Recommended Net" style="width: 100%; max-height: 240px; border-radius: 8px; object-fit: contain;">
                            </div>
                            <div class="col-md-7 p-40" style="padding: 40px !important; text-align: left;">
                                <span class="badge" style="background-color: var(--tp-theme-secondary); color: white; padding: 6px 12px; margin-bottom: 15px; font-size: 11px; font-weight: 700; border-radius: 4px; text-transform: uppercase; letter-spacing: 1px;">Recommended Solution</span>
                                <h4 id="rec-product-title" style="font-family: var(--tp-ff-heading); font-size: 24px; font-weight: 800; color: var(--tp-heading-secondary); margin-bottom: 12px;">Tomato Shade Net</h4>
                                <p id="rec-product-desc" class="text-muted" style="font-size: 15px; line-height: 1.7; margin-bottom: 25px;">50% Green Shade Net is optimized to control solar radiation and humidity levels for premium tomato crops.</p>
                                <div style="display: flex; gap: 12px; flex-wrap: wrap; align-items: center;">
                                    <button id="rec-add-quote-btn" class="tp-btn" style="border: none; background-color: var(--tp-theme-primary); padding: 12px 25px; font-size: 14px; height: auto; line-height: 1.5; border-radius: 4px; white-space: nowrap;"><i class="fa-solid fa-plus-circle mr-5"></i> Add to Basket</button>
                                    <a id="rec-view-product-btn" class="tp-btn" href="#" style="background-color: var(--tp-heading-secondary); padding: 12px 25px; font-size: 14px; height: auto; line-height: 1.5; border-radius: 4px; white-space: nowrap;">View Details</a>
                                    <button onclick="resetRecommender()" style="background: none; border: none; font-size: 14px; font-weight: 700; color: var(--tp-text-body); cursor: pointer; padding: 10px 15px; display: inline-flex; align-items: center; transition: color 0.3s;" onmouseover="this.style.color='var(--tp-theme-primary)'" onmouseout="this.style.color='var(--tp-text-body)'"><i class="fa-solid fa-rotate-left mr-5"></i> Restart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
let selectedCrop = '';
let selectedChallenge = '';

// Recommendation Database
const recommendationDb = {
    'vegetables_heat': {
        name: '50% Green Agriculture Shade Net',
        desc: 'Ideal for vegetable crops like tomatoes and capsicums. Rejects 50% solar radiation while maintaining sufficient PAR light for photosynthesis and preventing heat stress.',
        image: '{{ asset("assets/img/products/shade-net-50.png") }}',
        slug: '50-percent-green-shade-net',
        id: '2'
    },
    'vegetables_birds': {
        name: 'Anti-Bird & Protective Orchard Netting',
        desc: 'Precision-woven fine meshes designed to secure vegetable structures and fruit orchards from bird attacks and pest containment.',
        image: '{{ asset("assets/img/products/bird-net.png") }}',
        slug: 'anti-bird-protection-mesh',
        id: '7'
    },
    'vegetables_rain': {
        name: 'Greenhouse Poly Net (40% Shading)',
        desc: 'Warp-knitted structural netting protecting indoor nurseries and vegetable polyhouses from violent rainstorms, wind damage, and pest ingress.',
        image: '{{ asset("assets/img/products/greenhouse-net.png") }}',
        slug: 'greenhouse-poly-net-40-percent',
        id: '5'
    },
    'vegetables_wind': {
        name: '35% Agro Shade Netting',
        desc: 'Low shadow-percentage net perfect for crops that need high light but require dust screening, windbreaking, and minor climate regulation.',
        image: '{{ asset("assets/img/products/shade-net-35.png") }}',
        slug: '35-percent-green-shade-net',
        id: '1'
    },
    'nursery_heat': {
        name: '75% High Density Shading Net',
        desc: 'Provides 75% dark shade factor. Ideal for plant nurseries, delicate seedlings, and shade-loving foliage plants (e.g. ferns) to prevent leaf sunburn.',
        image: '{{ asset("assets/img/products/shade-net-75.png") }}',
        slug: '75-percent-green-shade-net',
        id: '3'
    },
    'nursery_birds': {
        name: 'Heavy Duty Anti-Bird Canopy',
        desc: 'Premium bird protection canopy meshes ensuring seedlings and tender nursery sprouts remain safe from foraging birds and ground pests.',
        image: '{{ asset("assets/img/products/bird-net.png") }}',
        slug: 'anti-bird-protection-mesh',
        id: '7'
    },
    'nursery_rain': {
        name: 'Greenhouse Poly Net (40% Shading)',
        desc: 'Extra-durable safety screening to break the force of heavy rains and hail over tender seed nurseries, avoiding soil displacement.',
        image: '{{ asset("assets/img/products/greenhouse-net.png") }}',
        slug: 'greenhouse-poly-net-40-percent',
        id: '5'
    },
    'nursery_wind': {
        name: '50% Agro Shade Netting',
        desc: 'Double-lock knitted mesh to control soil-drying wind drafts and screening airborne dust from sensitive nursery seedlings.',
        image: '{{ asset("assets/img/products/shade-net-50.png") }}',
        slug: '50-percent-green-shade-net',
        id: '2'
    },
    'floriculture_heat': {
        name: '50% Green Agriculture Shade Net',
        desc: 'Maintains optimal climate, temperature, and light levels inside floriculture greenhouses for commercial rose, gerbera, and orchid farming.',
        image: '{{ asset("assets/img/products/shade-net-50.png") }}',
        slug: '50-percent-green-shade-net',
        id: '2'
    },
    'floriculture_birds': {
        name: 'Premium Insect & Bird Protection Mesh',
        desc: 'Secure protective netting for flower cultivation preventing insects and birds from damaging expensive blooms and structural netting.',
        image: '{{ asset("assets/img/products/bird-net.png") }}',
        slug: 'anti-bird-protection-mesh',
        id: '7'
    },
    'floriculture_rain': {
        name: 'Greenhouse Poly Net (40% Shading)',
        desc: 'Heavy-duty protection mesh that acts as a shield against heavy rain droplets, ensuring delicate petals remain unblemished.',
        image: '{{ asset("assets/img/products/greenhouse-net.png") }}',
        slug: 'greenhouse-poly-net-40-percent',
        id: '5'
    },
    'floriculture_wind': {
        name: '35% Agro Shade Netting',
        desc: 'Light shade screen preventing harsh wind gusts from breaking tall flower stems while preserving maximum sunlight exposure.',
        image: '{{ asset("assets/img/products/shade-net-35.png") }}',
        slug: '35-percent-green-shade-net',
        id: '1'
    },
    'tea_heat': {
        name: '35% Agro Shade Netting',
        desc: 'Perfect for tea and coffee plantations, keeping soil humidity high and reducing shade leaf burning in high-altitude zones.',
        image: '{{ asset("assets/img/products/shade-net-35.png") }}',
        slug: '35-percent-green-shade-net',
        id: '1'
    },
    'tea_birds': {
        name: 'General Purpose Agricultural Net',
        desc: 'Standard agricultural netting providing physical containment and security from larger birds and crop-raiding animals.',
        image: '{{ asset("assets/img/products/shade-net.png") }}',
        slug: 'agriculture-shade-net-75-percent',
        id: '4'
    },
    'tea_rain': {
        name: '50% Green Agriculture Shade Net',
        desc: 'Heavy-mesh screening to mitigate the impact of sudden torrential rain and hail in mountain-slope tea plantations.',
        image: '{{ asset("assets/img/products/shade-net-50.png") }}',
        slug: '50-percent-green-shade-net',
        id: '2'
    },
    'tea_wind': {
        name: '35% Agro Shade Netting',
        desc: 'Wind-breaking mesh that screens crops from frosty winds in high elevation hill regions, protecting delicate tea leaves.',
        image: '{{ asset("assets/img/products/shade-net-35.png") }}',
        slug: '35-percent-green-shade-net',
        id: '1'
    },
    'construction_heat': {
        name: 'Construction Debris Safety Net',
        desc: 'Heavy-duty construction safety net designed to cover open structural facades, containing debris while acting as a shade barrier.',
        image: '{{ asset("assets/img/products/debris-safety-net.png") }}',
        slug: 'construction-debris-safety-net',
        id: '6'
    },
    'construction_birds': {
        name: 'Construction Debris Safety Net',
        desc: 'Acts as a robust physical barrier to block birds from nesting in open elevator shafts, balcony frameworks, and structural joints during building.',
        image: '{{ asset("assets/img/products/debris-safety-net.png") }}',
        slug: 'construction-debris-safety-net',
        id: '6'
    },
    'construction_rain': {
        name: 'HDPE Woven Ground Cover Fabric',
        desc: 'Heavyweight woven ground sheet to protect excavation sites, contain soil erosion, and prevent rain water stagnation.',
        image: '{{ asset("assets/img/products/woven-fabric.png") }}',
        slug: 'hdpe-woven-ground-cover-fabric',
        id: '8'
    },
    'construction_wind': {
        name: 'Construction Debris Safety Net',
        desc: 'Warp-knitted green safety net acting as a wind and dust control barrier in high-rise building facades, keeping roads safe from dust.',
        image: '{{ asset("assets/img/products/debris-safety-net.png") }}',
        slug: 'construction-debris-safety-net',
        id: '6'
    }
};

function updateStepper(step) {
    // Reset all dots & lines
    document.getElementById('step-dot-1').classList.remove('active');
    document.getElementById('step-dot-2').classList.remove('active');
    document.getElementById('step-dot-3').classList.remove('active');
    document.getElementById('step-line-1').classList.remove('active');
    document.getElementById('step-line-2').classList.remove('active');
    
    // Set active states
    if (step >= 1) {
        document.getElementById('step-dot-1').classList.add('active');
    }
    if (step >= 2) {
        document.getElementById('step-line-1').classList.add('active');
        document.getElementById('step-dot-2').classList.add('active');
    }
    if (step >= 3) {
        document.getElementById('step-line-2').classList.add('active');
        document.getElementById('step-dot-3').classList.add('active');
    }
}

function selectCrop(crop) {
    selectedCrop = crop;
    document.getElementById('rec-step-1').style.display = 'none';
    
    // Transition to Step 2
    document.getElementById('rec-step-2').style.display = 'block';
    updateStepper(2);
}

function goBackToStep1() {
    document.getElementById('rec-step-2').style.display = 'none';
    document.getElementById('rec-step-1').style.display = 'block';
    updateStepper(1);
}

function selectChallenge(challenge) {
    selectedChallenge = challenge;
    document.getElementById('rec-step-2').style.display = 'none';
    
    // Resolve recommendation
    const key = `${selectedCrop}_${selectedChallenge}`;
    const result = recommendationDb[key] || recommendationDb['vegetables_heat'];
    
    // Set text and actions
    document.getElementById('rec-product-title').textContent = result.name;
    document.getElementById('rec-product-desc').textContent = result.desc;
    document.getElementById('rec-product-image').src = result.image;
    document.getElementById('rec-view-product-btn').href = `/products/${result.slug}`;
    
    // Setup add-to-basket button
    const basketBtn = document.getElementById('rec-add-quote-btn');
    basketBtn.onclick = function() {
        if (window.addBasketItem) {
            window.addBasketItem(result.id, result.name, result.image);
        } else {
            alert('Added to Quote request!');
        }
    };
    
    document.getElementById('rec-step-3').style.display = 'block';
    updateStepper(3);
}

function resetRecommender() {
    selectedCrop = '';
    selectedChallenge = '';
    document.getElementById('rec-step-3').style.display = 'none';
    document.getElementById('rec-step-1').style.display = 'block';
    updateStepper(1);
}
</script>
<!-- B2B Interactive Recommender Section end -->

<!-- counter / stats area start -->
<section class="tp-counter-area pt-120 pb-90" style="background-color: var(--tp-theme-1); position: relative; z-index: 1;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tp-counter-item text-center mb-30">
                    <div class="tp-counter-icon">
                        <span><i class="fa-solid fa-medal"></i></span>
                    </div>
                    <div class="tp-counter-content">
                        <h4 class="tp-counter-title"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="20"></span>+</h4>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tp-counter-item text-center mb-30">
                    <div class="tp-counter-icon">
                        <span><i class="fa-solid fa-circle-check"></i></span>
                    </div>
                    <div class="tp-counter-content">
                        <h4 class="tp-counter-title"><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="5000"></span>+</h4>
                        <p>Safe Deliveries</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tp-counter-item text-center mb-30">
                    <div class="tp-counter-icon">
                        <span><i class="fa-solid fa-users"></i></span>
                    </div>
                    <div class="tp-counter-content">
                        <h4 class="tp-counter-title"><span class="purecounter" data-purecounter-duration="1" data-purecounter-end="1000"></span>+</h4>
                        <p>Happy Customers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tp-counter-item text-center mb-30">
                    <div class="tp-counter-icon">
                        <span><i class="fa-solid fa-layer-group"></i></span>
                    </div>
                    <div class="tp-counter-content">
                        <h4 class="tp-counter-title"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="25"></span>+</h4>
                        <p>Products Range</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter / stats area end -->

<!-- gallery / polyhouse views area start -->
<section id="gallery" class="tp-countries-area pt-120 pb-110 p-relative" style="position: relative; z-index: 1;">
    <!-- Background Leaf Decoration -->
    <div class="d-none d-lg-block" style="position: absolute; right: 50px; top: 10%; z-index: -1; opacity: 0.05; transform: rotate(15deg);">
        <i class="fa-solid fa-leaf" style="font-size: 150px; color: var(--tp-theme-secondary);"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-categories-title-wrapper text-center mb-50">
                    <span class="tp-section-title-pre">OUR FACTORY & SITES GALLERY <i class="fa-solid fa-leaf"></i></span>
                    <h3 class="tp-section-title">See AgroNet in Action</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gx-0">
        <div class="tp-countries-slider">
            <div class="tp-countries-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tp-countries-item text-center">
                            <a href="{{ asset('assets/img/breadcrumb/breadcrumb.jpg') }}" class="popup-image">
                                <div class="tp-countries-thumb">
                                    <img src="{{ asset('assets/img/breadcrumb/breadcrumb.jpg') }}" alt="Shade Net Field" style="height: 300px; object-fit: cover;">
                                </div>
                                <div class="tp-countries-name">
                                    <h4 class="tp-countries-title">Field Shading</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-countries-item text-center">
                            <a href="{{ asset('assets/img/support/support-1.png') }}" class="popup-image">
                                <div class="tp-countries-thumb">
                                    <img src="{{ asset('assets/img/support/support-1.png') }}" alt="Polyhouse Installation" style="height: 300px; object-fit: cover;">
                                </div>
                                <div class="tp-countries-name">
                                    <h4 class="tp-countries-title">Polyhouse</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-countries-item text-center">
                            <a href="{{ asset('assets/img/about/home-2/about-thumb-2-2.jpg') }}" class="popup-image">
                                <div class="tp-countries-thumb">
                                    <img src="{{ asset('assets/img/about/home-2/about-thumb-2-2.jpg') }}" alt="Factory Facility" style="height: 300px; object-fit: cover;">
                                </div>
                                <div class="tp-countries-name">
                                    <h4 class="tp-countries-title">Daman Weaving Unit</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-countries-item text-center">
                            <a href="{{ asset('assets/img/faq/faq-1.jpg') }}" class="popup-image">
                                <div class="tp-countries-thumb">
                                    <img src="{{ asset('assets/img/faq/faq-1.jpg') }}" alt="Agricultural Net" style="height: 300px; object-fit: cover;">
                                </div>
                                <div class="tp-countries-name">
                                    <h4 class="tp-countries-title">Anti-Bird Canopy</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-countries-item text-center">
                            <a href="{{ asset('assets/img/products/shade-net.png') }}" class="popup-image">
                                <div class="tp-countries-thumb">
                                    <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="Green shade net roll" style="height: 300px; object-fit: cover;">
                                </div>
                                <div class="tp-countries-name">
                                    <h4 class="tp-countries-title">Finished Net Rolls</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery / polyhouse views area end -->

<!-- testimonial area start -->
<section class="tp-testimonial-area pt-120 pb-120 p-relative" style="background-color: #fafbfc; position: relative; z-index: 1;">
    <!-- Background Leaf Decoration -->
    <div class="d-none d-lg-block" style="position: absolute; left: 60px; top: 15%; z-index: -1; opacity: 0.05; transform: rotate(-15deg);">
        <i class="fa-solid fa-leaf" style="font-size: 150px; color: var(--tp-theme-secondary);"></i>
    </div>
    <div class="tp-testimonial-shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-testimonial-title-wrapper text-center">
                    <span class="tp-section-title-pre">WHAT OUR FARMERS & CLIENTS SAY <i class="fa-solid fa-leaf"></i></span>
                    <h3 class="tp-section-title">Customer Testimonials</h3>
                </div>
            </div>
        </div>
        <div class="tp-testimonial-slider wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="tp-testimonial-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mb-30">
                        <div class="tp-testimonial-item p-relative">
                            <div class="tp-testimonial-ratting">
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                            </div>
                            <div class="tp-testimonial-text">
                                <p>"AgroNet provides the best quality shade nets. The material is durable and delivery is always on time. Highly recommended for polyhouse farming."</p>
                            </div>
                            <div class="tp-testimonial-avata">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100&h=100" alt="Ramesh Patel">
                            </div>
                            <div class="tp-testimonial-avata-info">
                                <h4 class="tp-testimonial-title">Ramesh Patel</h4>
                                <span>Farmer, Daman</span>
                            </div>
                            <div class="tp-testimonial-quote">
                                <i class="fa-solid fa-quote-right" style="font-size: 38px; color: var(--tp-theme-primary); opacity: 0.15;"></i>
                            </div>
                            <div class="tp-testimonial-item-shape">
                                <img src="{{ asset('assets/img/review/shape-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mb-30">
                        <div class="tp-testimonial-item p-relative">
                            <div class="tp-testimonial-ratting">
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                            </div>
                            <div class="tp-testimonial-text">
                                <p>"Outstanding customer support and advanced German manufacturing quality. The greenhouse nets have significantly improved our crop yield."</p>
                            </div>
                            <div class="tp-testimonial-avata">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=100&h=100" alt="Suresh Mehta">
                            </div>
                            <div class="tp-testimonial-avata-info">
                                <h4 class="tp-testimonial-title">Suresh Mehta</h4>
                                <span>Greenhouse Owner, Gandhinagar</span>
                            </div>
                            <div class="tp-testimonial-quote">
                                <i class="fa-solid fa-quote-right" style="font-size: 38px; color: var(--tp-theme-primary); opacity: 0.15;"></i>
                            </div>
                            <div class="tp-testimonial-item-shape">
                                <img src="{{ asset('assets/img/review/shape-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide mb-30">
                        <div class="tp-testimonial-item p-relative">
                            <div class="tp-testimonial-ratting">
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                                <span><i class="fa-sharp fa-solid fa-star"></i></span>
                            </div>
                            <div class="tp-testimonial-text">
                                <p>"Their construction safety nets are exceptionally strong and meet all safety standards. Timely delivery and highly competitive pricing."</p>
                            </div>
                            <div class="tp-testimonial-avata">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=100&h=100" alt="Vikram Singh">
                            </div>
                            <div class="tp-testimonial-avata-info">
                                <h4 class="tp-testimonial-title">Vikram Singh</h4>
                                <span>Infrastructure Developer, Ahmedabad</span>
                            </div>
                            <div class="tp-testimonial-quote">
                                <i class="fa-solid fa-quote-right" style="font-size: 38px; color: var(--tp-theme-primary); opacity: 0.15;"></i>
                            </div>
                            <div class="tp-testimonial-item-shape">
                                <img src="{{ asset('assets/img/review/shape-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->

<!-- trusted partners brand slider start -->
<section class="partners-logobar pt-60 pb-80" aria-label="Trusted Partners" style="background-color: #fafbfc; border-top: 1px solid #f0f2f5;">
    <div class="container text-center mb-35">
        <p class="partners-title" style="font-weight: 700; color: var(--tp-heading-secondary); text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Trusted By Farmers, Greenhouses & Industries Across India</p>
    </div>
    <div class="logo-marquee-wrapper" style="overflow: hidden; width: 100%; white-space: nowrap; position: relative;">
        <div class="logo-marquee-track d-inline-block" style="animation: logoMarquee 25s linear infinite;">
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">ITC Limited</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">TAJ Hotels</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Adani Agri</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Reliance Foundation</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Mahindra Rise</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Godrej Agrovet</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">TATA Rallis</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">UPL Limited</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">PI Industries</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">IFFCO</span>
        </div>
        <div class="logo-marquee-track d-inline-block" style="animation: logoMarquee 25s linear infinite;">
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">ITC Limited</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">TAJ Hotels</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Adani Agri</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Reliance Foundation</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Mahindra Rise</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">Godrej Agrovet</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">TATA Rallis</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">UPL Limited</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">PI Industries</span>
            <span style="font-size: 18px; font-weight: 800; color: #b4c2b9; padding: 0 40px; text-transform: uppercase;">IFFCO</span>
        </div>
    </div>
</section>

<style>
@keyframes logoMarquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
}
.logo-marquee-wrapper {
    display: flex;
}
</style>
<!-- trusted partners brand slider end -->

<!-- callback inquiry contact area start -->
<section class="tp-contact-area pb-120 p-relative pt-100">
    <div class="tp-contact-bg" data-background="{{ asset('assets/img/contact/contact_bg.png') }}"></div>
    <div class="tp-contact-shape-2">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tp-contact-shape">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tp-contact-wrapper">
                    <div class="tp-contact-title-wrapper">
                        <span class="tp-section-title-pre">CONTACT US <i class="fa-solid fa-leaf"></i></span>
                        <h3 class="tp-section-title">Get a Call Back / Free Quote</h3>
                    </div>
                    
                    @if(session('success'))
                    <div class="alert alert-success mt-20 mb-10" role="alert" style="border-radius: 8px; font-weight: 600; background-color: #e6f7ee; border-color: #1F7A4D; color: #1F7A4D; padding: 12px 20px;">
                        <i class="fa-solid fa-circle-check mr-10"></i> {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger mt-20 mb-10" role="alert" style="border-radius: 8px; font-weight: 600; background-color: #fde8e8; border-color: #f05252; color: #f05252; padding: 12px 20px;">
                        <ul class="mb-0" style="list-style-type: none; padding-left: 0;">
                            @foreach($errors->all() as $error)
                            <li><i class="fa-solid fa-triangle-exclamation mr-10"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="tp-contact-form mt-20">
                        @csrf
                        <input type="text" name="name" placeholder="Your Name*" required>
                        <input type="email" name="email" placeholder="Your Email*" required>
                        <input type="text" name="phone" placeholder="Your Phone Number*" required>
                        <input type="text" name="company" placeholder="Company Name*" required>
                        <textarea name="message" placeholder="Describe your requirement (Net type, GSM, dimensions)*" required style="height: 120px; line-height: 1.5; margin-bottom: 20px; border: 1px solid #E0E2E3; padding: 15px 26px; outline: none;"></textarea>
                        <button type="submit" class="tp-btn">Submit Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra_js')
<script>
    jQuery(document).ready(function($) {
        $('.popup-image').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-with-zoom',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    });
</script>
@endsection
