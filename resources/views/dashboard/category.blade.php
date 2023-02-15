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
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_category" class="btn btn-sm btn-neutral">Create Category</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      
     
      <div class="card ">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">All Categories</h3>
            </div>
            @if (auth()->user()->isAdmin())
            <div class="col-6 text-right d-none">
              @if ($categories->count())
              <form action="{{ route('categories.delete_all') }}" method="POST"
              class="btn btn-sm btn-round btn-icon" data-toggle="tooltip" 
              data-original-title="Delete All"
              onclick="return confirm('Erase all categories?? This action can`t be undone!!')">
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
                <th>Category Name</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                            
              @if ($categories->count() > 0)
                @foreach ($categories as $category)          
               
              
                      <tr>                       
                        <td>
                          <span class="text-muted">{{ $category->category_name }}</span>
                        </td>
                        <td>
                          <span class="text-muted">{{ $category->created_at->diffForHumans() }}</span>
                        </td>
                        
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_category{{ $category->id }}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          @if (auth()->user()->isAdmin())
                    <form method="POST" action="{{ route('category.destroy',$category->id) }}"
                       onclick="return confirm('Are you sure you want to delete this category ?')" 
                   class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete vacancy">
                   @csrf
                      @method('DELETE')
                   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      
                    </form>
                    @endif
                        </td>
                       
                      </tr>


                      {{-- edit modal --}}
                      @include('dashboard/miscellaneous/category-crud/update')
  @endforeach
  @else
  <h6 class="text-center">No categories at the moment.</h6>
  @endif
          
              
            </tbody>
          </table>
          {{ $categories->links() }}
        </div>
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/category-crud/create')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
         
         $(document).on('submit', '.category', function(e){        
          e.preventDefault();
           
          $.ajax({
          type:"POST",
          url:"{{ route('category.store') }}",
           data:new FormData(this),
          contentType: false,
          cache: false, 
          processData:false, 
          success:function(data){
            
            alert(data);
           $('#create_category').modal('hide');
           
          }
          });
        });

      
        
  </script>

@endsection
