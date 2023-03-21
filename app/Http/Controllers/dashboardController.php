<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Comment;
use App\Models\Artistes;
use App\Models\pieceMusical;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class dashboardController extends Controller
{
    public function dashboard()
    {
        // dd(Users::first()->where(('id'),auth()->id())->name);
        return view('admin.dashboard', [
            'User' => Users::where(('id'), auth()->id())->firstOrFail(),
            'artistes' => Artistes::Paginate(6),
            'piecesMusicals' => pieceMusical::Paginate(6),
            'comments' => Comment::Paginate(6),
        ]);
    }
    public function users()
    {
        return view('admin.users.show', [
            'User' => Users::where(('id'), auth()->id())->firstOrFail(),
            'users' => Users::all(),
        ]);
    }
}
