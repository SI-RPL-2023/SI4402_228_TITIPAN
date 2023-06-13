<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\SesiControllerAdmin;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TransaksiController;
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
    Route::get('/dashboard', [SesiControllerAdmin::class, 'index'])->name('admin.dashboard');

    // table customer
    Route::get('/TableCustomer', [AdminController::class, 'TableCustomer'])->name('admin.table.customer');
    Route::get('/TableCustomer/TambahCustomer', [SesiControllerAdmin::class, 'TambahCustomer'])->name('tambah-customer.customer');
    Route::match (['get', 'post'], '/TambahCustomer/Create', [SesiControllerAdmin::class, 'create'])->name('admin.create.user');
    Route::delete('/TableCustomer/{id}', [SesiControllerAdmin::class, 'destroy'])->name('customers.destroy');

    // Edit User
    Route::get('/TableCustomer/EditCustomer/{id}', [SesiControllerAdmin::class, 'EditUser'])->name('admin.edit-user');
    Route::put('/TableCustomer/EditCustomer/{id}', [SesiControllerAdmin::class, 'update'])->name('admin.proses.edit-user');
    Route::get('TableCustomer/EditCustomer/EditPassword/{id}', [SesiControllerAdmin::class, 'EditPassword'])->name('admin.edit-password.user');
    Route::put('TableCustomer/EditCustomer/EditPassword/{id}', [SesiControllerAdmin::class, 'updatePassword'])->name('admin.proses.edit-password');

    // Edit Table Pelanggan
    Route::get('/transactions', [SesiControllerAdmin::class, 'ShowTableTransaksi'])->name('transactions.index');

    // transaksi table

    Route::get('transactions/DetailTransaction/{id}', [SesiControllerAdmin::class, 'DetailTransaksi'])->name('admin.detail-transaksi');

    Route::get('/export-transaksi', [SesiControllerAdmin::class, 'exportTransaksi'])->name('export.transaksi');

    Route::put('transactions/UpdateTransaction/{id}', [SesiControllerAdmin::class, 'UpdateTransaksi'])->name('admin.update-transaksi');
    Route::delete('transactions/DeleteTransaction/{id}', [SesiControllerAdmin::class, 'DeleteTransaksi'])->name('admin.delete-transaksi');

    Route::put('/TableCustomer/EditCustomer/{id}', [SesiControllerAdmin::class, 'update'])->name('admin.proses.edit-user');

    Route::put('/transactions/{transaction}', [SesiControllerAdmin::class, 'UpdateTableTransaksi'])->name('transactions.update');
    Route::get('/bukti-pembayaran/{filename}', [SesiControllerAdmin::class, 'ShowBuktiPembayaran'])->name('bukti-pembayaran');

    // layanan
    Route::get('layanan', [SesiControllerAdmin::class, 'showLayanan'])->name('admin.show-layanan');
    Route::get('/layanan/create', [SesiControllerAdmin::class, 'createLayanan'])->name('admin.create-layanan');
    Route::post('/layanan/proses', [SesiControllerAdmin::class, 'storeLayanan'])->name('admin.store-layanan');
    Route::delete('/layanan/{id}', [SesiControllerAdmin::class, 'deleteLayanan'])->name('admin.delete-layanan');
    Route::get('/layanan/{id}/edit', [SesiControllerAdmin::class, 'editLayanan'])->name('admin.edit-layanan');
    Route::put('/layanan/{id}', [SesiControllerAdmin::class, 'updateLayanan'])->name('admin.update-layanan');

    Route::get('/sesi/logout', [SesiControllerAdmin::class, 'logout'])->name('admin.logout');

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
            Route::get('/', [UpdateProfileController::class, 'profile'])->name('profile.index');
            Route::get('edit-profile', [UpdateProfileController::class, 'editprofile']);
            Route::put('update', [UpdateProfileController::class, 'updateprofile'])->name('profile.update');

            Route::get('edit-password', [UpdateProfileController::class, 'EditPassword'])->name('profile.edit-password');
            Route::put('edit-password', [UpdateProfileController::class, 'UpdatePassword']);
        });

        // Rute untuk proses Penyimpanan
        Route::get('/detail-pembayaran-pindahan', [LayananController::class, 'showpindahan']);
        Route::post('/pilih-layanan-pindahan/konfirmasi-pesanan', [LayananController::class, 'PilihLayananPindahan'])->name('konfimasi.pesanan.pindahan');

        // Rute untuk proses Penyimpanan
        Route::get('/detail-pembayaran-penyimpanan', [LayananController::class, 'showpenyimpanan']);

        Route::post('/pilih-layanan-penyimpanan/konfirmasi-pesanan', [LayananController::class, 'PilihLayananPenyimpanan'])->name('konfimasi.pesanan.penyimpanan');

        // Rute untuk proses pengiriman
        Route::get('/pilih-layanan-pengiriman', [LayananController::class, 'showpengiriman']);

        Route::post('/pilih-layanan-pengiriman/konfirmasi-pesanan', [LayananController::class, 'PilihLayananPengiriman'])->name('konfimasi.pesanan.pengiriman');

        Route::post('/PilihLayananPengiriman/ProsesBayarPengiriman', [TransaksiController::class, 'processPembayaranPengiriman'])->name('process.pembayaran.pengiriman');

        // CANCEL ORDER
        Route::put('/cancel-order/{id}', [TransaksiController::class, 'cancelOrder'])->name('cancel.order');

        Route::get('/sesi/logout', [SessionController::class, 'logout']);
    });
});
// END CUSTOMER

Route::get('/', function () {
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
})->name('landingpage');

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
