<?php

namespace App\Http\Controllers;

use App\Models\like;
use App\Models\Users;
use App\Models\Artistes;
use App\Models\pieceMusical;
use Illuminate\Http\Request;
use App\Models\likePieceMusical;
use Illuminate\Support\Facades\Auth;

class PiecesMusicalsController extends Controller
{
    public function showPiecesMusicals()
    {
        return view('admin.piecesMusicals.show', [
            'piecesMusicals' => pieceMusical::all(),
            'User' => Users::where(('id'), auth()->id())->firstOrFail(),
        ]);
    }

    public function create()
    {
        $artistes = Artistes::all();
        return view('admin.piecesMusicals.create', ['artistes'=>Artistes::all(),'User' => Users::where(('id'), auth()->id())->firstOrFail(),]);
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'titreMusic' => 'required',
            'artiste_id' => 'required',
            'image' => 'required',
            'music' => 'required',
            'words' => 'required',
            'writers' => 'required',
            'langue' => 'required',
            'duration' => 'required',
            'release_date' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('musical_piece_image', 'public');
        }
        if ($request->hasFile('music')) {
            $formFields['music'] = $request->file('music')->store('music', 'public');
        }

        pieceMusical::create($formFields);
        return back()->with('message', 'Musical piece created successfully');
    }


    public function edit(pieceMusical $pieceMusical)
    {
        $artistes = Artistes::all();
        return view('admin.piecesMusicals.edit', [
            'pieceMusical' => $pieceMusical,
            'artistes' => $artistes,
            'User'=>Users::where(('id'),auth()->id())->firstOrFail(),
        ]);
    }

    public function update(pieceMusical $pieceMusical, Request $request)
    {
        $formFields = $request->validate([
            'titreMusic' => 'required',
            'artiste_id' => 'required',
            'words' => 'required',
            'writers' => 'required',
            'langue' => 'required',
            'duration' => 'required',
            'release_date' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('musical_piece_image', 'public');
        } else {
            $formFields['image'] = $pieceMusical->image;
        }
        if ($request->hasFile('music')) {
            $formFields['music'] = $request->file('music')->store('music', 'public');
        } else {
            $formFields['music'] = $pieceMusical->music;
        }
        // dd($request);
        $pieceMusical->update($formFields);
        return redirect('admin/piecesMusicals')->with('message', 'piece Musical updated');
    }

    public function like(pieceMusical $pieceMusical)
    {
        $formFields = [
            'piece_musical_id' => $pieceMusical->id,
            'client_id' => Auth::id(),
        ];
        like::create($formFields);
        return back()->with('message', 'liked');
    }
    public function unlike(pieceMusical $pieceMusical)
    {
        like::where('piece_musical_id', $pieceMusical->id)->where("client_id", Auth::id())->delete();
        return back()->with('message', 'unliked');
    }

    public function archive(pieceMusical $pieceMusical){


        if($pieceMusical->status == '1'){
            $pieceMusical->update([
                'status' => '0' ,
            ]);
            return back()->with('message','archived');
        };


        if($pieceMusical->status == '0'){
            $pieceMusical->update([
                'status' => '1',
            ]);
            return back()->with('message','not archived');
        }
    }
}
