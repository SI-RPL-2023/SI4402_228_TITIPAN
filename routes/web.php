<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('landingpage', [
        "title" => "Home",
        'active' => 'landingpage',
    ]);
});

Route::get('/jasapindahan', function () {
    return view('jasapindahan', [
        "title" => "Jasa Pindahan",
        'active' => 'jasapindahan',
    ]);
});

Route::get('/jasapengiriman', function () {
    return view('jasapengiriman', [
        "title" => "Jasa Pengiriman",
        'active' => 'jasapengiriman',
    ]);
});

Route::get('/jasapenyimpanan', function () {
    return view('jasapenyimpanan', [
        "title" => "Jasa Penyimpanan",
        'active' => 'jasapenyimpanan',
    ]);
});

Route::get('/profile', function () {
    return view('profile/index', [
        "title" => "Profile",
        'active' => 'profile/index',
    ]);
});


// Route::get('/login', [LoginController::class, 'index']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
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
