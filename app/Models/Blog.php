<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
  

    protected $fillable = [
            'blog_title',
            'user_id',
            'category_id',
            'body',
            'blog_image'
    ];


    public function user(){
        return $this->belongsTo(User::class); 
    }

    public function category(){
        return $this->belongsTo(Category::class); 
    }
}

