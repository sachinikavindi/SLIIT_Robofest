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
                                        This annual competition empowers school and university students with skills in electronics, robotics, critical thinking, and problem-solving, inspiring innovation and collaboration among school and university participants.  
                                    </p><br>
                                    <p class="lh-30">
                                        Beyond fostering curiosity and passion for technology, Robofest bridges academic learning and real-world applications through hands-on activities and challenges. Its legacy includes uplifting STEM standards nationwide and preparing students to compete internationally, bringing recognition to Sri Lankan talent.  
                                       Robofest’s enduring success reflects SLIIT’s Faculty of Engineering’s commitment to nurturing young innovators and advancing STEM education, shaping a brighter, technology-driven future.  
                                    </p>
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
                                    Explore Our Achievements
                                </div>
                                <h2 class="title fw-6 title-animation">
                                    Premier Tech Innovations
                                    <span class="fw-3">Teckko Software Agency</span>
                                </h2>
                            </div>
                            <div class="wg-counter flex g-30">

                                <div class="counter-item style-2 style-bg-primary px-md-15">
                                    <div class="icon">
                                        <i class="icon-machine"></i>
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
                                        <i class="icon-star"></i>
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

           
            <section class="section-services tf-spacing-2">
                
               
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section mb-60 text-center">
                                <div class="sub-title body-2 fw-7 mb-17 title-animation">
                                   Our Competition Categories
                                </div>
                                <h2 class="title fw-6 title-animation">
                                    Explore Exciting Competition Categories
                                    <br><span class="fw-3">Designed for Future Inventors</span>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="competition-icon">
                                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                                                    <path d="M6 12v5c0 2 2.5 3 6 3s6-1 6-3v-5"/>
                                                    <ellipse cx="12" cy="17" rx="3" ry="1" transform="rotate(30 12 17)"/>
                                                    <ellipse cx="12" cy="17" rx="3" ry="1" transform="rotate(-30 12 17)"/>
                                                    <circle cx="12" cy="17" r="0.75" fill="currentColor"/>
                                                </svg>
                                            </div>
                                            <h6 class="lh-30 fw-6"><a href="services-details.html" class="title-service"> School Competition</a></h6>
                                            <div class="desc lh-30">
                                                Empowering school students to explore the fundamentals of robotics, electronics, and coding through creative, hands-on challenges.
                                            </div>
                                            <a href="services-details.html" class="image">
                                                <img src="{{ asset('frontend/image/services-item/school_competition.jpg') }}" data-src="{{ asset('frontend/image/services-item/school_competition.jpg') }}" alt="" class="lazyload">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="competition-icon">
                                                    <path d="M4 20h16"/>
                                                    <path d="M6 20v-2h12v2"/>
                                                    <path d="M12 18l-3-7 7-4"/>
                                                    <path d="M16 7l2-3M15 5l2 2"/>
                                                    <circle cx="17" cy="6" r="3" stroke-dasharray="2 2"/>
                                                    <circle cx="12" cy="18" r="2" fill="currentColor"/>
                                                    <circle cx="9" cy="11" r="2" fill="currentColor"/>
                                                </svg>
                                            </div>
                                            <h6 class="lh-30 fw-6"><a href="services-details.html" class="title-service">University Competition</a></h6>
                                            <div class="desc lh-30">
                                                Challenging university minds to design and build advanced autonomous systems, pushing the boundaries of engineering innovation.
                                            </div>
                                            <a href="services-details.html" class="image">
                                                <img src="{{ asset('frontend/image/services-item/university_competition.jpg') }}" data-src="{{ asset('frontend/image/services-item/university_competition.jpg') }}" alt="" class="lazyload">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="competition-icon">
                                                    <path d="M6 6l12 6M18 6L6 12" stroke-width="1"/>
                                                    <circle cx="12" cy="9" r="1.5" fill="currentColor"/>
                                                    <path d="M5 6a1 1 0 1 0 2 0 1 1 0 1 0-2 0zM17 6a1 1 0 1 0 2 0 1 1 0 1 0-2 0zM5 12a1 1 0 1 0 2 0 1 1 0 1 0-2 0zM17 12a1 1 0 1 0 2 0 1 1 0 1 0-2 0z"/>
                                                    <rect x="7" y="16" width="10" height="4" rx="1"/>
                                                    <circle cx="8" cy="21" r="1.5" fill="currentColor"/>
                                                    <circle cx="12" cy="21" r="1.5" fill="currentColor"/>
                                                    <circle cx="16" cy="21" r="1.5" fill="currentColor"/>
                                                    <path d="M12 16v-2l2-1"/>
                                                </svg>
                                            </div>
                                            <h6 class="lh-30 fw-6"><a href="services-details.html" class="title-service">Open Competition</a></h6>
                                            <div class="desc lh-30">
                                                Featuring two main tracks: the high-speed <strong>Drone Competition</strong> and the tactical planetary explorer <strong>Rover Competition</strong> open for all.
                                            </div>
                                            <a href="services-details.html" class="image">
                                                <img src="{{ asset('frontend/image/services-item/SLIIT-robofest-drone.jpg') }}" data-src="{{ asset('frontend/image/services-item/SLIIT-robofest-drone.jpg') }}" alt="" class="lazyload">
                                            </a>
                                            <div class="bottom-item flex g-15 align-items-center">
                                                <a href="/drone-competition" class="tf-btn-readmore style-drone-rover">
                                                    <span class="plus">+</span>
                                                    <span class="text">Drone Details</span>
                                                </a>
                                                <a href="/rover-competition" class="tf-btn-readmore style-drone-rover">
                                                    <span class="plus">+</span>
                                                    <span class="text">Rover Details</span>
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

            </section>

            <section class="section-project tf-spacing-2">
                <div class="tf-container">
                    <div class="heading-section mb-60 text-center">
                        <div class="sub-title body-2 fw-7 mb-17 title-animation">
                            Hall of Champions
                        </div>
                        <h2 class="title fw-6 title-animation">
                           Celebrating Our
                            <span class="fw-3">Latest Winners</span>
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
                                           School Competition Champion 2025
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">Team Storam Tech</a></h3>
                                        <div class="desc lh-30">
                                            <strong>Winner:</strong> K.D. Kavinda Rajapaksha & Team<br>
                                            <strong>School:</strong> Maliyadeva College, Kurunegala<br>
                                            <strong>Project:</strong> High-speed autonomous maze-solving robotics system.
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
                                    <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" data-src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item hover-image">
                                <div class="item-content px-sm-15">
                                    <div class="top-content">
                                        <div class="sub-title body-2 fw-7">
                                            University Competition Champion 2025
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">Team X-Bots</a></h3>
                                        <div class="desc lh-30">
                                            <strong>Winner:</strong> Sachithra Wijesinghe & Team<br>
                                            <strong>University:</strong> Sri Lanka Institute of Information Technology (SLIIT)<br>
                                            <strong>Project:</strong> Advanced autonomous warehouse sorting and inventory robot.
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
                                    <img src="{{ asset('frontend/image/project-item/Champion-UNI.jpg') }}" data-src="{{ asset('frontend/image/project-item/Champion-UNI.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item hover-image">
                                <div class="item-content px-sm-15">
                                    <div class="top-content">
                                        <div class="sub-title body-2 fw-7">
                                            Open Drone Competition Champion 2025
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">Team AeroViper</a></h3>
                                        <div class="desc lh-30">
                                            <strong>Winner:</strong> Hiruni Bandara & Team<br>
                                            <strong>Institution:</strong> University of Moratuwa<br>
                                            <strong>Project:</strong> Custom precision agricultural aerial inspection drone.
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
                                    <img src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" data-src="{{ asset('frontend/image/project-item/champion-school.jpg') }}" alt="" class="lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item hover-image">
                                <div class="item-content px-sm-15">
                                    <div class="top-content">
                                        <div class="sub-title body-2 fw-7">
                                            Open Rover Competition Champion 2025
                                        </div>
                                        <h3 class="title-project"><a href="porfolio-details.html">Team TerraRover</a></h3>
                                        <div class="desc lh-30">
                                            <strong>Winner:</strong> Mohamed Nizar & Team<br>
                                            <strong>Institution:</strong> University of Peradeniya<br>
                                            <strong>Project:</strong> High-terrain planetary exploration rover with multi-link suspension.
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
                                    <img src="{{ asset('frontend/image/project-item/Champion-UNI.jpg') }}" data-src="{{ asset('frontend/image/project-item/Champion-UNI.jpg') }}" alt="" class="lazyload">
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
                                     Student Testimonials
                                 </div>
                                 <h2 class="title fw-6 title-animation">
                                     What Our
                                     <span class="fw-3">Young Innovators Say</span>
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
                                                 "Participating in Robofest was a life-changing experience. Building our own maze-solver taught us practical electronics, logic, and teamwork that we never could have learned from textbooks alone!"
                                             </div>
                                             <div class="user-testimonial">
                                                 <a href="#" class="name-user body-2 ">Sanduni Senanayake</a>
                                                 <a href="#" class="position text-medium">Ananda College — School Category Finalist</a>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="swiper-slide">
                                         <div class="testimonial-item">
                                             <div class="icon">
                                                 <i class="icon-quote2"></i>
                                             </div>
                                             <div class="text fs-27 lh-35 fw-5">
                                                 "The level of competition at Robofest pushed our engineering skills to their absolute limits. Designing an autonomous rover with multi-link terrain suspension was challenging but incredibly rewarding!"
                                             </div>
                                             <div class="user-testimonial">
                                                 <a href="#" class="name-user body-2 ">Sachintha De Silva</a>
                                                 <a href="#" class="position text-medium">University of Moratuwa — Rover Category Winner</a>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="swiper-slide">
                                         <div class="testimonial-item">
                                             <div class="icon">
                                                 <i class="icon-quote2"></i>
                                             </div>
                                             <div class="text fs-27 lh-35 fw-5">
                                                 "Robofest provides the perfect platform to bridge the gap between academic theory and real-world implementation. The drone challenges allowed us to innovate with custom flight controllers and computer vision."
                                             </div>
                                             <div class="user-testimonial">
                                                 <a href="#" class="name-user body-2 ">Methsarani Perera</a>
                                                 <a href="#" class="position text-medium">SLIIT — Drone Category Champion</a>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="swiper-slide">
                                         <div class="testimonial-item">
                                             <div class="icon">
                                                 <i class="icon-quote2"></i>
                                             </div>
                                             <div class="text fs-27 lh-35 fw-5">
                                                 "It was amazing to see so many young minds passionate about robotics under one roof. The workshops and peer interactions inspired my team to start our school's first robotics club!"
                                             </div>
                                             <div class="user-testimonial">
                                                 <a href="#" class="name-user body-2 ">Devinda Jayawardena</a>
                                                 <a href="#" class="position text-medium">Royal College, Colombo — Best Innovative Project Award</a>
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
                                    <img src="{{ asset('frontend/image/section/section-testimonial-1.png') }}" data-src="{{ asset('frontend/image/section/section-testimonial-1.png') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-section img-2 tf-animate-2">
                                    <img src="{{ asset('frontend/image/section/section-testimonial-2.png') }}" data-src="{{ asset('frontend/image/section/section-testimonial-2.png') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-section img-3 tf-animate-3">
                                    <img src="{{ asset('frontend/image/section/section-testimonial-3.png') }}" data-src="{{ asset('frontend/image/section/section-testimonial-3.jpg') }}" alt="" class="lazyload">
                                </div>
                                <div class="img-section img-4 img-elip tf-animate-4">
                                    <img src="{{ asset('frontend/image/section/section-testimonial-4.jpg') }}" data-src="{{ asset('frontend/image/section/section-testimonial-4.jpg') }}" alt="" class="lazyload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            
        </div>

        <!-- /.main-content -->

 @endsection
