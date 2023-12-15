<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatPemesananController extends Controller
{
    public function riwayat()
    {
        $riwayatPemesanan = Pemesanan::where('user_id', auth()->id())->get();
    
        return view('riwayat_pemesanan', ['riwayatPemesanan' => $riwayatPemesanan]);
        // return view('riwayat_pemesanan', compact('riwayatPemesanan'));
        
    }

    public function riwayatcheck()
    {
        if (Auth::check()) {
            return view('riwayat_pemesanan');
        } else {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu cuyy.');
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
