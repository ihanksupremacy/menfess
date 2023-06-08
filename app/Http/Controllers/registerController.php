<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('register.index', [  ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|max:255|min:3',
            'aboutme' => 'nullable|string' // Allow aboutme to be nullable or a string
        ]);
    
        // Set a default value for aboutme if it is empty
        if (empty($validatedData['aboutme'])) {
            $validatedData['aboutme'] = ''; // Set your desired default value here
        }
    
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login');
    }
    
}
