<?php

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

Route::get('/welocome', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogsController::class, 'index'])->name('blog');
Route::get('/blog/tambah', [App\Http\Controllers\BlogsController::class, 'create'])->name('blog.tambah');
Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogsController::class, 'edit'])->name('blog.edit');
Route::get('/blog/hapus/{id}', [App\Http\Controllers\BlogsController::class, 'destroy'])->name('blog.hapus');
Route::PUT('/blog/store', [App\Http\Controllers\BlogsController::class, 'store'])->name('blog.store');
Route::PUT('/blog/update/{id}', [App\Http\Controllers\BlogsController::class, 'update'])->name('blog.update');
