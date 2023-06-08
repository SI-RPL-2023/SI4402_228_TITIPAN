<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

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

    public function processPembayaranPengiriman(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_user' => 'required',
            'alamat' => 'required',
            'jenis_layanan' => 'required',
            'nama_layanan' => 'required',
            'harga' => 'required',
            'jenis_pembayaran' => 'required',
            'bukti_pembayaran' => 'required|file|mimes:png,jpeg,jpg',
        ]);

        // Simpan bukti pembayaran ke storage
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('/Users/imammuklas/Documents/LaravelApplication/SI4402_228_TITIPAN/public/images/BuktiPembayaran', $filename);
        } else {
            // Jika tidak ada file bukti pembayaran yang diunggah, berikan pesan error atau lakukan tindakan lainnya sesuai kebutuhan Anda.
            return redirect()->back()->with('error', 'File bukti pembayaran tidak ditemukan.');
        }

        // Buat transaksi baru
        $transaksi = new Transaksi();
        $transaksi->id_user = $request->input('id_user');
        $transaksi->id_layanan = $request->input('id_layanan');
        $transaksi->tanggal_pembayaran = now()->toDateString();
        $transaksi->path_bukti_pembayaran = $path;
        $transaksi->nama_user = $request->input('nama_user');
        $transaksi->alamat = $request->input('alamat');
        $transaksi->jenis_pembayaran = $request->input('jenis_pembayaran');
        $transaksi->status = 'pending';
        $transaksi->save();

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->back()->with('success', 'Pembayaran berhasil diajukan. Menunggu konfirmasi.');
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
