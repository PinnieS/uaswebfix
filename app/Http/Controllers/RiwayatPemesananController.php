<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatPemesananController extends Controller
{
    public function riwayat()
{
    // Mengambil semua pemesanan (Pemesanan) yang terkait dengan pengguna yang sedang terautentikasi
    $riwayatPemesanan = Pemesanan::where('user_id', auth()->id())->get();

    // Memasukkan pemesanan yang diambil ke view 'riwayat_pemesanan'
    return view('riwayat_pemesanan', ['riwayatPemesanan' => $riwayatPemesanan]);
}


    public function riwayatcheck()
    {
        // Memeriksa apakah pengguna telah terautentikasi
        if (Auth::check()) {
            return view('riwayat_pemesanan');
        } else {
            // Jika pengguna belum terautentikasi, redirect ke halaman login dengan pesan kesalahan
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }
    }

    public function lokasiKereta()
{

    return view('lokasi_kereta');
}

    public function delete($id)
{
   
    $pemesanan = Pemesanan::find($id);


    if (!$pemesanan) {
        return redirect()->route('riwayat_pemesanan')->with('error', 'Pemesanan tidak ditemukan.');
    }

    if ($pemesanan->user_id !== auth()->id()) {
        return redirect()->route('riwayat_pemesanan')->with('error', 'Anda tidak memiliki izin untuk menghapus pemesanan ini.');
    }

    $pemesanan->delete();

    return redirect()->route('riwayat_pemesanan')->with('success', 'Pemesanan berhasil dihapus.');
}

}
