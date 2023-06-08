<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SesiControllerAdmin extends Controller
{
    public function index()
    {
        $customerCount = User::where('role', 'customer')->count();
        $adminCount = User::where('role', 'admin')->count();
        $title = 'Dashboard Admin';
        $active = 'dashboardadmin';

        $transaksiCount = Transaksi::count();
        $layananCount = Layanan::count();

        // Lakukan apa yang Anda inginkan dengan total user

        return view('Admin.index', compact('customerCount', 'adminCount', 'layananCount', 'transaksiCount', 'active', 'title'));
    }

    public function TambahCustomer()
    {
        return view('Admin.tambah-customer', [
            'title' => 'Tambah Customer',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'address' => 'required',
            'date_birth' => 'required',
            'role' => 'required',
            'phone_number' => 'required',
        ], [
            'name.required' => 'Please enter your Name.',
            'email.required' => 'Please enter your Email Address.',
            'email.email' => 'Please enter a valid email address..',
            'email.unique' => 'Email address has already been taken, please choose another email address.',
            'password.min' => 'Please enter a password with at least 6 characters.',
            'password.required' => 'Please enter your Password.',
            'address.required' => 'Please enter your Address.',
            'date_birth.required' => 'Please enter your Date Birth.',
            'role.required' => 'Please select your Role.',
            'phone_number.required' => 'Please enter your Phone Number.',
        ]);
        // If validation passes, create a new user with the submitted data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'date_birth' => $request->date_birth,
            'role' => $request->role,
            'phone_number' => $request->phone_number,
        ];
        User::create($data);

        // Setelah data tersimpan, lakukan tindakan sesuai kebutuhan
        // if ($request->has('check_me_out')) {
        // Lakukan sesuatu jika opsi "Check Me Out" dicentang
        // }

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'User berhasil ditambahkan.');

    }

    public function destroy($id)
    {
        $customer = User::find($id);

        if ($customer) {
            $customer->delete();

            return response()->json(['success' => true, 'message' => 'Customer deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Customer not found']);
    }

    public function EditUser($id)
    {
        $customer = User::find($id);

        return view('Admin.edit-user', compact('customer'), [
            'title' => 'Tambah Customer',
        ]);

    }

    public function EditPassword($id)
    {

        $customer = User::find($id);

        return view('Admin.ubah-password', compact('customer'), [
            'title' => 'Tambah Customer',
        ]);

        return view('profile.update-password', [
            'title' => 'Update-Password',
            'active' => 'editprofile',
        ]);
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan oleh form
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'date_birth' => 'required|date',
            'phone_number' => 'required|numeric',
            'role' => 'required|in:customer,admin',
        ]);

        // Temukan pengguna berdasarkan ID
        $customer = User::findOrFail($id);

        // Update data pengguna
        $customer->name = $validatedData['name'];
        $customer->email = $validatedData['email'];
        $customer->address = $validatedData['address'];
        $customer->date_birth = $validatedData['date_birth'];
        $customer->phone_number = $validatedData['phone_number'];
        $customer->role = $validatedData['role'];

        // Simpan perubahan
        $customer->save();

        // Redirect ke halaman yang diinginkan atau tampilkan pesan sukses
        return redirect()->route('admin.table.customer')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::findOrFail($id);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            return back()->with('success', 'Password User berhasil diperbarui.');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password lama tidak sesuai.',
        ]);

    }

    public function ShowTableTransaksi()
    {
        $transactions = Transaksi::join('users', 'transaksi.id_user', '=', 'users.id')
            ->join('layanan', 'transaksi.id_layanan', '=', 'layanan.id')
            ->select('transaksi.*', 'users.name', 'users.phone_number', 'layanan.nama_layanan', 'layanan.harga')
            ->get();

        return view('Admin.table-transaksi', compact('transactions'), [
            'title' => 'Table Transaksi Customer',
        ]);
    }

    public function UpdateTableTransaksi(Request $request, Transaksi $transaction)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        $transaction->status = $request->status;
        $transaction->save();

        return redirect()->route('transactions.index')->with('success', 'Status transaksi berhasil diperbarui.');
    }

    public function ShowBuktiPembayaran($filename)
    {
        $path = public_path('images/BuktiPembayaran/' . $filename);
        // Periksa apakah file ada di storage
        if (file_exists($path)) {
            // Jika file ada, tampilkan file bukti pembayaran
            return response()->file($path);

        }

        // Jika file tidak ada, kembalikan respons 404 (Not Found)
        abort(404);
    }

    public function DetailTransaksi($id)
    {
        $transaction = Transaksi::join('users', 'transaksi.id_user', '=', 'users.id')
            ->join('layanan', 'transaksi.id_layanan', '=', 'layanan.id')
            ->select('transaksi.*', 'users.name', 'users.email', 'users.phone_number', 'layanan.nama_layanan', 'layanan.harga')
            ->find($id);

        if (!$transaction) {
            abort(404);
        }

        return view('Admin.detail-transaksi', compact('transaction'), [
            'title' => 'Detail Transaksi Customer',
        ]);
    }

    public function UpdateTransaksi(Request $request, $id)
    {
        $transaction = Transaksi::findOrFail($id);

        // Update the transaction status
        $transaction->status = $request->input('status');
        $transaction->save();

        return redirect()->back()->with('success', 'Transaction status updated successfully.');
    }

    public function DeleteTransaksi($id)
    {
        $transaction = Transaksi::findOrFail($id);
        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaction deleted successfully.',
        ]);
    }

    public function showLayanan()
    {
        $layanan = Layanan::all();

        return view('admin.table-layanan', compact('layanan'), [
            'title' => 'Table Layanan',
        ]);
    }

    public function createLayanan()
    {
        return view('admin.tambah-layanan', [
            'title' => 'Tambah Layanan',
        ]);
    }

    public function storeLayanan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required',
            'jenis_layanan' => 'required|in:basic,premium,advance',
            'harga' => 'required|numeric',
        ]);

        Layanan::create($validatedData);

        return redirect()->route('admin.show-layanan')->with('success', 'Layanan berhasil ditambahkan');
    }

    public function logout()
    {
        Auth::logout();

        // Redirect ke halaman login atau halaman lain yang Anda inginkan setelah logout
        return redirect()->route('landingpage')->with('success', 'Succesfully Logout You Account');
    }

}
