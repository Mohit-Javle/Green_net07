@extends('layouts.frontend')

@section('title', 'About Us — AgroNet Solutions')
@section('meta_description', 'Learn about AgroNet Solutions, our manufacturing excellence in Daman, our ISO standards, and our commitment to providing premium agricultural shade nets across India.')

@section('content')

<!-- about breadcrumb area start -->
<section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix">
    <div class="breadcrumb__bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb.jpg') }}"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__list">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>About Us</span>
                    </div>
                    <h3 class="breadcrumb__title">About Us</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about breadcrumb area end -->

<!-- about area start -->
<section class="tp-about-2-area pt-120 pb-120 p-relative">
    <div class="tp-about-2-shape">
        <img src="{{ asset('assets/img/about/home-4/global.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tp-about-2-wrapper shape p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                    <img class="img-1" src="{{ asset('assets/img/about/home-2/about-thumb-2-1.jpg') }}" alt="" style="width: 290px; height: 350px; object-fit: cover; border-radius: 8px; position: relative; z-index: 1; left: -20px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                    <img class="img-2" src="{{ asset('assets/img/about/home-2/about-thumb-2-2.jpg') }}" alt="" style="width: 230px; height: 290px; z-index: 2; object-fit: cover; border-radius: 8px; position: absolute; top: 100px; right: -30px; border: 6px solid #ffffff; box-shadow: 0 15px 35px rgba(0,0,0,0.2);">


                    <div class="tp-about-3-counter" style="background-color: var(--tp-theme-primary); color: #ffffff; padding: 25px; border-radius: 8px; text-align: center;">
                        <h4 style="font-size: 32px; font-weight: 800; color: #ffffff; margin-bottom: 0;">10+</h4>
                        <p style="font-size: 13px; color: rgba(255,255,255,0.9); margin-bottom: 0; font-weight: 700; text-transform: uppercase;">Years of Excellence</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tp-about-2-title-wrapper pl p-relative wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <span class="tp-section-title-pre-2" style="color: var(--tp-theme-primary);">WE ARE AGRONET SOLUTIONS</span>
                    <h3 class="tp-section-title">Leading Manufacturer of HDPE Shade Nets in Daman</h3>
                    <p class="tp-about-2-text">AgroNet Solutions is a pioneering name in HDPE net manufacturing, delivering high-performance solutions for agriculture, horticulture, construction, and protection across India. Our state-of-the-art Daman facility produces UV-stabilized nets designed to withstand extreme environments, ensuring optimal growth and protection.</p>
                    <div class="tp-about-icon mb d-flex align-items-center">
                        <i class="fa-solid fa-seedling" style="font-size: 32px; color: var(--tp-theme-primary); margin-right: 15px;"></i>
                        <p>Supporting Modern Farming <br> With Scientific Shading Solutions</p>
                    </div>
                    <div class="tp-about-list">
                        <ul>
                            <li><i class="flaticon-checked"></i>100% Virgin High-Density Polyethylene Raw Material</li>
                            <li><i class="flaticon-checked"></i>German weaving technology for uniform shading rates</li>
                            <li><i class="flaticon-checked"></i>Premium quality UV-stabilizers to prevent color degradation</li>
                        </ul>
                    </div>
                    <div class="tp-about-bradcrumb-btn">
                        <a class="tp-btn" href="{{ route('contact') }}">Get Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->

<!-- cta area start -->
<section class="tp-cta-area p-relative pt-120 pb-110 tp-cta-bg" data-background="{{ asset('assets/img/cta/cta-1.jpg') }}">
    <div class="container-fluid gx-0">
        <div class="row gx-0">
            <div class="col-lg-12">
                <div class="tp-cta-wrapper text-center">
                    <div class="tp-cta-visa">
                        <i class="fa-solid fa-leaf" style="font-size: 48px; color: #ffffff;"></i>
                    </div>
                    <h3 class="tp-cta-title text-white">Need Premium Agricultural Net Solutions?</h3>
                    <p class="text-white mb-35" style="font-size: 16px; opacity: 0.9;">We deliver customization, durability, and standard pricing pan India.</p>
                    <div class="tp-cta-btn">
                        <a class="tp-btn" href="{{ route('contact') }}">Request Callback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta area end -->

