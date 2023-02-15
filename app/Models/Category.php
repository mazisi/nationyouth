<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;
use App\Models\Blog;



class Category extends Model
{
    use HasFactory;

    protected $fillable= [
        'category_name'
    ];


    public function courses(){
       return $this->hasMany(Courses::class);
    }


    public function blog(){
        return $this->hasMany(Blog::class);
     }
}
