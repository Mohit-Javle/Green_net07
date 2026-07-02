@extends('layouts.frontend')

@section('title', $product->name . ' — AgroNet Solutions')
@section('meta_description', Str::limit($product->description, 160))

@section('content')

<!-- Shop Details breadcrumb area start -->
<section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix">
    <div class="breadcrumb__bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb.jpg') }}"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__list">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="dvdr">/</span>
                        <span><a href="{{ route('products.index') }}">Products</a></span>
                        <span class="dvdr">/</span>
                        <span>{{ $product->name }}</span>
                    </div>
                    <h3 class="breadcrumb__title">{{ $product->name }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Details breadcrumb area end -->

<!-- product details area start -->
<section class="product__details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="product__details-thumb-tab mr-70">
                    <div class="product__details-thumb-content w-img" style="background-color: #fafbfc; padding: 20px; border-radius: 8px; border: 1px solid #f0f2f5;">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                @if($product->images && count($product->images) > 0)
                                <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->slug === '35-percent-green-shade-net')
                                <img src="{{ asset('assets/img/products/shade-net-35.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->slug === '50-percent-green-shade-net')
                                <img src="{{ asset('assets/img/products/shade-net-50.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->slug === '75-percent-green-shade-net')
                                <img src="{{ asset('assets/img/products/shade-net-75.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->slug === 'construction-debris-safety-net')
                                <img src="{{ asset('assets/img/products/debris-safety-net.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->slug === 'greenhouse-poly-net-40-percent')
                                <img src="{{ asset('assets/img/products/greenhouse-net.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->slug === 'poultry-farm-shade-net')
                                <img src="{{ asset('assets/img/products/poultry-net.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->category && $product->category->slug === 'bird-protection-net')
                                <img src="{{ asset('assets/img/products/bird-net.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @elseif($product->category && $product->category->slug === 'hdpe-woven-fabric')
                                <img src="{{ asset('assets/img/products/woven-fabric.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @else
                                <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $product->name }}" id="product-main-img" style="max-height: 480px; width: 100%; object-fit: contain;">
                                @endif
                            </div>
                        </div>
                    </div>
                    @if($product->images && count($product->images) > 1)
                    <div class="product__details-thumb-nav tp-tab mt-20">
                        <nav style="display: flex; gap: 10px;">
                            @foreach($product->images as $img)
                            <button class="nav-link" type="button" onclick="document.getElementById('product-main-img').src='{{ asset('storage/' . $img) }}'" style="border: 1px solid #e0e2e3; padding: 5px; border-radius: 4px; width: 80px; height: 80px;">
                                <img src="{{ asset('storage/' . $img) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                            </button>
                            @endforeach
                        </nav>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="col-xl-5 col-lg-6">
                <div class="product__details-wrapper">
                    <div class="product__details-stock">
                        <span>ISO Certified 9001:2015</span>
                    </div>
                    <h3 class="product__details-title">{{ $product->name }}</h3>

                    <div class="product__details-rating d-flex align-items-center mb-20">
                        <div class="product__rating product__rating-2 d-flex">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="product__details-rating-count">
                            <span>(Premium Quality Mesh)</span>
                        </div>
                    </div>

                    <p style="font-size: 16px; line-height: 1.7; color: var(--tp-text-body); margin-bottom: 25px;">
                        {{ $product->short_description ?? 'High performance HDPE mesh designed for nurseries, greenhouses, structural protection, and agricultural applications.' }}
                    </p>

                    <div class="product__details-price mb-30">
                        @if($product->shade_percentage && $product->shade_percentage !== 'N/A')
                        <span class="product__details-ammount new-ammount" style="font-size: 24px; font-weight: 700; color: var(--tp-theme-primary);">{{ $product->shade_percentage }} Shade</span>
                        @endif
                        @if($product->gsm)
                        <span class="product__details-ammount old-ammount" style="font-size: 16px; text-decoration: none; padding-left: 15px; color: var(--tp-heading-secondary);">({{ $product->gsm }} GSM)</span>
                        @endif
                    </div>

                    <div class="product__details-action d-flex flex-wrap align-items-center mb-35" style="gap: 10px;">
                        <a href="{{ route('contact') }}?product={{ urlencode($product->name) }}&category={{ urlencode($product->category->name ?? '') }}" class="tp-btn">
                            <i class="fa-solid fa-file-invoice mr-5"></i> Get Free Quote
                        </a>
                        <button class="tp-btn add-to-quote-btn" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-image="{{ $product->images && count($product->images) > 0 ? asset('storage/' . $product->images[0]) : ($product->slug === '35-percent-green-shade-net' ? asset('assets/img/products/shade-net-35.png') : ($product->slug === '50-percent-green-shade-net' ? asset('assets/img/products/shade-net-50.png') : ($product->slug === '75-percent-green-shade-net' ? asset('assets/img/products/shade-net-75.png') : asset('assets/img/products/shade-net.png')))) }}" style="border: none; background-color: var(--tp-theme-secondary); color: #fff;"><i class="fa-solid fa-plus-circle mr-5"></i> Add to Quote Basket</button>
                        <a href="tel:+917923456789" class="tp-btn" style="background-color: var(--tp-heading-secondary);">
                            <i class="fa-solid fa-phone mr-5"></i> Call Factory
                        </a>
                    </div>

                    <div class="product__details-sku product__details-more">
                        <p>Category:</p>
                        <span><a href="{{ route('category.show', $product->category->slug ?? 'agriculture-shade-net') }}">{{ $product->category->name ?? 'General Nets' }}</a></span>
                    </div>
                    @if($product->width)
                    <div class="product__details-categories product__details-more">
                        <p>Available Widths:</p>
                        <span>{{ $product->width }}</span>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product details area end -->

