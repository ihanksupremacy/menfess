<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $userName = auth()->check() ? auth()->user()->username : null;
        $keyword = $request->input('query');

        $users = User::where('name', 'LIKE', "%{$keyword}%")->get();
        $posts = Post::where('isi', 'LIKE', "%{$keyword}%")->get();

        return view('search.results', compact('users', 'posts','userName'));
    }
    
    public function index()
    {
        $userName = auth()->check() ? auth()->user()->username : null;
        return view('search.index', compact('userName'));
    }
}
