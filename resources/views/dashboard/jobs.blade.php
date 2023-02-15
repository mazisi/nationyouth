@extends('dashboard.layouts.app')
@section('content')
  <div class="main-content" id="panel">
  
    @include('dashboard/layouts/header')

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Vacancies</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_vacancy" class="btn btn-sm btn-neutral">Create Vacancy</a>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      
     
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">All Vacancies</h3>
            </div>
            @if (auth()->user()->isAdmin())
            <div class="col-6 text-right">
              @if ($jobs->count())
                  <form action="{{ route('vacancies.delete_all') }}" method="POST"
                  class="btn btn-sm btn-round btn-icon" data-toggle="tooltip" 
                  data-original-title="Delete All"
                  onclick="return confirm('Erase all vacancies?? This action can`t be undone!!')">
                  @csrf              
                    <button class="btn-sm btn-danger">Delete All</button>
                </form>
            @endif
            </div>
            @endif
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
                <th>Created By</th>
                <th>Title</th>
                <th>Deadline</th>
                <th>Body</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @if ($jobs->count() > 0)
               @foreach ($jobs as $job)                 
               @php
               {{
         
                 if ($job->user->picture) {
                   $img = asset('storage/app/public/user_pics/'.$job->user->picture);
                 } else {
                   $img = asset('public/dash_assets/img/avatar.png');
                 }
                 
         
               }}
               @endphp
                      <tr>
                        <td class="table-user">
                          <img src="{{ $img }}" class="avatar rounded-circle mr-3">
                          <b>{{ $job->user->first_name }}</b>
                        </td>
                        <td>
                          <span class="text-muted">{{ $job->job_title }}</span>
                        </td>
                        <td>
                        	

                          <span class="text-muted">{{ $job->deadline }} 
                          	@if($job->deadline < now())
                          	<span class="text-small text-danger"> (Expired)</span>
                          	@endif
                          </span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">{{ Str::limit($job->body, 20) }}</a>
                        </td>
                        
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_vacancy{{ $job->id }}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          @if (auth()->user()->isAdmin())
                    <form method="POST" action="{{ route('vacancies.destroy',$job->id) }}" onclick="return confirm('Are you sure you want to delete this vacancy??')" 
                   class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete vacancy">
                   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      @csrf
                      @method('DELETE')
                    </form>
                    @endif
                        </td>
                       
                      </tr>


                      {{-- edit modal --}}
                      @include('dashboard/miscellaneous/jobs-crud/update')

              @endforeach
              @else
              <h6 class="text-center">No vacancies available at the moment.</h6>
            @endif
              
            </tbody>
          </table>
          {{  $jobs->links()  }}
         
        </div>
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/jobs-crud/create')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
         
         $(document).on('submit', '.vacancy', function(e){        
          e.preventDefault();
          $("#spinner").fadeIn(500);
          
          $.ajax({
          type:"POST",
          url:"{{ route('vacancies.store') }}",
           data:new FormData(this),
          contentType: false, // The content type used when sending data to the server.
          cache: false, // To unable request pages to be cached
          processData:false, 
          success:function(data){
           alert('Vacancy successfully created');
           $('#create_vacancy').modal('hide');          
          },
          error:function(data){
           alert('An error occure');
           $('#create_vacancy').modal('hide');          
          }
          });
        });

      
        
  </script>

@endsection
