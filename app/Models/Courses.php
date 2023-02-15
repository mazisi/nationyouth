<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
       'course_title',
       'user_id',
       'category_id',
       'body',
       'course_image'
    ];


    public function category(){
       return $this->belongsTo(Category::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
   }
}
