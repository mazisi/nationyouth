<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicants;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;

class ApplicationsController extends Controller{
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
                 
            if ($request->hasFile('cv')) {
                 $request->validate([
                    'full_name' => 'required',
                    'email' => 'required',
                    'position'=>'required',
                    'message'=>'required',
                    'cv' => 'required|mimetypes:application/pdf|max:5000',        
                    
                ]);
                    
    
           $request->cv->store('CVs', 'public');
    
               
            $app = new Applicants([
                "full_name" => $request->full_name,
                'email' => $request->email,
                'position' => $request->position,
                'message'=>$request->message,
                'cv' => $request->file('cv')->store('CVs', 'public')
            ]);
                
               $app->save();
               Mail::to('jobplacement@womenleadership.org.za')->send(new ApplicationMail($app));

               return back()->with('success', 'You have successfully applied. We will be back to as soon as possible.');
               
            }
      
    }

}
