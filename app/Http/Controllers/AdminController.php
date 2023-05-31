<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    // public function dashboard()
    // {
    //     $title = 'Dashboard Admin';
    //     $active = 'dashboard';

    //     return ViewFacade::make('Admin.index', compact('title', 'active'));
    // }

    public function TableCustomer()
    {
        $title = 'Table Customer';
        $active = 'tablecustomer';

        $customers = User::where('role', 'customer')
            ->orWhere('role', 'admin')
            ->get();

        return view('Admin.table-customer', compact('title', 'active', 'customers'));

    }
}
