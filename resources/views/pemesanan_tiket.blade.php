@extends('layouts.layout_header')

@section('content')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="col-md-6 offset-md-3">
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
                                <button type="submit" class="submit-btn btn btn-primary">Pesan Tiket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('layouts.layout_footer')
@endsection
