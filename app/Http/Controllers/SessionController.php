<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function index()
    {
        return view('/loginregister', [
            'title' => 'Login & Register',
        ]);
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Please enter your email address.',
            'password.required' => 'Please enter your password.',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard')->with('success', 'Selamat Datang Kembali Admin ' . Auth::user()->name);
            } elseif (Auth::user()->role === 'customer') {
                return redirect('/home')->with('success', Auth::user()->name . ' Berhasil Login');
            } else {
                return redirect()->intended('/loginregister')->withErrors('Invalid email or password entered.');
            }
        } else {
            return redirect('sesi')->withErrors('Invalid email or password entered.');
        }

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // if (Auth::attempt($infologin)) {
        //     // Kalau Otentikasi Sukses

        //     return redirect('/')->with('success', Auth::user()->name . ' Berhasil Login');
        // } else {
        //     // kalau otentikasi gagal
        //     // return "gagal";
        //     return redirect('sesi')->withErrors('Invalid email or password entered.');
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Succesfully Logout You Account');
    }

    public function register()
    {
        return view('/loginregister', [
            'title' => 'Login & Register',
        ]);

    }
    public function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'address' => 'required',
            'date_birth' => 'required',
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
            'phone_number.required' => 'Please enter your Phone Number.',
        ]);
// If validation passes, create a new user with the submitted data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'date_birth' => $request->date_birth,
            'phone_number' => $request->phone_number,
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            // Kalau Otentikasi Sukses
            return redirect('/home')->with('success', Auth::user()->name . ' Berhasil Login');
        } else {
            // kalau otentikasi gagal
            // return "gagal";
            return redirect('sesi')->withErrors('Invalid email or password entered.');
        }

        return 123;
    }

    public function Pembayaran(Request $request)
    {
            return view('/pembayaran', [
            'title' => 'Pembayaran',
        ]);
    }

    public function DetailPembayaran()
    {
        return view('/detail-pembayaran', [
            'title' => 'Detail Pembayaran',
        ]);
    }
}
