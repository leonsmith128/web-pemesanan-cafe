<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/makanan', function () {
    return view('makanan');
})->name('makanan');

Route::get('/minuman', function () {
    return view('minuman');
})->name('minuman');

Route::get('/about', function () {
    return view('about');
})->name('about');

/*Route get*/

Route::get('/makanan', [MakananController::class, 'showMakanan']);

Route::get('/minuman', [MinumanController::class, 'showMinuman']);


/*Route post*/

Route::post('/customers', [CustomerController::class, 'store'])->name('customer');