<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostinganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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



//route auth
Route::prefix('auth')->group(function () {
    Route::get('/signin', [AuthController::class, 'showSignin'])->name('login');
    Route::post('/signin', [AuthController::class, 'signin']);
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup']);
    Route::get('/reset-password', [AuthController::class, 'showReset']);
    Route::post('/reset-password', [AuthController::class, 'reset']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//route dashboard
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
});

//route profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'detail'])->name('detail');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/reset-password', [AuthController::class, 'showManualReset'])->name('manual.reset-password');
    Route::post('/reset-password', [AuthController::class, 'manualReset']);
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
