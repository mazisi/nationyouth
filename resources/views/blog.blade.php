@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
		    
	    	
		    
		    <div id="contentWrapper">
		    
		    	<div class="pageContent">
		    		<div class="page-title title-1">
						<div class="container">
							<div class="row">
								
								
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								
								<div class="col-md-9">
								<div class="row">
									@if ($blogs->count())
										@foreach ($blogs as $blog)
										<div class="col-sm-12">
											<div class="blog-posts small-image">
												<div class="post-item">
													<div class="post-image">
														<a href="{{ route('blogs.show',$blog->id) }}">
															<img src="{{ asset('storage/app/public/blog/'.$blog->blog_image) }}" alt=" Blog post image " style="max-width: 260px; max-height: 249px">
														</a>
													</div>
													
													<article class="post-content">
														<div class="post-info-container">
															<div class="post-info">
																<i class="fa fa-book post-icon"></i>
																<h2><a href="{{ route('blogs.show',$blog->id) }}">{{ $blog->blog_title }}</a></h2>
																<ul class="post-meta">
																	<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</a></li>
																	<li class="meta_date"><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('d F Y') }}</li>
																	<li><i class="fa fa-folder-open"></i>Category: <a href="#">{{ $blog->category->category_name }}</a></li>
																</ul>
																
															</div>
														</div>
														<p>{{ Str::limit($blog->body, 200) }}</p>
														<div class="bottom_tools">
															<a class=" f-left shape new-angle" href="{{ route('blogs.show',$blog->id) }}"></a>
															<a class="meta_love f-left shape new-angle" href="#"></a>
															<a class="f-right more_btn shape new-angle" href="{{ route('blogs.show',$blog->id) }}">Read more</a>
														</div>
													</article>
												</div>
											</div>
										</div>
										@endforeach
									@else
										<p>Blogs coming soon!!!</p>
									@endif
									
									<div class="col-sm-12">
									{{ $blogs->links() }}
									</div>
								</div>
				                	
							</div>
								<aside class="col-md-3">
								
										<li class="widget w-recent-posts shape new-angle">
											<h4 class="widget-head"><span class="main-color">Recent </span>Jobs</h4>
											<div class="widget-content">
												<ul>

													@if ($jobs->count())
														@foreach ($jobs as $job)
														<li>
															<div class="post-img">
																<a href="{{ route('vacancies.index') }}l"><img src="{{ asset('assets/images/logo1.png') }}" alt=""></a>
															</div>
															<div class="widget-post-info">
																<h5><a href="{{ route('vacancies.index') }}">{{ $job->job_title }}</a></h5>
																<div class="meta">
																	<span>
									<i class="fa fa-clock-o"></i>{{ $job->created_at->format('d-m-Y') }} 
															</span><a href="{{ route('vacancies.index') }}"></a>
																</div>
															</div>
														</li>
														@endforeach
													@else
														<p>No jobs yet</p>
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
				
	
		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	   
 		
		@include('layouts.scripts')
		
	</body>


</html>
@endsection