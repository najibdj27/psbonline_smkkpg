@extends('layout.base')

@section('tittle', 'Dashboard | Admin')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/counter.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebaradmin')
    <div class="mt-5" style="height: 10px"></div>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card-counter primary">
                    <i class="fa fa-check-circle"></i>
                    <span class="count-numbers">90%</span>
                    <span class="count-name">Persentase Kelulusan</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter danger">
                    <i class="fa fa-chart-line"></i>
                    <span class="count-numbers">+20</span>
                    <span class="count-name">Peningkatan Pendaftar</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter success">
                    <i class="fa fa-database"></i>
                    <span class="count-numbers">6875</span>
                    <span class="count-name">Keseluruhan Pendaftar</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter info">
                    <i class="fa fa-users"></i>
                    <span class="count-numbers">200</span>
                    <span class="count-name">Pendaftar Gelombang Ini</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
@endsection