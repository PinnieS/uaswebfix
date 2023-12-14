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
            // Jika belum login, redirect ke halaman login dengan pesan
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu cuyy.');
        }
    }

    public function delete($id)
{
    // Find the order by ID
    $pemesanan = Pemesanan::find($id);

    // Check if the order exists
    if (!$pemesanan) {
        return redirect()->route('riwayat_pemesanan')->with('error', 'Pemesanan tidak ditemukan.');
    }

    // Check if the user is authorized to delete the order
    if ($pemesanan->user_id !== auth()->id()) {
        return redirect()->route('riwayat_pemesanan')->with('error', 'Anda tidak memiliki izin untuk menghapus pemesanan ini.');
    }

    // Delete the order
    $pemesanan->delete();

    // Redirect back to the history page with a success message
    return redirect()->route('riwayat_pemesanan')->with('success', 'Pemesanan berhasil dihapus.');
}

}
