<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pemesanans')->insert([
            'nama_penumpang' => 'John Doe', // Ganti dengan nama penumpang sebenarnya
            'stasiun_keberangkatan' => 'Stasiun A',
            'stasiun_tujuan' => 'Stasiun B',
            'tanggal_berangkat' => '2023-12-25',
            'jumlah_tiket' => 2,
            'jumlah_dewasa' => 2,
            'jumlah_anak' => 0,
            // Tambahkan kolom lain sesuai kebutuhan
            'created_at' => now(),
            'updated_at' => now(),
        ]);

   

        // Tambahkan data lain jika diperlukan
    }
}
