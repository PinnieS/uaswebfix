@extends('layouts.layout_header')

@section('content')
    <div class="container-fluid row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card  shadow-lg p-2 mb-4 bg-light rounded text-center">
                <h2 class="card  shadow-lg p-2 mb-4 bg-white rounded text-center">Stasiun Palmerah</h2>
                <img src="https://appassets.mvtdev.com/map/41/s/2044/53521257.jpg" class="card-img-top" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Deskripsi
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Stasiun Palmerah</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Stasiun Palmerah (PLM) merupakan sebuah stasiun kereta api yang
                                        terletak
                                        di jalan Gelora. Stasiun Palmerah melayani perjalanan KRL Commuter Line relasi Tanah
                                        abang Serpong,
                                        Parung Panjang hingga stasiun Maja. Selain itu stasiun Palmerah juga melayani Kereta
                                        Ekonomi Lokal
                                        tujuan Rangkas Bitung. Stasiun ini sebelumnya mempunyai 4 jalur kereta api, namun
                                        sekarang tinggal 2
                                        jalur. Saat ini stasiun Palmerah sedang dalam proses pembangunan gedung baru yang
                                        mempunyai 2
                                        lantai.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card  shadow-lg p-2 mb-4 bg-light rounded text-center">
                <h2 class="card  shadow-lg p-2 mb-4 bg-white rounded text-center">Stasiun Cisauk</h2>
                <img src="https://appassets.mvtdev.com/map/41/s/2044/20293754.jpg" class="card-img-top" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Deskripsi
                    </button>

                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Stasiun Cisauk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Stasiun Cisauk (CSK) merupakan stasiun kereta api kelas III yang
                                        terletak di perbatasan antara desa Sampora, Cisauk dengan desa Cibogo, Cisauk,
                                        Kabupaten Tangerang,
                                        Banten
                                        dengan jarak 26 km sebelah barat dari Tanah Abang. Stasiun yang terletak pada
                                        ketinggian +48 meter
                                        ini merupakan stasiun yang lokasinya paling tenggara di Kabupaten Tangerang dan
                                        hanya melayani
                                        perjalanan KRL Commuter Line saja.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card  shadow-lg p-2 mb-4 bg-light rounded text-center">
                <h2 class="card  shadow-lg p-2 mb-4 bg-white rounded text-center">Stasiun Rangkas Bitung</h2>
                <img src="https://appassets.mvtdev.com/map/41/s/2044/30501460.jpg" class="card-img-top" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        Deskripsi
                    </button>

                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Stasiun Rangkas Bitung</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Stasiun Rangkasbitung (RK) (atau lebih dikenal masyarakat setempat dengan bentuk
                                        singkatnya Stasiun Rangkas) adalah stasiun kereta api kelas besar tipe A yang
                                        terletak di Kelurahan
                                        Muara Ciujung Timur, Kecamatan Rangkasbitung, Kabupaten Lebak, Banten. Stasiun yang
                                        terletak pada
                                        ketinggian +22 meter ini termasuk dalam Daerah Operasi I Jakarta, dan merupakan
                                        stasiun utama di
                                        Provinsi Banten.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    @include('layouts.layout_footer')
@endsection
