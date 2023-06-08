<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi'; // Nama tabel yang terkait dengan model

    protected $fillable = [
        'id_user',
        'id_layanan',
        'nomor_transaksi',
        'tanggal_pembayaran',
        'path_bukti_pembayaran',
        'nama_user',
        'alamat',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($transaksi) {
            $transaksi->nomor_transaksi = Str::random(8);
        });
    }

    // Relasi dengan tabel User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan tabel Layanan
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }
}
