<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateProfileController extends Controller
{
    public function update(Request $request){
      
    if ($request->hasFile('file')) {
            
           
                       
        $file = $request->file('file');
        //get image name
        $filename = $file->getClientOriginalName();
        //move image 
        $file->move('storage/app/public/user_pics', $filename);
        $id= Auth()->user()->id;
       User::whereId($id)->update(['picture' => $filename]);
       return back()->with('success','Profile picture updated successfully');
}
}
}
