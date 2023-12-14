<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananTiketController extends Controller
{
    public function showForm()
    {
        if (Auth::check()) {
            return view('pemesanan_tiket');
        } else {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu cuyy.');
        }
    }

    public function prosesPemesanan(Request $request)
    {
   
        $request->validate([
            'nama_penumpang' => 'required|string',
            'stasiun_keberangkatan' => 'required|string',
            'stasiun_tujuan' => 'required|string',
            'tanggal_berangkat' => 'required|date',
            'jumlah_tiket' => 'required|integer|min:1',
            'jumlah_dewasa' => 'required|integer|min:0',
            'jumlah_anak' => 'required|integer|min:0',
        ]);

        $pemesanan = new Pemesanan();
        $pemesanan->user_id = auth()->id(); 
        $pemesanan->nama_penumpang = $request->nama_penumpang;
        $pemesanan->stasiun_keberangkatan = $request->stasiun_keberangkatan;
        $pemesanan->stasiun_tujuan = $request->stasiun_tujuan;
        $pemesanan->tanggal_berangkat = $request->tanggal_berangkat;
        $pemesanan->jumlah_tiket = $request->jumlah_tiket;
        $pemesanan->jumlah_dewasa = $request->jumlah_dewasa;
        $pemesanan->jumlah_anak = $request->jumlah_anak;
        $pemesanan->save();

        return view('history_pemesanan', ['dataPemesanan' => $pemesanan]);
    }
}

