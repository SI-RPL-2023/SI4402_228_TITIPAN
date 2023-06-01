<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanan')->insert(
        [    
            'nama_layanan' => 'pindahan',
            'jenis_layanan' => 'basic',
            'harga' => '800000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'pindahan',
        'jenis_layanan' => 'premium',
        'harga' => '1000000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'pindahan',
        'jenis_layanan' => 'advance',
        'harga' => '1500000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'penyimpanan',
        'jenis_layanan' => 'basic',
        'harga' => '500000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'penyimpanan',
        'jenis_layanan' => 'premium',
        'harga' => '600000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'penyimpanan',
        'jenis_layanan' => 'advance',
        'harga' => '800000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'pengiriman',
        'jenis_layanan' => 'basic',
        'harga' => '200000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'pengiriman',
        'jenis_layanan' => 'premium',
        'harga' => '500000',
        ]);
        DB::table('layanan')->insert(
        [
        'nama_layanan' => 'pengiriman',
        'jenis_layanan' => 'advance',
        'harga' => '800000',
        ]);
    }
}
