@extends('dashboard.layouts.app')

@trixassets

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
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_blog" class="btn btn-sm btn-neutral">Create Blog</a>
             
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
              <h3 class="mb-0">All Blogs </h3>
            </div>
            @if (auth()->user()->isAdmin())
            <div class="col-6 text-right">
              @if ($blog->count())
              <form action="{{ route('delete_blogs.delete_all') }}" method="POST"
              class="btn btn-sm btn-round btn-icon" data-toggle="tooltip" 
              data-original-title="Delete All"
              onclick="return confirm('Erase all blogs?? This action can`t be undone!!')">
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
                <th>Body</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
          @if ($blog->count())
              @foreach ($blog as $blogs )
          
              @php
              {{
        
                if ($blogs->user->picture) {
                  $img = asset('storage/app/public/user_pics/'.$blogs->user->picture);
                } else {
                  $img = asset('public/dash_assets/img/avatar.png');
                }
                
        
              }}
              @endphp
                      <tr>
                        <td class="table-user">
                          <img src="{{ $img }}" class="avatar rounded-circle mr-3">
                          <b>{{ $blogs->user->first_name }} {{ $blogs->user->last_name }}</b>
                        </td>
                        <td>
                          <span class="text-muted">{{ $blogs->blog_title }}</span>
                        </td>
                        <td>
                         
                          <span class="text-muted">{{ $blogs->category->category_name }} </span>
                        </td>
                        <td>
                          <a id="ckeditor" name="ckeditor" href="#!" class="font-weight-bold">{{ Str::limit($blogs->body, 20) }}</a>
                        </td>
                        
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_blog{{ $blogs->id }}" data-original-title="Edit Blog">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          @if (auth()->user()->isAdmin())
                    <form method="POST" action="{{ route('blogs.destroy',$blogs->id) }}"
                       onclick="return confirm('Are you sure you want to delete this blog?')" 
                   class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Blog">
                   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      @csrf
                      @method('DELETE')
                    </form>
                    @endif
                        </td>
                       
                      </tr>

                      {{-- edit modal --}}
                      @include('dashboard/miscellaneous/blog-crud/update')
@endforeach
  @else
  <h6 class="text-center">No blogs at the moment.</h6>
@endif           
            </tbody>
          </table>

          {{  $blog->links()  }}
        </div>
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/blog-crud/create')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





@endsection
