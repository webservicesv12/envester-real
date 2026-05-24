@extends('layouts.frontend.app')

@push('content')

<!-- Page Title -->
    
    <!-- End Page Title -->
    
    
    <!-- Price One -->
	<section class="price-one">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered"><br><br>
				<div class="sec-title_title">Pricing Plan</div>
				<h2 class="sec-title_heading">Our Investment Business <br> pricing plan</h2>
			</div>
			
			<div class="row clearfix">
				 @foreach(\App\Models\Packages::all() as $value)
				<!-- Price Block One -->
				<div class="price-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="price-block_one-inner">
						<div class="price-block_one-package">{{ ucwords($value->name) }} Plan</div>
						<div class="price-block_one-price">${{ number_format($value->min_deposit,2) }}</div>
						<div class="price-block_one-title">{{ ucwords($value->name) }} Plan</div>
						<div class="price-block_one-icon">
							<i class="flaticon-investment"></i>
						</div>
						<div class="price-block_one-month">
							<span>{{ $value->duration }} Days</span>
						</div>
						<ul class="price-block_one-list">
							<li>Total Return - {{ $value->interest }}% + capital </li>
							<li>Referral Bonus - {{ $value->referral_percentage }}%</li>
							<li>{{ $value->description }}</li>
							<li>Analytic reports</li>
							<li>Accelerated Earnings</li>
						</ul>
						<div class="price-block_one-button">
							<a class="theme-btn apply-btn" href="{{route('investment.edit',base64_encode($value->id))}}">Apply Now</a>
						</div>
					</div>
				</div>
				@endforeach
				
			
			</div>
		</div>
	</section>
	<!-- End Price One -->
	
    
                
                
@endpush
