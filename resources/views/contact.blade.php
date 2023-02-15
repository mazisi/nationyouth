@extends('layouts.nav')
<!DOCTYPE html>
<html lang="en-US" class="new-angle" data-class="new-angle">
	@section('navigation')
   
      <div class="pageWrapper  animsition"  data-animsition-in-class=fade-in  data-animsition-out-class=fade-out >
         
         <div id="contentWrapper">
            <div class="page-title title-1">
               <div class="title-overlay"></div>
               <div class="container">
                  <div class="row">
                     <div class="title-container">
                        <div class="f-left">
                           <h1 class="fx white text-center" data-animate="fadeInDown">Contact Us</h1>
                        </div>
                     </div>
                   
                  </div>
               </div>
            </div>
            <div class="section"  >
               <div class="container">
                  <div class="row vc_row">
                     <div class="col-md-6 contact-form-2">
                        <div class="heading side-head head-5 main-color">
                           <h4 class="main-color"  style="text-transform:uppercase;font-size:20px;font-weight:bold">Leave Us A Message</h4>
                        </div>
                        <div class="wpb_text_column wpb_content_element  sub-heading block" >
                           <div class="wpb_wrapper">
                            
                           </div>
                        </div>
                        <div class="vc_empty_space"   style="height: 15px"><span class="vc_empty_space_inner"></span></div>
                        <div role="form" class="wpcf7" id="wpcf7-f4-p5004-o1" lang="en-US" dir="ltr">
                           <div class="screen-reader-response">
                              <p role="status" aria-live="polite" aria-atomic="true"></p>
                              <ul></ul>
                           </div>
                           <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                             @csrf
                              <p>Your Full Name (required)<br />
                                 <span class="wpcf7-form-control-wrap your-name">
									 <input type="text" name="full_name" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> 
                              </p>
                              <p>Your Email (required)<br />
                                 <span class="wpcf7-form-control-wrap your-email">
									 <input type="email" name="email" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> 
                              </p>
                              <p>Contact<br />
                                 <span class="wpcf7-form-control-wrap your-subject">
								<input type="text" name="contact" required size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> 
                              </p>
                              <p>Your Message<br />
                                 <span class="wpcf7-form-control-wrap your-message">
					<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" required></textarea></span> 
                              </p>
                              <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn btn-success" /></p>
                              <div class="wpcf7-response-output" aria-hidden="true"></div>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="heading side-head head-5 main-color">
                           <h4 class="main-color"  style="text-transform:uppercase;font-size:20px;font-weight:bold">FIND US</h4>
                        </div>
                        <div class="wpb_text_column wpb_content_element  sub-heading block" >
                           <div class="wpb_wrapper">
                            
                           </div>
                        </div>
                        <div class="vc_empty_space"   style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                        <div class="">
                           <div class="mapouter"><div class="gmap_canvas">
                              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=7654%20Lurie%20Road%20Mayfield%20Daveyton&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                              <a href="https://www.embedgooglemap.net"></a>
                              <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                           </div></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section"   style="background-color: #f1f1f1;">
               <div class="container">
                  <div class="row vc_row">
                     <div class="col-md-4">
                        <div class="wpb_text_column wpb_content_element " >
                           <div class="wpb_wrapper">
                              <div class="white-bg lg-box shape">
                                 <h4>Address</h4>
                                 <p>7654, Lurie Rd<br />
                                    Mayfield(Opposite Mayfield Square),Daveyton
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="wpb_text_column wpb_content_element " >
                           <div class="wpb_wrapper">
                              <div class="white-bg lg-box shape">
                                 <h4>Phone</h4>
                                 <p>TEL: +27 (0) 11 426 6159<br />
                                    Mobile: +27 (0) 74 421 5959
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="wpb_text_column wpb_content_element " >
                           <div class="wpb_wrapper">
                              <div class="white-bg lg-box shape">
                                 <h4>E-mail Address</h4>
                                 <p>info@womenleadership.org.za<br />
                                   
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
        @include('layouts.footer')
         <span class="sufn_url hidden"></span>
		 <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
      </div>
	  @include('layouts.scripts')
   @include('layouts.scripts')
</html>
@endsection
