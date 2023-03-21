<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\piecemusicalPlaylist;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{


    public function showPlaylist(playlist $playlist)
    {

        return view('pages.playlist', [
            'playlists' => playlist::all()->where('client_id', auth()->id()),
            'playlist' => $playlist,
        ]);
    }
    public function store(Request $request)
    {
        if (Auth::check()) {
            $formFields = $request->validate([
                'name' => 'required',
            ]);
            $formFields['client_id'] = Auth::id();
            playlist::create($formFields);
            return redirect('/')->with('message', 'Your playlist has been created');
        } else {
            return redirect('/')->with('message', 'login first');
        }
    }

    public function MusicsPlaylist(Request $request)
    {
        // dd(piecemusicalPlaylist::where('piece_musical_id',$request->piece_musical_id)->where('playlist_id',$request->playlist_id)->exists());
        if (Auth::check()) {
            if (!piecemusicalPlaylist::where('piece_musical_id', $request->piece_musical_id)->where('playlist_id', $request->playlist_id)->exists()) {
                $formFields = $request->validate([
                    'playlist_id' => 'required',
                ]);
                $formFields['piece_musical_id'] = $request->piece_musical_id;
                piecemusicalPlaylist::create($formFields);
                return back()->with('message', 'added');
            } else {
                return back()->with('message', 'this song already exist in playlist');
            }
        } else {
            return back()->with('message', 'login first');
        }
    }
}
