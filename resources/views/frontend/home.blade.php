@extends('frontend.layouts.master')

@section('content')

  <!-- Main-content -->

        <div class="main-content">
            <section class="section-about tf-spacing-2">
                <div class="tf-container">
                    <div class="about-inner flex g-30">
                        <div class="right">
                            <div class="heading-section mb-30">
                                <div class="sub-title body-2 fw-7 mb-17 title-animation">
                                    About Competition
                                </div>
                                <h2 class="title fw-6 title-animation">
                                    Robofest
                                    <span class="fw-3">Inspiring Young Innovators</span>
                                </h2>
                            </div>
                            <div class="section-content">
                                <div class="desc mb-40 text-animation">
                                    <p class="lh-30">
                                        Robofest, the flagship event organized by SLIIT’s Faculty of Engineering, has been a driving force in STEM education in Sri Lanka for over 16 years.
                                        The competition empowers school and university students by enhancing their skills in electronics, robotics, critical thinking, and problem-solving while encouraging creativity, innovation, and teamwork.
                                    </p>
                                </div>
                                <div class="title-animation">
                                    <a href="about-us.html" class="tf-btn no-bg text-underline">
                                        <span>Learn More </span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="left">
                            <div class="wg-curve-text">
                                <div class="icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="white" style="transform: none !important; margin-left: 4px;">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                                <div class="text-rotate">
                                    <svg width="270 " height="270 " viewbox="0 0 270  270 " xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path id="textPathCircle" d="M 135,135 m -110,0 a 110,110 0 1,1 220,0 a 110,110 0 1,1 -220,0" fill="none"></path>
                                        </defs>
                                        <text>
                                            <textpath href="#textPathCircle" startoffset="0" textlength="690" lengthadjust="spacing">
                                                - Robofest - Robofest - Robofest - Robofest&nbsp;
                                            </textpath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-counting tf-spacing-2">
                <div class="mask mask-1">
                    <img src="{{ asset('frontend/image/page-title/shape.png') }}" alt="" style="width: 700px; height: 700px; max-width: none;">
                </div>
                <div class="tf-container w-1810">
                    <div class="section-counting-inner flex">
                        <div class="left">
                            <div class="image tf-animate-1" style="position: relative;">
                                <img src="{{ asset('frontend/image/section/img-section-counting-1.jpg') }}" data-src="{{ asset('frontend/image/section/img-section-counting-1.jpg') }}" alt="" class="lazyload">
                                
                                <!-- Curved rotating text overlay play button -->
                                <div class="wg-curve-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.6); z-index: 5; background-color: rgba(0, 0, 0, 0.45); border-radius: 50%; backdrop-filter: blur(2px);">
                                    <div class="icon">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="white" style="transform: none !important; margin-left: 4px;">
                                            <path d="M8 5v14l11-7z"/>
                                        </svg>
                                    </div>
                                    <div class="text-rotate">
                                        <svg width="270 " height="270 " viewbox="0 0 270  270 " xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path id="textPathCircleSec" d="M 135,135 m -110,0 a 110,110 0 1,1 220,0 a 110,110 0 1,1 -220,0" fill="none"></path>
                                            </defs>
                                            <text>
                                                <textpath href="#textPathCircleSec" startoffset="0" textlength="690" lengthadjust="spacing">
                                                    - Robofest - Robofest - Robofest - Robofest&nbsp;
                                                </textpath>
                                            </text>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="heading-section mb-60">
                                <div class="sub-title body-2 fw-7 mb-17 title-animation">
                                    Explore Our Achievement
                                </div>
                                <h2 class="title fw-6 title-animation">
                                    Premier Tech Innovations
                                    <span class="fw-3">Teckko Software Agency</span>
                                </h2>
                            </div>
                            <div class="wg-counter flex g-30">

                                <div class="counter-item style-2 style-bg-primary px-md-15">
                                    <div class="icon">
                                        <i class="icon-check"></i>
                                    </div>
                                    <div class="counter">

                                        <div class="number-counter flex fs-65 fw-7">
                                            <span class="number odometer" data-to="36" data-inviewport="yes"> 0 </span>
                                            <span class="title-counter">k+</span>
                                        </div>
                                        <h6 class="title-counter lh-30 fw-5">
                                            Trusted Global Clients
                                        </h6>
                                    </div>
                                </div>

                                <div class="counter-item style-2 style-bg-surface px-md-15">
                                    <div class="icon">
                                        <i class="icon-check"></i>
                                    </div>
                                    <div class="counter">
                                        <div class="number-counter flex fs-65 fw-7">
                                            <span class="number odometer" data-to="850" data-inviewport="yes"> 0 </span>
                                            <span class="title-counter">+</span>
                                        </div>
                                        <h6 class="title-counter lh-30 fw-5">
                                            Best Project Complete
                                        </h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--<section class="section-company tf-spacing-3">
                <div class="tf-container w-1810">
                    <div class="section-company-inner">
                        <div class="left-section">
                            <div class="heading-section mb-53">
                                <div class="sub-title body-2 fw-7 mb-17 title-animation">
                                    Grow & Development
                                </div>
                                <h2 class="title fw-6 title-animation">
                                    Modern Technology and
                                    <span class="fw-3">Advancement Incentives</span>
                                </h2>
                            </div>
                            <div class="wg-according" id="According1">
                                <div class="according-item">
                                    <h5 class="fw-5">
                                        <a href="#according1" data-bs-toggle="collapse" class="title-according">Learn Our Company Mission<span></span></a>
                                    </h5>
                                    <div id="according1" class="collapse show" data-bs-parent="#According1">
                                        <div class="according-content">
                                            <div class="image left">
                                                <img src="{{ asset('frontend/image/section/img-according-1.jpg') }}" data-src="{{ asset('frontend/image/section/img-according-1.jpg') }}" alt="" class="lazyload">
                                            </div>
                                            <div class="right">
                                                <div class="desc lh-30">
                                                    Our mission is to revolutionize the digital landscape delivering innovative software solutions to empower businesses to achieve their full potential
                                                </div>
                                                <div class="list-benefit">
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Premier Tech Innovations</span>
                                                    </div>
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Nexus Tech Systems</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="according-item">
                                    <h5 class="fw-5">
                                        <a href="#according2" data-bs-toggle="collapse" class="title-according collapsed">Our Company Vision<span></span></a>
                                    </h5>
                                    <div id="according2" class="collapse" data-bs-parent="#According1">
                                        <div class="according-content">
                                            <div class="image left">
                                                <img src="{{ asset('frontend/image/section/img-according-1.jpg') }}" data-src="{{ asset('frontend/image/section/img-according-1.jpg') }}" alt="" class="lazyload">
                                            </div>
                                            <div class="right">
                                                <div class="desc lh-30">
                                                    Our mission is to revolutionize the digital landscape delivering innovative software solutions to empower businesses to achieve their full potential
                                                </div>
                                                <div class="list-benefit">
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Premier Tech Innovations</span>
                                                    </div>
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Nexus Tech Systems</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="according-item">
                                    <h5 class="fw-5">
                                        <a href="#according3" data-bs-toggle="collapse" class="title-according collapsed">Our Philosophy<span></span></a>
                                    </h5>
                                    <div id="according3" class="collapse" data-bs-parent="#According1">
                                        <div class="according-content">
                                            <div class="image left">
                                                <img src="image/section/img-according-1.jpg" data-src="image/section/img-according-1.jpg" alt="" class="lazyload">
                                            </div>
                                            <div class="right">
                                                <div class="desc lh-30">
                                                    Our mission is to revolutionize the digital landscape delivering innovative software solutions to empower businesses to achieve their full potential
                                                </div>
                                                <div class="list-benefit">
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Premier Tech Innovations</span>
                                                    </div>
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Nexus Tech Systems</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="according-item">
                                    <h5 class="fw-5">
                                        <a href="#according4" data-bs-toggle="collapse" class="title-according collapsed">Our Strategy<span></span></a>
                                    </h5>
                                    <div id="according4" class="collapse" data-bs-parent="#According1">
                                        <div class="according-content">
                                            <div class="image left">
                                                <img src="{{ asset('frontend/image/section/img-according-1.jpg') }}" data-src="{{ asset('frontend/image/section/img-according-1.jpg') }}" alt="" class="lazyload">
                                            </div>
                                            <div class="right">
                                                <div class="desc lh-30">
                                                    Our mission is to revolutionize the digital landscape delivering innovative software solutions to empower businesses to achieve their full potential
                                                </div>
                                                <div class="list-benefit">
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Premier Tech Innovations</span>
                                                    </div>
                                                    <div class="benefit-item">
                                                        <i class="icon-star-of-life"></i>
                                                        <span class="fw-5">Nexus Tech Systems</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-section">
                            <div class="image image-section tf-animate-1">
                                <img src="{{ asset('frontend/image/section/img-section-company.jpg') }}" data-src="{{ asset('frontend/image/section/img-section-company.jpg') }}" alt="" class="lazyload">
                            </div>
                        </div>
                    </div>
                </div>

            </section> -->

            <section class="section-services tf-spacing-2">
                <div class="mask mask-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" fill="none">
                        <circle cx="400" cy="400" r="325" stroke="url(#a3)" stroke-width="150"></circle>
                        <defs>
                            <lineargradient id="a3" x1="176" x2="569" y1="70.5" y2="674">
                                <stop offset="0" stop-color="#fff" stop-opacity="0.05"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </lineargradient>
                        </defs>
                    </svg>
                </div>
                <!--<div class="section-top">
                    <div class="tf-marquee">
                        <div class="marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                                <div class="big-text">
                                    Explore <span class="text-stroke">Popular</span> Services
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section mb-60 text-center">
                                <div class="sub-title body-2 fw-7 mb-17 title-animation">
                                    Our Popular Services
                                </div>
                                <h2 class="title fw-6 title-animation">
                                    We Run All kinds Of IT Services
                                    <br><span class="fw-3">that vow Your Success</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper tf-swiper sw-services sw-border" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 0,
                                "speed": 800,
                                "pagination": { "el": ".sw-pagination-services", "clickable": true },
                                "breakpoints": {
                                    "550": { "slidesPerView": 2, "slidesPerGroup": 1},
                                    "1200": { "slidesPerView": 3, "slidesPerGroup": 1}
                                    }
                                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="services-item hover-image px-md-15 style-1">
                                            <div class="icon">
                                                <i class="icon-custom-software"></i>
                                            </div>
                                            <h6 class="lh-30 fw-6"><a href="services-details.html" class="title-service"> Custom Software Development</a></h6>
                                            <div class="desc lh-30">
                                                We specialize delivering bespoke software application perfectly perational.
                                            </div>
                                            <a href="services-details.html" class="image">
                                                <img src="{{ asset('frontend/image/services-item/services-1.jpg') }}" data-src="{{ asset('frontend/image/services-item/services-1.jpg') }}" alt="" class="lazyload">
                                            </a>
                                            <div class="bottom-item">
                                                <a href="services-details.html" class="tf-btn-readmore">
                                                    <span class="plus">+</span>
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="services-item hover-image px-md-15 style-1">
                                            <div class="icon">
                                                <i class="icon-outsourcing"></i>
                                            </div>
                                            <h6 class="lh-30 fw-6"><a href="services-details.html" class="title-service">Outsourcing Development</a></h6>
                                            <div class="desc lh-30">
                                                We specialize delivering bespoke software application perfectly perational.
                                            </div>
                                            <a href="services-details.html" class="image">
                                                <img src="{{ asset('frontend/image/services-item/services-2.jpg') }}" data-src="{{ asset('frontend/image/services-item/services-2.jpg') }}" alt="" class="lazyload">
                                            </a>
                                            <div class="bottom-item">
                                                <a href="services-details.html" class="tf-btn-readmore">
                                                    <span class="plus">+</span>
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="services-item hover-image px-md-15 style-1">
                                            <div class="icon">
                                                <i class="icon-software-product"></i>
                                            </div>
                                            <h6 class="lh-30 fw-6"><a href="services-details.html" class="title-service">Software Product Development</a></h6>
                                            <div class="desc lh-30">
                                                We specialize delivering bespoke software application perfectly perational.
                                            </div>
                                            <a href="services-details.html" class="image">
                                                <img src="{{ asset('frontend/image/services-item/services-3.jpg') }}" data-src="{{ asset('frontend/image/services-item/services-3.jpg') }}" alt="" class="lazyload">
                                            </a>
                                            <div class="bottom-item">
                                                <a href="services-details.html" class="tf-btn-readmore">
                                                    <span class="plus">+</span>
                                                    <span class="text">Read More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-services sw-pagination d-xl-none mt-15 justify-content-center"></div>

                        </div>
                    </div>
                </div>
            </section>

            <div class="wg-cta tf-spacing-2 alert alert-dismissible fade show" role="alert">
                <div class="tf-container">
                    <div class="cta-inner flex align-items-center">
                        <div class="left flex align-items-center">
                            <div class="icon">
                                <i class="icon-chat-2"></i>
                            </div>
                            <h5 class="fw-4 title">Let’s <span class="fw-6">Discuss & Start</span> IT Consultations</h5>
                            <a href="#" class="tf-btn no-bg text-underline hover-color-main-dark">
                                <span>Let’s Talk</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="right flex align-items-center g-15">
                            <div class="flex flex-wrap rg-15">
                                <div class="list-agent">
                                    <a href="#" class="agent agent-1 style-border">
                                        <img src="{{ asset('frontend/image/avatar/agent-4.jpg') }}" data-src="{{ asset('frontend/image/avatar/agent-4.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <a href="#" class="agent agent-2 style-border">
                                        <img src="{{ asset('frontend/image/avatar/agent-5.jpg') }}" data-src="{{ asset('frontend/image/avatar/agent-5.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <a href="#" class="agent agent-3 style-border">
                                        <img src="{{ asset('frontend/image/avatar/agent-6.jpg') }}" data-src="{{ asset('frontend/image/avatar/agent-6.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                                    </a>
                                    <div class="agent agent-plus style-border">
                                        <span>
                                            +
                                        </span>
                                    </div>
                                </div>
                                <div class="text">
                                    <h5>
                                        1.8 million+ <span class="fw-5">Trusted Clients</span>
                                    </h5>
                                    <div class="img-line tf-animate-1">
                                        <img src="{{ asset('frontend/image/icon/line-2.png') }}" data-src="{{ asset('frontend/image/icon/line-2.png') }}" alt="" class="lazyload">
                                    </div>
                                </div>
                            </div>
                            <a class="tf-btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="icon-close-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section-team tf-spacing-2">
                <div class="mask mask-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="700" height="700" fill="none">
                        <circle cx="350" cy="350" r="285" stroke="url(#a8)" stroke-width="130"></circle>
                        <defs>
                            <lineargradient id="a8" x1="154" x2="497.875" y1="61.688" y2="589.75">
                                <stop offset="0" stop-color="#fff" stop-opacity="0.05"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </lineargradient>
                        </defs>
                    </svg>
                </div>
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="heading-section">
                                <div class="sub-title body-2 fw-7 mb-17 title-animation">
                                    Our Professionals
                                </div>
                                <h2 class="title fw-6 mb-60 title-animation">
                                    Meet Our Experience
                                    <span class="fw-3">Members</span>
                                </h2>
                                <div class="list-btn flex align-items-center g-15">
                                    <div class="scrolling-effect effectBottom">
                                        <a class="arrow-btn style-border arrow-prev team-prev">
                                            <i class="icon-arrow-left2"></i>
                                        </a>
                                    </div>
                                    <div class="scrolling-effect effectBottom">
                                        <a class="arrow-btn style-border arrow-next team-next">
                                            <i class="icon-arrow-right2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="swiper tf-swiper sw-team sw-border" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "speed": 800,
                                "pagination": { "el": ".sw-pagination-team", "clickable": true },
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".team-next",
                                    "prevEl": ".team-prev"
                                },  
                                "breakpoints": {
                                    "450": { "slidesPerView": 2, "slidesPerGroup": 2},
                                    "1200": { "slidesPerView": 3, "slidesPerGroup": 1}
                                    }
                                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="team-item hover-image">
                                            <div class="top-item">
                                                <a href="team.html" class="image">
                                                    <img src="{{ asset('frontend/image/team-item/team-item-1.jpg') }}" data-src="{{ asset('frontend/image/team-item/team-item-1.jpg') }}" alt="" class="lazyload">
                                                </a>
                                                <a href="#" class="plus-icon">
                                                    <span>+</span>
                                                </a>
                                                <div class="social-item">
                                                    <ul class="post-social">
                                                        <li><a href="#" class="icon-social"><i class="icon-fb"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-X"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-linkedin"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h6 class="title"><a href="team.html">Micheal R. Shannon</a></h6>
                                                <p class="sub-title">Software Developer</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-item hover-image">
                                            <div class="top-item">
                                                <a href="team.html" class="image">
                                                    <img src="{{ asset('frontend/image/team-item/team-item-2.jpg') }}" data-src="{{ asset('frontend/image/team-item/team-item-2.jpg') }}" alt="" class="lazyload">
                                                </a>
                                                <a href="#" class="plus-icon">
                                                    <span>+</span>
                                                </a>
                                                <div class="social-item">
                                                    <ul class="post-social">
                                                        <li><a href="#" class="icon-social"><i class="icon-fb"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-X"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-linkedin"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h6 class="title"><a href="team.html">William J. Alexander</a></h6>
                                                <p class="sub-title">App Developer</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-item hover-image">
                                            <div class="top-item">
                                                <a href="team.html" class="image">
                                                    <img src="{{ asset('frontend/image/team-item/team-item-3.jpg') }}" data-src="{{ asset('frontend/image/team-item/team-item-3.jpg') }}" alt="" class="lazyload">
                                                </a>
                                                <a href="#" class="plus-icon">
                                                    <span>+</span>
                                                </a>
                                                <div class="social-item">
                                                    <ul class="post-social">
                                                        <li><a href="#" class="icon-social"><i class="icon-fb"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-X"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-linkedin"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h6 class="title"><a href="team.html">Donnie O. Goldsmith</a></h6>
                                                <p class="sub-title">Software Developer</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-item hover-image">
                                            <div class="top-item">
                                                <a href="team.html" class="image">
                                                    <img src="{{ asset('frontend/image/team-item/team-item-1.jpg') }}" data-src="{{ asset('frontend/image/team-item/team-item-1.jpg') }}" alt="" class="lazyload">
                                                </a>
                                                <a href="#" class="plus-icon">
                                                    <span>+</span>
                                                </a>
                                                <div class="social-item">
                                                    <ul class="post-social">
                                                        <li><a href="#" class="icon-social"><i class="icon-fb"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-X"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-linkedin"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h6 class="title"><a href="team.html">Micheal R. Shannon</a></h6>
                                                <p class="sub-title">Software Developer</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-item hover-image">
                                            <div class="top-item">
                                                <a href="team.html" class="image">
                                                    <img src="{{ asset('frontend/image/team-item/team-item-2.jpg') }}" data-src="{{ asset('frontend/image/team-item/team-item-2.jpg') }}" alt="" class="lazyload">
                                                </a>
                                                <a href="#" class="plus-icon">
                                                    <span>+</span>
                                                </a>
                                                <div class="social-item">
                                                    <ul class="post-social">
                                                        <li><a href="#" class="icon-social"><i class="icon-fb"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-X"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-linkedin"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h6 class="title"><a href="team.html">William J. Alexander</a></h6>
                                                <p class="sub-title">App Developer</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="team-item hover-image">
                                            <div class="top-item">
                                                <a href="team.html" class="image">
                                                    <img src="{{ asset('frontend/image/team-item/team-item-3.jpg') }}" data-src="{{ asset('frontend/image/team-item/team-item-3.jpg') }}" alt="" class="lazyload">
                                                </a>
                                                <a href="#" class="plus-icon">
                                                    <span>+</span>
                                                </a>
                                                <div class="social-item">
                                                    <ul class="post-social">
                                                        <li><a href="#" class="icon-social"><i class="icon-fb"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-X"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-linkedin"></i></a></li>
                                                        <li><a href="#" class="icon-social"><i class="icon-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h6 class="title"><a href="team.html">Donnie O. Goldsmith</a></h6>
                                                <p class="sub-title">Software Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-team sw-pagination d-lg-none mt-15 justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-project tf-spacing-2">
                <div class="tf-container">
                    <div class="heading-section mb-60 text-center">
                        <div class="sub-title body-2 fw-7 mb-17 title-animation">
                            Our Case Studies
                        </div>
                        <h2 class="title fw-6 title-animation">
                            Explore Our
                            <span class="fw-3">Recent Case Studies</span>
                        </h2>
                    </div>
                </div>
                <div class="swiper tf-swiper sw-project " data-swiper='{
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "speed": 800,
                    "pagination": { "el": ".sw-pagination-project", "clickable": true },
                    "navigation": {
                        "clickable": true,
                        "nextEl": ".team-project",
                        "prevEl": ".team-project"
                    },  
                    "breakpoints": {
                        "1200": { "slidesPerView": 1.4125, "slidesPerGroup": 1}
                        }
                    }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-item hover-image">
                                <div class="item-content px-sm-15">
                                    <div class="top-content">
                                        <div class="sub-title body-2 fw-7">
                                            Software Development
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">Mobile Application Design</a></h3>
                                        <div class="desc lh-30">
                                            Sed ut perspiciatis unde omnis iste natus
                                            error sit voluptatem accusantium doloremque seeney laudantium totam
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <a href="porfolio-details.html" class="tf-btn-readmore">
                                            <span class="plus">+</span>
                                            <span class="text">Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="porfolio-details.html" class="image">
                                    <img src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" data-src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item hover-image">
                                <div class="item-content px-sm-15">
                                    <div class="top-content">
                                        <div class="sub-title body-2 fw-7">
                                            Software Development
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">UI/UX Design</a></h3>
                                        <div class="desc lh-30">
                                            Sed ut perspiciatis unde omnis iste natus
                                            error sit voluptatem accusantium doloremque seeney laudantium totam
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <a href="porfolio-details.html" class="tf-btn-readmore">
                                            <span class="plus">+</span>
                                            <span class="text">Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="porfolio-details.html" class="image">
                                    <img src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" data-src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item hover-image">
                                <div class="item-content px-sm-15">
                                    <div class="top-content">
                                        <div class="sub-title body-2 fw-7">
                                            Software Development
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">Mobile Application Design</a></h3>
                                        <div class="desc lh-30">
                                            Sed ut perspiciatis unde omnis iste natus
                                            error sit voluptatem accusantium doloremque seeney laudantium totam
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <a href="porfolio-details.html" class="tf-btn-readmore">
                                            <span class="plus">+</span>
                                            <span class="text">Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="porfolio-details.html" class="image">
                                    <img src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" data-src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item hover-image">
                                <div class="item-content px-sm-15">
                                    <div class="top-content">
                                        <div class="sub-title body-2 fw-7">
                                            Software Development
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">UI/UX Design</a></h3>
                                        <div class="desc lh-30">
                                            Sed ut perspiciatis unde omnis iste natus
                                            error sit voluptatem accusantium doloremque seeney laudantium totam
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <a href="porfolio-details.html" class="tf-btn-readmore">
                                            <span class="plus">+</span>
                                            <span class="text">Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="porfolio-details.html" class="image">
                                    <img src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" data-src="{{ asset('frontend/image/project-item/project-item-1.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-pagination-project sw-pagination mt-70 justify-content-center"></div>
            </section>

            <section class="section-testimonial tf-spacing-2">
                <div class="mask mask-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" fill="none">
                        <circle cx="400" cy="400" r="325" stroke="url(#a4)" stroke-width="150"></circle>
                        <defs>
                            <lineargradient id="a4" x1="176" x2="569" y1="70.5" y2="674">
                                <stop offset="0" stop-color="#fff" stop-opacity="0.05"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </lineargradient>
                        </defs>
                    </svg>
                </div>
                <div class="tf-container">
                    <div class="row justify-content-between rg-50">
                        <div class="col-lg-7">
                            <div class="heading-section mb-60">
                                <div class="sub-title body-2 fw-7 mb-17 title-animation">
                                    Clients Feedback
                                </div>
                                <h2 class="title fw-6 title-animation">
                                    1250+ People Say
                                    <span class="fw-3">About Us</span>
                                </h2>
                            </div>
                            <div class="swiper tf-swiper sw-testimonial" data-swiper='{
                                "slidesPerView": 1,
                                "spaceBetween": 30,
                                "speed": 1000,
                                "pagination": { "el": ".sw-pagination-testimonial", "clickable": true }
                                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="icon">
                                                <i class="icon-quote2"></i>
                                            </div>
                                            <div class="text fs-27 lh-35 fw-5">
                                                Climb the mountain not to plant your flag but to embrace
                                                the ways challenge, enjoy the air, and behold the. Climb it
                                                see the world, not so the world can see you.
                                            </div>
                                            <div class="user-testimonial">
                                                <a href="#" class="name-user body-2 ">Richard T. Simmons</a>
                                                <a href="#" class="position text-medium">Graphics Designer</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="icon">
                                                <i class="icon-quote2"></i>
                                            </div>
                                            <div class="text fs-27 lh-35 fw-5">
                                                Climb the mountain not to plant your flag but to embrace
                                                the ways challenge, enjoy the air, and behold the. Climb it
                                                see the world, not so the world can see you.
                                            </div>
                                            <div class="user-testimonial">
                                                <a href="#" class="name-user body-2 ">Richard T. Simmons</a>
                                                <a href="#" class="position text-medium">Graphics Designer</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="icon">
                                                <i class="icon-quote2"></i>
                                            </div>
                                            <div class="text fs-27 lh-35 fw-5">
                                                Climb the mountain not to plant your flag but to embrace
                                                the ways challenge, enjoy the air, and behold the. Climb it
                                                see the world, not so the world can see you.
                                            </div>
                                            <div class="user-testimonial">
                                                <a href="#" class="name-user body-2 ">Richard T. Simmons</a>
                                                <a href="#" class="position text-medium">Graphics Designer</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="icon">
                                                <i class="icon-quote2"></i>
                                            </div>
                                            <div class="text fs-27 lh-35 fw-5">
                                                Climb the mountain not to plant your flag but to embrace
                                                the ways challenge, enjoy the air, and behold the. Climb it
                                                see the world, not so the world can see you.
                                            </div>
                                            <div class="user-testimonial">
                                                <a href="#" class="name-user body-2 ">Richard T. Simmons</a>
                                                <a href="#" class="position text-medium">Graphics Designer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-pagination-testimonial sw-pagination mt-50"></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="list-image">
                                <div class="img-section img-1 img-elip tf-animate-1">
                                    <img src="{{ asset('frontend/image/section/section-testimonial-1.jpg') }}" data-src="{{ asset('frontend/image/section/section-testimonial-1.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-section img-2 tf-animate-2">
                                    <img src="{{ asset('frontend/image/section/section-testimonial-2.jpg') }}" data-src="{{ asset('frontend/image/section/section-testimonial-2.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-section img-3 tf-animate-3">
                                    <img src="{{ asset('frontend/image/section/section-testimonial-3.jpg') }}" data-src="{{ asset('frontend/image/section/section-testimonial-3.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-section img-4 img-elip tf-animate-4">
                                    <img src="{{ asset('frontend/image/section/section-testimonial-4.jpg') }}" data-src="{{ asset('frontend/image/section/section-testimonial-4.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-form tf-spacing-4">
                <div class="section-inner flex">
                    <div class="left">
                        <div class="image tf-animate-1">
                            <img src="{{ asset('frontend/image/section/img-section-form-1.jpg') }}" data-src="{{ asset('frontend/image/section/img-section-form-1.jpg') }}" alt="" class="lazyload">
                        </div>
                        <div class="section-content section-form-content tf-animate-2">
                            <div class="sub-title body-2 fw-7 mb-17">
                                Work Inquiry
                            </div>
                            <h2 class="title fw-6">
                                Let’s Work For your
                                Next Projects ?
                            </h2>
                            <a href="contact.html" class="tf-btn style-bg-white hover-bg-main-dark">
                                <span>Contact Us</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="right">
                        <form id="contactform" class="form-contact-us px-md-15" method="post" action="./contact/contact-process.php">
                            <div class="heading-form text-center">

                                <h3 class="title">
                                    Need Help For Project!
                                </h3>

                                <div class="desc lh-30">We are ready to help your next projects, let’s work together</div>

                            </div>

                            <div class="cols mb-20 g-20">

                                <fieldset class="item">
                                    <input type="text" name="name" id="name" placeholder="Name" required="">
                                    <i class="icon-user"></i>
                                </fieldset>

                                <fieldset class="item">
                                    <input type="email" name="mail" id="mail" placeholder="Email" required="">
                                    <i class="icon-email"></i>
                                </fieldset>

                            </div>

                            <div class="nice-select mb-20">
                                <span class="current caption-1">Choose Services</span>
                                <ul class="list">
                                    <li class="option option-all selected focus">
                                        Choose Services
                                    </li>
                                    <li class="option">
                                        Machine Learning
                                    </li>
                                    <li class="option">
                                        Artificial Intelligence
                                    </li>
                                    <li class="option">
                                        Augmented Reality
                                    </li>
                                    <li class="option">
                                        Software Development
                                    </li>
                                </ul>
                            </div>

                            <fieldset class="mb-20">
                                <textarea name="message" id="message" placeholder="Message" required=""></textarea>
                            </fieldset>

                            <button type="submit" class="tf-btn mx-auto">
                                <span>Send Message Us</span>
                                <i class="icon-arrow-right"></i>
                            </button>

                        </form>
                    </div>
                </div>
            </section>

            <section class="section-blog tf-spacing-2">
                <div class="mask mask-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="700" height="700" fill="none">
                        <circle cx="350" cy="350" r="285" stroke="url(#a5)" stroke-width="130"></circle>
                        <defs>
                            <lineargradient id="a5" x1="154" x2="497.875" y1="61.688" y2="589.75">
                                <stop offset="0" stop-color="#fff" stop-opacity="0.05"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </lineargradient>
                        </defs>
                    </svg>
                </div>
                <div class="tf-container">
                    <div class="heading-section mb-60 text-center">
                        <div class="sub-title body-2 fw-7 mb-17 title-animation">
                            Latest News & Blog
                        </div>
                        <h2 class="title fw-6 title-animation">
                            Read Our Latest
                            <span class="fw-3">News & Blog</span>
                        </h2>
                    </div>
                </div>
                <div class="tf-container">
                    <div class="row rg-30">
                        <div class="col-lg-6">
                            <div class="tf-post-list style-2 hover-image">
                                <div class="post-content">
                                    <div class="top-post">
                                        <div class="post-meta">
                                            <a href="blog-details.html" class="text-medium">05 June 2025</a> <span class="line"></span> <a href="#" class="text-medium">Comment(5)</a>
                                        </div>
                                        <h5 class="title fw-5"><a href="blog-details.html">The Future of Software Development Emerging and Technologies</a></h5>
                                    </div>
                                    <div class="bottom-post">
                                        <div class="desc lh-30">We undertake is a testament to our dedication to quality</div>
                                        <a href="blog-details.html" class="tf-btn-readmore style-open">
                                            <span class="plus">+</span>
                                            <span class="text">Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="image">
                                    <img src="{{ asset('frontend/image/blog/post-list-4.jpg') }}" data-src="{{ asset('frontend/image/blog/post-list-4.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tf-post-list style-2 hover-image">
                                <div class="post-content">
                                    <div class="top-post">
                                        <div class="post-meta">
                                            <a href="blog-details.html" class="text-medium">05 June 2025</a> <span class="line"></span> <a href="#" class="text-medium">Comment(5)</a>
                                        </div>
                                        <h5 class="title fw-5"><a href="blog-details.html">Mastering Agile: Best Practices for Efficient Software Development</a></h5>
                                    </div>
                                    <div class="bottom-post">
                                        <div class="desc lh-30">We undertake is a testament to our dedication to quality</div>
                                        <a href="blog-details.html" class="tf-btn-readmore style-open">
                                            <span class="plus">+</span>
                                            <span class="text">Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="image">
                                    <img src="{{ asset('frontend/image/blog/post-list-5.jpg') }}" data-src="{{ asset('frontend/image/blog/post-list-5.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- /.main-content -->

 @endsection
