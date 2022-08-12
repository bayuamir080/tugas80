<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Controllers;
use App\Http\Controllers\BlogController;

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
Route::get('/blog', 'App\Http\Controllerd\BlogController@index');
//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index.php'])->name('blog');
