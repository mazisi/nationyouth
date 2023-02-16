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