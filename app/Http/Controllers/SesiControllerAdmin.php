<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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

        // Lakukan apa yang Anda inginkan dengan total user

        return view('Admin.index', compact('customerCount', 'adminCount', 'active', 'title'));
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

}
