<?php

use App\Http\Controllers\PemesananTiketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryPemesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RiwayatPemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login/submit', [LoginController::class, 'submitLogin'])->name('login.submit');
Route::get('/pemesanan-tiket', [PemesananTiketController::class, 'showForm'])->name('pemesanan_tiket');
Route::get('/history_pemesanan', [HistoryPemesananController::class, 'show'])->name('history_pemesanan');
Route::post('/pemesanan-tiket', [PemesananTiketController::class, 'prosesPemesanan'])->name('pemesanan_tiket.submit');
Route::get('/history_pemesanan', [HistoryPemesananController::class, 'show'])->name('history_pemesanan');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/riwayat-pemesanan', [RiwayatPemesananController::class, 'riwayat'])->name('riwayat_pemesanan');
});

Route::delete('/riwayat-pemesanan/{id}', [RiwayatPemesananController::class, 'delete'])->name('riwayat_pemesanan.delete');



