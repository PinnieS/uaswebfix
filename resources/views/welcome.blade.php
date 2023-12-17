{{-- import css ke sini --}}
<head>
 

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

@extends('layouts.layout_header')

@section('content')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <h1 class="display-4">Selamat datang di Web Kereta Api Cuy</h1>
                    <p class="lead">What's new on KAI?</p>
                    <hr class="my-4">
                </div>
            </div>
    
            {{-- berita --}}
            <section class="about_section layout_padding long_section">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihWulmMnQ8P8sx25V3maCbqIJzquNEjNd7oTNRhbFp00oBcZK8p5ldkrUTNf1vPXmj2XEpkmiS4EcvkQ0fgdu7m2llI_1g_z8Chi_3fMpmZ45zLbGFlf8WBZA5dfgVwRVmG_B9de2Jq5_ZyOTHLSS8okMcTge0V-RDIfP2WKcj4BuRbcHiAVbwC46z/w0/20220406_133404_compress37.webp" class="d-block w-100 img-fluid" alt="Sunset Over the City"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div class="heading_container">
                        <h2 class="fontteks">
                          Udah Pesan tiket?
                        </h2>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
                      </p>
                      <a href="{{ route('pemesanan_tiket') }}">
                        PESAN DISINI
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              {{-- trip --}}
              <div class="container">
                <h2 class="text-center fontteks">STASIUN DENGAN PEMANDANGAN TERBAGUS</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card mb-3" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i1.wp.com/handluggageonly.co.uk/wp-content/uploads/2015/05/IMG_2813-s.jpg?w=1600&ssl=1');">
                            <div class="card-category">City</div>
                            <div class="card-description">
                                <h2>Home</h2>
                                <p>Lovely house</p>
                            </div>
                            {{-- <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true"> --}}
                            <a class="card-link" href="#"></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card mb-3" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i0.wp.com/handluggageonly.co.uk/wp-content/uploads/2016/04/IMG_5589.jpg?w=1600&ssl=1');">
                            <div class="card-category">City</div>
                            <div class="card-description">
                                <h2>Home</h2>
                                <p>Lovely house</p>
                            </div>
                            {{-- <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true"> --}}
                            <a class="card-link" href="#"></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card mb-3" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i0.wp.com/handluggageonly.co.uk/wp-content/uploads/2016/03/Positano-Weather.jpg?w=1600&ssl=1');">
                            <div class="card-category">City</div>
                            <div class="card-description">
                                <h2>Home</h2>
                                <p>Lovely house</p>
                            </div>
                            {{-- <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true"> --}}
                            <a class="card-link" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>

    {{-- <div class="wrapper-grey padded">
      <div class="container">
        
      </div> --}}
    

    
    @include('layouts.layout_footer')
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

