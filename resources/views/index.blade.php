@extends('layouts.frontend.app')

@push('content')


    <!-- Slider Two -->
    <section class="slider-two"
             style="background-image:url(assets/images/main-slider/1.png)">
        <div class="slider-two_icon"
             style="background-image:url(assets/images/main-slider/icon-1.png)"></div>
        <div class="slider-two_icon-two"
             style="background-image:url(assets/images/main-slider/icon-2.png)"></div>
        <div class="slider-two_icon-three"
             style="background-image:url(assets/images/main-slider/icon-3.png)"></div>
        <div class="slider-two_icon-four"
             style="background-image:url(assets/images/main-slider/icon-4.png)"></div>
        <div class="slider-two_icon-five"
             style="background-image:url(assets/images/main-slider/icon-6.png)"></div>
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <div class="slider-two_image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-two_image-outer">
                                    <div class="slider-two_image">
                                        <img src="assets/images/main-slider/image-2.png"
                                             alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-two_content-column col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-two_content-outer">
                                    <!-- Slider Two Counter -->
                                    <div class="slider-two_counter-box"
                                         style="background-image:url(assets/images/main-slider/icon-5.png)">
                                        <div class="slider-two_counter-content">
                                            <div class="slider-two_counter count-box"><span class="count-text"></span>130k+
                                                <i>Consulting Services</i>
                                            </div>
                                        </div>
                                    </div>

                                    <h1 class="slider-two_heading">Boosting your investment</h1>
                                    <div class="slider-two_text">Take your finances to the next level with our assistance.
                                    </div>
                                    <div class="slider-two_options d-flex align-items-center flex-wrap">
                                        <!-- Button Box -->
                                        <div class="slider-two_button">
                                            @if(!auth()->check())
                                                <a href="https://envestar.online/user/login"
                                                   class="theme-btn btn-style-two">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Get Started</span>
                                                        <span class="text-two">Get Started</span>
                                                    </span>
                                                </a>
                                            @endif
                                            @if(auth()->check())
                                                <a href="{{url('user/dashboard')}}"
                                                   class="theme-btn btn-style-two">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Dashboard</span>
                                                        <span class="text-two">Dashboard</span>
                                                    </span>
                                                </a>
                                            @endif
                                        </div>
                                        <!-- Expert Box -->
                                        <div class="slider-two_experts">
                                            1.6+million <span>World Customer</span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <div class="slider-two_image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-two_image-outer">
                                    <div class="slider-two_image">
                                        <img src="assets/images/main-slider/image-2.png"
                                             alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-two_content-column col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-two_content-outer">
                                    <!-- Slider Two Counter -->
                                    <div class="slider-two_counter-box"
                                         style="background-image:url(assets/images/main-slider/icon-5.png)">
                                        <div class="slider-two_counter-content">
                                            <div class="slider-two_counter count-box"><span class="count-text"></span>130k+
                                                <i>Consulting Services</i>
                                            </div>
                                        </div>
                                    </div>

                                    <h1 class="slider-two_heading">Plan your success</h1>
                                    <div class="slider-two_text">Refine Bitcoin Savings with Lucrative Profit</div>
                                    <div class="slider-two_options d-flex align-items-center flex-wrap">
                                        <!-- Button Box -->
                                        <div class="slider-two_button">
                                            @if(!auth()->check())
                                                <a href="https://envestar.online/user/login"
                                                   class="theme-btn btn-style-two">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Get Started</span>
                                                        <span class="text-two">Get Started</span>
                                                    </span>
                                                </a>
                                            @endif
                                            @if(auth()->check())
                                                <a href="{{url('user/dashboard')}}"
                                                   class="theme-btn btn-style-two">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Dashboard</span>
                                                        <span class="text-two">Dashboard</span>
                                                    </span>
                                                </a>
                                            @endif
                                        </div>
                                        <!-- Expert Box -->
                                        <div class="slider-two_experts">
                                            1.6+million <span>World Customer</span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <div class="slider-two_image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-two_image-outer">
                                    <div class="slider-two_image">
                                        <img src="assets/images/main-slider/image-2.png"
                                             alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-two_content-column col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-two_content-outer">
                                    <!-- Slider Two Counter -->
                                    <div class="slider-two_counter-box"
                                         style="background-image:url(assets/images/main-slider/icon-5.png)">
                                        <div class="slider-two_counter-content">
                                            <div class="slider-two_counter count-box"><span class="count-text"></span>130k+
                                                <i>Consulting Services</i>
                                            </div>
                                        </div>
                                    </div>

                                    <h1 class="slider-two_heading">High savings model</h1>
                                    <div class="slider-two_text">Progress to intelligent investment opportunities, tailored
                                        for savvy growth.</div>
                                    <div class="slider-two_options d-flex align-items-center flex-wrap">
                                        <!-- Button Box -->
                                        <div class="slider-two_button">
                                            @if(!auth()->check())
                                                <a href="https://envestar.online/user/login"
                                                   class="theme-btn btn-style-two">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Get Started</span>
                                                        <span class="text-two">Get Started</span>
                                                    </span>
                                                </a>
                                            @endif
                                            @if(auth()->check())
                                                <a href="{{url('user/dashboard')}}"
                                                   class="theme-btn btn-style-two">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Dashboard</span>
                                                        <span class="text-two">Dashboard</span>
                                                    </span>
                                                </a>
                                            @endif
                                        </div>
                                        <!-- Expert Box -->
                                        <div class="slider-two_experts">
                                            1.6+million <span>World Customer</span>
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
    <!-- End Main Slider Section -->

    <!-- Services Three -->
    <section class="services-three">
        <div class="services-three_icon-one"
             style="background-image:url(assets/images/icons/icon-2.png)"></div>
        <div class="services-three_icon-two"
             style="background-image:url(assets/images/icons/icon-3.png)"></div>
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Our Services</div>
                <h2 class="sec-title_heading">We’re Offering Investment <br> Consulting Services</h2>
            </div>

            <div class="row clearfix">

                <!-- Service Block Three -->
                <div class="service-block_three col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_three-inner wow fadeInLeft"
                         data-wow-delay="0ms"
                         data-wow-duration="1500ms">
                        <div class="service-block_three-upper-box d-flex align-items-center flex-wrap">
                            <div class="service-block_three-icon">
                                <img src="assets/images/icons/service-8.svg"
                                     alt="" />
                            </div>
                            <h4 class="service-block_three-heading"><a href="{{url('faqs')}}">Safe & Secure</a></h4>
                        </div>
                        <div class="service-block_three-text">crescenttrades is regulated by the world's biggest supervision
                            authorities, including the Financial Conduct Authority.</div>
                        <a class="service-block_three-more"
                           href="{{url('faqs')}}"><span>more</span><i class="flaticon-arrow"></i></a>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block_three col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_three-inner wow fadeInLeft"
                         data-wow-delay="150ms"
                         data-wow-duration="1500ms">
                        <div class="service-block_three-upper-box d-flex align-items-center flex-wrap">
                            <div class="service-block_three-icon">
                                <img src="assets/images/icons/service-9.svg"
                                     alt="" />
                            </div>
                            <h4 class="service-block_three-heading"><a href="{{url('faqs')}}">24/7 Support</a></h4>
                        </div>
                        <div class="service-block_three-text">Our multilingual customer support team is ready to help you -
                            24h hours a day.</div>
                        <a class="service-block_three-more"
                           href="{{url('faqs')}}"><span>more</span><i class="flaticon-arrow"></i></a>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block_three col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_three-inner wow fadeInLeft"
                         data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="service-block_three-upper-box d-flex align-items-center flex-wrap">
                            <div class="service-block_three-icon">
                                <img src="assets/images/icons/service-10.svg"
                                     alt="" />
                            </div>
                            <h4 class="service-block_three-heading"><a href="{{url('faqs')}}">Matrix</a></h4>
                        </div>
                        <div class="service-block_three-text">Harness the power of community-driven growth in the
                            cryptocurrency space with Matrix. Expand your network, refer, and earn.</div>
                        <a class="service-block_three-more"
                           href="{{url('faqs')}}"><span>more</span><i class="flaticon-arrow"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Three -->

    <!-- Counter One -->
    <section class="counter-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Counter Column -->
                <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-block_one-inner wow flipInX"
                         data-wow-delay="0ms"
                         data-wow-duration="1500ms">
                        <div class="counter-block_one-counter"><span class="odometer"
                                  data-count="125"></span>+</div>
                        <div class="counter-block_one-text">Active partner</div>
                    </div>
                </div>

                <!-- Counter Column -->
                <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-block_one-inner wow flipInX"
                         data-wow-delay="150ms"
                         data-wow-duration="1500ms">
                        <div class="counter-block_one-counter">$<span class="odometer"
                                  data-count="4"></span>%</div>
                        <div class="counter-block_one-text">Low interest rate</div>
                    </div>
                </div>

                <!-- Counter Column -->
                <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-block_one-inner wow flipInX"
                         data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="counter-block_one-counter"><span class="odometer"
                                  data-count="30"></span>+</div>
                        <div class="counter-block_one-text">Digital award</div>
                    </div>
                </div>

                <!-- Counter Column -->
                <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="counter-block_one-inner wow flipInX"
                         data-wow-delay="450ms"
                         data-wow-duration="1500ms">
                        <div class="counter-block_one-counter"><span class="odometer"
                                  data-count="97"></span>%</div>
                        <div class="counter-block_one-text">Design-to-code success</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Counter One -->

    <!-- About Two -->
    <section class="about-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="about-two_content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="about-two_content-outer">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">about us</div>
                            <h2 class="sec-title_heading">We Support Your Investment in Growth</h2>
                            <div class="sec-title_text">Begin your financial evolution with {{ config('app.name') }}'s
                                groundbreaking savings model, a gateway to enhanced earnings and expansive customer reach.
                                Progress to intelligent investment opportunities, tailored for savvy growth.</div>
                        </div>

                        <!-- About List -->
                        <ul class="about-two_list">
                            <li><i><img src="assets/images/icons/check.svg"
                                         alt="" /></i>Deep market analysis and insights, empowering informed investment
                                decisions.</li>
                            <li><i><img src="assets/images/icons/check.svg"
                                         alt="" /></i>Experience unparalleled speed with our Turbo Speed feature.</li>
                            <li><i><img src="assets/images/icons/check.svg"
                                         alt="" /></i>Intuitive interfaces that cater to both novices and professional
                                users.</li>
                        </ul>

                        <!-- Button Box -->
                        <div class="about-two_button">
                            <a href="{{url('about')}}"
                               class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">About agency</span>
                                    <span class="text-two">About agency</span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="about-two_image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="about-two_image-outer">
                        <div class="about-two_image">
                            <img src="assets/images/resource/about-2.jpg"
                                 alt="" />
                        </div>
                        <div class="mission-box">
                            <h3 class="mission-box_title">Our Mission</h3>
                            <div class="mission-box_text">Tell us about yours and start executing it today with a trusted
                                software development service provider.</div>
                            <div class="mission-box-drop d-flex justify-content-between align-items-center flex-wrap">
                                <a class="mission-box_line"
                                   href="{{url('contact')}}">Drop us a line</a>
                                <a class="mission-box_arrow"
                                   href="#">
                                    <i class="flaticon-arrow-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Two -->


    <!-- Testimonial Two -->
    <section class="testimonial-two">
        <div class="testimonial-two_icon"
             style="background-image:url(assets/images/icons/icon-6.png)"></div>
        <div class="testimonial-two_icon-two"
             style="background-image:url(assets/images/icons/icon-7.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title">TESTIMONIAL</div>
                    <h2 class="sec-title_heading">Client Review What <br> People Say</h2>
                </div>
                <div class="right-box">
                    <a class="testimonial-two_review"
                       href="https://envestar.online/user/login">Get Started</a>
                </div>
            </div>
        </div>

        <div class="outer-container">
            <div class="three-item_carousel swiper-container">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_two">
                            <div class="testimonial-block_two-inner"
                                 style="background-image:url(assets/images/background/testimonial-two_bg.png)">
                                <div class="testimonial-block_two-overlay"
                                     style="background-image:url(assets/images/background/testimonial-two_bg-2.png)"></div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-title">Great agency</div>
                                    <div class="testimonial-block_two-quote">
                                        <i class="flaticon-right-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonial-block_two-text">I have received financial advice from
                                    {{ config('app.name') }} since 2022, and my experience has been excellent.
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-author">
                                        <div class="testimonial-block_two-author_image">
                                            <img src="assets/images/resource/author-1.png"
                                                 alt="" />
                                        </div>
                                        Samuel Jack
                                        <span>consultant</span>
                                    </div>
                                    <div class="testimonial-block_two-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_two">
                            <div class="testimonial-block_two-inner"
                                 style="background-image:url(assets/images/background/testimonial-two_bg.png)">
                                <div class="testimonial-block_two-overlay"
                                     style="background-image:url(assets/images/background/testimonial-two_bg-2.png)"></div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-title">Incritable services</div>
                                    <div class="testimonial-block_two-quote">
                                        <i class="flaticon-right-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonial-block_two-text">“We were really happy with the whole process. The
                                    team’s workflow was smooth; their support communicated well ”</div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-author">
                                        <div class="testimonial-block_two-author_image">
                                            <img src="assets/images/resource/author-4.png"
                                                 alt="" />
                                        </div>
                                        David Robert
                                        <span>Investment</span>
                                    </div>
                                    <div class="testimonial-block_two-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_two">
                            <div class="testimonial-block_two-inner"
                                 style="background-image:url(assets/images/background/testimonial-two_bg.png)">
                                <div class="testimonial-block_two-overlay"
                                     style="background-image:url(assets/images/background/testimonial-two_bg-2.png)"></div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-title">Awesome Platform</div>
                                    <div class="testimonial-block_two-quote">
                                        <i class="flaticon-right-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonial-block_two-text">“We’re most impressed with {{ config('app.name') }}
                                    ability to come up with a system to be able to bring financial solutions.”</div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-author">
                                        <div class="testimonial-block_two-author_image">
                                            <img src="assets/images/resource/author-5.png"
                                                 alt="" />
                                        </div>
                                        Steven Keth
                                        <span>New York, USA</span>
                                    </div>
                                    <div class="testimonial-block_two-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_two">
                            <div class="testimonial-block_two-inner"
                                 style="background-image:url(assets/images/background/testimonial-two_bg.png)">
                                <div class="testimonial-block_two-overlay"
                                     style="background-image:url(assets/images/background/testimonial-two_bg-2.png)"></div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-title">Great agency</div>
                                    <div class="testimonial-block_two-quote">
                                        <i class="flaticon-right-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonial-block_two-text">I have received financial help from
                                    {{ config('app.name') }}, and my experience has been excellent.
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-author">
                                        <div class="testimonial-block_two-author_image">
                                            <img src="assets/images/resource/author-1.png"
                                                 alt="" />
                                        </div>
                                        Golan Adam
                                        <span>Boston, USA</span>
                                    </div>
                                    <div class="testimonial-block_two-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_two">
                            <div class="testimonial-block_two-inner"
                                 style="background-image:url(assets/images/background/testimonial-two_bg.png)">
                                <div class="testimonial-block_two-overlay"
                                     style="background-image:url(assets/images/background/testimonial-two_bg-2.png)"></div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-title">Incritable services</div>
                                    <div class="testimonial-block_two-quote">
                                        <i class="flaticon-right-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonial-block_two-text">“I have only been a member for a few months and i
                                    have already earned a decent amount of money spotify plays. Finally a real and honest
                                    company that does what it says. Thank you so much for this great opportunity!”</div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-author">
                                        <div class="testimonial-block_two-author_image">
                                            <img src="assets/images/resource/author-4.png"
                                                 alt="" />
                                        </div>

                                        KENAN GRACE
                                        <span>New York, USA</span>
                                    </div>
                                    <div class="testimonial-block_two-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_two">
                            <div class="testimonial-block_two-inner"
                                 style="background-image:url(assets/images/background/testimonial-two_bg.png)">
                                <div class="testimonial-block_two-overlay"
                                     style="background-image:url(assets/images/background/testimonial-two_bg-2.png)"></div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-title">Really Great agency</div>
                                    <div class="testimonial-block_two-quote">
                                        <i class="flaticon-right-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonial-block_two-text">“Am an engineer in Washington DC brought this
                                    opportunity to me I just said casually to invest with $500 but my story today is on a
                                    promo plan.”</div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="testimonial-block_two-author">
                                        <div class="testimonial-block_two-author_image">
                                            <img src="assets/images/resource/author-5.png"
                                                 alt="" />
                                        </div>

                                        CHRIS SAIN
                                        <span>Engineer</span>
                                    </div>
                                    <div class="testimonial-block_two-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Two -->



@endpush