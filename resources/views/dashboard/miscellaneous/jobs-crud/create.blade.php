<div class="modal fade" id="create_vacancy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title order-table-title" id="exampleModalLabel">Create Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="vacancy" enctype="mutlipart/form-data">
          @csrf
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                 <label >Job Title</label>
                  <input type="text" class="form-control" name="job_title"  placeholder="Job Title" required >
                        
                 </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
               <label >Deadline</label>
                <input type="date" class="form-control" min="{{ date('Y-m-d') }}" name="deadline" required >
                      
               </div>
          </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label >Description</label>
                 <textarea name="body" class="form-control" required cols="30" rows="10"></textarea>
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

