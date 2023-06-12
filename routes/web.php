<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use App\Models\user;


use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\likeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\followController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\usercontroller;

Route::get('/profile/edit', [usercontroller::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [usercontroller::class, 'update'])->name('profile.update');


Route::get('/', [App\Http\Controllers\Postcontroller::class, 'index']);
Route::get('/post/{id}', [App\Http\Controllers\Postcontroller::class, 'show']);
Route::post('/posting', [App\Http\Controllers\Postcontroller::class, 'store'])->name('post.store');

Route::get('/tes', function () {
    return view('tes');
});

Route::get('profile/{user:username}',[usercontroller::class, 'show']);


Route::get('/chats', [followController::class, 'index']);




//Route::get('/login',[App\Http\Controllers\loginController::class, 'index']);
route::get('login/',[LoginController::class, 'index'])->middleware('guest');
route::post('login/',[LoginController::class, 'authenticate']);
route::post('logout/',[LoginController::class, 'logout']);
Route::post('/like/{id}',[likeController::class, 'like'])->name('like');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/search/results', [App\Http\Controllers\SearchController::class, 'search'])->name('search.results');



Route::get('/chats/{user:username}', [ChatController::class, 'index'])->name('chats.index');
Route::post('/chats', [ChatController::class, 'store'])->name('chats.store');

route::get('register/',[registerController::class, 'index']);
route::post('register/',[RegisterController::class, 'store']);

// route::get('login/',function(){
//     return view('index',[
//     ]);
// });

// routes/web.php



Route::post('/postingcoment', [App\Http\Controllers\Commentcontroller::class, 'store'])->name('comment.store');
Route::post('/follow', [App\Http\Controllers\followcontroller::class, 'store'])->name('follow.store');
Route::delete('/follow/{user}', [App\Http\Controllers\followController::class, 'destroy'])->name('follow.destroy');


