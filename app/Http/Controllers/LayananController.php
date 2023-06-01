<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    function showpindahan()
    {
        $layanan = DB::table('layanan')
        ->where('nama_layanan', 'pindahan')
        ->select('nama_layanan', 'jenis_layanan', 'harga')
        ->get();

        return view ('/detail-pembayaran-pindahan', [
            'title' => 'pindahan',
            'layanan' => $layanan
        ]);
    }

    function showpenyimpanan()
    {
        $layanan = DB::table('layanan')
        ->where('nama_layanan', 'penyimpanan')
        ->select('nama_layanan', 'jenis_layanan', 'harga')
        ->get();

        return view ('/detail-pembayaran-penyimpanan', [
            'title' => 'pindahan',
            'layanan' => $layanan
        ]);
    }

    function showpengiriman()
    {
        $layanan = DB::table('layanan')
        ->where('nama_layanan', 'pengiriman')
        ->select('nama_layanan', 'jenis_layanan', 'harga')
        ->get();

        return view ('/detail-pembayaran-penyimpanan', [
            'title' => 'pindahan',
            'layanan' => $layanan
        ]);
    }
    function pembayaranpindahan()
    {
        $layanan = DB::table('layanan')
        ->where('nama_layanan', 'pindahan')
        ->select('nama_layanan', 'jenis_layanan', 'harga')
        ->get();

        return view ('/pembayaran-pindahan', [
            'title' => 'pindahan',
            'layanan' => $layanan
        ]);
    }
    function pembayaranpengiriman()
    {
        $layanan = DB::table('layanan')
        ->where('nama_layanan', 'pengiriman')
        ->select('nama_layanan', 'jenis_layanan', 'harga')
        ->get();

        return view ('/pembayaran-pengiriman', [
            'title' => 'pengiriman',
            'layanan' => $layanan
        ]);
    }
    function pembayaranpenyimpanan()
    {
        $layanan = DB::table('layanan')
        ->where('nama_layanan', 'penyimpanan')
        ->select('nama_layanan', 'jenis_layanan', 'harga')
        ->get();

        return view ('/pembayaran-penyimpanan', [
            'title' => 'penyimpanan',
            'layanan' => $layanan
        ]);
    }


}

