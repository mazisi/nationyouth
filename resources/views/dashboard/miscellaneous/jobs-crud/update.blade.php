<div class="modal fade" id="edit_vacancy{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="update_vacancy" action="{{ route('vacancies.update',$job->id) }}" method="POST" enctype="mutlipart/form-data">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                   <label >Job Title</label>
                    <input type="text" class="form-control" name="job_title"  value="{{ $job->job_title }}"  >
                          
                   </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                 <label >Deadline</label>
                  <input type="date" class="form-control" name="deadline" value="{{ $job->deadline }}" >
                  
                 </div>
            </div>
              <div class="col-md-12">
                  <div class="form-group">
                   <textarea name="body" class="form-control" cols="30" rows="10">{{ $job->body }}</textarea>
                   </div>
              </div>              
  
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary" ></span>&nbsp;Save</button>
        </div>		
        </form>
        </div>
        
      </div>
    </div>
  </div>