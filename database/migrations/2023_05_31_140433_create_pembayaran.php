<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_layanan');
            $table->date('tanggal_pembayaran');
            $table->string('path_bukti_pembayaran');
            $table->string('nama_user');
            $table->string('alamat');
            $table->timestamps();
            
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_layanan')->references('id')->on('layanan');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
