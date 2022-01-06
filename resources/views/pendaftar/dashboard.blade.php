@extends('layout.base')

@section('tittle', 'Dashboard | Pendaftar')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/calendar.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/timeline.css')}}">
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
                <div class="page">
                    <div class="timeline">
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">Semester Genap 2022</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-01-01">
                                            <span class="time__day">1</span>
                                            <span class="time__month">Jan</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Libur tahun baru masehi</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-01-10">
                                            <span class="time__day">10</span>
                                            <span class="time__month">Jan</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Hari pertama masuk sekolah</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-02-01">
                                            <span class="time__day">1</span>
                                            <span class="time__month">Feb</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan libur tahun baru imlek 2573</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-02-28">
                                            <span class="time__day">28</span>
                                            <span class="time__month">Feb</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan libur tahun Isro Mi'raj</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-03-03">
                                            <span class="time__day">3</span>
                                            <span class="time__month">Mar</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan libur hari raya Nyepi</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-03-07">
                                            <span class="time__day">7 - 12</span>
                                            <span class="time__month">Mar</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan Penilaian Tengah Semester</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-03-14">
                                            <span class="time__day">14 - 19</span>
                                            <span class="time__month">Mar</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan jeda tengah semester</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-04-01">
                                            <span class="time__day">1 - 3</span>
                                            <span class="time__month">Apr</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan libur awal Ramadan 1443 H.</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-04-04">
                                            <span class="time__day">4 - 23</span>
                                            <span class="time__month">Apr</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Kegiatan penumbuhan budi pekerti/Smatren</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-04-04">
                                            <span class="time__day">4 APR - 7</span>
                                            <span class="time__month">Mei</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan waktu pelaksanaan Uji Kompetisi Keahlian SMK</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-04-15">
                                            <span class="time__day">15</span>
                                            <span class="time__month">Apr</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan libur wafat Isa Almasih</p>
                                    </div>
                                </div>
                                <div class="timeline__card card">
                                    <header class="card__header">
                                        <time class="time" datetime="2022-04-25">
                                            <span class="time__day">25 APR - 10</span>
                                            <span class="time__month">Mei</span>
                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Prakiraan libur hari raya Idul Fitri 1443 H.</p>
                                    </div>
                                </div>
                            </div>
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
