<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function submitLogin(Request $request)
{
    // Lakukan validasi
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Lakukan proses login, misalnya dengan menggunakan Auth
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        // Memeriksa peran (role) pengguna setelah login
        $userRole = Auth::user()->role;

        // Jika peran pengguna adalah admin (role 1)
        if ($userRole === 1) {
            // Simpan nama pengguna ke dalam sesi
            $request->session()->put('username', Auth::user()->name);

            // Redirect ke halaman dashboard atau halaman lain yang diinginkan untuk admin
            return redirect()->route('pemesanan_tiket')->with('role', 'admin');
        } else {
            // Redirect ke page ap ae selain admin (non
            return redirect()->route('lokasi_kereta')->with('role', 'user');
        }
    }

    // Jika login gagal, kembali ke halaman login dengan pesan error
    return redirect()->route('login')->with('error', 'Email atau password salah.');
}



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
