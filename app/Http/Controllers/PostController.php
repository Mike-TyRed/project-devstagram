<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware(['auth'])->except(['show', 'index']);
    }
    public function index(User $user)
    {
        $posts = Post::where('user_id', $user->id)->paginate(4);
        return view('dashboard', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        //Opcion 1
        // Post::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image' => $request->image,
        //     'user_id' => auth()->user()->id,
        // ]);

        //Opcion 2
        // $post = new Post();
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->image = $request->image;
        // $post->user_id = auth()->user()->id;
        // $post->save();

        $request->user()->posts()->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('posts.index', auth()->user()->username)->with('success', 'Post created successfully!');
    }

    public function show(User $user, Post $post)
    {
        //Mostrar un post
        return view('posts.show', [
            'post' => $post,
            'user' => $user,
        ]);
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //eliminar un post opcion 1
        // if($post->user_id === auth()->user()->id){
        //     dd('Usuario correcto');
        // }else{
        //     dd('Usuario incorrecto');
        // }

        //Opcion 2
        $this->authorize('delete', $post);
        $post->delete();

        //Eliminar imagen
        $img_path = public_path('uploads/'.$post->image);
        if(File::exists($img_path)){
            unlink($img_path);
        }
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
