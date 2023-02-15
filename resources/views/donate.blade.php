
<!DOCTYPE html>
<html>
@extends('layouts.nav')

@section('navigation')

<div class="pageWrapper animsition">
	<style type="text/css">
		.rounded-img img{
			max-height: 20rem;
			min-height: 20rem;
			height: 20rem;
			width: 20rem;
			margin-right: 1rem
		}
		.rounded-img:hover img{
			border-radius: 0px !important
		}
	</style>
	<!-- top bar start -->
	<div class="section gry-bg">
		<div class="container">

			<div class="heading main-heading centered">
				<h3>Why Donate?</h3>
				
				<div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
			</div>
			<p class="heading-desc centered">With every purchase or donation we strive to make it more meaningful by reaching out and developing those who are less fortunate and lower skilled
				Women Leadership Social Empowerment is facing some of the toughest challenges during this period of COVID-19 crises to sustain all of its programs and services
				For donation and partnerships, <strong>please get hold of us at info@womenleadership.org.za, Call Miss Cleobine Gondo on 074 421 5959 or 011 426 6159</strong></p>

				<div class="row">

					<div class="col-md-6">

						<h3>Contribute by donating any of the below listed</h3>
<ul class="list">
									<li class="fx animated fadeInUp" data-animate="fadeInUp"><i class="fa fa-bell main-color"></i>Donate anything that will go towards our women and youth development programs.</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="100" style="animation-delay: 100ms;"><i class="fa fa-bell main-color"></i>Donate anything that will go towards our women and youth development programs.</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;"><i class="fa fa-bell main-color"></i>Donate anything useful that will be used in our branches by our full time members</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="300" style="animation-delay: 300ms;"><i class="fa fa-bell main-color"></i>Volunteer your time or skills towards developing our beneficiaries and staff members</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Help us reach out to potential partners and beneficiaries by sharing our posts on your  social platforms</li>


									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Donate used or new office furniture’s and computers for our staff members</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Donate  a printer and A4 papers</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Donate old or new fridge and utensil to be used in our branches</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Help us pay the rent for the premises we use to run our daily programs</li>

								</ul>
					
					</div>
					<div class="col-md-6">

						<h3>Donate towards our monthly Gender Based Violence Response Dialogues and Campaigns</h3>

						<ul class="list">

							<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Buy from 1 to 50 branded T-shirts for our frontline GBV activists @R200 each</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Donate with food vouchers or any amount for us to provide catering during activities execution</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Buy internet and airtime for any amount for our communication purposes with beneficiaries</li>
									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Help us book and pay  for  a venue for our monthly GBV  Response Dialogues</li>

									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Donate anything that may be used to combat GBV and empower women and girls</li>

									<li class="fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;"><i class="fa fa-bell main-color"></i>Assist by hiring a once off  PA System  @R1500</li>

						

						</ul>
					</div>
				</div>
				<div class="row" style="margin-top: 4rem;">
					<div class="col-md-12">
						<h3>Women Leadership Social Empowerment is a legal Non-Profit Organization registered in South Africa with registration number 191-518 NPO and a Public Benefit Organisation.</h3>

<h3>Section 18A Certification </h3>
<p>For all donations received, Section 18A Certificates can be awarded. These certificates can be presented to SARS for further tax relief. Section 18A of the Income Tax Act No 58 of 1962 (the Act) allows donors to deduct donations made to registered Section 18A organisations from their taxable income </p>

<h3>BEE Compliant</h3>
<p>For any donation given to Women Leadership Social Empowerment, a BEE Scorecard will be made available to sponsors to simplify this claim on your BEE Scorecard.</p>
						
					</div>
					
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="tabs-style-bottomline">

							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#mission"><span><i class="tab-icon fa fa-university main-color"></i>Bank Details</span></a></li>
								<li role="presentation"><a href="#vision"><span><i class="tab-icon fa fa-eye main-color"></i>Address</span></a></li>

							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="mission">

									o Account Number – 62711325416<br>o	Account Holder – Women Leadership Social Empowerment<br>o	Bank Name - FNB<br>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="vision">
									<img alt="No Image" class="lft-img bordered-img" src="{{ asset('public/assets/images/partners/location.PNG') }}" style="max-width: 213px; max-height: 160px;" />

									<ol class="f-left">
										<li>7654 Lurie Road</li>
										<li>Mayfield (opposite Mayfield Square) </li>
										<li>Daveyton</li>

									</ol>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="section gry-bg" style="margin-top: -20rem;">
			<div class="container">

				<div class="row">
					<h3 class="text-center">Partners & Funders</h3>
					<div class="clients horizontal-slider" data-slides_count="6" data-scroll_amount="6" data-slider-speed="300" data-slider-infinite="1" data-slider-dots="0" data-slider-arrows="1">
						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/arts_council.jpg') }}">
						</div>

						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/ekuuruleni.jpg') }}">
						</div>

						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/labour.png') }}">
						</div>

						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/lotteries.jpg') }}">
						</div>

						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/nyda.png') }}">
						</div>

						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/social_dev.jpg') }}">
						</div>

						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/solidarity.png') }}">
						</div>

						<div class="team-img rounded-img">

							<img alt="No image" src="{{ asset('public/assets/images/partners/sports_art_and_culture.jpg') }}">
						</div>

					</div>
				</div>
			</div>
		</div>


		@include('layouts.footer')

		<!-- Back to top Link -->
		<a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>


		@include('layouts.scripts')


		</html>
		@endsection