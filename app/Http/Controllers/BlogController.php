<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Jobs;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $blogs = Blog::latest()->paginate(2);
        $jobs = Jobs::latest()->paginate(3);
       return view('blog',compact('blogs', 'jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $blog = Blog::with('user','category')->latest()->paginate(10);//prevention of n+1 problem
       
        return view('dashboard.blog', compact('category', 'blog'));
    }


    public function show($id) {
        $jobs = Jobs::latest()->paginate(3);
        $blog = Blog::findOrFail($id);
        return view('blog_details', compact('blog','jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
     if ($request->hasFile('blog_image')) {
    
               $request->file('blog_image')->store('user_pics', 'public');
                $blog = new Blog([
                    'blog_title' => $request->input('blog_title'),
                    'body' => $request->input('body'),
                    'category_id' => $request->input('blog_category'),
                    'user_id'=>$request->user()->id ,
                    "blog_image" => $request->blog_image->hashName(),               
                    
                ]);  
                
                if($blog->save()){
                    return back()->with('success', 'Blog successfully created');
                }else{
                    return back()->with('error', 'An error occured');
                                     
                }
               
            }
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        if ($request->hasFile('blog_image')) {
            
                $data = $request->validate([
                    'blog_title' => 'required',
                    'category_id' => 'required',
                    'body'=>'required',                    
                ]);

                
                               
                $file = $request->file('blog_image');
                //get image name
                $filename = $file->getClientOriginalName();
                //move image 
                $file->move('storage/app/public/blog', $filename);
               $img = ['blog_image' => $filename];
               Blog::whereId($id)->update(array_merge($img,$data));

        }else{

            $data = $request->validate([
                'blog_title' => 'required',
                'category_id' => 'required',
                'body'=>'required',                    
            ]);

            Blog::whereId($id)->update($data);
        }
     return back()->with('success', 'Blog successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return back()->with('success', 'Blog successfully deleted');
    }


 
    
}
