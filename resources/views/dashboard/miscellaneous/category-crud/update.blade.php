<div class="modal fade" id="edit_category{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                   <label >Category Name</label>
                   <input type="text" class="form-control" name="category_name"  value="{{ $category->category_name }}" required >
                          
                   </div>
              </div>
          
            </div>
              
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="saveBtn"></span>&nbsp;Save</button>
        </div>		
        </form>		
        </form>
        </div>
        
      </div>
    </div>
  </div>