<div class="modal fade" id="edit_testimonial{{ $testimonials->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit Testimonial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('appreciation.update',$testimonials->id) }}" method="POST" class="update_testimonial" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                   <label >Author</label>
                    <input type="text" class="form-control" name="author"  value="{{ $testimonials->author }}"  >
                          
                   </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                 <label >Proffession</label>
                  <input type="text" class="form-control" name="proffession"  value="{{ $testimonials->proffession }}"  >
                        
                 </div>
            </div>
          
              <div class="col-md-12">
                  <div class="form-group">
                   <textarea name="body" class="form-control" cols="30" rows="10">{{ $testimonials->body }}</textarea>
                   </div>
              </div>              
  
              <div class="col-md-6">
                  <div class="form-group">
                   <label>Picture</label>
                    <input type="file" name="testimonial_image" class="form-control" accept="image/*">
                   </div>
              </div>
              </div>
              
          <div class="modal-footer">
            
          <button type="submit" class="btn btn-primary"></span>&nbsp;Save</button>
        </div>		
        </form>
        </div>
        
      </div>
    </div>
  </div>