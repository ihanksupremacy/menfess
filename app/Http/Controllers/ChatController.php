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
        
        $receiver = $user;
        
        return view('chat.index', compact('chats', 'receiver', 'users'));
    }
    
    public function store(Request $request)
{
    $chats = new chat();
    $chats->sender_id = auth()->user()->id;
    $chats->receiver_id = $request->input('receiver_id');
    $chats->isipesan = $request->input('isipesan');
    $chats->save();

    return redirect()->back();
}
}
