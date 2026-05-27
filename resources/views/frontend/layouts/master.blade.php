<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!-- [if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif] -->
    <title> Teckko - IT Company HTML Template</title>
    <meta name="description" content="Teckko – Modern, responsive IT Company HTML Template perfect for showcasing IT services, digital solutions & boosting online sales effortlessly.">
    <meta name="keywords" content="it company template, it services template, technology website, software company website, digital solutions, responsive it template, it business, technology company, startup website, it solutions, modern it template, best it website, corporate it, it agency, website template for it">
    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
    <!-- Nice select -->
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <!-- Odometer -->
    <link rel="stylesheet" href="{{ asset('frontend/css/odometer-theme-default.css') }}">
    <!-- Textanimation -->
    <link rel="stylesheet" href="{{ asset('frontend/css/textanimation.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('frontend/forms/end-form/build/sib-styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/styles.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/icons/icomoon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend/image/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/image/logo/favicon.png') }}">


</head>

<body class="counter-scroll">

    <!-- .preload -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader-container">
                <div class="wrap-loader">
                    <div class="loader">
                    </div>
                    <div class="icon">
                        <img src="{{ asset('frontend/image/logo/favicon.png') }}" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.preload -->
    <div class="wrapper position-relative">

        

        <!-- Header -->

        @include('frontend.layouts.navbar')
        <!-- /.header -->

        <!-- Page-title -->


        <div class="robofest-hero">
            <!-- Decorative shapes -->
            <div class="shape-deco" style="top:5%; right:-150px; width:480px; height:480px; opacity:0.50;">
                <img src="{{ asset('frontend/image/page-title/shape.png') }}" alt="">
            </div>
            <div class="shape-deco" style="bottom:-8%; left:-150px; width:480px; height:480px; opacity:0.50;">
                <img src="{{ asset('frontend/image/page-title/shape.png') }}" alt="">
            </div>

            <div class="tf-container">
                <div class="hero-inner">
                    <div class="row align-items-start gy-5">
                        <div class="col-lg-5">

                            <!-- Badge -->
                            <div class="event-badge">
                                <span class="dot-live"></span>
                                Registration Open
                            </div>

                            <!-- Title -->
                            <h1 class="hero-title">
                                ROBO<span class="highlight-year">FEST</span><span class="title-tab">&nbsp;&nbsp;&nbsp;</span>2026
                            </h1>

                            <!-- Description -->
                            <p class="hero-desc">
                                Sri Lanka's premier robotics competition bringing together the brightest young engineers and innovators to compete, collaborate, and create.
                            </p>

                            <!-- Competition Date -->
                            <div class="comp-date-block">
                                <div class="date-icon">&#128197;</div>
                                <div class="date-text">
                                    <strong>August 15, 2026</strong>
                                    SLIIT Campus, Malabe, Sri Lanka
                                </div>
                            </div>

                            <!-- Countdown -->
                            <div class="countdown-wrap">
                                <div class="cd-label">Competition Starts In</div>
                                <div class="countdown-boxes">
                                    <div class="cd-box">
                                        <span class="cd-num" id="cd-days">00</span>
                                        <span class="cd-unit">Days</span>
                                    </div>
                                    <div class="cd-box">
                                        <span class="cd-num" id="cd-hours">00</span>
                                        <span class="cd-unit">Hours</span>
                                    </div>
                                    <div class="cd-box">
                                        <span class="cd-num" id="cd-mins">00</span>
                                        <span class="cd-unit">Mins</span>
                                    </div>
                                   
                                </div>
                            </div>

                            <!-- CTA -->
                            <a href="#register" class="hero-cta">
                                Register Now
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                        <div class="col-lg-7" style="padding-top: 160px;">
                            <div class="hero-image-wrap">
                                <img src="{{ asset('frontend/image/page-title/img-page-title.jpg') }}" alt="Robofest 2026" style="width: 984px; height:500px; max-width:100%;">
                                <div class="img-glow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.page-title -->

       <div> 
        @yield('content')
       </div>


       @include('frontend.layouts.footer')

        <!-- Mobile-nav-wrap -->
        <div class="offcanvas offcanvas-start mobile-nav-wrap" id="canvasMobile">
            <div class="inner-mobile-nav">
                <div class="top-header-mobi">
                    <div class="logo-mobile">
                        <a href="index.html">
                            <img src="{{ asset('frontend/image/logo/logo.svg') }}" alt="">
                        </a>
                    </div>
                    <button class="mobile-nav-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewbox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                            <g>
                                <path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </div>
                <nav class="mobile-main-nav">
                    <ul id="menu-mobile" class="menu">
                        <li class="menu-item current-menu-mobile-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-3" data-bs-toggle="collapse" class="collapsed">Porfolio</a>
                            <div id="dropdown-menu-3" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile">
                                    <li class="menu-item"><a href="porfolio-grid.html">Porfolio Grid</a></li>
                                    <li class="menu-item"><a href="porfolio-list.html">Porfolio List</a></li>
                                    <li class="menu-item"><a href="porfolio-details.html">Porfolio Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-2" data-bs-toggle="collapse" class="collapsed">Services</a>
                            <div id="dropdown-menu-2" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile">
                                    <li class="menu-item"><a href="services.html">Services</a></li>
                                    <li class="menu-item"><a href="services-details.html">Services Details</a></li>
                                </ul>
                            </div>
                        </li>


                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-4" data-bs-toggle="collapse" class="collapsed">Pages</a>
                            <div id="dropdown-menu-4" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile" id="sub-menu-mobile-1">
                                    <li class="menu-item"><a href="team.html">Team</a></li>
                                    <li class="menu-item"><a href="faq.html">FAQs</a></li>
                                    <li class="menu-item"><a href="pricing.html">Pricing Plan</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-6" data-bs-toggle="collapse" class="collapsed">Blog</a>
                            <div id="dropdown-menu-6" class="collapse" data-bs-parent="#menu-mobile">
                                <ul class="sub-menu-mobile">
                                    <li class="menu-item"><a href="blog-standard.html">Blog Standard</a></li>
                                    <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                                    <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <div class="contact-mobile">
                        <h5 class="title-contact-mobile">Contact Info</h5>
                        <ul class="mb-20">
                            <li class="content-contact-moblile"><i class="icon-location-dot"></i> <a href="#" class="text-medium">55 Main Street, San Francisco, California, USA</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-email"></i><a href="mailto:example@gmail.com" class="text-medium">themesflat@gmail.com</a>
                            </li>
                            <li class="content-contact-moblile">
                                <i class="icon-phone"></i><a href="tel:+1123456889" class="text-medium">+1 (123) 456 889</a>
                            </li>
                        </ul>

                        <ul class="post-social">
                            <li><a href="#" class="icon-social"><i class="icon-fb"></i></a></li>
                            <li><a href="#" class="icon-social"><i class="icon-X"></i></a></li>
                            <li><a href="#" class="icon-social"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#" class="icon-social"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /.mobile-nav-wrap -->

        <!-- OffcanvasMegamenu -->
        <div class="offcanvas offcanvas-end offcanvasMegamenu" id="canvnasMegamenu">
            <div class="heading flex justify-content-between">
                <div class="logo-megamenu">
                    <img src="{{ asset('frontend/image/logo/logo.svg') }}" alt="">
                </div>
                <a class="tf-close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </a>
            </div>
            <div class="desc lh-30">
                We provide comprehensive IT services, including web design, software development, and technology solutions to help businesses with digital transformation, operational efficiency, and sustainable growth.
            </div>

            <div class="contact-mega-menu meag-menu-item">
                <ul class="contact-list-mega-menu">
                    <li>
                        <p class="lh-30">Address:
                            <a href="#" target="_blank">
                                70 Washington Square South, New York, NY 10012, United States
                            </a>
                        </p>
                    </li>
                    <li>
                        <p class="lh-30">Email:
                            <a href="mailto:example@gmail.com">
                                example@gmail.com
                            </a>
                        </p>
                    </li>
                    <li>
                        <p class="lh-30"> Call: <a href="tel:+00012345688">
                                +000 (123) 456 88</a>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="megamenu-subscribe">
                <h5 class="title-content">
                    Newsletter Subscribe
                </h5>
                <form class="form-newsletter2 subscribe-form" accept-charset="utf-8" data-mailchimp="true">
                    <input type="email" name="email-form" class="subscribe-email" placeholder="Email address" tabindex="0" aria-required="true" required="">
                    <button class="subscribe-button tf-btn-newsletter">
                        <i class="icon-send"></i>
                    </button>
                </form>
            </div>

            <div class="megamenu-recent">
                <h4 class="title-content">
                    Recent News
                </h4>
                <div class="tf-post-list style-small hover-img">
                    <a href="blog-details.html" class="image">
                        <img src="{{ asset('frontend/image/blog/post-list-1.jpg') }}" data-src="{{ asset('frontend/image/blog/post-list-1.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                    </a>
                    <div class="post-content">
                        <div class="post-date">
                            <i class="icon-email"></i>
                            <span>Dec 12, 2025</span>
                        </div>
                        <a href="#" class="body-2">
                            Tips For Conducting Studie
                        </a>
                    </div>
                </div>
                <div class="tf-post-list style-small hover-img">
                    <a href="blog-details.html" class="image">
                        <img src="{{ asset('frontend/image/blog/post-list-2.jpg') }}" data-src="{{ asset('frontend/image/blog/post-list-2.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                    </a>
                    <div class="post-content">
                        <div class="post-date">
                            <i class="icon-email"></i>
                            <span>Dec 12, 2025</span>
                        </div>
                        <a href="#" class="body-2">
                            Usability With Participants
                        </a>
                    </div>
                </div>
                <div class="tf-post-list style-small hover-img">
                    <a href="blog-details.html" class="image">
                        <img src="{{ asset('frontend/image/blog/post-list-3.jpg') }}" data-src="{{ asset('frontend/image/blog/post-list-3.jpg') }}" alt="" class=" ls-is-cached lazyloaded">
                    </a>
                    <div class="post-content">
                        <div class="post-date">
                            <i class="icon-email"></i>
                            <span>Dec 12, 2025</span>
                        </div>
                        <a href="#" class="body-2">
                            Online Environment Work
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.offcanvasMegamenu -->

        <!-- Go-top -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 277.672;">
                </path>
            </svg>
        </div>
        <!-- /.go-top -->

        <div class="overlay-filter" id="overlay-filter"></div>

    </div>

    <!-- Javascript -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lazysize.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('frontend/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/js/Splitetext.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ScrollSmooth.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('frontend/js/textanimation.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="js/sibforms.js" defer=""></script>
    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0); 
    </script>

    <script>
        // Robofest 2026 Countdown — target: August 15, 2026 09:00 AM
        (function () {
            var target = new Date('2026-08-15T09:00:00').getTime();
            function pad(n) { return n < 10 ? '0' + n : n; }
            function tick() {
                var now  = new Date().getTime();
                var diff = target - now;
                if (diff <= 0) {
                    document.getElementById('cd-days').textContent  = '00';
                    document.getElementById('cd-hours').textContent = '00';
                    document.getElementById('cd-mins').textContent  = '00';
                    document.getElementById('cd-secs').textContent  = '00';
                    return;
                }
                var d = Math.floor(diff / (1000 * 60 * 60 * 24));
                var h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                var s = Math.floor((diff % (1000 * 60)) / 1000);
                document.getElementById('cd-days').textContent  = pad(d);
                document.getElementById('cd-hours').textContent = pad(h);
                document.getElementById('cd-mins').textContent  = pad(m);
                document.getElementById('cd-secs').textContent  = pad(s);
            }
            tick();
            setInterval(tick, 1000);
        })();
    </script>
    <!-- /Javascript -->


</body>

</html>
