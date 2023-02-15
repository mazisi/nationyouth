<!DOCTYPE html>
<html>
  @extends('layouts.nav')

  @section('navigation')
  
 {{-- slider start --}}
 <style type="text/css">
  .content-slide{
    background-color: rgba(0,0,0,0.5); margin-top: 20vh; color: #fff

  }
  .content-slide h1{
    color: #fff
  }
  .slick-slide{
    width: 100px;
    height: 200px;
  }
</style>
       
 <div class="clearfix">
  <div class="camera_wrap camera_magenta_skin camera-slider margin-bottom-0">
          <div data-thumb="{{ asset('assets/images/home/bg3.jpg') }}" data-src="{{ asset('assets/images/home/bg3.jpg') }}">
            <div class="row">

              <div class="col-md-3"></div>
               <div class="col-md-6 content-slide fadeFromBottom" >
                <h1>Welcome to  Women Leadership Social Empowerment!</h1>
                <p>
              A women led organization that inspires women leadership and strives to respond to varies of socio-economic challenges which women and youth face through the implementation of innovative strategies.
             </p>
              
            </div>
              
            </div>
           
          </div>


          <div data-thumb="{{asset('assets/images/home/bg10.jpg')}}" data-src="{{asset('assets/images/home/bg10.jpg')}}">
            <div class="row">

              <div class="col-md-3"></div>
               <div class="col-md-6 content-slide fadeFromBottom" >
                <h1> Gender Based Violence</h1>
                <p>
               Take Action by partnering with us in advancing women’s equality and addressing gender based violence (GBV) in communities through holistic and transformative approaches 
             </p>
              
            </div>
              
            </div>
           
          </div>
          <div data-thumb="{{asset('assets/images/home/bg5.jpg')}}" data-src="{{asset('assets/images/home/computer-training.jpg')}}">
            <div class="row">

              <div class="col-md-3"></div>
               <div class="col-md-6 content-slide fadeFromBottom" >
                <h1> Digital Learning Experience</h1>
                <p>
              WLSE has realized that the rapid pace of technological advancements is transforming the educational system and redesigned programs that offer innovation in terms of access to digital learning experience.
             </p>
              
            </div>
              
            </div>
           
          </div>


           <div data-thumb="{{asset('assets/images/home/bg7.jpg')}}" data-src="{{asset('assets/images/home/bg7.jpg')}}">
            <div class="row">

              <div class="col-md-3"></div>
               <div class="col-md-6 content-slide fadeFromBottom" >
                <h1>  Leadership and Entrepreneurship</h1>
                <p>
              We are dedicated in developing women and youth through integrated Leadership and Entrepreneurial skills that enables them to generate employment for themselves and people in the communities
             </p>
              
            </div>
              
            </div>
           
          </div>
          <div data-thumb="assets/images/home/bg6.jpg" data-src="assets/images/home/bg6.jpg">
            <div class="row">

              <div class="col-md-3"></div>
               <div class="col-md-6 content-slide fadeFromBottom" >
                <h1>  Employment placement </h1>
                <p>
              Transforming the lives of women and youth through job readiness training and striving to place them into jobs though our partnership with government, business and other institutions
             </p>
              
            </div>
              
            </div>
            
          </div>

          <div data-thumb="assets/images/home/bg8.png" data-src="assets/images/home/bg8.png">
            <div class="row">

              <div class="col-md-3"></div>
               <div class="col-md-6 content-slide fadeFromBottom" >
                <h1> Help WLSE fight COVID-19  in Townships  </h1>
                <p>
             Help us fight the spread of COVID-19 by lending your helping hand in our Community education on prevention of COVID-19 and a donation of face masks and sanitizers to be given to vulnerable people
             </p>
              
            </div>
              
            </div>
           
          </div>

      </div>
