<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
Route::resource('categories', CategoryController::class);
// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/create', [CategoryController::class, 'create']);
// Route::post('/categories', [CategoryController::class, 'store']);
// Route::get('/categories/{category}', [CategoryController::class, 'show']);
// Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
// Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
// Route::put('/categories/{category}', [CategoryController::class, 'update']);


Route::get('/', function () {
    return view('welcome');
});
