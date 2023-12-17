@extends('layouts.layout_header')

@section('content')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="card col-md-6 offset-md-3">
                    <div class="card-body bg-dark text-white">
                    <div class="booking-form">
                        
                        <form action="{{ route('pemesanan_tiket.submit') }}" method="post">
                            @csrf <!-- Tambahkan CSRF token untuk keamanan -->
                            <div class="form-group">
                                <span class="form-label">Nama Penumpang</span>
                                <input class="form-control" type="text" name="nama_penumpang" placeholder="Masukkan nama penumpang">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Stasiun Keberangkatan</span>
                                <input class="form-control" type="text" name="stasiun_keberangkatan" placeholder="Masukkan stasiun keberangkatan">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Stasiun Tujuan</span>
                                <input class="form-control" type="text" name="stasiun_tujuan" placeholder="Masukkan stasiun tujuan">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Tanggal Berangkat</span>
                                        <input class="form-control" type="date" name="tanggal_berangkat" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Jumlah Tiket</span>
                                        <select class="form-control" name="jumlah_tiket">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Dewasa</span>
                                        <select class="form-control" name="jumlah_dewasa">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Anak</span>
                                        <select class="form-control" name="jumlah_anak">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn text-center mt-3">
                                <button type="submit" class="submit-btn btn btn-dark">Pesan Tiket</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>

        {{-- test --}}

        

        <div class="content container mt-2">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    {{-- @foreach($riwayatPemesanan as $pemesanan) --}}
                        <div class="card mb-3">
                            <div class="card-body bg-dark text-white">
                                {{-- <h5 class="card-title">{{ $pemesanan->stasiun_keberangkatan }} ({{ $pemesanan->jumlah_tiket }})</h5> --}}
                                <p class="card-text">Computer Line</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text">
                                            <strong>Waktu Keberangkatan:</strong> 
                                            <?php
                                                $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT);
                                                $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT);
                                                $randomTime = $randomHour . ':' . $randomMinute;
                                                echo $randomTime;
                                            ?>
                                        </p>
                                        <p class="card-text">
                                            <strong>Durasi:</strong> 10j 30m
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text">
                                            <strong>Stasiun Tiba:</strong> Disini
                                        </p>
                                        <p class="card-text">
                                            <?php
                                                $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT);
                                                $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT);
                                                $randomTime = $randomHour . ':' . $randomMinute;
                                                echo $randomTime;
                                            ?>
                                        </p>
                                        <p class="card-text">
                                            <strong>Harga:</strong> Rp 680.000,-
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    <button class="btnpesan pesan-btn btn-dark">Beli</button>
                                </p>
                                <p>
                                    <strong>Tersisa:</strong> 1 kursi
                                </p>
                            </div>
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>

        {{-- test manggil data belom implementasiin --}}
        <table border="1">
            <thead>
              <tr>
                <th>Nama Penumpang</th>
                <th>Stasiun Keberangkatan</th>
                <th>Stasiun Tujuan</th>
                <th>Tanggal Berangkat</th>
                <th>Jumlah Tiket</th>
                <th>Jumlah Dewasa</th>
                <th>Jumlah Anak</th>
                <th>Created At</th>
                <th>Updated At</th>
              </tr>
            </thead>
            {{-- <tbody>
                <!-- Isi tabel dengan data dari database -->
              @foreach($nama_penumpang as $data)
              <tr>
                <td>{{ $data->nama_penumpang }}</td>
                <td>{{ $data->stasiun_keberangkatan }}</td>
                <td>{{ $data->stasiun_tujuan }}</td>
                <td>{{ $data->tanggal_berangkat }}</td>
                <td>{{ $data->jumlah_tiket }}</td>
                <td>{{ $data->jumlah_dewasa }}</td>
                <td>{{ $data->jumlah_anak }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
              </tr>
              @endforeach
            </tbody> --}}
          </table>
          

    </div>

    {{-- copasan --}}
    
    @include('layouts.layout_footer')
@endsection
