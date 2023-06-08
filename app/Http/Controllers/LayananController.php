<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    public function showpindahan()
    {
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'pindahan')
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->get();

        return view('/detail-pembayaran-pindahan', [
            'title' => 'pindahan',
            'layanan' => $layanan,
        ]);
    }

    public function PilihLayananPindahan(Request $request)
    {
        // Mengambil nilai yang dipilih dari form
        $jenisLayananTerpilih = $request->input('jenis_layanan');

        // Menyimpan nilai terpilih dalam session
        $request->session()->put('jenis_layanan', $jenisLayananTerpilih);

        // Mendapatkan layanan yang sesuai dengan jenis layanan terpilih dari database
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'pindahan')
            ->where('jenis_layanan', $jenisLayananTerpilih)
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->first();

        if ($layanan) {
            // Layanan ditemukan, lanjutkan proses
            return view('pembayaran-penyimpanan')
                ->with('layanan', $layanan)
                ->with('jenisLayananTerpilih', $jenisLayananTerpilih);
        } else {
            // Layanan tidak ditemukan, tangani sesuai kebutuhan Anda
            // Misalnya, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->back()->with('error', 'Layanan tidak tersedia');
        }

    }

    public function showpenyimpanan()
    {
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'penyimpanan')
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->get();

        return view('detail-pembayaran-penyimpanan', [
            'title' => 'pindahan',
            'layanan' => $layanan,
        ]);

    }
    public function PilihLayananPenyimpanan(Request $request)
    {
        // Mengambil nilai yang dipilih dari form
        $jenisLayananTerpilih = $request->input('jenis_layanan');

        // Menyimpan nilai terpilih dalam session
        $request->session()->put('jenis_layanan', $jenisLayananTerpilih);

        // Mendapatkan layanan yang sesuai dengan jenis layanan terpilih dari database
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'penyimpanan')
            ->where('jenis_layanan', $jenisLayananTerpilih)
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->first();

        if ($layanan) {
            // Layanan ditemukan, lanjutkan proses
            return view('pembayaran-penyimpanan')
                ->with('layanan', $layanan)
                ->with('jenisLayananTerpilih', $jenisLayananTerpilih);
        } else {
            // Layanan tidak ditemukan, tangani sesuai kebutuhan Anda
            // Misalnya, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->back()->with('error', 'Layanan tidak tersedia');
        }

    }

    public function showpengiriman()
    {
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'pengiriman')
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->get();

        return view('detail-pembayaran-pengiriman', [
            'title' => 'pindahan',
            'layanan' => $layanan,
        ]);
    }

    public function PilihLayananPengiriman(Request $request)
    {
        // Mengambil nilai yang dipilih dari form
        $jenisLayananTerpilih = $request->input('jenis_layanan');

        // Menyimpan nilai terpilih dalam session
        $request->session()->put('jenis_layanan', $jenisLayananTerpilih);

        // Mendapatkan layanan yang sesuai dengan jenis layanan terpilih dari database
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'pengiriman')
            ->where('jenis_layanan', $jenisLayananTerpilih)
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->first();

        if ($layanan) {
            // Layanan ditemukan, lanjutkan proses
            return view('pembayaran-pengiriman')
                ->with('layanan', $layanan)
                ->with('jenisLayananTerpilih', $jenisLayananTerpilih);
        } else {
            // Layanan tidak ditemukan, tangani sesuai kebutuhan Anda
            // Misalnya, tampilkan pesan error atau redirect ke halaman lain
            return redirect()->back()->with('error', 'Layanan tidak tersedia');
        }

    }

    public function processPaymentPengiriman(Request $request)
    {
        // Validasi data formulir jika diperlukan
        $validatedData = $request->validate([
            'jenis_layanan' => 'required',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Proses pembayaran pengiriman
        // ...

        // Tampilkan pesan sukses atau lakukan tindakan lainnya

        return redirect('/detail-pembayaran-pengiriman')->with('success', 'Pembayaran pengiriman berhasil');
    }

    public function pembayaranpindahan()
    {
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'pindahan')
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->get();

        return view('/pembayaran-pindahan', [
            'title' => 'pindahan',
            'layanan' => $layanan,
        ]);
    }

    public function pembayaranpengiriman()
    {
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'pengiriman')
            ->select('id', 'nama_layanan', 'jenis_layanan', 'harga')
            ->get();

        return view('detail-pembayaran-pengiriman', [
            'title' => 'pengiriman',
            'layanan' => $layanan,
        ]);
    }

    public function pembayaranpenyimpanan()
    {
        $layanan = DB::table('layanan')
            ->where('nama_layanan', 'penyimpanan')
            ->select('nama_layanan', 'jenis_layanan', 'harga')
            ->get();

        return view('/pembayaran-penyimpanan', [
            'title' => 'penyimpanan',
            'layanan' => $layanan,
        ]);
    }

}
