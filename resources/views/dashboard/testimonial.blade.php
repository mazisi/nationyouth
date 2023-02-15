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
                     <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                </ol>
                
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_testimonial" class="btn btn-sm btn-neutral">Create Testimonial</a>
             
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
              <h3 class="mb-0">All Testimonials</h3>
            </div>
            @if (auth()->user()->isAdmin())
            <div class="col-6 text-right">
              @if ($testimonial->count())
              <form action="{{ route('testimonials.delete_all') }}" method="POST"
              class="btn btn-sm btn-round btn-icon" data-toggle="tooltip" 
              data-original-title="Delete All"
              onclick="return confirm('Erase all testimonials ?? This action can`t be undone!!')">
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
                <th>Written By</th>
                <th>Proffession</th>
                <th>Date Created</th>
                <th>Body</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
     @if ($testimonial->count())
     @foreach($testimonial as $testimonials)
         
     @php
     {{

       if ($testimonials->testimonial_image) {
         $img = asset('storage/app/public/testimonials/'.$testimonials->testimonial_image);
       } else {
         $img = asset('public/dash_assets/img/avatar.png');
       }
       

     }}
     @endphp
                      <tr>
                        <td class="table-user">
                          <img src="{{ $img }}" class="avatar rounded-circle mr-3">
                          <b>{{ $testimonials->author }}</b>
                        </td>
                        <td>
                          <span class="text-muted">{{ $testimonials->proffession }}</span>
                        </td>
                        <td>
                          <span class="text-muted">{{ $testimonials->created_at->toDateString() }}</span>
                        </td>
                        <td style="max-width: 30%">
                          <a href="#!" class="font-weight-bold" 
                          style="text-overflow:ellipsis;">{{ Str::limit($testimonials->body, 20) }}</a>
                        </td>
                        
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" 
                          data-toggle="modal" data-target="#edit_testimonial{{ $testimonials->id }}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          @if (auth()->user()->isAdmin())
                    <form method="POST" action="{{ route('appreciation.destroy', $testimonials->id) }}" onclick="return confirm('Are you sure you want to delete this testimonial??')" 
                   class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Testimonial">
                   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      @csrf
                      @method('DELETE')
                    </form>
                    @endif
                        </td>
                      
                      </tr>


                      {{-- edit modal --}}
                      
                      @include('dashboard/miscellaneous/testimonials-crud/update')
  @endforeach

  @else
       <h6 class="text-center"> There are no testimoials at the moment</h5>
  @endif

 
              
            </tbody>
          </table>
          {!! $testimonial->links() !!}

        </div>
      </div>
      
      

     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/testimonials-crud/create')
 
 <script>
  //  $(document).on('submit', '.testimonial', function(e){
  //           e.preventDefault();
         
  //           $.ajax({
  //           type:"POST",
  //           url:"{{ route('appreciation.store') }}",
  //           data:new FormData(this),
  //           contentType: false, 
  //           cache: false, 
  //           processData:false,                
  //           success:function(data){
  //             $('#create_testimonial').modal('hide'); 
  //             alert('Testimonial successfully created ');
              
  //           },
  //           error:function(data){
  //             $('#create_testimonial').modal('hide'); 
  //             alert("oopss!!.An error occured!!!");
              
  //           }
  //           });
  //         });


     
 </script>
 

@endsection
