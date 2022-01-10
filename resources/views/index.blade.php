@extends('layout.base')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/header.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/button.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/flash.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection

@section('tittle', 'Index | SMK KPG')

@section('content')
    @include('layout.navbar')
    @include('layout.alert')
    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://www.smkikhlasjawilan.sch.id/media_library/posts/large/73007d434555e2aadbe1012bfcab50b0.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-uppercase fw-bolder">Teknik Komputer Jaringan</h1>
                        <p>Teknik Komputer dan Jaringan merupakan ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://smkitwarungpring.sch.id/wp-content/uploads/2016/01/IMG_20200107_082808-scaled.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-uppercase fw-bolder">Teknik Dan Bisnis Sepeda Motor</h1>
                        <p>Teknik dan Bisnis Sepeda Motor (TBSM) adalah salah satu cabang ilmu teknik mesin yang mempelajari tentang bagaimana merancang, membuat dan mengembangkan alat-alat transportasi darat yang menggunakan mesin, terutama sepeda motor.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://smk.kemdikbud.go.id/uploads/images/covers/smk-perbankan-syariahjpg_1483095512.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-uppercase fw-bolder">Perbankan Syari'ah</h1>
                        <p>Perbankan syariah atau perbankan Islam adalah suatu sistem perbankan yang pelaksanaannya berdasarkan hukum Islam.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <h1 class="mb-5 text-center font-weight-bold">Penerimaan Siswa Baru Online</h1>
            <div class="text-center main-text mb-3">
                <h3>Ayo Segera Mendaftar ke SMK Komunika Prestasi Gentur</h3>
                <h3>Jalur Cepat Meraih Lulusan Siap Kerja atau Kuliah dan Bisa Keduanya</h3>
                <div class="c2a-btn footer-c2a-btn">
                    <div class="btn-group btn-group-lg" role="group" aria-label="Call to action">
                    <a type="button" class="btn btn-default btn-lg" href="/daftar">Daftar</a>
                    <span class="btn-circle btn-or"> or </span>
                    <a type="button" class="btn btn-default btn-lg" href="/login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('Styles/JS/main.js')}}"></script>
    @if (session('berhasil'))
        <script type="text/javascript">
            $(document).ready(function() {
                $('#Notification').modal('show');
            });
        </script>
    @endif

@endsection
