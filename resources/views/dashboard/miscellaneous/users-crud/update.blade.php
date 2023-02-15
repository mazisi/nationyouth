<div class="modal fade" id="edit_user{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">View/Update User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="testimonial" action="{{ route('admins.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                   <label>First Name</label>
                    <input type="text" class="form-control" name="first_name"  value="{{ $user->first_name }}"  >
                          
                   </div>
              </div>
  
              <div class="col-md-6">
                <div class="form-group">
                 <label>Last Name</label>
                  <input type="text" class="form-control" name="last_name"  value="{{ $user->last_name }}" >
                        
                 </div>
            </div>
          
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                   <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                   </div>
              </div>
                           
  
              <div class="col-md-6 ">
                  <div class="form-group">
                   <label>Role</label>
                    <select name="role_id" class="form-control">
                      <option value="{{ $user->role->id }}">{{ $user->role->role }}</option>
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

              
            <div class="col-md-6">
              <div class="form-group">
                <label>Position</label>
               <input type="text" name="position" class="form-control" value="{{ $user->position }}">
               </div>
          </div>

           <div class="col-md-6">
              <div class="form-group">
                <label>User Image</label>
               <input type="file" name="picture" class="form-control" accept="image/*" required>
               </div>
          </div>
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success"></span>&nbsp;Save</button>
        </div>		
        </form>
        </div>
        
      </div>
    </div>
  </div>