</div>

 {{-- end slider --}}


  <div id="contentWrapper">
      

        <div class="section">
          <div class="heading full-heading alter-gry" style="background-image:url('{{ asset('assets/images/patterns/bg2.jpg') }}')">
            <h3 class="inner-head">Welcome to Women Leadership Social Empowerment!</h3>
            <h4 class="small-heading">Learn More  <span class="main-color">About Us</span></h4>
          </div>
          <div class="container">
            <div class="row">             
              <div class="row">
                <div class="col-md-6">
                  <div class="clearfix">
                    <div class="col-md-6 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
                      <div class="icons-style-2">
                        <i class="icons icons-basic-alarm"></i>
                        <h3 class="bold uppercase heading">Work with us</h3>
                        <p>We are the right and trusted organisation to work with in reaching out and developing women and youth through high impact learning programmes, Visit us or get hold of us to find more about our work</p>
                      </div>
                    </div>
                    <div class="col-md-6 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;">
                      <div class="icons-style-2">
                        <i class="icons icons-basic-lock"></i>
                        <h3 class="bold uppercase heading">Our Mission</h3>
                        <p>We strive to create an open and equally accessible opportunities for the marginalized target group in communities by proving essential skills and productive resources they need to improve their lives</p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix margin-top-30">
                    <div class="col-md-6 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="800" style="animation-delay: 800ms;">
                      <div class="icons-style-2">
                        <i class="icons icons-basic-pencil-ruler"></i>
                        <h3 class="bold uppercase heading">Our Vision</h3>
                        <p>We aspire to remain the hope and voice of vulnerable women and youth and continue to develop, promote and protect them through social support and transformative livelihood programs</p>
                      </div>
                    </div>
                    <div class="col-md-6 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="1000" style="animation-delay: 1000ms;">
                      <div class="icons-style-2">
                        <i class="icons icons-basic-home"></i>
                        <h3 class="bold uppercase heading">Our Values</h3>
                        
                          <ul>
                            <li>Honesty</li>
                            <li>Integrity</li>
                            <li>Accountability</li>
                            <li>Ubuntu</li>


                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 center-text">
                  <img class="fx animated fadeInRight" data-animate="fadeInRight" alt="" src="assets/images/logo1.png">
                </div>
              </div>
              
            </div>
              
          </div>
        </div>
<div class="section" style="margin-top: -15rem;">

  <div class="container">
            
            <div class="row">
              <div class="col-lg-12 sec-bg left circle parallax" data-stellar-background-ratio="0.4" data-overlay="rgba(0,0,0,.4)" style="background-image: url(&quot;assets/images/bgs/bg-05.jpg&quot;); background-position: 0px -2186.85px;"><div class="parallax-overlay" style="background-color:rgba(0,0,0,.4)"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8 padding-vertical-80">
              <div class="row relative">
                <div class="col-md-6">
                  <div class="white-bg fun shape lg fx new-angle animated flipInX" data-animate="flipInX">
                    <div class="fun-icon main-color"><i class="fa fa-users"></i></div>
                    <div class="fun-number bolder t-center odometer odometer-auto-theme" data-initial="0" data-value="506" data-timer="0"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></div>
                    <div class="fun-info t-center">Short courses</div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="white-bg fun shape lg fx new-angle animated flipInX" data-animate="flipInX" data-animation-delay="100" style="animation-delay: 100ms;">
                    <div class="fun-icon main-color"><i class="fa fa-users"></i></div>
                    <div class="fun-number bolder t-center odometer odometer-auto-theme" data-initial="0" data-value="834 data-timer="0"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span></div></div>
                    <div class="fun-info t-center">IT Programs</div>
                  </div>
                </div>
                <div class="clearfix margin-bottom-30"></div>
                <div class="col-md-6">
                  <div class="white-bg fun shape lg fx new-angle animated flipInX" data-animate="flipInX" data-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="fun-icon main-color"><i class="fa fa-users"></i></div>
                    <div class="fun-number bolder t-center odometer odometer-auto-theme" data-initial="0" data-value="2022" data-timer="0"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></div>
                    <div class="fun-info t-center">Skills-based Vocational and Technical Programme (VET)</div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="white-bg fun shape lg fx new-angle animated flipInX" data-animate="flipInX" data-animation-delay="300" style="animation-delay: 300ms;">
                    <div class="fun-icon main-color"><i class="fa fa-users"></i></div>
                    <div class="fun-number bolder t-center odometer odometer-auto-theme" data-initial="0" data-value="576" data-timer="0"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></div>
                    <div class="fun-info t-center">Enterprise Development and Training support</div>
                  </div>
                </div>
                <div class="clearfix margin-bottom-30"></div>
                <div class="col-md-6 pt-2">
                  <div class="white-bg fun shape lg fx new-angle animated flipInX" data-animate="flipInX" data-animation-delay="300" style="animation-delay: 300ms;">
                    <div class="fun-icon main-color"><i class="fa fa-users"></i></div>
                    <div class="fun-number bolder t-center odometer odometer-auto-theme" data-initial="0" data-value="4033" data-timer="0"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></div>
                    <div class="fun-info t-center">Social Change Activities</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>

            </div>
          </div>


