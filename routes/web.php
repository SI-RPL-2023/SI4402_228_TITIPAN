<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UpdateProfileController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/sesi', [SessionController::class, 'index'])->name('login');
    Route::match (['get', 'post'], '/sesi/login', [SessionController::class, 'login'])->middleware('guest:admin');

    Route::get('/sesi/register', [SessionController::class, 'register']);
    Route::match (['get', 'post'], '/sesi/create', [SessionController::class, 'create']);
});

// ADMIN
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/sesi/logout', [SessionController::class, 'logout']);
});
// END ADMIN

// CUSTOMER
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:customer'])->group(function () {
        Route::get('/home', function () {
            return view('home', [
                "title" => "Home",
                'active' => 'Home',
            ]);
        });

        Route::prefix('profile')->group(function () {
            Route::get('/', [UpdateProfileController::class, 'profile']);
            Route::get('edit-profile', [UpdateProfileController::class, 'editprofile']);
            Route::put('update', [UpdateProfileController::class, 'updateprofile'])->name('profile.update');

            Route::get('edit-password', [UpdateProfileController::class, 'EditPassword'])->name('profile.edit-password');
            Route::put('edit-password', [UpdateProfileController::class, 'UpdatePassword']);
        });
    });

    Route::get('/sesi/logout', [SessionController::class, 'logout']);
    Route::get('/detail-pembayaran', [SessionController::class, 'DetailPembayaran']);
    Route::get('/pembayaran', [SessionController::class, 'pembayaran']);

});
// END CUSTOMER

Route::get('/landingpage', function () {
    if (auth()->user() == null) {
        return view('landingpage', [
            "title" => "Landing Page",
            'active' => 'landingpage',
        ]);
    } elseif (auth()->user()->role == 'customer') {
        return redirect('/home');

    } else {
        return redirect('/admin/dashboard');
    }
});

Route::get('/jasapindahan', function () {
    if (auth()->user() == null || auth()->user()->role == 'customer') {
        return view('jasapindahan', [
            "title" => "Jasa Pindahan",
            'active' => 'jasapindahan',
        ]);
    } else {
        return redirect('/admin/dashboard');
    }
});

Route::get('/jasapengiriman', function () {
    if (auth()->user() == null || auth()->user()->role == 'customer') {
        return view('jasapengiriman', [
            "title" => "Jasa Pengiriman",
            'active' => 'jasapengiriman',
        ]);

    } else {
        return redirect('/admin/dashboard');
    }
});

Route::get('/jasapenyimpanan', function () {
    if (auth()->user() == null || auth()->user()->role == 'customer') {
        return view('jasapenyimpanan', [
            "title" => "Jasa Penyimpanan",
            'active' => 'jasapenyimpanan',
        ]);
    } else {
        return redirect('/admin/dashboard');
    }
});

Route::get('/contact', function () {
    if (auth()->user() == null || auth()->user()->role == 'customer') {
        return view('contact', [
            "title" => "Contact",
            'active' => 'contact',
        ]);
    } else {
        return redirect('/admin/dashboard');
    }
});

Route::get('/basicplan', function () {
    if (auth()->user() == null || auth()->user()->role == 'customer') {
        return view('basicplan', [
            "title" => "Basic Plan",
            'active' => 'basicplan',
        ]);
    } else {
        return redirect('/admin/dashboard');
    }
});

Route::get('/premiumplan', function () {
    if (auth()->user() == null || auth()->user()->role == 'customer') {
        return view('premiumplan', [
            "title" => "Premium Plan",
            'active' => 'premiumplan',
        ]);
    } else {
        return redirect('/admin/dashboard');
    }
});

Route::get('/advanceplan', function () {
    if (auth()->user() == null || auth()->user()->role == 'customer') {
        return view('advanceplan', [
            "title" => "Advance Plan",
            'active' => 'advanceplan',
        ]);
    } else {
        return redirect('/admin/dashboard');
    }
});
