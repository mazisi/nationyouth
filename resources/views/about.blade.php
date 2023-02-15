@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
		    
	    	
		  
		    <div id="contentWrapper">
		    
				<div class="pageContent">

					<div class="page-title title-5 parallax about-title" style="background-image: url(&quot;assets/images/page-titles/1.jpg&quot;); background-position: 50% 0px;" data-stellar-background-ratio="0.65">
						<div class="container">
							<div class="row">
								<h1 class="shape new-angle">About Us</h1>
								<h3 class="white">All what you need to know about our company</h3>
								
							</div>
						</div>
					</div>
			
			
			
					<div class="section">
						<div class="container">
			
			
							<div class="row">
								<div class="col-md-6">
									<div class="icons-style-1">
										<i class="icons icons-basic-alarm animat-icon"></i>
										<h3 class="bold uppercase heading">Our Background</h3>
										<p>Many of young women in the townships we serves experience difficulties in accessing economic opportunities compared to men, they easily lose self-esteem and get employed in lower paying jobs such as housekeeping.</p>
			
										<p>Graduates from high institutions with high qualifications are also trapped into the cycle of  being unemployed and sacrificing for lower paying jobs, while desperate and vulnerable young women intentionally have unplanned pregnancy only to benefit from the Government Child’s Social Grant scheme to escape from POVERTY</p>
			
									</div>
								</div>
								<div class="col-md-6">
									<div class="icons-style-1">
										<i class="icons icons-basic-lock animat-icon"></i>
										<h3 class="bold uppercase heading">Improved education level but not result in increased employment</h3>
										<p>Having noted that the education level has significantly improved compared to previous years, however has not resulted in increased employment among women and youth in our disadvantaged communities.</p>
										<p>Women Leadership Social Empowerment exist in communities to reduce vulnerability among marginalized and unemployed youth with no work based experience by striving to create a basket of decent sustainable opportunities for them,  we do this through the provision of collaborative and innovative strategies that prepares them to be competitive in the labour market </p>
										<p>Our transformative skills development programmes enables women and youth to create employment for themselves, obtain their first decent jobs and be able to tackle challenges that block them to realize their fullest potential</p>
			
									</div>
								</div>
			
							</div>
						</div>
						<div class="padding-vertical-0">
							<div class="container">
								<div class="divider centered"><i class="fa fa-sun-o"></i></div>
							</div>
						</div>
					</div>
			
			
					<div class="section padding-bottom-0 padding-top-0">
						<div class="container">
							<div class="row">
								<div class="col-md-6 vertical-icons">
									<div class="heading">
										<h3 class="head-angle shape main-bg uppercase font-30 new-angle">Meet the Founder</h3>
									</div>
									<p class="">Being born in a rural community village of Limpopo Province (Venda) North Eastern of South Africa where in most situations patriarchy is the order of the day, resulting in women being looked down upon and their views not being considered, the founder of Women Leadership Social Empowerment, <b>Clement Rudzani Muleya</b> founded the organization after realizing that a lot of gender-based violence cases go unreported and women are always victims</p>
			
									<p>The motive of establishing an organization that will respond specifically to issues that were affecting women becomes a reality when he relocates to the Township of Daveyton, Gauteng Province at his early ages where he completed his high school studies (Grade 12). </p>
									<p>During my stay in Daveyton, I was exposed to a whole lot of different forms of violence that were frequently happening in my township and affecting mostly young girls and women. In some instances, neighbors could hear the cry of a woman and children as the woman’s partner or husband beats her, sometimes to the point of death and the cases were swept under the carpet and not reported to the police.</p>
									<p>Some of the vulnerable victims whom their human rights were violated were close families to me, their human rights were regularly violated by perpetrators or those who were supposed to safeguard them.</p>
			
									<ul class="list">
										<li class="fx animated fadeInUp" data-animate="fadeInUp"><i class="fa fa-bell main-color"></i>With the support</li>
			
									</ul>
								</div>
								<div class="col-md-6">
									<img alt="" src="assets/images/clement.jpg" class="fx animated fadeInRight" data-animate="fadeInRight" alt="No user image">
								</div>
			
							</div>
						</div>
					</div>
			
					<div class="padding-vertical-0">
						<div class="container">
							<div class="divider centered"><i class="fa fa-sun-o"></i></div>
						</div>
					</div>
			
			
					<div class="section">
						<div class="container">
							<div class="row">
			
								<div class="heading main-heading centered">
									<h3>Our Team</h3>
			
									<div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
								</div>
								<p class="heading-desc centered">Women Leadership Social Empowerment is led by young and skilled staff members who have acquired their community work related qualifications in high institutions and also gained adequate experience in leading community development initiatives by volunteering into some of national and local organizations.</p>
								@foreach($users as $user)
								
								<div class="col-md-3">
									<div class="team-box box-5 shape lg new-angle">
										<div class="team-img rounded-img">
											@if($user->picture == "")
											<img alt="No image" src="{{ asset('public/dash_assets/img/avatar.png') }}">
											@else
											<img alt="No image" src="{{ asset('storage/app/public/user_pics/'.$user->picture) }}">
											@endif
										</div>
										<div class="team-details">
			
											<h3 class="team-name">{{$user->first_name}}  {{ $user->last_name}}</h3>
											<h5 class="team-pos white">{{$user->position}}</h5>
											
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
						</div>
			
			
			
			
			
					</div>			    
		    	
				@include('layouts.footer')
		    </div>
		</div>
				
		
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	   
 		
		@include('layouts.scripts')
		
	</body>


</html>
@endsection