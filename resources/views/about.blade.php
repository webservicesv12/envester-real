@extends('layouts.frontend.app')

@push('content')

    <!-- Page Title -->
    <section class="page-title">
        <div class="page-title_shapes"
             style="background-image:url(assets/images/background/page-title_bg.png)"></div>
        <div class="page-title_bg"
             style="background-image:url(assets/images/background/page-title_bg.jpg)"></div>
        <div class="page-title_icons"
             style="background-image:url(assets/images/background/page-title_icons.png)"></div>
        <div class="auto-container">
            <h2>About Us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- Experiance One -->
    <section class="experiance-one">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Left Column -->
                    <div class="left-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="pattern-layer"
                                 style="background-image:url(assets/images/background/cta-pattern.png)"></div>
                            <h3>30 yers+</h3>
                            <div class="text">We’ve experience more than 30+ years with success.</div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h3>$2.4b+</h3>
                            <div class="text">Total investment volume over time</div>
                            <a class="arrow"
                               href="#">
                                <i class="flaticon-up-right-arrow"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Experiance One -->

    <!-- Choose One -->
    <section class="choose-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-one_image-outer">
                        <div class="choose-one_image">
                            <img src="assets/images/resource/choose.jpg"
                                 alt="" />
                        </div>
                        <div class="choose-one_rating d-flex align-items-center">
                            <div class="choose-one_star">5.0 <i class="fa fa-star"></i></div>
                            <div>
                                <h3>clutch</h3>
                                <div class="rating-text">Top digital marketing agencies in the world</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="choose-one_content-outer">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">Why choose us?</div>
                            <h2 class="sec-title_heading">We Support Your Investment in Growth</h2>
                            <div class="sec-title_text">Begin your financial evolution with Envesta's groundbreaking savings
                                model, a gateway to enhanced earnings and expansive customer reach. Progress to intelligent
                                investment opportunities, tailored for savvy growth.</div>
                        </div>

                        <!-- Content Box -->
                        <div class="choose-one_feature-content">
                            <!-- Choose Block One -->
                            <div class="choose-block_one">
                                <h4>Our Mission</h4>
                                We’re regulated by the the world's biggest supervision authorities.
                            </div>
                            <!-- Choose Block One -->
                            <div class="choose-block_one">
                                <h4>Our Vision</h4>
                                Constantly improve our investment platform trying to make it the best on the market.
                            </div>
                        </div>

                        <!-- Button Box -->
                        <div class="choose-one_button">
                            <a href="{{url('contact')}}"
                               class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact Us</span>
                                    <span class="text-two">Contact Us</span>
                                </span>
                            </a>
                        </div>

                        <!-- Growth Box -->
                        <div class="growth-box"
                             style="background-image:url(assets/images/background/growth-bg.jpg)">
                            <div class="growth-box_inner d-flex justify-content-between align-items-center flex-wrap">
                                <div class="growth-box_icon"
                                     style="background-image:url(assets/images/icons/growth-icon.png)"></div>
                                <div>
                                    <h3>Growth</h3>
                                    <div class="text">Our Investment Strategists will help you in <br> building your
                                        financial right.</div>
                                </div>
                                <div class="growth-arrow_box">
                                    <a class="arrow"
                                       href="{{url('contact')}}"><i class="flaticon-arrow-2"></i></a>
                                    Drop us a line
                                </div>
                            </div>
                        </div>
                        <!-- End Growth Box -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Choose One -->
    <!-- Counter One / Style Three -->
    <section class="counter-one style-three">
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
    <!-- End Counter One / Style Three --><br><br>


@endpush
