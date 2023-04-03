<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});

Route::get('/loginregister', function () {
    return view('loginregister');
});

Route::get('/jasapindahan', function () {
    return view('jasapindahan');
});

Route::get('/jasapengiriman', function () {
    return view('jasapengiriman');
});
