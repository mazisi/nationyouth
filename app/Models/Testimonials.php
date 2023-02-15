<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'proffession',
        'user_id',
        'body',
        'testimonial_image',
    ];
    
    public function user(){
        return $this->belongsTo(User::class); 
    }
}
