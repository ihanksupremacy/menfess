<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelikeRequest;
use App\Http\Requests\UpdatelikeRequest;
use App\Models\like;

class LikeController extends Controller
{
    public function like($id)
{
    $likable_type = request('likable_type');
    $likable_id = $id;
    $user_id = auth()->id();

    $like = Like::where('likable_type', $likable_type)
        ->where('likable_id', $likable_id)
        ->where('user_id', $user_id)
        ->first();

    if (!$like) {
        $like = new Like;
        $like->likable_type = $likable_type;
        $like->likable_id = $likable_id;
        $like->user_id = $user_id;
        $like->save();
    } else {
        $like->delete();
    }

    return redirect()->back();
}

}
