<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(User $user)
    {
        $chats = Chat::all();
        $users = User::all();
        $userName = auth()->check() ? auth()->user()->username : null;
        $receiver = $user;
        
        return view('chat.index', compact('chats', 'receiver', 'userName', 'users'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required',
            'isipesan' => 'required',
        ]);

        $chat = new Chat();
        $chat->sender_id = auth()->user()->id;
        $chat->receiver_id = $request->input('receiver_id');
        $chat->isipesan = $request->input('isipesan');
        $chat->save();

        return redirect()->back();
    }
}
