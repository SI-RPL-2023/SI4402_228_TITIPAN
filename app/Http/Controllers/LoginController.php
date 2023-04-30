<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginregister', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }
    public function showLoginForm()
    {
        return view('loginregister', [
            'title' => 'Login',
            'active' => 'login',
        ]);

    }
}
