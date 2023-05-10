<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
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
// Route::get('/register', [RegisterController::class, 'index']);
// Route::get('/sesi/login', [SessionController::class, 'login']);

Route::middleware(['guest'])->group(function () {
    Route::get('/sesi', [SessionController::class, 'index'])->name('login');
    Route::match (['get', 'post'], '/sesi/login', [SessionController::class, 'login']);

    Route::get('/sesi/register', [SessionController::class, 'register']);
    Route::match (['get', 'post'], '/sesi/create', [SessionController::class, 'create']);
});

Route::get('/home', function () {
    return redirect('/');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [SessionController::class, 'profile']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/sesi/logout', [SessionController::class, 'logout']);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        'active' => 'contact',
    ]);
});

Route::get('/basicplan', function () {
    return view('basicplan', [
        "title" => "Basic Plan",
        'active' => 'basicplan',
    ]);
});

Route::get('/premiumplan', function () {
    return view('premiumplan', [
        "title" => "Premium Plan",
        'active' => 'premiumplan',
    ]);
});

Route::get('/advanceplan', function () {
    return view('advanceplan', [
        "title" => "Advance Plan",
        'active' => 'advanceplan',
    ]);
});
