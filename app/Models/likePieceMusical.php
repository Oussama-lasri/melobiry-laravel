<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likePieceMusical extends Model
{
    use HasFactory;
    protected $table = "like_piece_musical";
    protected $fillable = ['piece_musical_id','client_id'];
}
