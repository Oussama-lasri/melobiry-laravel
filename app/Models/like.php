<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;
    protected $table = 'likes';

    protected $fillable = ['piece_musical_id','client_id'];
    public function pieceMusical(){
        return $this->belongsTo(pieceMusical::class);
    }
}
