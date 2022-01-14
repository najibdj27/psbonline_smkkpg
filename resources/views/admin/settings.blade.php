@extends('layout.base')

@section('tittle', 'Settings | Admin')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/header.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

@endsection

@section('content')
    @include('layout.sidebaradmin')
    @include('layout.alert')
    <div class="container my-4 pt-3">
        <div class="d-flex">
            <div class="col-8 mx-auto">
                <div class="card mb-3">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 10vh; min-height: 200px;">
                                <img src="http://www.smkikhlasjawilan.sch.id/media_library/posts/large/73007d434555e2aadbe1012bfcab50b0.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="text-uppercase fw-bolder">Teknik Komputer Jaringan</h1>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 10vh; min-height: 200px;">
                                <img src="https://smkitwarungpring.sch.id/wp-content/uploads/2016/01/IMG_20200107_082808-scaled.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="text-uppercase fw-bolder">Teknik Dan Bisnis Sepeda Motor</h1>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 10vh; min-height: 200px;">
                                <img src="http://smk.kemdikbud.go.id/uploads/images/covers/smk-perbankan-syariahjpg_1483095512.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="text-uppercase fw-bolder">Perbankan Syari'ah</h1>
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
                    <div class="card-body d-block text-center">
                        <h4 class="card-title mx-auto">Penerimaan Siswa Baru (PSB) Online Tahun {{ $setting->tahun_pendaftaran }}</h4>
                        <h4 class="card-text">SMK Komunika Prestasi Gentur</h4>
                        <h3 class="card-text">{{ $setting->gelombang_pendaftaran }}</h3>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#settingPendaftaran">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <form method="post" enctype="multipart/form-data">@method('put')@csrf
            <div class="modal fade" id="settingPendaftaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="settingPendaftaranLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="settingPendaftaranLabel">Setting Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="gelombang_pendaftaran" class="form-label">Gelombang pendaftaran</label>
                                        <select class="form-select @error('gelombang_pendaftaran') is-invalid @enderror" name="gelombang_pendaftaran" value="{{ $setting->gelombang_pendaftaran }}" aria-label="Default select example">
                                            <option selected value="">--Pilih Gelombang Pendaftaran--</option>
                                            <option @if ($setting->gelombang_pendaftaran == "Gelombang I") selected @endif value="Gelombang I">Gelombang I</option>
                                            <option @if ($setting->gelombang_pendaftaran == "Gelombang II") selected @endif value="Gelombang II">Gelombang II</option>
                                            <option @if ($setting->gelombang_pendaftaran == "Gelombang III") selected @endif value="Gelombang III">Gelombang III</option>
                                        </select>
                                        @error('gelombang_pendaftaran')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="tahun_pendaftaran" class="form-label">Tahun pendaftaran</label>
                                        <input type="text" class="form-control @error('tahun_pendaftaran') is-invalid @enderror" id="tahun_pendaftaran" name="tahun_pendaftaran" value="{{$setting->tahun_pendaftaran}}">
                                        @error('tahun_pendaftaran')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('additional JS')
        <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
@endsection