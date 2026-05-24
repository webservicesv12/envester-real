@extends('layouts.frontend.app')

@push('content')
<!-- Contact One -->
	<section class="contact-one"><br><br>
		<div class="contact-one_icon" style="background-image:url(assets/images/icons/icon-11.png)"></div>
		<div class="auto-container">
			<div class="title-box">
				<h4>Are you ready to work smarter? How <br> can we help?</h4>
			</div>
			<div class="row clearfix">
		
				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="flaticon-targeting"></i>
						</div>
						<h5>Business queries:</h5>
						<div class="text">{{ get_settings('official_address') }}</div>
						<div class="contact-info">Telephone: {{ get_settings('official_phone') }}</div>
					</div>
				</div>
				
				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="flaticon-personal"></i>
						</div>
						<h5>Plan member queries:</h5>
						<div class="text">{{ get_settings('official_address') }}</div>
						<div class="contact-info">Email: {{ get_settings('official_email') }}</div>
					</div>
				</div>
				
				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="flaticon-phone-call"></i>
						</div>
						<h5>Have any question</h5>
						<a class="phone_number" href="tel:{{ get_settings('official_phone') }}">{{ get_settings('official_phone') }}</a> 
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Contact One -->
	
    
                
                
@endpush
