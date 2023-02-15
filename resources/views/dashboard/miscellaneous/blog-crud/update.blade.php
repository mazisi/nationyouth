<div class="modal fade" id="edit_blog{{ $blogs->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('blogs.update',$blogs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
            <div class="form-group col-sm-6">
              <label >Blog Title</label>
              <input type="text" name="blog_title" class="form-control" value="{{ $blogs->blog_title }}">
            </div>
  
            <div class="form-group col-sm-6">
              <label >Category</label>
              <select name="category_id" class="form-control" required>
                <option value="{{ $blogs->category->id }} ">{{ $blogs->category->category_name }} </option>
                @foreach ($category as $cat)
                     <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                     @endforeach
              </select>
            </div>
            <div class="form-group col-sm-12">
              <label >Description</label>
              <textarea name="body"  cols="30" rows="10" class="form-control" required>{{ $blogs->body }}</textarea>
            </div>
            <div class="form-group col-sm-6">
              <label >Image</label>
              <input type="file" class="form-control" name="blog_image" accept="image/*" >
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