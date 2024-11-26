<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/makanan', function () {
    return view('makanan');
});

Route::get('/minuman', function () {
    return view('minuman');
});

Route::get('/about', function () {
    return view('about');
});

/*Route post*/

Route::post('/customers', [CustomerController::class, 'store'])->name('customer');