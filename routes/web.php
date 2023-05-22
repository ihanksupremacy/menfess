<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use App\Models\user;


use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\likeController;

Route::get('/', [App\Http\Controllers\Postcontroller::class, 'index']);
Route::get('/post/{id}', [App\Http\Controllers\Postcontroller::class, 'show']);
Route::post('/posting', [App\Http\Controllers\Postcontroller::class, 'store'])->name('post.store');



Route::get('profile/{user:username}',[App\Http\Controllers\usercontroller::class, 'show']);
//Route::get('/login',[App\Http\Controllers\loginController::class, 'index']);
route::get('login/',[LoginController::class, 'index'])->middleware('guest');
route::post('login/',[LoginController::class, 'authenticate']);
route::post('logout/',[LoginController::class, 'logout']);
Route::post('/like/{id}',[likeController::class, 'like'])->name('like');


route::get('register/',[registerController::class, 'index']);
route::post('register/',[RegisterController::class, 'store']);

// route::get('login/',function(){
//     return view('index',[
//     ]);
// });

