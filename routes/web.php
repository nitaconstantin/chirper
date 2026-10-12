<?php

use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ChirpController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::post('/chirps', [ChirpController::class, 'store']);
    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
    Route::put('/chirps/{chirp}',[ChirpController::class, 'update']);
    Route::delete('chirps/{chirp}', [ChirpController::class, 'destroy']);
});



Route::resource('/chirps', ChirpController::class)
    ->only(['store', 'edit', 'update', 'destroy']);


Route::view('/register', 'auth.register')
    ->name('register')
    ->middleware('guest');

Route::post('/register', Register::class)
    ->name('register')
    ->middleware('guest');

Route::get('/logout', Logout::class)
    ->name('logout')
    ->middleware('auth');    


