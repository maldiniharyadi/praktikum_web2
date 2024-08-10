<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
})->name('loginPage');

Route::controller(HomeController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout/user', 'logout')->name('logout');
    Route::get('/mahasiswa/home', 'mahasiswaHome')->name('mahasiswaHome');
});

Route::controller(MahasiswaController::class)->prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', 'mahasiswa')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/edit/{id}', 'update')->name('update');
    Route::get('/{id}/show', 'show')->name('show');
    Route::delete('/delete/{id}', 'delete')->name('delete');
    Route::delete('/search/data', 'search')->name('search');
    Route::delete('/print/data/mahasiswa', 'print')->name('print');
});
