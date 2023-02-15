<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Courses;

class ProgramsController extends Controller{
    public function index() {
        $course = Courses::all();
        return view('programs', compact('course'));
     }

     public function create() {
         $category = Category::all();
         $courses = Courses::with('user','category')->latest()->paginate(10);
        return view('dashboard/courses', compact('courses','category'));
     }

     public function store(Request $request) {

           
          
            if ($request->hasFile('course_image')) {

                $request->validate([
                    'course_image' => 'mimes:jpeg,png,jpg',
                    'course_title' => 'required',
                    'body' => 'required'  
                ]);
    
                $request->course_image->store('course_pics', 'public');
                               
                $course = new Courses([
                    "course_title" => $request->course_title,
                    "body" => $request->body,
                    'category_id'=>$request->input('category_id'),
                    'user_id'=>$request->user()->id,
                    "course_image" => $request->course_image->hashName(),
                ]);
    
                $course->save();
                
               
            }else{
                $request->validate([
                    'course_title' => 'required',
                    'body' => 'required'
                ]);           
    
                Courses::create([
                  
                    "course_title" => $request->course_title,
                    "body" => $request->body,
                    'category_id'=>$request->input('category_id'),
                    'user_id'=>$request->user()->id,
           ]);  
               
                   
            }
            return back()->with('success', 'Course successfully created');
    }

    public function update(Request $request, $id) {
   
       if ($request->hasFile('course_image')) {
            
        $data = $request->validate([
            'course_title'=> 'required',
            'category_id'=> 'required',
            'course_image' => 'mimes:jpeg,png,jpg',
            'body'=> 'required',
            
        ]);

        $img = ['course_image' => $request->file('course_image')->hashName()];
     
        $request->course_image->store('course_pics', 'public');    
        // had to merge array coz the image name and the name in database were different
            Courses::whereId($id)->update(array_merge($data,$img));
        }else{

            $data = $request->validate([
                'course_title'=> 'required',
                'category_id'=> 'required',
                'body'=> 'required',
                
            ]);

            Courses::whereId($id)->update($data);
        }
        return back()->with('success', 'Course successfully updated');
    }

    public function destroy($id) {
        
        $course = Courses::findOrFail($id);
        $course->delete();
    return back()->with('success', 'Course deleted successfully');
    }

    public function destroy_all() {
        Courses::truncate();
        return back()->with('success', 'All Courses deleted successfully. ');
    }
}
