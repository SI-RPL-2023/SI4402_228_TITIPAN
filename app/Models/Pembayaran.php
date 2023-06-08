<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran'; // Nama tabel yang sesuai dengan model

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

    // Relasi dengan model lain, misalnya jika terkait dengan model "User"
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
