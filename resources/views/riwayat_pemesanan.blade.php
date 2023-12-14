@extends('layouts.layout_header')

@section('content')
    <div class="container">
        <h2>Riwayat Pemesanan</h2>

        @if($riwayatPemesanan->isEmpty())
            <p>Tidak ada riwayat pemesanan.</p>
        @else
            <ul>
                @foreach($riwayatPemesanan as $pemesanan)
                    <li>
                        {{ $pemesanan->nama_penumpang }} - {{ $pemesanan->stasiun_keberangkatan }} to {{ $pemesanan->stasiun_tujuan }} ({{ $pemesanan->tanggal_berangkat }})
                         Jumlah Dewasa : ({{ $pemesanan->jumlah_dewasa }}) Jumlah Anak: ({{ $pemesanan->jumlah_anak}}) Tiket yang di Pesan : ({{ $pemesanan-> jumlah_tiket}})

                        <form action="{{ route('riwayat_pemesanan.delete', ['id' => $pemesanan->id]) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pemesanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    @include('layouts.layout_footer')
@endsection
