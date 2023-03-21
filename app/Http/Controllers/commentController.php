<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Comment;
use App\Models\pieceMusical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    public function show()
    {
        return view('admin.comments.show', ['comments' => Comment::all(),'User' => Users::where(('id'), auth()->id())->firstOrFail(),]);
    }


    public function store(Request $request)
    {
        if (Auth::check()) {
            $formFields = [
                'comment_body' => $request->comment_body,
                'client_id' => Auth::user()->id,
                'pieceMusical_id' => $request->piece,
            ];
            Comment::create($formFields);
            return back()->with('message', 'your comment has been sent');
        } else {
            return redirect('/')->with('message', 'you are not login');
        }
    }

    public function delete(Comment $comment)
    {
        // dd($comment);
        $comment->delete();
        return redirect('admin/comments/show')->with('message', 'Comment deleted');
    }
}
