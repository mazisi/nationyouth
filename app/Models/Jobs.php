<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = [
       'job_title',
       'deadline',
       'user_id',
       'body',
       'job_image'
    
    ];

    public function user(){
        return $this->belongsTo(User::class); 
    }
}