<!-- Factory Manufacturing Process Timeline start -->
<section class="tp-timeline-area pt-120 pb-100" style="background-color: #fafbfc; border-bottom: 1px solid #f0f2f5;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="tp-section-title-wrapper-two mb-55">
                    <span class="tp-section-title-pre-2" style="color: var(--tp-theme-primary);">MANUFACTURING EXCELLENCE <i class="fa-solid fa-industry"></i></span>
                    <h3 class="tp-section-title">How We Knit Premium Shade Nets</h3>
                    <p class="text-muted mt-15">Step inside our Daman factory and discover the state-of-the-art process that ensures maximum strength and 5+ years UV lifespan.</p>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center">
            <!-- Left Panel: Dynamic Tour Info -->
            <div class="col-lg-5 mb-40">
                <div id="tour-detail-card" style="background-color: #ffffff; border-radius: 12px; box-shadow: 0 15px 40px rgba(31,122,77,0.06); border: 2px solid #eef1f0; transition: all 0.3s ease-in-out; text-align: left; padding: 40px;">
                    <span id="tour-step-num" style="font-weight: 800; font-size: 14px; letter-spacing: 2px; color: var(--tp-theme-secondary); text-transform: uppercase;">Step 01 / 05</span>
                    <h4 id="tour-step-title" class="mt-10 mb-20" style="font-family: var(--tp-ff-heading); font-size: 24px; font-weight: 800; color: var(--tp-heading-secondary);">HDPE Extrusion & UV Blend</h4>
                    <p id="tour-step-desc" style="font-size: 15px; line-height: 1.7; color: var(--tp-text-body); margin-bottom: 25px;">We melt 100% virgin HDPE granules and mix them with top-tier UV stabilizers using German extrusion heads to create micro-strips of extreme tensile strength.</p>
                    <div style="background-color: #f7faf8; border-radius: 6px; padding: 15px 20px; border-left: 4px solid var(--tp-theme-primary);">
                        <span style="font-size: 12px; font-weight: 700; color: var(--tp-theme-primary); text-transform: uppercase; display: block;">Factory Standard</span>
                        <p id="tour-step-fact" style="font-size: 14px; font-weight: 600; color: var(--tp-heading-secondary); margin: 0;">100% Virgin Material | No Reclaimed Waste</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Panel: Clickable timeline steps -->
            <div class="col-lg-7 text-left" style="text-align: left;">
                <div class="timeline-steps-list pl-lg-4">
                    
                    <div class="timeline-step-item active-tour" onclick="updateTourStep(1)" style="cursor: pointer; display: flex; align-items: flex-start; padding: 20px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #f0f2f5; transition: all 0.3s;">
                        <span class="step-badge" style="width: 36px; height: 36px; border-radius: 50%; background-color: var(--tp-theme-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: 20px; flex-shrink: 0;">1</span>
                        <div>
                            <h5 style="margin: 0 0 5px; font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; color: var(--tp-heading-secondary);">HDPE Extrusion & UV Blend</h5>
                            <span class="text-muted" style="font-size: 13px;">Preparing polymer mix with UV stabilizers</span>
                        </div>
                    </div>
                    
                    <div class="timeline-step-item" onclick="updateTourStep(2)" style="cursor: pointer; display: flex; align-items: flex-start; padding: 20px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #f0f2f5; transition: all 0.3s;">
                        <span class="step-badge" style="width: 36px; height: 36px; border-radius: 50%; background-color: #f0f2f5; color: var(--tp-heading-secondary); display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: 20px; flex-shrink: 0;">2</span>
                        <div>
                            <h5 style="margin: 0 0 5px; font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; color: var(--tp-heading-secondary);">Yarn Drawing & Stretching</h5>
                            <span class="text-muted" style="font-size: 13px;">Extending fibers to maximize tensile resistance</span>
                        </div>
                    </div>
                    
                    <div class="timeline-step-item" onclick="updateTourStep(3)" style="cursor: pointer; display: flex; align-items: flex-start; padding: 20px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #f0f2f5; transition: all 0.3s;">
                        <span class="step-badge" style="width: 36px; height: 36px; border-radius: 50%; background-color: #f0f2f5; color: var(--tp-heading-secondary); display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: 20px; flex-shrink: 0;">3</span>
                        <div>
                            <h5 style="margin: 0 0 5px; font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; color: var(--tp-heading-secondary);">Warp Knitting (Raschel Looms)</h5>
                            <span class="text-muted" style="font-size: 13px;">High speed lock-stitch weaving</span>
                        </div>
                    </div>
                    
                    <div class="timeline-step-item" onclick="updateTourStep(4)" style="cursor: pointer; display: flex; align-items: flex-start; padding: 20px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #f0f2f5; transition: all 0.3s;">
                        <span class="step-badge" style="width: 36px; height: 36px; border-radius: 50%; background-color: #f0f2f5; color: var(--tp-heading-secondary); display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: 20px; flex-shrink: 0;">4</span>
                        <div>
                            <h5 style="margin: 0 0 5px; font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; color: var(--tp-heading-secondary);">Tension & UV Lab Clearance</h5>
                            <span class="text-muted" style="font-size: 13px;">Quality control testing of knitted rolls</span>
                        </div>
                    </div>
                    
                    <div class="timeline-step-item" onclick="updateTourStep(5)" style="cursor: pointer; display: flex; align-items: flex-start; padding: 20px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #f0f2f5; transition: all 0.3s;">
                        <span class="step-badge" style="width: 36px; height: 36px; border-radius: 50%; background-color: #f0f2f5; color: var(--tp-heading-secondary); display: flex; align-items: center; justify-content: center; font-weight: 700; margin-right: 20px; flex-shrink: 0;">5</span>
                        <div>
                            <h5 style="margin: 0 0 5px; font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; color: var(--tp-heading-secondary);">Heat Setting & Packing</h5>
                            <span class="text-muted" style="font-size: 13px;">Calibrating width and packaging rolled meshes</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Quality Certifications Showcase start -->
