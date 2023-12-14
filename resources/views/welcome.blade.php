@extends('layouts.layout_header')

@section('content')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <h1 class="display-4">Selamat datang di Web Kereta Api Cuy</h1>
                    <p class="lead">Temukan informasi tentang jadwal, harga tiket, dan layanan kereta api</p>
                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>

    @include('layouts.layout_footer')
@endsection
