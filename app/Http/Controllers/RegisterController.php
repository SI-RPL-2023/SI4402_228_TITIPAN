<?php

namespace App\Http\Controllers;

class RegisterController extends Controller
{
    public function index()
    {
        return view('loginregister', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('loginregister', [
            'title' => 'Register',
            'active' => 'register',
        ]);

    }
}
