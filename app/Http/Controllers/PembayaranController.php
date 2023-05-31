<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PembayaranController extends Controller
{
    public function index()
    {
        // Kode untuk menampilkan halaman index pembayaran
        return view('/pembayaran', [
            'title' => 'Pembayaran',
        ]);
    }

    public function create()
    {
        // Kode untuk menampilkan halaman form pembayaran
        return view('/pembayaran', [
            'title' => 'Pembayaran',
        ]);
    }

    public function store(Request $request)
    {
        // Kode untuk memproses data pembayaran yang dikirim melalui form
        DB::table('pembayaran')->where('id', $request->id)->update([
            'pembayaran'=> $request->pembayaran,
        ]);
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'prov'=>'required',
            'kab'=>'required',
            'kode'=>'required',
            'jenis'=>'required',
            'pembayaran'=>'required',
        ]);
        $data = [
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'prov'=>$request-> prov,
            'kab'=>$request->kab,
            'kode'=>$request->kode,
            'jenis'=>$request->jenis,
            'pembayaran'=>$request->pembayaran,
        ];
        Pembayaran::create($data);
        return back()->with('success', 'Terimakasih sudah percaya kepada kami!');
    }

    public function show($id)
    {
        // Kode untuk menampilkan detail pembayaran dengan ID tertentu
    }

    public function edit($id)
    {
        // Kode untuk menampilkan halaman form edit pembayaran dengan ID tertentu
    }

    public function update(Request $request, $id)
    {
        // Kode untuk memproses data pembayaran yang diubah melalui form edit
    }

    public function destroy($id)
    {
        // Kode untuk menghapus pembayaran dengan ID tertentu
    }
}

