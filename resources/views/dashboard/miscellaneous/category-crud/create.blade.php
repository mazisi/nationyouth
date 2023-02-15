<div class="modal fade" id="create_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Create Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="category" >
            @csrf
              <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                   <label >Category Name</label>
                   <input type="text" class="form-control" name="category_name"  placeholder="Category Name" required >
                          
                   </div>
              </div>
          
            </div>
              
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="saveBtn"></span>&nbsp;Create</button>
        </div>		
        </form>
        </div>
        
      </div>
    </div>
  </div>
