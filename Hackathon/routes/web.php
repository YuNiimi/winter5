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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
// Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'create']);
Route::post('/profile', 'App\Http\Controllers\ProfileController@create');

Route::get('/hostReservation', function () {
    return view('hostReservation');
})->name('host');

Route::get('/hostReservation','App\Http\Controllers\ReservationController@index');

Route::get('/guestReservation', function () {
    return view('guestReservation');
})->name('guest');

Route::post('/guestReserved','App\Http\Controllers\ReservationController@createGuest');

