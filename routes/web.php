<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminGaleryController;

Route::get('/', [PostController::class, 'index']);
Route::get('/{modelPost:slugFromTablePost}', [PostController::class, "show"]);


Route::get('/admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login', [LoginController::class, 'authenticate']);
Route::post('/admin/logout', [LoginController::class, 'logout']);




Route::resource('/admin/berita', AdminPostController::class)->middleware('auth');
Route::get('/admin/dashboard', function () {
    return view('admin.index', []);
});
Route::resource('/admin/kategori', AdminCategoryController::class)->middleware('auth');
Route::resource('/admin/profile', ProfileController::class)->middleware('auth');
Route::resource('/admin/galeri', AdminGaleryController::class)->middleware('auth');

