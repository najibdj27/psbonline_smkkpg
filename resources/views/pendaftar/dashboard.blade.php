@extends('layout.base')

@section('tittle', 'Dashboard | Pendaftar')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/calendar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebar')
    <h1>Selamat Datang <span class="fs-2">{{$pendaftar->nama}}!</span></h1>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="pt-3">Berita Terkini</h3>
                {{-- News Cards --}}
                <div class="card mb-3">
                    <img src="{{ asset('Styles/IMG/SMK KPG ML Comp.jpg')}}" class="card-img-top" alt="20:8 IMG">
                    <div class="card-body">
                        <h5 class="card-title">SMK Komunika Prestasi Gentur menggelar perlombaan <i>game</i> MLBB antar kelas</h5>
                        <p class="card-text">SMK Komunika Prestasi Gentur menggelar perlombaan MLBB antar kelas pada 27 Desember 2021 sebagai salah satu cabang perlombaan akhir semester dalam acara PORAK...</p>
                        <p class="card-text"><small class="text-muted">28 Desember 2022</small></p>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('Styles/IMG/SMK KPG ML Comp.jpg')}}" class="card-img-top" alt="20:8 IMG">
                    <div class="card-body">
                        <h5 class="card-title">SMK Komunika Prestasi Gentur menggelar perlombaan <i>game</i> MLBB antar kelas</h5>
                        <p class="card-text">SMK Komunika Prestasi Gentur menggelar perlombaan MLBB antar kelas pada 27 Desember 2021 sebagai salah satu cabang perlombaan akhir semester dalam acara PORAK...</p>
                        <p class="card-text"><small class="text-muted">28 Desember 2022</small></p>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{ asset('Styles/IMG/SMK KPG ML Comp.jpg')}}" class="card-img-top" alt="20:8 IMG">
                    <div class="card-body">
                        <h5 class="card-title">SMK Komunika Prestasi Gentur menggelar perlombaan <i>game</i> MLBB antar kelas</h5>
                        <p class="card-text">SMK Komunika Prestasi Gentur menggelar perlombaan MLBB antar kelas pada 27 Desember 2021 sebagai salah satu cabang perlombaan akhir semester dalam acara PORAK...</p>
                        <p class="card-text"><small class="text-muted">28 Desember 2022</small></p>
                    </div>
                </div>
                {{-- End-News Cards --}}
            </div>
            <div class="col-4">
                <div class="calendar">
                    <div class="header">
                        <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                        <div class="text" data-render="month-year"></div>
                        <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                    </div>
                    <div class="months" data-flow="left">
                        <div class="month month-a">
                            <div class="render render-a"></div>
                        </div>
                        <div class="month month-b">
                            <div class="render render-b"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
    <script src="{{ asset('Styles/JS/calendar.js')}}"></script>
@endsection
