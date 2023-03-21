<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use App\Models\Comment;
use App\Models\like;
use App\Models\playlist;
use App\Models\pieceMusical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'piecesMusicals' => pieceMusical::all(),
            'playlists' => playlist::all()->where('client_id', auth()->id()),
        ]);
    }
    public function details(pieceMusical $pieceMusical)
    {
        // dd(like::where("client_id",Auth::id())->where("piece_musical_id",$pieceMusical->id)->first()->client_id);
        
        return view('pages.details', [
            'pieceMusical' => $pieceMusical,
            'playlists' => playlist::all()->where('client_id', auth()->id()),
            'client_id' => like::where("client_id",Auth::id())->where("piece_musical_id",$pieceMusical->id)->first()?->client_id,
        ]);
    }
}
