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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/can_post', [\App\Http\Controllers\PostController::class, 'indexCanPost'])->name('addProduct')->middleware('can_post', 'auth');
Route::post('/can_post', [\App\Http\Controllers\PostController::class, 'store'])->middleware('can_post', 'auth');
