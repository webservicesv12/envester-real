@extends('layouts.frontend.app')

@push('content')

   <!-- Page Title -->
    <section class="page-title">
		<div class="page-title_shapes" style="background-image:url(assets/images/background/page-title_bg.png)"></div>
		<div class="page-title_bg" style="background-image:url(assets/images/background/page-title_bg.jpg)"></div>
		<div class="page-title_icons" style="background-image:url(assets/images/background/page-title_icons.png)"></div>
		<div class="auto-container">
			<h2>Faq's</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Faq's</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Faq Three -->
	<section class="faq-three">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Column -->
				<div class="faq-three_column col-lg-6 col-md-12 col-sm-12">
					<h3>Finance Questions</h3>
					<div class="faq-three_column-inner">
						
						<!-- Accordion Box -->
						<ul class="accordion-box_two">
							
							<!-- Block -->
							<li class="accordion block active-block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Who are we?</div>
								<div class="acc-content current">
									<div class="content">
										<p>{{ config('app.name') }} is a cutting-edge platform for cryptocurrency trading and High-Yield Investment Programs (HYIP). We offer a robust system for users to engage in crypto trading and benefit from matrix-based user referral level commissions.</p>
									</div>
								</div>
							</li>
										
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>How do I create an account on {{ config('app.name') }}?</div>
								<div class="acc-content">
									<div class="content">
										<p>To create an account, visit our registration page. Fill in the required details, and follow the instructions to set up your account. </p>
									</div>
								</div>
							</li>
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>What measures does {{ config('app.name') }} take to ensure the security of my investments?</div>
								<div class="acc-content">
									<div class="content">
										<p>We prioritize the security of our users' investments. Our platform employs advanced security protocols including encryption, secure servers, and regular security audits to safeguard your assets and data. </p>
									</div>
								</div>
							</li>
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>What is the minimum investment balance?</div>
								<div class="acc-content">
									<div class="content">
										<p>Kindly check our pricing page for more information </p>
									</div>
								</div>
							</li>
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>Where can I find tutorials or guides on using {{ config('app.name') }}?</div>
								<div class="acc-content">
									<div class="content">
										<p>For tutorials and guides, visit our resource center. We provide comprehensive guides, FAQs, and video tutorials to help you get the most out of our platform.</p>
									</div>
								</div>
							</li>
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>What should I start investing in?</div>
								<div class="acc-content">
									<div class="content">
										<p>We recommend our basic plan. </p>
									</div>
								</div>
							</li>
							
						</ul>
						
					</div>
				</div>
				<!-- Column -->
				<div class="faq-three_column col-lg-6 col-md-12 col-sm-12">
					<h3>Investment Questions</h3>
					<div class="faq-three_column-inner">
						
						<!-- Accordion Box -->
						<ul class="accordion-box_two">
							
							<!-- Block -->
							<li class="accordion block active-block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>What are HYIPs and how do they work on {{ config('app.name') }}?</div>
								<div class="acc-content current">
									<div class="content">
										<p>High-Yield Investment Programs (HYIP) are investment schemes that offer higher returns on your investment. On {{ config('app.name') }}, you can invest in various HYIP options, each with its own risk and reward profile.</p>
									</div>
								</div>
							</li>
										
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>What is the matrix-based user referral commission?</div>
								<div class="acc-content">
									<div class="content">
										<p>Our matrix-based referral program rewards users for bringing new traders to the platform. You earn commissions based on the trading activities of your referrals, according to our tiered matrix system. </p>
									</div>
								</div>
							</li>
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>How can I get assistance if I have issues or questions?</div>
								<div class="acc-content">
									<div class="content">
										<p>Our support team is here to help you. For any assistance, visit our support page or open a support ticket at Open a Support Ticket.</p>
									</div>
								</div>
							</li>
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>What is the minimum investment balance?</div>
								<div class="acc-content">
									<div class="content">
										<p>$50 is the minimum investment amount on  {{ config('app.name') }}</p>
									</div>
								</div>
							</li>
							
						
							
							<!-- Block -->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>How do we choose which deposit to fund?</div>
								<div class="acc-content">
									<div class="content">
										<p>Kindly visit deposit page to get started </p>
									</div>
								</div>
							</li>
							
						
							
						</ul>
						
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq Three -->
                
@endpush
