<div class="modal fade" id="edit_course{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  action="{{ route('programs.update',$course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                   <label >Course Title</label>
                    <input type="text" class="form-control" name="course_title"  value="{{ $course->course_title }}"  >
                          
                   </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                 <label >Category</label>
                 <select class="form-control" name="category_id">
                   <option value="{{ $course->category->id }}">{{ $course->category->category_name }}</option>
                  @foreach ($category as $cate)
                  <option value="{{ $cate->id }}">{{ $cate->category_name }}</option>
                  @endforeach
                

                </select>
                  
                 </div>
            </div>
          

           <div class="col-md-12">
                <div class="form-group">
                 <textarea name="body" class="form-control" cols="30" rows="10">{{ $course->body }}</textarea>
                 </div>
            </div>   
            <div class="col-md-12">
              <div class="form-group">
               <label for="pic">Picture</label><br>
               <input type="file" name="course_image">
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