@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
	    	
		    
		    <div id="contentWrapper">
		    
		    	<div class="pageContent">
		    		
				<div class="section">
					
					<div class="heading full-heading alter-gry" style="background-image:url('{{ asset('assets/images/patterns/bg2.jpg') }}')">
						<h3 class="inner-head">Our <span class="main-color heavy-font">Galary</span></h3>
						<h5 class="small-heading"><span class="main-color">Some Of </span>Our Work</h5>
					</div>
		
					<div class="container">
						
						<p class="heading-desc centered">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum</p>
						
						<div class="filter-by">
							<ul id="filters">
                                <li class="active shape new-angle"><a href="#" class="filter" data-filter="*">All</a></li>
                                <li class="shape new-angle"><a href="#" class="filter" data-filter=".design">
Advice & Referral</a></li>
                                <li class="shape new-angle"><a href="#" class="filter" data-filter=".develop">
Awareness Campaigns</a></li>
                                <li class="shape new-angle"><a href="#" class="filter" data-filter=".computers">
Graduations</a></li>
                            </ul>
						</div>
						
						<div class="portfolio masonry p-3-cols p-style5" id="masonry" style="position: relative; height: 782.062px;">
							
							<div class="portfolio-item design" style="position: absolute; left: 0px; top: 0px;">
								
								<figure>
									<img alt="" src="{{ asset('assets/images/referall/1-compressed.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="#" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/referall/2-compressed.jpg')}}" class="zoom shape new-angle" title="Quality Products for Companies"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Our Advise & Referalls</a></h4>
										
									</figcaption>

												
								</figure>
							</div>
							<div class="portfolio-item develop" style="position: absolute; left: 379px; top: 0px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/awareness/1-compressed.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/referall/4.jpg') }}" class="zoom shape new-angle" title="Nature vs. Man"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Our Advise & Referalls</a></h4>
										
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item computers" style="position: absolute; left: 759px; top: 0px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/graduation/1-compressed.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/graduation/5-compressed.jpg') }}" class="zoom shape new-angle" title="A Day with Sunshine &amp; Bliss"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Graduations</a></h4>
										
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item develop" style="position: absolute; left: 379px; top: 260px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/awareness/2-compressed.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/awareness/4-compressed.jpg') }}" class="zoom shape new-angle" title="A Workplace for Champions"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Awareness</a></h4>
										
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item design" style="position: absolute; left: 759px; top: 313px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/referall/2-compressed.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link shape new-angle"></i></a>
												<a href="{{ asset('assets/images/referall/4-compressed.jpg') }}" class="zoom shape new-angle" title="Doing it the Chilled Way"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Work & Referalls</a></h4>
										
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item computers" style="position: absolute; left: 0px; top: 468px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/graduation/2-compressed.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/graduation/3-compressed.jpg') }}" class="zoom shape new-angle" title="Take a look at our graduations"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Graduation</a></h4>
										
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item develop" style="position: absolute; left: 379px; top: 521px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/awareness/3-compressed.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/awareness/4-compressed.jpg') }}" class="zoom shape new-angle" title="Stay aware"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Awareness</a></h4>
										
									</figcaption>			
								</figure>
							</div>
						</div>
						
					</div>
							
				</div>

					
					
					
			    </div>			    
		    	
				@include('layouts.footer')
		    </div>
		</div>

		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	   
 		
	    	    <!-- Load JS plugins file -->
				@include('layouts.scripts')
		
	</body>


</html>
@endsection