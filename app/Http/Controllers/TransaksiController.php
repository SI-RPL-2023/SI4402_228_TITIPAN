<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Layanan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            $path = $file->storeAs('images/BuktiPembayaran', $filename, 'public');
        } else {
            // Jika tidak ada file bukti pembayaran yang diunggah, berikan pesan error atau lakukan tindakan lainnya sesuai kebutuhan Anda.
            return redirect()->back()->with('error', 'File bukti pembayaran tidak ditemukan.');
        }

        // Ambil ID pengguna berdasarkan nama pengguna
        $namaUser = $request->input('nama_user');
        $user = User::where('name', $namaUser)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Pengguna dengan nama tersebut tidak ditemukan.');
        }
        $idUser = $user->id;

        // Ambil ID layanan berdasarkan nama layanan dan jenis layanan
        $namaLayanan = $request->input('nama_layanan');
        $jenisLayanan = $request->input('jenis_layanan');
        $layanan = Layanan::where('nama_layanan', $namaLayanan)->where('jenis_layanan', $jenisLayanan)->first();
        if (!$layanan) {
            return redirect()->back()->with('error', 'Layanan dengan nama dan jenis tersebut tidak ditemukan.');
        }
        $idLayanan = $layanan->id;

        $nomorTransaksi = Str::random(8);

        // Buat transaksi baru
        $transaksi = new Transaksi();
        $transaksi->id_user = $idUser;
        $transaksi->id_layanan = $idLayanan;
        $transaksi->nomor_transaksi = $nomorTransaksi; // Set nilai nomor transaksi
        $transaksi->tanggal_pembayaran = now()->toDateString();
        $transaksi->path_bukti_pembayaran = $path;
        $transaksi->nama_user = $request->input('nama_user');
        $transaksi->alamat = $request->input('alamat');
        $transaksi->jenis_pembayaran = $request->input('jenis_pembayaran');
        $transaksi->status = 'pending';
        $transaksi->save();

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('profile.index')->with('success', 'Pembayaran berhasil diajukan. Menunggu konfirmasi.');
    }

    public function cancelOrder($id)
    {
        $transaction = Transaksi::findOrFail($id);
        $transaction->status = 'cancelled';
        $transaction->save();

        // Optionally, you can provide a success message or redirect the user to a specific page
        return redirect()->back()->with('success', 'Order has been cancelled successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
