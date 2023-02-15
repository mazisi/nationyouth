@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
			
		
		    		    
		    <div id="contentWrapper">
		    
		    	<div class="pageContent">
		    		
		    		<div class="page-title title-1">
						<div class="container">
							<div class="row">
								
								
								<div class="breadcrumbs">
									<a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><span>Blog Details</span>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="blog-single">
				                		<div class="post-item">
											
											<div class="details-img">
												<img src="{{ asset('storage/app/public/blog/'.$blog->blog_image) }}" alt="Blog post" style=" max-height: 350px;">
											</div>
										    
										    <article class="post-content">
										        
										        <div class="post-info-container">
													<div class="post-info">
														<i class="fa fa-book post-icon"></i>
														<h2><a href="#">{{ $blog->blog_title }}</a></h2>
														<ul class="post-meta">
															<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">{{ $blog->user->first_name }}</a></li>
															<li class="meta_date"><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('d F Y') }}</li>
															<li><i class="fa fa-folder-open"></i>Category: <a href="#">{{ $blog->category->category_name }}</a></li>
														</ul>
													</div>
												</div>
												
												<p>{!!nl2br(str_replace(" ", " &nbsp;", $blog->body))!!}</p>
												<br>
												
												
											
						                        
										    </article>
										</div><!-- .post-item end -->
										
										<div class="">
											<div class="divider lft"><i class="fa fa-scissors"></i></div>
										</div>
										
									
									
				                	</div>
						    	</div>
								<aside class="col-md-3">
									<ul class="sidebar_widgets">
									
										
										<li class="widget w-recent-posts shape">
											<h4 class="widget-head"><span class="main-color">Recent </span>Job Posts</h4>
											<div class="widget-content">
												<ul>
												@if ($jobs->count())
													@foreach ($jobs as $job)
													<li>
														<div class="post-img">
															<a href="{{ route('vacancies.index') }}"><img src="{{ asset('assets/images/logo1.png') }}" alt=""></a>
														</div>
														<div class="widget-post-info">
															<h5><a href="{{ route('vacancies.index') }}">{{ $job->job_title }}</a></h5>
															<div class="meta">
																<span><i class="fa fa-clock-o"></i>{{ $job->deadline }}</span>
															</div>
														</div>
													</li>
													@endforeach
												@else
													<h6 class="text-center">No recent jobs.</h6>
												@endif
												
													
												</ul>
											</div>
										</li>
									
										
										
									</ul>
								</aside>
							</div>
						</div>
					</div>
					
			    </div>			    
		    	
		    	@include('layouts.footer')
		    </div>
		</div>
				
		<!-- Modal -->
		
		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>

@include('layouts.scripts')
		
@endsection