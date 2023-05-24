<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SesiControllerAdmin extends Controller
{
    public function index()
    {
        return view('Admin.index', [
            'title' => 'Dashboard Admin',
        ]);
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter your password.',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/sesi')->withErrors('Email or password entered is incorrect')->withInput();
            }
        }

        return redirect('/sesi')->withErrors('Email or password entered is incorrect')->withInput();
    }

    // // PENGECHECKAN APAKAH EMAIL DAN PASSWORD SUDAH BENAR?
    // $infologin = [
    //     'email' => $request->email,
    //     'password' => $request->password,
    // ];

    // if (Auth::attempt($infologin)) {
    //     if (Auth::user()->role == 'admin') {
    //         return redirect('/admin/dashboard');
    //     } else {
    //         return redirect('')->withErrors('Email atau Password yang dimasukan tidak sesuai')->withInput();
    //     }

    // $credentials = $request->only('email', 'password');

    // if (Auth::attempt($credentials)) {
    //     // Jika otentikasi berhasil
    //     if (Auth::user()->role === 'admin') {
    //         // Jika peran (role) adalah admin
    //         return view('Admin.index', [
    //             'title' => 'Dashboard Admin',
    //         ])->with('success', 'Admin Login Successful');
    //     } else {
    //         // Jika peran (role) bukan admin
    //         return redirect('/')->with('success', 'Login Successful');
    //     }
    // } else {
    //     // Jika otentikasi gagal
    //     return redirect('sesi')->withErrors('Invalid email or password entered.');
    // }

}
