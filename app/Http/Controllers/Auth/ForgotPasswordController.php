<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Carbon\Carbon; 


class ForgotPasswordController extends Controller{
 

 public function password_change(Request $request){
    $user = User::where('email', '=', $request->input('email'))->first();
    dd(Hash::check('INPUT PASSWORD', $user->password));

      return back()->with('message', 'Password updated successfully');
  }
}