<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_penumpang',
        'stasiun_keberangkatan',
        'stasiun_tujuan',
        'tanggal_berangkat',
        'jumlah_tiket',
        'jumlah_dewasa',
        'jumlah_anak',
        // Tambahkan kolom lain sesuai kebutuhan
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
