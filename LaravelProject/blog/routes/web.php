<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::resource('posts', PostController::class);
// Route::get('posts/create', [PostController::class,'create']);
// Route::get('posts/index', [PostController::class,'index']);
// Route::get('posts/show', [PostController::class,'show']);

Route::get('/', function () {
    return view('welcome');
});
