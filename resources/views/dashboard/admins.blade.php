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
                  <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_user" class="btn btn-sm btn-neutral">Create User</a>
             
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
              <h3 class="mb-0">All Users</h3>
            </div>
          
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Role</th>
                 <th>Action</th>
              </tr>
            </thead>
            <tbody>
           
               @if ($users->count())
                   @foreach ($users as $user)                                      
              
                      <tr>
                        <td class="table-user">
                          @php
                          {{

                            if ($user->picture) {
                              $img = asset('storage/user_pics/'.$user->picture);
                            } else {
                              $img = asset('dash_assets/img/avatar.png');
                            }
                            

                          }}
                          @endphp
                          <img src="{{ $img }}" class="avatar rounded-circle mr-3" alt="No user pic">
                          <b>{{ $user->first_name }} {{ $user->last_name }}</b>
                        </td>
                        <td>
                          <span class="text-muted">{{ $user->email }}</span>
                        </td>
                        <td>
                          <span class="text-muted">{{ $user->position }}</span>
                        </td>

                        <td>
                          <span class="text-muted">{{ $user->role->role }}</span>
                        </td>
                        
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_user{{ $user->id }}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>

                   
                              <form 
                              onclick="return confirm('Are you sure you want to delete this user ??')" 
                              method="POST" action="{{ route('admins.destroy', $user->id) }}" class=" table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Course">
                            <button type="submit" class=" btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                @csrf
                                @method('DELETE')
                              </form>
                           
                        </td>
                      </tr>

                      

                      {{-- edit modal --}}
                      @include('dashboard/miscellaneous/users-crud/update')
                      
                      
                      {{-- end edit modal --}}
 
      @endforeach
      @else
          <h6 class="text-center">No users at the moment.</h6>
      @endif 
  
            </tbody>
          </table>
        
            {{  $users->links()  }}
        
        </div>
      
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/users-crud/create')
 
  <script>
         
         $(document).on('submit', '.courses', function(e){        
          e.preventDefault();
          $("#spinner").fadeIn(500);
          
          $.ajax({
          type:"POST",
          url:"{{ route('programs.store') }}",
           data:new FormData(this),
          contentType: false, // The content type used when sending data to the server.
          cache: false, // To unable request pages to be cached
          processData:false, 
          success:function(data){
            alert("Course successfully created");
           $('#create_course').modal('hide'); 		//then refresh page
           //window.location.reload();
          },
          error:function(data){
            alert("Something went wrong!!!");
            $('#create_course').modal('hide'); 		//then refresh page
           //window.location.reload();
          }
          });
        });



</script>
      
 

@endsection
