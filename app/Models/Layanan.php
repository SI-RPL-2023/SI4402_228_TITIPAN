<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan'; // Nama tabel yang sesuai dengan model

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_layanan', 'id');
    }

    protected $fillable = [
        'nama_layanan',
        'jenis_layanan',
        'harga',
        // Kolom lain yang diperlukan
    ];
}
