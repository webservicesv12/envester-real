<!-- Footer Style -->
<footer class="main-footer alternate"
        style="background-image: url(assets/images/background/footer-bg.jpg)">
    <div class="footer-icon-four"
         style="background-image: url(assets/images/icons/footer-icon-4.png)"></div>
    <div class="footer-icon-five"
         style="background-image: url(assets/images/icons/footer-icon-5.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="footer-logo"><a href="index.html"><img
                                                 src="assets/images/logo-crest-trans"
                                                 alt=""
                                                 title=""></a></div>
                                    <div class="main-footer_text">{{ get_settings('footer_about') }}</div>

                                    <!--<div class="newsletter-box style-two">-->
                                    <!--	<form method="post" action="contact.html">-->
                                    <!--		<div class="form-group">-->
                                    <!--			<label>Email Address</label>-->
                                    <!--			<input type="email" name="search-field" value="" placeholder="name145@gmail.com" required>-->
                                    <!--			<button type="submit" class="theme-btn">Subscribe <i class="flaticon-arrow"></i></button>-->
                                    <!--		</div>-->
                                    <!--	</form>-->
                                    <!--</div>-->

                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5 class="footer-title">Links</h5>
                                    <ul class="footer-list">
                                        <li><a href="{{url('packages')}}">Pricing</a></li>
                                        <li><a href="{{url('about')}}">About us</a></li>
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5 class="footer-title">Company</h5>
                                    <ul class="footer-list">
                                        <li><a href="{{url('faqs')}}">Faq’s</a></li>
                                        <li><a href="{{url('about')}}">Meet our team</a></li>
                                        <li><a href="javascript:void(Tawk_API.toggle())">Live Chat</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <h5 class="footer-title">Our Address</h5>
                                    <div class="main-footer_text">{{ get_settings('official_address') }}</div>
                                    <div class="address_info">
                                        info@envesta.online<br>
                                        <a href="tel:+17313379057">+17313379057 </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="copyright">copyright &copy; 2020 - {{ date('Y') }} {{ config('app.name') }}. All rights
                    reserved</div>
                <ul class="footer-nav">

                    <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <p>This website can be accessed worldwide however the information on the website is related to
                    {{ config('app.name') }} A/S and is not specific to any entity of {{ config('app.name') }}. All
                    clients will directly engage with {{ config('app.name') }} A/S and all client agreements will be
                    entered into with {{ config('app.name') }} A/S .<br>
                    <br>
                    Forex and CFDs are leveraged products and can result in losses that exceed your deposits. Please
                    ensure you fully understand all of the risks. Contracts for Difference ("CFDs") are leveraged
                    products and carry a significant risk of loss to your capital, as prices may move rapidly against
                    you and you may be required to make further payments to keep any trades open. These products are not
                    suitable for all clients, therefore please ensure you fully understand the risks and seek
                    independent advice.
                    <br>
                    <br>Apple and the Apple logo are trademarks of Apple Inc, registered in the US and other countries
                    and regions. App Store is a service mark of Apple Inc. Google Play and the Google Play logo are
                    trademarks of Google LLC.
                </p>
            </div>
        </div>




    </div>
</footer>
<!-- End Footer Style -->
