<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Post $post)
    {
        //Hacer likes
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);
        return back();
    }

    public function show(Like $like)
    {
        //
    }

    public function edit(Like $like)
    {
        //
    }
    public function update(Request $request, Like $like)
    {
        //
    }

    public function destroy(Request $request, Post $post)
    {
        //Quitar likes
        $request->user()->likes()->where('post_id', $post->id)->delete();
        return back();
    }
}
