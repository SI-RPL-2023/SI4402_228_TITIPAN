<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdateProfileController extends Controller
{
    public function profile()
    {
        return view('/profile.index', [
            "title" => "Profile",
            'active' => 'profile',
        ]);
    }

    public function editprofile()
    {
        return view('/profile.edit-profile', [
            'title' => 'Edit Profile',
            'active' => 'editprofile',
        ]);
    }

    public function updateprofile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $data = DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
            ]);

        return back()->with('success', 'Profile Anda Berhasil Terupdate');

    }

    public function EditPassword()
    {
        return view('profile.update-password', [
            'title' => 'Update-Password',
            'active' => 'editprofile',
        ]);
    }

    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'Password Anda Berhasil Terupdate');
        }
        throw ValidationException::withMessages([
            'current_password' => 'Password Lama anda tidak sama dengan data kami, coba lagi',
        ]);

    }
}
