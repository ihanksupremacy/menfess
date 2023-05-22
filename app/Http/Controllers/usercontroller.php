<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    public function show($username){
        $userName = auth()->check() ? auth()->user()->username : null;
        $name = auth()->check() ? auth()->user()->name : null;
        $user = User::where('username', $username)->firstOrFail();
        $isSelf = auth()->check() && auth()->user()->username == $user->username;
        return view('profil.index', compact('user', 'userName', 'name','isSelf'));
    }
}
