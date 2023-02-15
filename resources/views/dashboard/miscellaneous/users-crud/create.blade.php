<div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title order-table-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="testimonial" action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                 <label>First Name</label>
                  <input type="text" class="form-control" name="first_name"  placeholder="First Name" required >
                        
                 </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
               <label>Last Name</label>
                <input type="text" class="form-control" name="last_name"  placeholder="Last Name" required >
                      
               </div>
          </div>
        
            <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                 <input type="email" name="email" class="form-control" required>
                 </div>
            </div>
                          

            <div class="col-md-6 ">
                <div class="form-group">
                 <label>Role</label>
                  <select name="role_id" class="form-control" id="role" required>
                    <option value="">Select user role</option>
                    @if ($roles->count())
                        @foreach ($roles as $roles)
                        <option value="{{ $roles->id }}">{{ $roles->role }}</option>
                        @endforeach
                    @else
                    <option value="">No role available</option>
                    @endif
                    
                  </select>
                 </div>
            </div>

             <div class="col-md-6" style="display: none;" id="password">
              <div class="form-group">
                <label>Password</label>
               <input type="password"  name="password" class="form-control" required>
               </div>
          </div> 

            <div class="col-md-6">
              <div class="form-group">
                <label>Position</label>
               <input type="text" name="position" class="form-control" required>
               </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                <label>User Image</label>
               <input type="file" name="user_image" class="form-control" accept="image/*" required>
               </div>
          </div>

            </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary"></span>&nbsp;Create</button>
      </div>		
      </form>
      </div>
      
    </div>
  </div>
</div>

