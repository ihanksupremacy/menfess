<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $users = User::where('name', 'LIKE', "%{$keyword}%")->get();
        $posts = Post::where('title', 'LIKE', "%{$keyword}%")->get();

        return view('search', compact('users', 'posts'));
    }
    public function index()
{
    return view('search.index');
}
}
