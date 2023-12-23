<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Models\Post;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::middleware(['auth'])->group(function () {

// route siswa
Route::get('/siswa', [SiswaController::class, 'index']);

// if click submit ke..route/siswa/create
Route::post('/siswa/create', [SiswaController::class, 'create']);

// Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::put('/siswa/{id}/edit', [SiswaController::class, 'update']);
Route::get('/siswa/{id}/delete', [SiswaController::class, 'delete']);
Route::get('/siswa/{id}/profile', [SiswaController::class, 'profile']);

//route blog
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}/blog', [PostController::class, 'blog']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::put('/posts/{id}/edit', [PostController::class, 'update']);
Route::get('/posts/{id}/delete', [PostController::class, 'delete']);
// });


// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
