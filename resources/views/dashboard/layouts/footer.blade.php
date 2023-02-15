<footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
        <div class="copyright text-center  text-lg-left  text-muted">
          &copy; {{ date('Y') }} <a href="{{route('home')}}" class="font-weight-bold ml-1" target="_blank">Women Leadership Social Empowerment Programmes</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="{{ route('admins.index') }}" class="nav-link" >Users</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('programs.create') }}" class="nav-link" >Courses</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('blogs.create') }}" class="nav-link" >Blog</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('appreciation.index') }}" class="nav-link" >Testimonials</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="modal fade" id="change_picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style=" height: 60%;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Update Profile Picture</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('profile.change') }}" enctype="multipart/form-data">
            @csrf
              <div class="row">
             
              <div class="col-md-6">
                  <div class="form-group">
                   <label>Upload Picture</label>
                    <input type="file" name="file" class="form-control" accept="image/*">
                   </div>
              </div>
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="saveBtn"></span>&nbsp;Save</button>
        </div>		
        </form>
        </div>
        
      </div>
    </div>
  </div>
  
  