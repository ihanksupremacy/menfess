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


}
