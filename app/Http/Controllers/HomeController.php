<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $testimonial = Testimonials::all();
        $blogs = Blog::latest()->paginate(2);
        return view('index', compact('testimonial','blogs'));
    }
}
