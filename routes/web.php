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

Route::get('/jasapenyimpanan', function () {
    return view('jasapenyimpanan');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/basicplan', function () {
    return view('basicplan');
});

Route::get('/premiumplan', function () {
    return view('premiumplan');
});

Route::get('/advanceplan', function () {
    return view('advanceplan');
});