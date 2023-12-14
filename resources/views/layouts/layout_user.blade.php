@extends('layouts.layout_header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
@endsection

@extends('layouts.layout_footer')
