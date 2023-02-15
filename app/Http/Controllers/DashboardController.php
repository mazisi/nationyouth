<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jobs;
use App\Models\Courses;
use App\Models\Blog;

class DashboardController extends Controller{

    public function __construct()
    {
       $this->middleware(['auth']);
    }
    public function index()
    {
        $vac = Jobs::all();
        $blo = Blog::all();
        $cou = Courses::all();
        $user = User::all();
        
        return view('dashboard.index', compact('vac','blo','cou','user'));
    }

    public function update_profile(Request $request)
    {
    
     $data = $request->validate([
         'first_name'=> 'required',
         'last_name'=> 'required',
         'email'=> 'required',       
         
     ]);
      $id = $request->input('id');
     
     User::whereId($id)->update($data);
     return back()->with('completed', 'Profile updated');
    }
}
