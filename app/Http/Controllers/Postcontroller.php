<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\comment;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $userName = auth()->check() ? auth()->user()->username : null;
        $name = auth()->check() ? auth()->user()->name : null;
        return view('beranda.index', compact('posts', 'userName', 'name'));
    }
    public function trending()
{
    $posts = Post::withCount('likes')->orderByDesc('likes_count')->get();
    $userName = auth()->check() ? auth()->user()->username : null;
    return view('beranda.trending', compact('posts','userName'));
}


public function show($id)
{
    $post = Post::findOrFail($id);
    $comments = Comment::where('post_id', $id)->get();
    $count = Comment::where('post_id', $id)->count();
    $userName = auth()->check() ? auth()->user()->username : null;
    return view('/postingan/index', compact('post', 'comments','count','userName'));
}


public function create()
{
    return view('post.create');
}

public function store(Request $request)
{
    // Validasi input jika diperlukan
    $request->validate([
        'isi' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Buat postingan baru
    $post = new Post();
    $post->isi = $request->input('isi');
    $post->user_id = auth()->user()->id; // Jika menggunakan autentikasi pengguna

    // Upload gambar jika ada
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $post->image = 'images/' . $imageName; // Ubah path untuk menyimpan path relatif gambar
    }

    $post->save();

    // Redirect atau melakukan tindakan lain setelah penyimpanan
    // ...

    return redirect()->back();
}
public function search(Request $request)
{
    $searchTerm = $request->input('q');
    $posts = Post::where('title', 'like', '%' . $searchTerm . '%')
        ->orWhere('content', 'like', '%' . $searchTerm . '%')
        ->get();
    return view('posts.search', compact('posts'));
}
// }





}
