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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', [App\Http\Controllers\HomeController::class, 'index'])->name('post');
Route::get('/table', [App\Http\Controllers\HomeController::class, 'tableBlog'])->name('table');
Route::POST('/save-blog', [App\Http\Controllers\HomeController::class, 'save_blog'])->name('save-blog');
