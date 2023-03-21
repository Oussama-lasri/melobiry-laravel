<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;   

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['name','email','password','role'];

    public function comment(){
        return $this->hasMany(Comment::class,'client_id','id');
    }
    public function playlists(){
        return $this->hasMany(playlist::class,'client_id','id');
    }

    public function likes(){
        return $this->belongsToMany(like::class);
    }
}
