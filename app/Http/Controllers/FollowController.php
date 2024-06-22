<?php

namespace App\Http\Controllers;
use App\Models\Follow;
use App\Models\User;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function store(Request $request)
{
    $follow = new Follow();
    $follow->user_id = auth()->user()->id;
    $follow->follower_id = $request->input('user_id');
    $follow->save();

    return redirect()->back();
}
public function destroy($user)
{
    $followerId = auth()->user()->id;

    $follow = Follow::where('user_id', $followerId)
                    ->where('follower_id', $user)
                    ->first();

    if ($follow) {
        $follow->delete();
    }


    return redirect()->back();}
    public function index()
    {
        $userName = auth()->user()->username;
        $username = auth()->user();
        $followerIds = $username->followings->pluck('id');
        $followers = User::whereIn('id', $followerIds)->get();
    
        return view('chat.chat', compact('followers','userName'));
    }

    public function follower($username)
    {
        $userName = auth()->user()->username;
        $user = User::where('username', $username)->firstOrFail();
        $followerIds = $user->followers->pluck('id');
        $followers = User::whereIn('id', $followerIds)->get();
    
        return view('following.index', compact('followers','userName'));
    }
    public function following($username)
    {
        $userName = auth()->user()->username;
        $user = User::where('username', $username)->firstOrFail();
        $followerIds = $user->followings->pluck('id');
        $followers = User::whereIn('id', $followerIds)->get();
    
        return view('following.following', compact('followers','userName'));
    }
    
    



}
