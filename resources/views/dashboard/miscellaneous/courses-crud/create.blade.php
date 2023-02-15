<div class="modal fade" id="create_course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title order-table-title" id="exampleModalLabel">Create Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
          {{-- class="courses" --}}
          @csrf
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                 <label >Title</label>
                  <input type="text" class="form-control" name="course_title"  placeholder="Course Title" required >
                        
                 </div>
            </div>
           
            <div class="col-md-12">
                <div class="form-group">
                  <label >Select Category</label>
                 <select class="form-control" name="category_id">
                   @foreach ($category as $category)
                   <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                   @endforeach
                   
                 </select>
                 </div>
            </div> 
            
            <div class="col-md-12">
              <div class="form-group">
                <label >Description</label>
               <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
               </div>
          </div> 

          <div class="col-md-12">
            <div class="form-group">
              <label >Image File</label><br>
             <input type="file" name="course_image" accept="image/*">
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



