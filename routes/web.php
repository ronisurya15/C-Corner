<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostinganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('postingan')->group(function () {
    Route::get('list-data', [PostinganController::class, 'index']);
    Route::get('create-data', [PostinganController::class, 'create']);
});
Route::prefix('category')->group(function () {
    Route::get('tampil', [CategoryController::class, 'ListCategory']);
    Route::get('tambah', [CategoryController::class, 'TambahCategory']);
    Route::get('edit', [CategoryController::class, 'EditCategory']);
});
Route::prefix('posts')->group(function () {
    Route::get('tampil', [PostsController::class, 'ListPosts']);
    Route::get('tambah', [PostsController::class, 'TambahPosts']);
    Route::get('edit', [PostsController::class, 'EditPosts']);
});
Route::prefix('forum')->group(function () {
    Route::get('tampil', [ForumController::class, 'ListForum']);
    Route::get('tambah', [ForumController::class, 'TambahForum']);
    Route::get('edit', [ForumController::class, 'EditForum']);
});
