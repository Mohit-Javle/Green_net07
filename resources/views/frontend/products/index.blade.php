@extends('layouts.frontend')

@section('title', isset($category) ? $category->name . ' — Products' : 'All Products')
@section('meta_description', 'Browse AgroNet Solutions complete range of HDPE shade nets, agricultural nets, greenhouse nets and construction safety nets.')

@section('content')

<!-- Shop breadcrumb area start -->
<section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix">
    <div class="breadcrumb__bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb.jpg') }}"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__list">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>Shop</span>
                    </div>
                    <h3 class="breadcrumb__title">{{ isset($category) ? $category->name : 'Our Products' }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop breadcrumb area end -->

<!-- shop-area-start -->
<section class="shop-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="tp-shop-sidebar mb-40">
                    <!-- Search Widget -->
                    <div class="tp-shop-sidebar-search mb-30">
                        <form action="{{ route('products.index') }}" method="GET">
                            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search Products...">
                            <button type="submit" class="tp-shop-sidebar-search-icon" style="background: none; border: none; outline: none; position: absolute; right: 20px; top: 50%; transform: translateY(-50%);">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="tp-shop-sidebar-category mb-30">
                        <h4 class="tp-shop-sidebar-title mb-25">Categories</h4>
                        <div class="tp-shop-sidebar-category-wrap">
                            <div class="tp-shop-sidebar-category-item {{ !isset($category) ? 'active' : '' }}" style="padding: 10px 0; border-bottom: 1px solid #f0f2f5;">
                                <a href="{{ route('products.index') }}" style="font-weight: 700; color: {{ !isset($category) ? 'var(--tp-theme-primary)' : 'inherit' }};">
                                    All Products <i class="fa-sharp fa-regular fa-arrow-right" style="float: right; margin-top: 4px;"></i>
                                </a>
                            </div>
                            @foreach($categories as $cat)
                            <div class="tp-shop-sidebar-category-item {{ isset($category) && $category->id === $cat->id ? 'active' : '' }}" style="padding: 10px 0; border-bottom: 1px solid #f0f2f5;">
                                <a href="{{ route('category.show', $cat->slug) }}" style="font-weight: 700; color: {{ isset($category) && $category->id === $cat->id ? 'var(--tp-theme-primary)' : 'inherit' }};">
                                    {{ $cat->name }} <i class="fa-sharp fa-regular fa-arrow-right" style="float: right; margin-top: 4px;"></i>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Call back banner widget -->
                    <div class="tp-shop-sidebar-price mb-30 p-25" style="background-color: var(--tp-theme-1); border-radius: 8px; text-align: center;">
                        <i class="fa-solid fa-phone-volume text-white mb-20" style="font-size: 32px; color: var(--tp-theme-secondary) !important;"></i>
                        <h4 class="text-white mb-15" style="font-family: var(--tp-ff-heading);">Need Help?</h4>
                        <p class="text-white mb-25" style="font-size: 14px; opacity: 0.85;">Talk to our technical expert for net selection advice.</p>
                        <a href="tel:+917923456789" class="tp-btn btn-sm" style="padding: 10px 20px; font-size: 13px;">Call Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-9 col-lg-8">
                @if($products->count() > 0)
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="tp-product-item text-center mb-30">
                            <div class="tp-product-thumb">
                                @if($product->images && count($product->images) > 0)
                                <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->slug === '35-percent-green-shade-net')
                                <img src="{{ asset('assets/img/products/shade-net-35.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->slug === '50-percent-green-shade-net')
                                <img src="{{ asset('assets/img/products/shade-net-50.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->slug === '75-percent-green-shade-net')
                                <img src="{{ asset('assets/img/products/shade-net-75.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->slug === 'construction-debris-safety-net')
                                <img src="{{ asset('assets/img/products/debris-safety-net.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->slug === 'greenhouse-poly-net-40-percent')
                                <img src="{{ asset('assets/img/products/greenhouse-net.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->slug === 'poultry-farm-shade-net')
                                <img src="{{ asset('assets/img/products/poultry-net.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->category && $product->category->slug === 'bird-protection-net')
                                <img src="{{ asset('assets/img/products/bird-net.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @elseif($product->category && $product->category->slug === 'hdpe-woven-fabric')
                                <img src="{{ asset('assets/img/products/woven-fabric.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @else
                                <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $product->name }}" style="height: 250px; width: 100%; object-fit: cover;">
                                @endif
                                <div class="tp-product-cart">
                                    <a href="{{ route('products.show', $product->slug) }}" class="icon-2"><i class="fa-light fa-eye"></i></a>
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
                                <h4 class="tp-product-title"><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h4>
                                <div class="tp-product-content-price">
                                    @if($product->shade_percentage && $product->shade_percentage !== 'N/A')
                                    <span>{{ $product->shade_percentage }} Shading</span>
                                    @else
                                    <span>{{ $product->gsm ?? 'Standard' }} GSM</span>
                                    @endif
                                </div>
                                <div class="tp-product-btn d-flex align-items-center justify-content-center" style="gap: 5px; padding: 0 20px 20px;">
                                    <a href="{{ route('products.show', $product->slug) }}" style="padding: 8px 15px; border-radius: 4px; flex: 1;">Details</a>
                                    <button class="tp-btn add-to-quote-btn" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-image="{{ $product->images && count($product->images) > 0 ? asset('storage/' . $product->images[0]) : ($product->slug === '35-percent-green-shade-net' ? asset('assets/img/products/shade-net-35.png') : ($product->slug === '50-percent-green-shade-net' ? asset('assets/img/products/shade-net-50.png') : ($product->slug === '75-percent-green-shade-net' ? asset('assets/img/products/shade-net-75.png') : asset('assets/img/products/shade-net.png')))) }}" style="padding: 8px 12px; border-radius: 4px; border: none; background-color: var(--tp-theme-secondary); color: #fff; font-size: 13px; font-weight: 700; flex: 1; height: auto; line-height: 1.5;"><i class="fa-solid fa-plus"></i> Basket</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                <div class="tp-shop-pagination-wrap mt-50" style="display: flex; justify-content: center;">
                    {{ $products->links() }}
                </div>
                @endif

                @else
                <div class="text-center p-5 mb-40" style="background-color: #fafbfc; border-radius: 8px;">
                    <i class="fa-solid fa-box-open mb-20" style="font-size: 48px; color: #b4c2b9;"></i>
                    <h3 style="font-family: var(--tp-ff-heading); color: var(--tp-heading-secondary);">No Products Found</h3>
                    <p class="text-muted mt-10">Products in this section are currently being updated. Please check back later or contact us directly.</p>
                    <a href="{{ route('products.index') }}" class="tp-btn mt-20">View All Products</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- shop-area-end -->

@endsection
