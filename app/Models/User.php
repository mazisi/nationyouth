<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'role_id',
        'position',
        'password',
        'picture'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jobs(){
        return $this->hasMany(Job::class); 
    }


    public function user_courses(){
        return $this->hasMany(Courses::class); 
    }

    public function user_blog(){
        return $this->hasMany(Blog::class); 
    }


    public function user_testimonials(){
        return $this->hasMany(Testimonials::class); 
    }

    public function role(){
        return $this->belongsTo(Roles::class); 
    }

    public function isAdmin(){
        
        if($this->role->role == 'Admin'){
            return true;
        } 

        return false;
    }


}
