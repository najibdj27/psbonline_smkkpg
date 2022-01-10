@extends('layout.base')

@section('tiltte', 'Message | Pendaftar')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/scrollbarstyle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebar')
    @include('layout.alert')
    <div class="container my-4">
        <div class="row">
            <div class="col-4 mt-4 overflow-scroll" style="height: 80vh">
                <div class="card mb-2 border-success">
                    <h5 class="card-header border-success">Pengumuman</h5>
                    <div class="card-body border-success">
                        <h5 class="card-title text-nowrap overflow-hidden" style="text-overflow: ellipsis">Pengumuman Penerimaan Siswa Baru Gelombang I</h5>
                        <p class="card-text text-nowrap overflow-hidden" style="text-overflow: ellipsis;">Kepada Yth. Calon Peserta Didik SMK Komunika Prestasi Gentur</p>
                        <small class="card-text text-nowrap overflow-hidden justify-content-end" style="text-overflow: ellipsis;">25 Desember 2022 | 22.00</small>
                        <div class="d-grid gap-2 d-md-flex justify-content-end mt-1">
                            <a href="#" class="btn btn-outline-success">Buka Pesan</a>
                            <a href="#" class="btn btn-outline-danger">Hapus Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 mt-4 d-flex" style="height: 80vh">
                <div class="m-auto">
                    <div class="row">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                    </div>
                    <div class="row">
                        <h1 class="fw-bold">No message selected</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
@endsection
    