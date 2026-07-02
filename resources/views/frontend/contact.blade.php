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
    <div class="tp-contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.0229342795493!2d72.8427844!3d20.3820251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce293cbf539f%3A0x6e8e8ce8a46cf11!2sGIDC%20Industrial%20Estate%2C%20Kachigam%2C%20Daman%2C%20Dadra%20and%20Nagar%20Haveli%20and%20Daman%20and%20Diu%20396215!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- contact map end -->

@endsection