<section class="tp-certifications-area pt-120 pb-120" style="background-color: #ffffff; border-bottom: 1px solid #f0f2f5;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="tp-section-title-wrapper-two mb-55">
                    <span class="tp-section-title-pre-2" style="color: var(--tp-theme-primary);">B2B COMPLIANCE <i class="fa-solid fa-award"></i></span>
                    <h3 class="tp-section-title">ISO & Quality Lab Certifications</h3>
                    <p class="text-muted mt-15">We follow rigorous international testing frameworks to qualify for large-scale government tenders and global supply protocols.</p>
                </div>
            </div>
        </div>
        
        <div class="row text-center justify-content-center">
            <!-- Cert Card 1 -->
            <div class="col-xl-3 col-md-6 col-12 mb-30">
                <div class="cert-card text-center p-35" onclick="openCertModal('iso')" style="border: 2px solid #eef1f0; border-radius: 8px; cursor: pointer; transition: all 0.3s; background-color: #ffffff; height: 100%;">
                    <i class="fa-solid fa-stamp text-success mb-20" style="font-size: 40px; color: var(--tp-theme-primary) !important;"></i>
                    <h5 style="font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; margin-bottom: 10px; color: var(--tp-heading-secondary);">ISO 9001:2015</h5>
                    <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Approved Factory Quality Management System standards.</p>
                </div>
            </div>
            
            <!-- Cert Card 2 -->
            <div class="col-xl-3 col-md-6 col-12 mb-30">
                <div class="cert-card text-center p-35" onclick="openCertModal('uv')" style="border: 2px solid #eef1f0; border-radius: 8px; cursor: pointer; transition: all 0.3s; background-color: #ffffff; height: 100%;">
                    <i class="fa-solid fa-shield-sun text-success mb-20" style="font-size: 40px; color: var(--tp-theme-primary) !important;"></i>
                    <h5 style="font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; margin-bottom: 10px; color: var(--tp-heading-secondary);">ASTM G154 UV</h5>
                    <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Verified 5+ years accelerated weathering durability clearance.</p>
                </div>
            </div>
            
            <!-- Cert Card 3 -->
            <div class="col-xl-3 col-md-6 col-12 mb-30">
                <div class="cert-card text-center p-35" onclick="openCertModal('fire')" style="border: 2px solid #eef1f0; border-radius: 8px; cursor: pointer; transition: all 0.3s; background-color: #ffffff; height: 100%;">
                    <i class="fa-solid fa-fire-extinguisher text-success mb-20" style="font-size: 40px; color: var(--tp-theme-primary) !important;"></i>
                    <h5 style="font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; margin-bottom: 10px; color: var(--tp-heading-secondary);">EN 13501 Fire Safe</h5>
                    <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Fire-retardant rating compliance for safety nets.</p>
                </div>
            </div>
            
            <!-- Cert Card 4 -->
            <div class="col-xl-3 col-md-6 col-12 mb-30">
                <div class="cert-card text-center p-35" onclick="openCertModal('organic')" style="border: 2px solid #eef1f0; border-radius: 8px; cursor: pointer; transition: all 0.3s; background-color: #ffffff; height: 100%;">
                    <i class="fa-solid fa-circle-check text-success mb-20" style="font-size: 40px; color: var(--tp-theme-primary) !important;"></i>
                    <h5 style="font-family: var(--tp-ff-heading); font-size: 16px; font-weight: 700; margin-bottom: 10px; color: var(--tp-heading-secondary);">Non-Toxic Organic</h5>
                    <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">100% recyclable, food-grade raw materials for safe farming.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS Styles for Timeline and Certs -->
