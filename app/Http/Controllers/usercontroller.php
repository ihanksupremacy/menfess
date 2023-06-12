<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class usercontroller extends Controller
{
    public function show($username){
        $userName = auth()->check() ? auth()->user()->username : null;
        $name = auth()->check() ? auth()->user()->name : null;
        $user = User::where('username', $username)->firstOrFail();
        $isSelf = auth()->check() && auth()->user()->username == $user->username;
        return view('profil.index', compact('user', 'userName', 'name','isSelf'));
    }
    public function edit()
    {
        $user = Auth::user();
        $userName = auth()->check() ? auth()->user()->username : null;
        return view('profil.edit', compact('user', 'userName'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'aboutme' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Memperbarui nama dan tentang saya
        $user->name = $request->input('name');
        $user->aboutme = $request->input('aboutme');
    
        // Memperbarui password jika diisi
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
    
        // Memperbarui foto profil jika diunggah
  if ($request->hasFile('foto')) {
    $oldFoto = $user->foto;
    if ($oldFoto) {
        Storage::delete($oldFoto); // Menghapus foto lama
    }

    $foto = $request->file('foto');
    $imageName = time() . '.' . $foto->getClientOriginalExtension();
    $foto->move(public_path('profile_pictures'), $imageName);
    
    $user->foto = 'profile_pictures/' . $imageName;
}

        $user->save();
    
        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}
