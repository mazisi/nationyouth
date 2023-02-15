<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Women Leadership Social Empowerment Programmes</title>
 
 
  <meta name="keywords" content="Computer">
  <meta name="description" content="">

 
  <link rel="icon" href="{{ asset('public/dash_assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('public/dash_assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('public/dash_assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('public/dash_assets/css/argon.min5438.css?v=1.2.0') }}" type="text/css">

  
</head>

<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="{{route('dashboard')}}">
          <img src="{{ asset('assets/images/logo1.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            @if (auth()->user()->isAdmin())
           
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('admins.index') }}" >
                <i class="ni ni-circle-08 text-success"></i>
                <span class="nav-link-text">Users</span>
              </a>
              
            </li>
            @endif

            <li class="nav-item">
              <a class="nav-link " href="{{ route('category.index') }}" >
                <i class="ni ni-chart-pie-35 text-info"></i>
                <span class="nav-link-text">Categories</span>
              </a>
              
            </li>

            <li class="nav-item">
              <a class="nav-link " href="{{ route('programs.create') }}" >
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Courses</span>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vacancies.create') }}">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Vacancies</span>
              </a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('blogs.create') }}">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Blog</span>
              </a>
             
            </li>
           
           
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('appreciation.index') }}">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Testimonials</span>
              </a>
            </li>
            <li class="nav-item" style="display: none">
              <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                @csrf
                <i class="ni ni-user-run"></i>
                <button type="submit" class="btn btn-danger btn-sm">  Logout</button>
              </form>
            </li>

           
           
          </ul>
          <!-- Divider -->
          <hr class="my-3">
      
        </div>
      </div>
    </div>
  </nav>
  

 @yield('content')
 

   <script src="{{ asset('public/dash_assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('public/dash_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/dash_assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('public/dash_assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('public/dash_assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('public/dash_assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('public/dash_assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('public/dash_assets/js/argon.min5438.js?v=1.2.0') }}"></script>

  <script>
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-success").slideUp(500);
});



$("#role").change(function(){
    if (this.value == "1") {
            $("#password").css("display", "block");
        }
        else {
            $("#password").css("display", "none");
        }
});

  </script>
  
 
 
 

</body>

</html>