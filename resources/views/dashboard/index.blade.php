@extends('dashboard.layouts.app')
@section('content')
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('dashboard/layouts/header')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Home</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                 
                </ol>
              </nav>
            </div>
            {{-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> --}}
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <a href="{{ route('programs.create') }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Courses</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $cou->count() }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $cou->count()/100 }}%</span>
                    
                  </p>
                </div>

                </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <a href="{{ route('admins.index') }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $user->count() }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    
                  </p>
                </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <a href="{{ route('vacancies.create') }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Vacancies</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $vac->count() }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $vac->count()/100 }}%</span>
                    
                  </p>
                </div>
              </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <a href="{{ route('vacancies.create') }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Blog</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $blo->count() }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $blo->count()/100 }}%</span>
                    
                  </p>
                </div>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Logged in as:</h6>
                  <h5 class="h3 text-white mb-0">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                      <h6 class="text-light text-uppercase ls-1 mb-1">Last Updated:</h6>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                      <h6 class="text-light text-uppercase ls-1 mb-1">{{ auth()->user()->updated_at->diffForHumans() }} </h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                @if (Auth::check())           
               
               
                  <form action="{{ route('dashboard') }}" method="POST">
                    @csrf
                   
                  <div class="form-group">
                    <label style="color: #fff;">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{ auth()->user()->first_name }}" >
                  </div>

                  <div class="form-group">
                    <label style="color: #fff;">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ auth()->user()->last_name }}" >
                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                  </div>

                  <div class="form-group">
                    <label style="color: #fff;">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}" >
                  </div>

                  <div class="form-group">
                    
                    <input type="submit" class="btn float-right" value="Save" style="background-color: #5e72e4; color: #fff;" >
                  </div>
                  </form>
                  @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Let's you update your password</h6>
                  
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{ route('changepassword.store') }}" method="POST">
                @csrf
              <div class="col-md-12">
                <div class="form-group">
                 <label >Old Password</label>
                  <input type="password" class="form-control" name="old_password"  placeholder="******" required >
                  <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                  <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                </div>

                <div class="form-group">
                  <label >New Password</label>
                   <input type="password" class="form-control" name="new_password" id="new_password" placeholder="******" required >
                 </div>
                 <div class="form-group">
                  <label >Confirm Password</label>
                   <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="******" required >
                 </div>
                 <p id="check_password_match" class="text-red d-none">Password don`t match</p>
                 <div class="form-group">
                  
                   <input type="submit"  value="Save" class="btn btn-primary float-right">
                 </div>
                </form>
              </div>
            </div>
          </div>
        </div>
       
      </div>
     
    
      @include('dashboard/layouts/footer')
    </div>
  </div>
  @endsection
