<head>
 

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>

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

        

        {{-- <div class="content container mt-2">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @foreach($riwayatPemesanan as $pemesanan)
                        <div class="card mb-3">
                            <div class="card-body bg-dark text-white">
                                <h5 class="card-title">{{ $pemesanan->stasiun_keberangkatan }} ({{ $pemesanan->jumlah_tiket }})</h5>
                                <p class="card-text">Computer Line</p>
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text">
                                            <strong>Waktu Keberangkatan:</strong> 
                                            
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
                    @endforeach
                </div>
            </div>
        </div> --}}

        {{-- tabel berangkat 1 kolom dll --}}
        <div class="container mt-5">
            <div class="row justify-content-center">
                
                    <div class="bungkus">
                        <div class="kartu_tabel mb-3">
                            <div class="gatau">
                                {{-- <div class="col-md-4"></div> --}}
                                {{-- <div class="col-md-8"> --}}
                                    <div class="card-body">
                                        <div class="kartu-test">
                                            <div class="kereta">
                                                <h5 class="card-title">
                                                    Kereta
                                            </div>
                                            <div class="kereta">
                                                <h5 class="card-title">Berangkat</h5>
                                            </div>
                                            <div class="kereta">
                                                <h5>Durasi</h5>
                                            </div>
                                            <div class="kereta">
                                                <h5>Tiba</h5>
                                            </div>
                                            <div class="berangkat">
                                                <h5>Harga</h5>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>

            <!-- Card Tarif Kereta -->
    <div class="kartu_view_pesan container mt-2">
        <div class="row justify-content-center">
            {{-- @foreach ($stasiun as $items) --}}
                <div class="bungkus">
                    <div class="kartu mb-3">
                        <div class="gatau">
                                <div class="card-body">
                                    <div class="kartu-test">
                                        <div class="kereta">
                                            <h5 class="card-title" style="weight">
                                                GAMBIR (60)
                                                {{-- {{ $items['stasiun_tiba'] }} --}}
                                            </h5>
                                            
                                        {{-- <p class="card-text">Computer Line {{ $items['stasiun_tiba'] }}</p> --}}
                                        
                                        </div>
                                        <div class="kereta">
                                            {{-- <h5 class="card-title">{{ $items['stasiun_tiba'] }}</h5> --}}
                                            <p class="card-text">
                                                <?php
                                                $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT);
                                                $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT);
                                                $randomTime = $randomHour . ':' . $randomMinute;
                                                echo $randomTime;
                                                ?>
                                                
                                            </p>
                                            tanggal
                                        </div>
                                        <div class="kereta">
                                            <i class=" ikon fa-solid fa-circle-arrow-right"></i>
                                            <p class="card-text">10j 30m</p>
                                        </div>
                                        <div class="kereta">
                                            Stasiun tiba disini
                                            <p class="card-text">
                                                <?php
                                                $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT);
                                                $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT);
                                                $randomTime = $randomHour . ':' . $randomMinute;
                                                echo $randomTime;
                                                ?>
                                            </p>
                                            Tanggal disini
                                        </div>
                                        <div class="kereta">
                                            Rp 680.000,-
                                            <p>
                                                <button class="pesan-btn">Beli</button>
                                            </p>
                                            Tersisa 1 kursi
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
    </div>

        {{-- jgn dibuka dl --}}
        {{-- <div class="card kartu_pesan mx-auto col-md-6 justify-content-center container mt-5">
            <div class="content">
                <div class="details_tabel ">
                    <table cellpadding="2">
                        <tr>
                            <td>
                                <label>Stasiun Asal:</label>
                            </td>
                            <td style="width: 50px">
    
                            </td>
                            <td>
                                <div class="input-group pl-5">
    
                                    <input type="text" name="origination" value="" id="origination"
                                        class="form-control letter flexdatalist flexdatalist-set" placeholder="Stasiun Asal..."
                                        data-data="https://booking.kai.id/api/stations2"
                                        data-search-in="[&quot;name&quot;,&quot;code&quot;,&quot;cityname&quot;]"
                                        data-min-length="1" data-value-property="code" data-text-property="name"
                                        data-visible-properties="[&quot;name&quot;,&quot;code&quot;]"
                                        data-selection-require="true" tabindex="-1"
                                        style="position: absolute; top: -14000px; left: -14000px;">
                                    <input type="text"
                                        class="form-control letter flexdatalist-alias origination-flexdatalist"
                                        name="flexdatalist-origination" id="origination-flexdatalist" placeholder="Stasiun Asal"
                                        autocomplete="off">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Stasiun Tujuan:</label>
                            </td>
                            <td style="width: 50px">
    
                            </td>
                            <td>
                                <div class="input-group">
    
                                    <input type="text" name="origination" value="" id="origination"
                                        class="form-control letter flexdatalist flexdatalist-set"
                                        placeholder="Stasiun Tujuan..." data-data="https://booking.kai.id/api/stations2"
                                        data-search-in="[&quot;name&quot;,&quot;code&quot;,&quot;cityname&quot;]"
                                        data-min-length="1" data-value-property="code" data-text-property="name"
                                        data-visible-properties="[&quot;name&quot;,&quot;code&quot;]"
                                        data-selection-require="true" tabindex="-1"
                                        style="position: absolute; top: -14000px; left: -14000px;">
                                    <input type="text"
                                        class="form-control letter flexdatalist-alias origination-flexdatalist col-mt-3"
                                        name="flexdatalist-origination" id="origination-flexdatalist"
                                        placeholder="Stasiun Tujuan" autocomplete="off">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="departure_dateh" class="goesto field-label-search">Tanggal
                                    Keberangkatan:</label>
                            </td>
                            <td style="width: 50px">
    
                            </td>
                            <td>
                                <input type="text" name="tanggal" value="" id="departure_dateh"
                                    class="form-control no-type hasDatepicker" data-error="Mohon diisi tanggal"
                                    required="required" onkeypress="return: false;">
                            </td>
                            <td style="width: 100px">
    
                            </td>
                            <td>
                                <label for="dewasa" class="goesto">Dewasa:</label>
                            </td>
                            <td style="width: 10px">
    
                            </td>
                            <td>
                                <div class="form-group">
    
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="minus"
                                            data-field="dewasa">
                                            <span class="glyphicon glyphicon-minus">
                                            </span>
                                        </button>
                                    </span>
                                    <input class="form-control input-number number" name="adult" min="1" max="10"
                                        id="dewasa" type="text" value="1">
                                </div>
                            </td>
                        </tr>
    
                    </table>
    
                    <div class="content">
                        <div class="details">
    
                            <div class="form-group col-md-3">
    
    
                            </div>
                        </div>
    
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input class="cari-pesan-tiket-btn btn btn-primary btn-sample btn-search-booking" name="submit" id="submit"
                                type="submit" value="Cari &amp; Pesan Tiket">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- test manggil data belom implementasiin --}}
        {{-- <table border="1">
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
            </thead> --}}
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
          {{-- </table> --}}
          
    </div>

    

    
    @include('layouts.layout_footer')
@endsection