<style>
.timeline-step-item.active-tour {
    border-color: var(--tp-theme-primary) !important;
    background-color: #f7faf8;
}
.timeline-step-item.active-tour .step-badge {
    background-color: var(--tp-theme-primary) !important;
    color: #ffffff !important;
}
.timeline-step-item:hover {
    border-color: var(--tp-theme-primary);
}
.cert-card {
    transition: all 0.3s;
}
.cert-card:hover {
    border-color: var(--tp-theme-primary) !important;
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(31,122,77,0.08);
}
</style>

<!-- Lightbox Modal for Certs -->
<div id="cert-lightbox" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); z-index: 999999; display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: all 0.3s ease-in-out;">
    <div style="background-color: #ffffff; border-radius: 8px; width: 500px; max-width: 90%; padding: 40px; text-align: center; position: relative; box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
        <button onclick="closeCertModal()" style="position: absolute; top: 15px; right: 15px; border: none; background: none; font-size: 22px; cursor: pointer; color: #b4c2b9;"><i class="fa-solid fa-xmark"></i></button>
        <i id="modal-cert-icon" class="fa-solid mb-25 text-success" style="font-size: 64px; color: var(--tp-theme-primary) !important;"></i>
        <h4 id="modal-cert-title" style="font-family: var(--tp-ff-heading); font-size: 24px; font-weight: 800; color: var(--tp-heading-secondary); margin-bottom: 15px;">ISO Certificate</h4>
        <p id="modal-cert-desc" class="text-muted" style="font-size: 15px; line-height: 1.7; margin-bottom: 30px;">Detailed certification clearance guidelines and compliance references.</p>
        <button onclick="closeCertModal()" class="tp-btn" style="padding: 10px 30px; font-size: 13px; height: auto; line-height: 1.5;">Close Details</button>
    </div>
</div>

<script>
// Tour database
const tourDb = {
    1: {
        num: 'Step 01 / 05',
        title: 'HDPE Extrusion & UV Blend',
        desc: 'We melt 100% virgin HDPE granules and mix them with top-tier UV stabilizers using German extrusion heads to create micro-strips of extreme tensile strength.',
        fact: '100% Virgin Material | No Reclaimed Waste'
    },
    2: {
        num: 'Step 02 / 05',
        title: 'Yarn Drawing & Stretching',
        desc: 'The extruded HDPE film is slit into thin tapes, heated, and stretched to form strong, durable flat and mono yarns with low thermal shrinkage.',
        fact: 'Tensile Strength: >6.5 g/denier'
    },
    3: {
        num: 'Step 03 / 05',
        title: 'Warp Knitting (Raschel Looms)',
        desc: 'Precision warp knitting machines (Raschel Looms) weave yarns into stable locking mesh structures, guaranteeing no unraveling when cut.',
        fact: 'German Raschel Looms | Locked-stitch'
    },
    4: {
        num: 'Step 04 / 05',
        title: 'Tension & UV Lab Clearance',
        desc: 'All net rolls are tension tested and exposed to accelerated weathering chambers in our lab to guarantee 5+ years of active field life.',
        fact: 'ISO Certified Testing | ASTM Standards'
    },
    5: {
        num: 'Step 05 / 05',
        title: 'Heat Setting & Packing',
        desc: 'Nets are heat-stabilized, cut to standard widths, fitted with metallic eyelets on order, and rolled tightly inside protective wrapping.',
        fact: 'Custom widths up to 6 meters'
    }
};

function updateTourStep(stepNum) {
    // Update active class on list
    const items = document.querySelectorAll('.timeline-step-item');
    items.forEach((item, index) => {
        if (index + 1 === stepNum) {
            item.classList.add('active-tour');
            item.querySelector('.step-badge').style.backgroundColor = 'var(--tp-theme-primary)';
            item.querySelector('.step-badge').style.color = '#ffffff';
        } else {
            item.classList.remove('active-tour');
            item.querySelector('.step-badge').style.backgroundColor = '#f0f2f5';
            item.querySelector('.step-badge').style.color = 'var(--tp-heading-secondary)';
        }
    });
    
    // Update left details panel with fade effect
    const card = document.getElementById('tour-detail-card');
    card.style.opacity = '0';
    card.style.transform = 'translateY(10px)';
    
    setTimeout(() => {
        const step = tourDb[stepNum];
        document.getElementById('tour-step-num').textContent = step.num;
        document.getElementById('tour-step-title').textContent = step.title;
        document.getElementById('tour-step-desc').textContent = step.desc;
        document.getElementById('tour-step-fact').textContent = step.fact;
        
        card.style.opacity = '1';
        card.style.transform = 'translateY(0px)';
    }, 200);
}

