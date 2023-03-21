<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pieceMusicalPlaylist extends Model
{
    use HasFactory;

    protected $fillable = ['piece_musical_id','playlist_id'];
    protected $table = 'piece_musical_playlist';
}