<!-- product details tab area start -->
<section class="product__details-tab-area pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="product__details-tab-nav">
                    <nav>
                        <div class="product__details-tab-nav-inner nav tp-tab-menu d-flex flex-sm-nowrap flex-wrap" id="nav-tab-info" role="tablist">
                            <button class="nav-link active" id="nav-desc-tab" data-bs-toggle="tab" data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc" aria-selected="true">Description & Applications</button>
                            @if($product->specifications && count($product->specifications) > 0)
                            <button class="nav-link" id="nav-additional-tab" data-bs-toggle="tab" data-bs-target="#nav-additional" type="button" role="tab" aria-controls="nav-additional" aria-selected="false">Technical Specifications</button>
                            @endif
                            <span id="marker" class="tp-tab-line d-none d-sm-inline-block"></span>
                        </div>
                    </nav>
                </div>
                <div class="product__details-tab-content">
                    <div class="tab-content" id="nav-tabContent-info">
                        <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                            <div class="product__details-description pt-50">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="product__details-description-content">
                                            <h3 class="product-desc-title mb-20">Product Overview</h3>
                                            <p style="font-size: 16px; line-height: 1.8; color: var(--tp-text-body);">{{ $product->description }}</p>
                                            
                                            <h4 class="product-desc-title mt-40 mb-15">Key Benefits:</h4>
                                            <ul style="list-style-type: none; padding-left: 0;">
                                                <li style="padding: 5px 0; font-size: 15px; color: var(--tp-text-body);"><i class="fa-solid fa-circle-check" style="color: var(--tp-theme-primary); margin-right: 10px;"></i> 100% Virgin HDPE base guarantees high tensile strength.</li>
                                                <li style="padding: 5px 0; font-size: 15px; color: var(--tp-text-body);"><i class="fa-solid fa-circle-check" style="color: var(--tp-theme-primary); margin-right: 10px;"></i> Fully UV-stabilized mesh prevents color fading and brittleness.</li>
                                                <li style="padding: 5px 0; font-size: 15px; color: var(--tp-text-body);"><i class="fa-solid fa-circle-check" style="color: var(--tp-theme-primary); margin-right: 10px;"></i> Scientifically designed shadows protect crops from sun damage.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($product->specifications && count($product->specifications) > 0)
                        <div class="tab-pane fade" id="nav-additional" role="tabpanel" aria-labelledby="nav-additional-tab">
                            <div style="display: flex; flex-wrap: wrap; gap: 12px; padding: 25px 0;">
                                @foreach($product->specifications as $key => $value)
                                <div style="display: inline-flex; align-items: center; background-color: #fafbfc; border: 1px solid #eaeaea; border-radius: 4px; padding: 8px 16px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                                    <span style="font-weight: 700; color: var(--tp-heading-secondary); margin-right: 6px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">{{ $key }}:</span>
                                    <span style="color: var(--tp-text-body); font-size: 14px;">{{ $value }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product details tab area end -->

<!-- related products area start -->
@if($relatedProducts->count() > 0)
<section class="tp-related-product-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-testimonial-title-wrapper mb-50">
                    <span class="tp-section-title-pre-2" style="color: var(--tp-theme-primary);">SIMILAR PRODUCTS</span>
                    <h3 class="tp-section-title" style="font-size: 32px;">Related Net Solutions</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($relatedProducts as $related)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="tp-product-item text-center mb-30">
                    <div class="tp-product-thumb">
                        @if($related->images && count($related->images) > 0)
                        <img src="{{ asset('storage/' . $related->images[0]) }}" alt="{{ $related->name }}" style="height: 220px; width: 100%; object-fit: cover;">
                        @else
                        <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $related->name }}" style="height: 220px; width: 100%; object-fit: cover;">
                        @endif
                        <div class="tp-product-cart">
                            <a href="{{ route('products.show', $related->slug) }}" class="icon-2"><i class="fa-light fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="tp-product-content">
                        <div class="tp-product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4 class="tp-product-title"><a href="{{ route('products.show', $related->slug) }}">{{ $related->name }}</a></h4>
                        <div class="tp-product-content-price">
                            <span>{{ $related->shade_percentage ?? ($related->gsm ?? 'Standard') }}</span>
                        </div>
                        <div class="tp-product-btn">
                            <a href="{{ route('products.show', $related->slug) }}">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- related products area end -->

@endsection
