<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Tampilkan semua post
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Tampilkan form tambah post
    public function create()
    {
        return view('posts.create');
    }

    // Simpan data post baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($validated);
        return redirect()->route('posts.index')->with('success', 'Post berhasil disimpan!');
    }

    // Tampilkan detail post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Tampilkan form edit post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update data post
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($validated);
        return redirect()->route('posts.index')->with('success', 'Post berhasil diedit!');
    }

    // Hapus post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus!');
    }
}
