<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/home/{nama}', 'home')->name('home');
});
