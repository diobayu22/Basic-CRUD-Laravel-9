<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::all();
        // $users = user::all();
        return view('posts.index', compact((['posts'])));
    }

    public function create()
    {

        return view('posts.create');

        // return $request->all();
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        Post::create($request->except(['_token', 'submit']));
        return redirect('/siswa');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }


    public function update($id, Request $request)
    {
        $post = Post::find($id);
        // dd($request->all());
        $post->update($request->all());

        return redirect('/posts');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete($post);
        return redirect('/posts')->with('sukses', 'data berhasil di hapus');
    }

    public function blog($id)
    {
        $post = Post::find($id);
        return view('posts.blog', ['post' => $post]);
    }
}
