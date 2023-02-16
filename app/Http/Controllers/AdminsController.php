<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailCreatedUser;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware(['auth']);
    }


    public function index(){
        $roles = Roles::all();
        $users = User::where('id','!=',auth()->user()->id)->paginate(10);      
    return view('dashboard.admins', compact('roles','users'));
       
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
       $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email'=>'required|email',
            'position'=>'required|max:255',
            'user_image' => 'nullable|mimes:jpeg,png,jpg',
            'role_id'=>'required',
            
        ]);

        $data= [
            "first_name" => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'position' => $request->position,
            'password' => $request->input('password'),
           ];

        //I mailed before inserting to avoid sending hashed password!!!
       // Mail::to($request->email)->send(new MailCreatedUser($data));
           $file = $request->file('user_image');
        //get image name
        $filename = $file->getClientOriginalName();
        //move image 
        $file->move('user_pics', $filename);
     //$request->user_image->store('user_pics', 'public');
     User::create([
        "first_name" => $request->first_name,
        'last_name' => $request->last_name,
        'position' => $request->position,
        'role_id'=> $request->role_id,
        'email' => $request->email,
        'password' => Hash::make($request->input('password')),
        'picture' => $filename
       ]);
       
 return back()->with('success', 'User created successfully');
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email'=>'required',
            'position' => 'required|max:255',
            'role_id'=>'required',
            'picture' => 'nullable|mimes:jpeg,png,jpg',
        ]); 
        $img = ['picture' => $request->file('picture')->hashName()];
     
        $request->picture->store('user_pics', 'public'); 

    User::whereId($id)->update(array_merge($data,$img));
    return back()->with('success', 'User successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'User deleted successfully');
    }
}
