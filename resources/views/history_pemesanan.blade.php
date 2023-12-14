@extends('layouts.layout_header')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h2>History Pemesanan</h2>
                        </div>
                        <div class="card-body">
                            @if(isset($dataPemesanan))
                                <div>
                                    <p><strong>Tiket Pemesanan Kereta Api :</strong></p>
                                    <ul>
                                        <li><strong>Nama Penumpang:</strong> {{ $dataPemesanan['nama_penumpang'] }}</li>
                                        <li><strong>Jumlah Tiket:</strong> {{ $dataPemesanan['jumlah_tiket'] }}</li>
                                        <li><strong>Tujuan Keberangkatan:</strong> {{ $dataPemesanan['stasiun_keberangkatan'] }}</li>
                                        <li><strong>Tujuan Akhir:</strong> {{ $dataPemesanan['stasiun_tujuan'] }}</li>
                                        <li><strong>Tanggal Berangkat:</strong> {{ $dataPemesanan['tanggal_berangkat'] }}</li>
                                        <li><strong>Dewasa:</strong> {{ $dataPemesanan['jumlah_dewasa'] }}</li>
                                        <li><strong>Anak:</strong> {{ $dataPemesanan['jumlah_anak'] }}</li>
                                        
                                        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                                    </ul>
                                </div>
                            @else
                                <p>Tidak ada data pemesanan yang ditemukan.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@include('layouts.layout_footer')
@endsection
