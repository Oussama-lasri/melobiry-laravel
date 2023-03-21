<?php

namespace App\Models;

use App\Models\Bande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MembreBande extends Model
{
    use HasFactory;

    protected $table = 'membres_bandes';
    protected $fillable = ['name','bande_id'];

    public function bande(){
        return $this->belongsTo(Bande::class , 'bande_id','id');
    }
}
