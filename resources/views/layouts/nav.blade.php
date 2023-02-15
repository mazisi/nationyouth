

<head>
    <title>WLSE-
    @if(Route::currentRouteName() === 'home')
    Home
    @elseif(Route::currentRouteName() === 'about')
    About
     @elseif(Route::currentRouteName() === 'programs.index')
     Programs
     @elseif(Route::currentRouteName() === 'gallery')
     Gallery
     @elseif(Route::currentRouteName() === 'donate')
     Donate
      @elseif(Route::currentRouteName() === 'blogs.index')
      Blog
      @elseif(Route::currentRouteName() === 'vacancies.index')
      Vacancies
      @elseif(Route::currentRouteName() === 'contact.index')
      Contact-Us
    @endif
    </title>
    <meta name="Women Leadership">
    <meta name="author" content="Msebele Mazisi | mrnlabs.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/css/assets.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link id="theme_css" rel="stylesheet" href="{{ asset('assets/css/light.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/navigation.css') }}" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">

    <style type="text/css">
            
        body::-webkit-scrollbar {
          width: 11px;
        }
        body {
          scrollbar-width: thin;
          scrollbar-color: var(--thumbBG) var(--scrollbarBG);
        }
        body::-webkit-scrollbar-track {
          background: var(--scrollbarBG);
        }
        body::-webkit-scrollbar-thumb {
          background-color: #888181;
          border-radius: 6px;
          border: 3px solid #888181;
        }


    
        body {
          height: 100vh;
          overflow-y: auto;
         
        }
        p {
          margin: 0 0 1.5em;
        }
        * {
          box-sizing: border-box;
        }

        .fun-info{
            font-size: 10px;
            font-weight: bold;
        }



.email1:focus, .email1:focus {
    color: #111 !important;
}



    </style>
</head>
<body>

    
    <div class="pageWrapper animsition">

    <!-- top bar start -->
        <div class="top-bar main-bg">
            <div class="container">
                    
                <div class="center-tbl">
                    
                    <ul class="top-info f-left">
                        <li ><a style="text-transform: lowercase;" href="#" class="shape"><i class="fa fa-envelope"></i>info@womenleadership.org.za</a></li>
                        <li><span><i class="fa fa-phone"></i> +27 (0) 74 421 5959</span></li>
                    </ul>
                    
                    <ul class="social-list middle-ul alter-bg shape">
                        <li><a href="https://www.instagram.com/wlse_sa/" target="_blank" class="fa fa-instagram" data-tooltip="true" data-title="dribbble" data-position="bottom"></a></li>
                        <li><a href="https://www.facebook.com/womenleadershipSA/" target="_blank" class="fa fa-facebook" data-tooltip="true" data-title="facebook" data-position="bottom"></a></li>
                        <li><a href="https://www.linkedin.com/in/women-leadership-social-empowerment-1b2414193" target="_blank" class="fa fa-linkedin" data-tooltip="true" data-title="linkedin" data-position="bottom"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCGglibheFXEH8r4OF7uc21Q" target="_blank" class="fa fa-youtube" data-tooltip="true" data-title="skype" data-position="bottom"></a></li>
                        <li><a href="https://twitter.com/WLSE_SA?=08" class="fa fa-twitter" target="_blank" data-tooltip="true" data-title="twitter" data-position="bottom"></a></li>
                    </ul>
                    
                    <ul class="f-right">
                       
                       
                        
                        <li class="dropdown"><a href="#" class="shape" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false" id="login-bx"><i class="fa fa-lock"></i>Login</a>
                            <div class="dropdown-menu  black-bg" style="padding: 3rem !important;">
                                                                
                                <div class="login-controls">
                                    <form action="{{ route('login') }}" method="POST">
                                      @csrf
                                    <div class="form-group">
                                        <input type="email" class="email1" name="email" placeholder="User name Or Email" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="email1" name="password" placeholder="Password" required/>
                                    </div>
                                    <div class="form-group floated-controls">
                                        <span class="block checkbox-block"><input type="checkbox" name="remember" class="checkbox" /> <span>Remember Me!</span></span>
                                                                           </div>
                                    <div>
                                        <button type="submit" class="btn main-bg">Submit</button>
                                        
                                    </div>
                                   
                                    </form>
                                </div>
                            </div>
                        </li>
     
                      
                            
                        
                        <li ><a class="shape" href="{{ route('donate') }}"><i class="fa fa-sitemap"></i> Donate</a></li>
                    </ul>
                    
                </div>
                                            
            </div>
        </div>

     

        <!-- top bar end -->
        <header class="top-head " data-sticky="true">
            <div class="container">
                <!-- Logo start -->
                <div class="logo">
                    <a href="/"><img alt="" src="{{ asset('assets/images/logo1.png') }}" style="max-height: 10rem" /></a>
                </div>
                <!-- Logo end -->
                
                <div class="f-right responsive-nav">
                    <!-- top navigation menu start -->
                    <nav class="top-nav nav-animate to-bottom">
                        <ul>
                        
                            <li class="mega-menu @if(Route::currentRouteName() === 'home') selected @endif"><a href="/">Home</a>
                            </li>
                            <li class="@if(Route::currentRouteName() === 'about') selected @endif"><a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="@if(Route::currentRouteName() === 'programs.index') selected @endif"><a href="{{ route('programs.index') }}">Programs</a>
                            </li>
                            <li class="@if(Route::currentRouteName() === 'gallery') selected @endif"><a href="{{ route('gallery') }}">Gallery</a>

                            </li>
                            <li class="@if(Route::currentRouteName() === 'blogs.index') selected @endif"><a href="{{ route('blogs.index') }}">Blog</a>
                            </li>
                            <li class="@if(Route::currentRouteName() === 'vacancies.index') selected @endif"><a href="{{ route('vacancies.index') }}">Jobs</a>
                                
                            </li>
                            <li class="@if(Route::currentRouteName() === 'contact.index') selected @endif"><a href="{{ route('contact.index') }}">Contact</a>
                            </li>
                            
                        
                            </li>
                        </ul>
                    </nav>
                    <!-- top navigation menu end -->
                        
                    <div class="f-right">
                        <!-- top search start -->
                        
                        <!-- top search end -->
                        
                    
                    </div>
                    
                </div>
            </div>
        </header>
        @yield('navigation')