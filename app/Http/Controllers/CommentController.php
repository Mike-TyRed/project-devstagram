<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request, User $user, Post $post)
    {
        //validar
        $this->validate($request, [
            'comment' => 'required|max:255'
        ]);

        //guardar
        Comment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'comment' => $request->comment
        ]);

        //redireccionar
        return back()->with('success', 'Comment created successfully!');
    }
    public function show(Comment $comment)
    {
        //
    }
    public function edit(Comment $comment)
    {
        //
    }
    public function update(Request $request, Comment $comment)
    {
        //
    }
    public function destroy(Comment $comment)
    {
        //
    }
}
