<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nama_penumpang');
            $table->string('stasiun_keberangkatan');
            $table->string('stasiun_tujuan');
            $table->date('tanggal_berangkat');
            $table->integer('jumlah_tiket');
            $table->integer('jumlah_dewasa');
            $table->integer('jumlah_anak');
            // Tambahkan kolom lain sesuai kebutuhan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};

