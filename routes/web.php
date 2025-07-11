<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'index']);

//route auth
Route::prefix('auth')->group(function () {
    Route::get('/signin', [AuthController::class, 'showSignin'])->name('login');
    Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup'])->name('postSignup');
    Route::get('/reset-password', [AuthController::class, 'showReset']);
    Route::post('/reset-password', [AuthController::class, 'reset']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('home');

// With Login
Route::middleware('auth')->group(function () {
    // Route profile
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'detail'])->name('detail');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/reset-password', [AuthController::class, 'showReset'])->name('manual.reset-password');
        Route::post('/reset-password', [AuthController::class, 'manualReset']);
    });

    Route::prefix('category')->group(function () {
        Route::get('tampil', [CategoryController::class, 'ListCategory'])->name('category.index');
        Route::get('tambah', [CategoryController::class, 'TambahCategory'])->name('category.create');
        Route::get('edit/{id}', [CategoryController::class, 'EditCategory'])->name('category.edit');
        Route::post('store', [CategoryController::class, 'store'])->name('category.store');
        Route::post('{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    Route::prefix('forum')->group(function () {
        Route::get('tampil', [ForumController::class, 'ListForum'])->name('forum.index');
        Route::get('tambah', [ForumController::class, 'TambahForum'])->name('forum.create');
        Route::post('store', [ForumController::class, 'store'])->name('forum.store');
        Route::get('edit/{id}', [ForumController::class, 'EditForum'])->name('forum.edit');
        Route::post('{id}', [ForumController::class, 'update'])->name('forum.update');
        Route::delete('{id}', [ForumController::class, 'destroy'])->name('forum.destroy');
    });

    Route::prefix('posts')->group(function () {
        Route::get('tampil', [PostsController::class, 'ListPosts'])->name('posts.index');
        Route::get('tambah', [PostsController::class, 'TambahPosts'])->name('posts.create');
        Route::get('edit/{id}', [PostsController::class, 'EditPosts'])->name('posts.edit');
        Route::post('store', [PostsController::class, 'store'])->name('posts.store');
        Route::post('{id}', [PostsController::class, 'update'])->name('posts.update');
        Route::delete('{id}', [PostsController::class, 'destroy'])->name('posts.destroy');
    });
});