// Cert modal database
const certDb = {
    'iso': {
        icon: 'fa-stamp',
        title: 'ISO 9001:2015 Certification',
        desc: 'AgroNet Solutions is certified under the ISO 9001:2015 standard for quality management. This covers our entire polymer selection, yarn extrusion, and locked-stitch warp knitting lines at our Daman manufacturing complex.'
    },
    'uv': {
        icon: 'fa-shield-sun',
        title: 'ASTM G154 UV Durability',
        desc: 'Our green and black shade nets are verified using standard laboratory weathering tests under ASTM G154. This guarantees that under Indian UV index conditions, the nets maintain over 85% tensile strength after 5+ years of continuous sun exposure.'
    },
    'fire': {
        icon: 'fa-fire-extinguisher',
        title: 'EN 13501 Fire-Retardant Rating',
        desc: 'For high-risk construction and commercial building safety nets, our special flame-retardant meshes are certified to meet EN 13501 standards, preventing fire propagation and securing workers.'
    },
    'organic': {
        icon: 'fa-circle-check',
        title: 'Non-Toxic Organic Certificate',
        desc: 'All HDPE base materials and green pigments are tested to ensure zero chemical leaching. This makes our shade nets 100% safe for organic nurseries, hydroponic systems, livestock shading, and drinking water reservoirs.'
    }
};

function openCertModal(key) {
    const cert = certDb[key];
    const modal = document.getElementById('cert-lightbox');
    
    // Set content
    const iconEl = document.getElementById('modal-cert-icon');
    iconEl.className = `fa-solid mb-25 text-success ${cert.icon}`;
    document.getElementById('modal-cert-title').textContent = cert.title;
    document.getElementById('modal-cert-desc').textContent = cert.desc;
    
    // Display modal
    modal.style.opacity = '1';
    modal.style.visibility = 'visible';
}

function closeCertModal() {
    const modal = document.getElementById('cert-lightbox');
    modal.style.opacity = '0';
    modal.style.visibility = 'hidden';
}
</script>

