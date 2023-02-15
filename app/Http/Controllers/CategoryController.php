<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories = Category::latest()->paginate(10);
        return view('dashboard.category', compact('categories'));
    }

    

    public function store(Request $request) {
     
        $request->validate([
           'category_name' => 'required'        
           
       ]);
           
           $category = new Category([
               "category_name" => $request->category_name
           ]);

           if($category->save()){
               echo "Category successfully created";
           }else{
              echo "An error occured";
           }
          
   }

   
    public function update(Request $request, $id) {
        $data= $request->validate([
            'category_name' => 'required'            
        ]);

        Category::whereId($id)->update($data);
        return back()->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Category successfully deleted');
    }

    public function destroy_all() {
        Category::truncate();
        return back()->with('success', 'All Category deleted successfully.');
    }
}
