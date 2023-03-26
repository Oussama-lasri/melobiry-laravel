<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bande extends Model
{
    use HasFactory;
    protected $table = 'bandes';
    protected $fillable = ['name','image','pays','creation_date'];

    public function members(){
        return $this->hasMany(MembreBande::class,'bande_id','id');
    }
    public function piecesMusicals(){
        return $this->hasMany(pieceMusical::class,'band_id','id');
    }
}
