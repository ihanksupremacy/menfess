<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'isicomment' => 'required',
        ]);
    
        // Buat postingan baru
        $comment = new Comment();
        $comment->isicomment = $request->input('isicomment');
        $comment->user_id = auth()->user()->id; // Jika menggunakan autentikasi pengguna
        $comment->post_id = $request->input('post_id'); // Ubah ini sesuai dengan nama input yang sesuai
        $comment->save();
    
        // Redirect atau melakukan tindakan lain setelah penyimpanan
        // ...
    
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommentRequest $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        //
    }
}
