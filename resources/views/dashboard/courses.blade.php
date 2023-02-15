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
                  <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_course" class="btn btn-sm btn-neutral">Create Course</a>
             
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
              <h3 class="mb-0">All Courses</h3>
            </div>
            @if (auth()->user()->isAdmin())
            <div class="col-6 text-right">
              @if ($courses->count())
                  <form action="{{ route('courses.delete_all') }}" method="POST"
                  class="btn btn-sm btn-round btn-icon" data-toggle="tooltip" 
                  data-original-title="Delete All"
                  onclick="return confirm('Erase all courses?? This action can`t be undone!!')">
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
                <th>Category</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if ($courses->count())
                
              
      @foreach ($courses as $course)
        
      @php
      {{

        if ($course->user->picture) {
          $img = asset('storage/app/public/user_pics/'.$course->user->picture);
        } else {
          $img = asset('public/dash_assets/img/avatar.png');
        }
        

      }}
      @endphp
              
                      <tr>
                        <td class="table-user">
                          <img src="{{ $img }}" class="avatar rounded-circle mr-3">
                          <b>{{ $course->user->first_name}}</b>
                        </td>
                        <td>
                          <span class="text-muted">{{ $course->course_title }}</span>
                        </td>
                        <td>
                          <span class="text-muted">{{ $course->category->category_name}}</span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">{{ $course->created_at->toDateString()}}</a>
                        </td>
                        
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_course{{ $course->id }}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          @if (auth()->user()->isAdmin())
                    <form onclick="return confirm('Are you sure you want to delete this course ??')" method="POST" action="{{ route('programs.destroy', $course->id) }}" class=" table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Course">
                   <button data-id="{{ $course->id }}" type="submit" class="delete_course btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      @csrf
                      @method('DELETE')
                    </form>
                    @endif
                        </td>
                       
                      </tr>

                      

                      {{-- edit modal --}}
                      @include('dashboard/miscellaneous/courses-crud/update')
  @endforeach 
  {{-- {{ $course->links() }} --}}
  @else
  <h6 class="text-center">No courses at the moment</h6>
  @endif
              
            </tbody>
          </table>
          {{ $courses->links() }}
        </div>
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/courses-crud/create')
 
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

    //     $(document).on('click', '.delete_course', function(){
    //       $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    //       var id = $(this).data("id");
          
    //        var query = confirm("Are you sure you want to delete this course ?");
    //        if (query == true) {
    //       $.ajax({
    //             type:"POST",
    //             url: "programs.destroy"+id,                
    //             data:{ id:id},
    //             success:function(data){
                 
    //               alert("Course successfully deleted");
                 
    //             },
                
    //             error:function(data){
    //               // $("#spinner").fadeOut(500);
    //               alert("Sorry something went wrong");
    //               console.log(xhr.responseText);
                 
    //             }

    //           });
    //           // console.log(xhr.responseText);
    //     }
    //     });

      
        
  </script>

@endsection