<!-- FAQ / info area start -->
<section class="tp-faq-area p-relative pt-110 pb-50">
    <div class="tp-faq-shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tp-faq-thumb" data-background="{{ asset('assets/img/faq/faq-1.jpg') }}" style="border-radius: 8px;"></div>
                <div class="tp-faq-counter d-lg-flex align-items-center d-none" style="background-color: var(--tp-theme-primary); color: #ffffff;">
                    <span><i class="fa-solid fa-shield-halved" style="font-size: 28px; color: #ffffff;"></i></span>
                    <div class="tp-faq-counter-content pl-15">
                        <h4 class="tp-faq-counter-title text-white">
                            100%
                        </h4>
                        <p class="text-white" style="margin-bottom: 0;">Quality Guarantee</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tp-faq-wrapper">
                    <div class="tp-faq-title-wrapper wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <span class="tp-section-title-pre-2" style="color: var(--tp-theme-primary);">COMMON FAQS</span>
                        <h3 class="tp-section-title">Frequently Asked Questions</h3>
                    </div>
                    <!-- Live FAQ Search Box -->
                    <div class="faq-search-box mt-20 mb-30" style="position: relative;">
                        <input type="text" id="faq-search-input" placeholder="Type a keyword to search FAQs..." style="width: 100%; height: 50px; border: 1px solid #e0e2e3; border-radius: 4px; padding-left: 20px; padding-right: 50px; outline: none; font-size: 14px; transition: all 0.3s;">
                        <i class="fa-solid fa-magnifying-glass" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); color: #b4c2b9; font-size: 16px;"></i>
                    </div>
                    <div class="tp-faq-tab-content tp-accordion wow fadeInRight mt-30" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="accordion" id="general_accordion">
                            <div class="accordion-item home tp-faq-active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span>01.</span> What is the average life of an AgroNet shade net?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p>Our shade nets are manufactured using 100% virgin HDPE blended with high-grade UV-stabilizers. Under ordinary Indian climate conditions, they actively survive for 5+ years without drying or tearing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item home">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>02.</span> Can I request customized roll sizes and shadow percentages?</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p>Yes, absolutely! We produce standard rolls of 3m, 4m, and 6m width, but we can customize the dimensions and provide shadow percentages from 35% up to 90% depending on your agricultural or construction requirements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item home">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>03.</span> Are your nets certified and safe for organic farming?</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p>Yes. We are an ISO 9001:2015 certified company. All our raw materials are non-toxic, food-grade, and 100% recyclable, making them completely safe for nurseries, organic agriculture, and livestock shading.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq area end -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('faq-search-input');
    if (!searchInput) return;

    const accordionItems = document.querySelectorAll('#general_accordion .accordion-item');

    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();

        accordionItems.forEach(item => {
            const question = item.querySelector('.accordion-button').textContent.toLowerCase();
            const answer = item.querySelector('.accordion-body').textContent.toLowerCase();

            if (question.includes(query) || answer.includes(query)) {
                item.style.display = 'block';
                if (query.length > 2) {
                    const button = item.querySelector('.accordion-button');
                    const collapse = item.querySelector('.accordion-collapse');
                    if (button.classList.contains('collapsed')) {
                        button.classList.remove('collapsed');
                        collapse.classList.add('show');
                    }
                }
            } else {
                item.style.display = 'none';
            }
        });
        
        let visibleCount = 0;
        accordionItems.forEach(item => {
            if (item.style.display !== 'none') visibleCount++;
        });
        
        let zeroState = document.getElementById('faq-zero-state');
        if (visibleCount === 0) {
            if (!zeroState) {
                const parent = document.getElementById('general_accordion');
                parent.insertAdjacentHTML('afterend', `
                    <div id="faq-zero-state" class="text-center py-4" style="border: 1px dashed #e0e2e3; border-radius: 6px; padding: 25px;">
                        <i class="fa-solid fa-magnifying-glass mb-10" style="font-size: 28px; color: #b4c2b9;"></i>
                        <h6 style="color: var(--tp-heading-secondary); font-family: var(--tp-ff-heading); margin-bottom: 5px;">No matching FAQs found</h6>
                        <p class="text-muted mb-0" style="font-size: 13px;">Try searching for other terms like "life", "sizes", or "certified".</p>
                    </div>
                `);
            } else {
                zeroState.style.display = 'block';
            }
        } else {
            if (zeroState) zeroState.style.display = 'none';
        }
    });
});
</script>

@section('extra_css')
<style>
/* About Page Mobile Responsiveness Fixes */
@media (max-width: 767px) {
    .tp-about-2-area {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }
    
    .tp-about-2-wrapper {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        margin-bottom: 40px !important;
        position: relative !important;
    }
    
    .tp-about-2-wrapper .img-1 {
        width: 100% !important;
        max-width: 320px !important;
        height: auto !important;
        left: 0 !important;
        margin: 0 auto !important;
        position: relative !important;
    }
    
    .tp-about-2-wrapper .img-2 {
        display: none !important;
    }
    
    .tp-about-2-wrapper .tp-about-3-counter {
        width: 100% !important;
        max-width: 320px !important;
        margin-top: 20px !important;
        position: relative !important;
        padding: 20px !important;
        left: 0 !important;
    }
    
    .tp-about-2-title-wrapper {
        padding-left: 0 !important;
        text-align: center !important;
    }
    
    .tp-about-2-title-wrapper .tp-section-title-pre-2 {
        display: block !important;
        text-align: center !important;
    }

    .tp-about-2-title-wrapper .tp-section-title {
        font-size: 26px !important;
        line-height: 1.3 !important;
        text-align: center !important;
        word-wrap: break-word !important;
    }
    
    .tp-about-2-text {
        text-align: center !important;
        font-size: 14px !important;
    }

    .tp-about-icon {
        justify-content: center !important;
        text-align: left !important;
    }

    .tp-about-list ul {
        text-align: left !important;
        display: inline-block !important;
        padding-left: 0 !important;
    }
    
    #tour-detail-card {
        padding: 25px !important;
        margin-bottom: 20px !important;
    }
    
    .timeline-steps-list {
        padding-left: 0 !important;
    }
    
    #cert-lightbox > div {
        padding: 25px !important;
    }
    
    .tp-faq-thumb {
        height: 250px !important;
        margin-bottom: 30px !important;
    }
}
</style>
@endsection

@endsection
