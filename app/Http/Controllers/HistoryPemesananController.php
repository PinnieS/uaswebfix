<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryPemesananController extends Controller
{
    public function show()
    {
        // Ambil data pemesanan dari session atau database
        $dataPemesanan = session('dataPemesanan');

        // Tampilkan view history_pemesanan dengan data pemesanan
        return view('history_pemesanan', compact('dataPemesanan'));
    }
}
