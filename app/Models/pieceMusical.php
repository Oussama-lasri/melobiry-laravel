<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of pieceMusical
 */
class pieceMusical extends Model
{
    use HasFactory;

    protected $table = 'piece_musicals';
    protected $fillable = ['titreMusic', 'artiste_id','band_id' ,'image', 'music', 'writers', 'words', 'langue', 'duration', 'release_date','status'];

    public function artiste(){
        return $this->belongsTo(Artistes::class,'artiste_id','id');
    }
    public function band(){
        return $this->belongsTo(Bande::class,'bande_id','id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'pieceMusical_id','id');
    }
    public function likes(){
        return $this->hasMany(like::class);
    }
    public function playlist(){
        return $this->belongsToMany(playlist::class);
    }
}
