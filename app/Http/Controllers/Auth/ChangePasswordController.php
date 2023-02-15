<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB; 
use Carbon\Carbon; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function store(Request $request) {
        $email = $request->input('email');
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $password_confirm = $request->input('confirm_password');
        $id = $request->input('id');
   
            $user = User::where('email', '=', $email)->first();
            
            if(Hash::check($old_password, $user->password)){

                if($new_password === $password_confirm){


                   User::where('email', $user->email)->update(['password' => Hash::make($request->input('new_password'))]);


                    return back()->with('success', 'Password updated successfully');
                }else{
                    return back()->with('success', 'Password don`t match');
                }               
          
            }else{
                return back()->with('error', 'Old Password incorrect');
            }
        
              
          }
    
}