</div>
  

        
                
        
        
        
        
        <div class="section" style="margin-top: -15rem;">
          <div class="container">
            
            <div class="row">
              <div class="col-md-8">
                <div class="heading sub-head">
                  <h3 class="bolder head-4 uppercase">Recent <span class="main-color">Posts</span></h3>
                </div>
                
                <div class="row posts-mini">
                  @if ($blogs->count())
                    @foreach ($blogs as $blog)
                    <div class="col-md-6 post-item">
                      <div class="post-image">
                        <a href="{{ route('blogs.index') }}">
                         <div style="height: 25rem !important; max-height: 25rem !important; overflow: hidden !important;">
                             <img src="{{ asset('storage/app/public/blog/'.$blog->blog_image) }}" alt=" Blog post " >
                          </div>
                        </a>
                      </div>
                        <article class="post-content">
                            <div class="post-info-container">
                          <div class="post-info">
                            <h2><a href="{{ route('blogs.index') }}">{{ $blog->blog_title }}</a></h2>
                            <ul class="post-meta">
                              <li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">{{ $blog->user->first_name }} {{ $blog->user->last_name }}</a></li>
                              <li class="meta_date"><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('d-m-Y') }}</li>
                            </ul>
                          </div>
                        </div>
                        <p>{{ Str::limit($blog->body, 200) }} <a class="more_btn main-color" href="{{ route('blogs.index') }}">Read more</a></p>
                        </article>
                    </div>
                    @endforeach
                      
                  @else
                      <p>No recent posts</p>
                  @endif
                  
                    
                
                </div>
                
              </div>
              
              <div class="col-md-4">                
                <div class="heading sub-head">
                  <h3 class="bolder head-4 uppercase">Testimonials</h3>
                </div>
                <div class="testimonials shape horizontal-slider normal-testimonials gry-bg padding-horizontal-20 padding-vertical-20" data-slides_count="1" data-scroll_amount="1" data-slider-speed="300" data-slider-arrows="0" data-slider-auto="1" data-slider-infinite="1" data-slider-dots="1">
                  @if ($testimonial->count())
                    @foreach ($testimonial as $testimonial)
                    <div class="testimonials-bg">
                      <div class="testimonials-img">
                        <img alt="image" src="{{ asset('storage/app/public/testimonials/'.$testimonial->testimonial_image) }}" style="max-width: 120px; max-height: 120px">
                      </div>
                      <p>"{{ $testimonial->body }}"</p>
                      <div class="testimonials-name">
                        <strong class="main-color">{{ $testimonial->author }}</strong>: {{ $testimonial->proffession }}
                        
                      </div>
                    </div>
                    @endforeach
                      
                  @else
                      <p>No testimonials</p>
                  @endif
                  
                 
                </div>
                
                <div class="main-bg ads-box shape margin-top-10">
                  <p class="white uppercase t-center">Lets develop, promote and protect.</p>
                </div>
                
              </div>
              
            </div>
          </div>
        </div>
        
        
        
       
        
                

        </div>
    </div>
        
    @include('layouts.footer')
          
    <!-- Back to top Link -->
      <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
     
    
      <!-- Load JS plugins file -->
   @include('layouts.scripts')
   



</body>
 <!-- SLIDER REVOLUTION  -->
 <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
 

 <!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->
 <script type="text/javascript">
     var tpj=jQuery;     
     var revapi70;
     tpj(window).load(function() {
       if(tpj("#slider").revolution == undefined){
         revslider_showDoubleJqueryError("#slider");
       }else{
         revapi70 = tpj("#slider").show().revolution({
           sliderType:"standard",
           jsFileLocation:"assets/revolution/js/",
           sliderLayout:"fullwidth",
           dottedOverlay:"none",
           delay:9000,
           navigation: {
             keyboardNavigation:"off",
             keyboard_direction: "horizontal",
             mouseScrollNavigation:"off",
             onHoverStop:"off",
             touch:{
               touchenabled:"on",
               swipe_threshold: 75,
               swipe_min_touches: 1,
               swipe_direction: "horizontal",
               drag_block_vertical: false
             }
             ,
             arrows: {
               style:"zeus",
               enable:true,
               hide_onmobile:true,
               hide_under:600,
               hide_onleave:true,
               hide_delay:200,
               hide_delay_mobile:1200,
               tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
               left: {
                 h_align:"left",
                 v_align:"center",
                 h_offset:30,
                 v_offset:0
               },
               right: {
                 h_align:"right",
                 v_align:"center",
                 h_offset:30,
                 v_offset:0
               }
             }
           },
           responsiveLevels:[1240,1024,778,480],
           gridwidth:[1400,1240,778,480],
           gridheight:[650,650,960,720],
           lazyType:"none",
           parallax: {
             type:"mouse+scroll",
             origo:"slidercenter",
             speed:2000,
             levels:[1,2,3,20,25,30,35,40,45,50],
             disable_onmobile:"on"
           },
           shadow:0,
           spinner:"spinner2",
           autoHeight:"off",
           disableProgressBar:"on",
           hideThumbsOnMobile:"off",
           hideSliderAtLimit:0,
           hideCaptionAtLimit:0,
           hideAllCaptionAtLilmit:0,
           debugMode:false,
           fallbacks: {
             simplifyAll:"off",
             disableFocusListener:false,
           }
         });
       }
     }); /*ready*/
   </script>



</html>
@endsection
