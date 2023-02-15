<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

 

    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'contact' => 'required',
            'message' => 'required',
            'email' => 'required' 
        ]);

        $contact = [
            'full_name' => $request['full_name'], 
            'email' => $request['email'],
            'contact' => $request['contact'],
            'message' => $request['message'],            
        ];

    
        Mail::to('info@womenleadership.org.za')->send(new ContactFormMail($contact));
        
        return back()->with('success', 'Your Mail has been received');
    }
}
