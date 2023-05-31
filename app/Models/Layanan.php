<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan'; // Nama tabel yang sesuai dengan model

    protected $fillable = [
        'nama',
        'alamat',
        'prov',
        'kab',
        'kode',
        'jenis',
        'pembayaran',
        // Kolom lain yang diperlukan
    ];
}
