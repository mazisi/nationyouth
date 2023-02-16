@extends('layouts.nav')

<!DOCTYPE html>
<html>




@section('navigation')



<div id="contentWrapper">

	<div class="pageContent">
		<div class="page-title title-1">
			<div class="container">
				<div class="row">
					<h1 class="white">Women Leadership Social Empowerment Programmes</h1>
					<h3 class="white">Be a leader with our various social empowerment programmes</h3>

					<div class="breadcrumbs">
						<a href="/">Home</a><i class="fa fa-long-arrow-right main-color"></i><span>Programs</span>
					</div>

				</div>
			</div>
		</div>

		<div class="section gry-bg">

			<div class="heading full-heading main-bg">
				<h3 class="inner-head white">Programs <span class="heavy-font"> at WLSE</span></h3>
				<h5 class="small-heading white"><span class="black-color">Enroll </span>Today</h5>
			</div>

			<div class="container">

				<div class="clearfix">
					<div class="col-md-12 padding-horizontal-50  padding-vertical-50 over-hidden" style="background-color:#2d4851; color: #fff;">
						<i class="f-left fa fa fa-globe font-70 white margin-top-30"></i>
						<div class="margin-left-100 ">
							<h3 class="white uppercase bold txt-shadow">Skills-based Vocational and Technical Programme (VET)</h3>
							<p>70% of the beneficiaries we serve in communities are women and youth who are school dropout with no further qualification and a few with only matric certificate (grade12) as the main qualification
							The vocational and Technical Programmes are aimed at enhancing employability skills for unskilled and lower skilled women and youth, in the completion of the programmes, beneficiaries are assisted to establish their own income initiatives and others are linked to employment through our partners using the skilled obtained</p>
							<h4 class="white">VET Focused programmes</h4>
							<ul>
								<li>Electrical engineering</li>
								<li>Point of Sales/Computerized Cashier </li> 
								<li>Forklift Training and Junior Bookkeeping</li>
								<li>Basic Welding</li>
								
							</ul><br>
							

							<h4 class="white">Objective of VET programmes</h4>
							<ul>
								

								<li>Provision of knowledge and skills that will increase employment and create employment for the targeted proposed program beneficiaries.</li>
								<li>Enabling beneficiaries to enhance their employment skills, have ability to effectively think and learn different skills using their hands</li>
								<li> Improve their interpersonal skills, positively change their behavioural and encourage them to generate employment for themselves and people in the communities</li>
							</ul>
						</div>
					</div>
					<div class="col-md-12 padding-horizontal-50 padding-vertical-50 over-hidden" style="background-color:#6eb8af">
						<i class="f-left fa fa fa-eye font-70 white margin-top-30"></i>
						<div class="margin-left-100 white">
							<h3 class="white uppercase bold txt-shadow">Enterprise Development and Training support</h3>

							<p>Creative and unprivileged young people in our communities lack fundamental entrepreneurial skills and resources to establish and run their own enterprises. 8 out of 10 are likely to close down after 3 to 12 months of operation due to lack of professional business skills and support</p>

							<p>Some of the Identified challenges faced by local entrepreneurs to grow and sustain their businesses include the listed below</p>

							<ul>

								<li> They lack necessary businesses skills to maintain their businesses.</li>
								<li>Limited access to valuable information</li>
								<li> Most of them they do not have operational infrastructure </li>
								<li>Lack of planning and research</li>
								<li>Money management  problem</li>

							</ul>

							<p>In delivering the enterprise development and training support model that has a vibrant structure to be easily applied and replicated, WLSE has categorized the model into two (2) components </p>

							<p>1st Enterprise development and training Component</p>

							<p>The 1st component is strictly focused on giving promising and creative local entrepreneurs who are ambitious and still in the grass roots level with an opportunity to harness their creativeness and support to establish their own businesses</p>

							<p>2nd Enterprise development and training Component</p>

							<p>The 2nd component is focused on those who are already running their own enterprises and facing difficulties in growing and sustaining their businesses. The delivery of the 2 components is offered separately with specific target group identified per component.</p>

							<p>Targeted beneficiaries of the 2nd Component (local entrepreneurs who own and manage businesses such as the below listed)</p>
							<ul>
								<li>Hair Salons</li>
								<li>Catering companies </li>
								<li>Sewing and sales of clothing initiatives</li>
								<li>Internet Cafes</li>
								<li>Bakeries (selling biscuits, vetkoeks, muffins, etc.)</li>
								<li>Fruits and Veggies supermarkets</li>
								<li>Bricks making and selling</li>

							</ul>

						</div>
					</div>

					<div class="col-md-12 padding-horizontal-50 padding-vertical-50 over-hidden" style="background-color:#263c3b">
						<i class="f-left fa fa fa-gears font-70 white margin-top-30"></i>
						<div class="margin-left-100 white">
							<h3 class="white uppercase bold txt-shadow">Our GBV Plan of Action </h3>


							<p>Recently Societies free of GBV do not exist, and South Africa is no exception
							Although accurate statistics are difficult to obtain for many reasons (including the fact that most incidents of GBV are not reported, it is evident South Africa has particularly high rates of GBV
							Population-based surveys show very high levels of intimate partner violence (IPV) and non-partner sexual violence (SV) in particular, with IPV being the most common form of violence against women.
							Whilst people of all genders perpetrate and experience intimate partner and or sexual violence, men are most often the perpetrators and women and children the victims.</p>

							<h4 class="white">GBV Response Strategies</h4>
							<p>As people of action, Women Leader Social Empowerment strive to respond to the dreadful challenge of Gender Based Violence (GBV)  in communities through a provision of community awareness and GBV prevention programs </p>
							<h6 class="white">Focused areas:</h6>
							<ul>
							<li>Workshops and training on Root and Structural Causes of  Gender Based Violence (GBV)</li>
							<li>Preventing Violence Against Women and Girls through School based Programmes</li>
							<li>Empowerment Workshops on Women’s Human rights</li>
							<li> Facilitation of Community Dialogues on Combating  Gender Based Violence (GBV)</li>
							<li>Awareness raising and advocacy for the rights of women and youth</li>
							<li>Providing Victims of GBV with Social Support for their well being </li>
							</ul>

						</div>

					</div>

				</div>
				<hr>

				<div class="row pt-2">

					@if ($course->count())
					@foreach ($course as $course)


					<article class="fx col-md-4 feature-img2 animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
						<figure class="shape lg new-angle" >
							<div style="max-height: 200px;overflow: hidden; height: 200px">
								<img alt="" 
								src="{{ asset('storage/course_pics/'.$course->course_image) }}" style="max-height: 421px; overflow: hidden;"></div>
								<a href="#" data-toggle="modal" data-target="#read_more{{ $course->id }}" class="shape new-angle"><span>+</span></a>
							</figure>
							<div class="feature-details2">
								<h4 class="bold feature-head2 uppercase t-center">{{ $course->course_title }}</h4>
								<p class="t-center" >{{ Str::limit($course->body, 200) }}<a href="#" data-toggle="modal" data-target="#read_more{{ $course->id }}" class="btn-sm btn-default">Read More</a></p>

							</div>
						</article>

						<div class="modal fade" id="read_more{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title order-table-title" id="exampleModalLabel">{{ $course->course_title }}</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p class="t-center" >{!!nl2br(str_replace(" ", " &nbsp;", $course->body))!!}</p> 
										<p></p>
									</div>

								</div>
							</div>
						</div>




						@endforeach
						@else
						<p >No courses available at the moment</p>
						@endif


					</div>
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