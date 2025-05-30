<?php

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
