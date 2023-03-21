<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;
    protected $table = 'playlists';
    protected $fillable = ['name','client_id'];

    public function User(){
        return $this->belongsTo(Users::class,'client_id','id');
    }

    public function piecesMusicals(){
        return $this->belongsToMany(pieceMusical::class);
    }
}
