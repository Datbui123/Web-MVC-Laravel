<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirplaneController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [AirplaneController::class, 'index'])->name('home');

// Route::post('/airplanes', [AirplaneController::class, 'index'])->name('search');

Route::resource('airplanes', AirplaneController::class);
Route::resource('bookings', BookingController::class);
Route::resource('flights', FlightController::class);
Route::resource('passengers', PassengerController::class);
