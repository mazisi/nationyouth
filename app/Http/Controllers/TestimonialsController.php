<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $testimonial = Testimonials::latest()->paginate(10);
        return view('dashboard.testimonial', compact('testimonial'));
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
    
       
            if ($request->hasFile('testimonial_image')) {

                $request->validate([
                    'testimonial_image' => 'mimes:jpeg,png,jpg',
                    'author' => 'required',
                    'proffession' => 'required',
                    'body'=>'required'  
                ]);
    
                
                $request->testimonial_image->store('testimonials', 'public');
    
                $testimonials = new Testimonials([
                  
                    "testimonial_image" => $request->testimonial_image->hashName(),
                    "author" => $request->author,
                    "proffession" => $request->proffession,
                    'body' => $request->body,
                    'user_id'=>$request->user()->id                  
                    
                ]);  
                
                if($testimonials->save()){
                    return back()->with('success', 'Testimonial successfully created');
                }else{
                    return back()->with('error', 'An error occured');
                                     
                }
               
            }else{
                $request->validate([
                    'author' => 'required',
                    'proffession' => 'required',
                    'body'=>'required'  
                ]);           
    
                Testimonials::create([
                  
                    "author" => $request->author,
                    'proffession' => $request->body,
                    'body' => $request->body,
                    'user_id'=>$request->user()->id                  
                    
                ]);  
                return back()->with('success', 'Testimonial successfully created');
                   
            }

   
          
    }

  
    public function update(Request $request, $id){
        if ($request->hasFile('testimonial_image')) {
            
                $data = $request->validate([
                    'author' => 'required',
                    'proffession' => 'required',
                    'body'=>'required',
                    
                ]);

                $testimonial = Testimonials::findOrFail($id);
                Storage::delete($testimonial->testimonial_image);
                
                $file = $request->file('testimonial_image');
                //get image name
                $filename = $file->getClientOriginalName();
                //move image 
                $file->move('storage/app/public/testimonials', $filename);
               //store image image
               $img = ['testimonial_image' => $filename];
               Testimonials::whereId($id)->update(array_merge($img,$data));

        }else{

            $data = $request->validate([
                'author' => 'required',
                'proffession' => 'required',
                'body'=>'required' 
            ]);

            Testimonials::whereId($id)->update($data);
        }
     return back()->with('success', 'Testimonial updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        $testimonial->delete();

        return back()->with('success', 'Testimonial deleted');
    }

    public function destroy_all() {
        Testimonials::truncate();
       return back()->with('success', 'All Testimonials successfully deleted. ');
    }
}
