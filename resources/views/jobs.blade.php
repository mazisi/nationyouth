@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
		    
	    	
		    
		    <div id="contentWrapper">
		    
		    	<div class="pageContent">
		    		<div class="page-title title-1">
						<div class="container">
							<div class="row">
								
								<h1 class="white text-center">Women Leadership Social Empowerment Programmes</h1>
								<h3 class="white text-center">Be a leader with our various social empowerment programmes</h3>
								
								<div class="breadcrumbs">
									<a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><span>Vacancies</span>
								</div>
								
							</div>
						</div>
					</div>

				<div class="section">
			    		<div class="container">
			    			<div class="row">
			    				<div class="col-md-8 fx animated fadeInLeft" data-animate="fadeInLeft">
									
									<div class="heading">
										<h3 class="uppercase head-6"><span class="main-color">Job </span>Opportunities</h3>
									</div>

									@if ($message = Session::get('success'))
									
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-like-2"></i></span>
											<span class="alert-text"> {{ $message }}</span>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">×</span>
											</button>
										</div>
									@endif
									  @if ($message = Session::get('error'))
										<div class="alert alert-danger text-center" role="alert">
											<b>{{ $message }}</b>
										</div>
									  @endif

									<div class="panel-group accordion style-2" id="accordion-5" role="tablist" aria-expanded="false">
									@if ($job->count())
									 @foreach ($job as $job)
										<div class="panel shape new-angle">
											<div class="panel-heading" role="tab" id="heading-2{{ $job->id }}">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse"
													 data-parent="#accordion-5" href="#acc-2{{ $job->id }}" aria-expanded="false" aria-controls="acc-2{{ $job->id }}">
													 <i class="fa fa-circle-o-notch main-color"></i>{{ $job->job_title }}</a>
												</h4>
											</div>
											<div id="acc-2{{ $job->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2{{ $job->id }}">
												<div class="panel-body">
													<p>{!!nl2br(str_replace(" ", " &nbsp;", $job->body))!!}</p>
												</div>
										</div>
									</div>
									
									 @endforeach
										
									@else
										<p>No jobs at the moment</p>
									@endif
										
									
										
									</div>
						    	</div>
						    	<div class="col-md-4 fx animated fadeInRight" data-animate="fadeInRight">
						    		<div class="heading">
						    			<h3 class="uppercase head-6"><span class="main-color">Apply For</span> A Job</h3>
									</div>
						    		<div class="contact-form">
						    			<form action="{{ route('applicants.store') }}" id="hire_form" method="POST" enctype="multipart/form-data">
											@csrf
					    					<div class="form-input">
					    						<label>Full name<span class="red">*</span></label>
					    						<input type="text" name="full_name" class="form-control shape new-angle" required>
					    					</div>
					    					<div class="form-input">
					    						<label>Email<span class="red">*</span></label>
					    						<input type="email" name="email" class="form-control shape new-angle" required>
					    					</div>
					    					<div class="form-input">
					    						<label>Position<span class="red">*</span></label>
					    						<select required class="shape new-angle" name="position">
													<option value="">select Position you are applying for</option>
													@foreach ($job_select as $job_select)
													<option value="{{ $job_select->job_title }}">{{ $job_select->job_title }}</option>
													@endforeach
					    							
					    							
					    						</select>
					    					</div>
					    					<div class="form-input">
					    						<label>Message<span class="red">*</span></label>
					    						<textarea class="shape new-angle" name="message" required></textarea>
					    					</div>
					    					<div class="form-input">
					    						<label>Upload your CV</label>
					    						<input class="form-control shape new-angle" type="file" name="cv" accept=".pdf">
					    					</div>
					    					<div>
					    						<input type="submit" class="btn btn-md main-bg shape new-angle" value="Submit">
					    					</div>
					    				</form>
						    		</div>
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
	   
		@include('layouts.scripts')
		
	</body>


</html>
@endsection