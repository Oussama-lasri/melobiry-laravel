<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = ['pieceMusical_id','client_id','comment_body'];

    public function pieceMusical(){
        return $this->belongsTo(pieceMusical::class,'pieceMusical_id','id');
    }

    public function User(){
        return $this->belongsTo(Users::class,'client_id','id');
    }

    // public function CommentUserPiece($id_piece){
    //    return User::select('users.*', 'Comments.comment_body')
    //         ->join('Comments', 'Comments.client_id', '=', 'users.id')
    //         ->join('piece_musicals', 'Comments.pieceMusical_id', '=', $id_piece)
    //         ->get();
    // }
}
