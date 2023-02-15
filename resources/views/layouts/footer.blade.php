
		    	<!-- Footer start -->
			    <footer id="footWrapper">
			    	    
				    <!-- footer bottom bar start -->
				    <div class="footer-bottom">
					    <div class="container">
				    		<div class="row">
					    		<!-- footer copyrights left cell -->
					    		<div class="copyrights col-md-4 first">© Copyrights <b class="main-color">WLSE</b> {{ date('Y') }}. All rights reserved.</div>
								<div class="col-md-4">
								    
								    <ul class="social-list">
									    <li><a data-toggle="tooltip" data-placement="top" title="Youtube" href="https://www.youtube.com/channel/UCGglibheFXEH8r4OF7uc21Q" target="_blank"  class="fa fa-youtube shape sm">youtube</a></li>
									    <li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="https://www.facebook.com/womenleadershipSA/" target="_blank" class="fa fa-facebook shape sm">facebook</a></li>
									    <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" href="https://www.linkedin.com/in/women-leadership-social-empowerment-1b2414193" target="_blank" class="fa fa-linkedin shape sm">linkedin</a></li>
									    <li><a data-toggle="tooltip" data-placement="top" title="Instagram" href="https://www.instagram.com/wlse_sa/" class="fa fa-instagram shape sm">instagram</a></li>
									    <li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="https://twitter.com/WLSE_SA?=08" target="_blank" class="fa fa-twitter shape sm">twitter</a></li>
								    </ul>

									
							    </div>
					    		<!-- footer social links right cell start -->
							    <div class="col-md-4 last">
							    	<ul class="footer-menu f-right">
									    <li><a href="/">Home</a></li>
									    <li><a href="{{ route('about') }}">About</a></li>
									    <li><a href="{{ route('gallery') }}">Gallery</a></li>
									    <li><a href="{{ route('blogs.index') }}">Blog</a></li>
									    <li><a href="{{ route('contact.index') }}">Contact</a></li>
									    <li><a href="{{ route('donate') }}">Donate</a></li>
								    </ul>
							    </div>
							    <!-- footer social links right cell end -->
							    
				    		</div>
					    </div>
				    </div>
				    <!-- footer bottom bar end -->
				</footer>
		    	@yield('footer')