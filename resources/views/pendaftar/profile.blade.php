@extends('layout.base')

@section('tittle', 'Dashboard | Pendaftar')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebar')
    <div class="card" style="width: 18rem;">
        <div class="photo overflow-hidden" style="height:250px">
            <img src="{{asset('Uploads/images/'.Auth::user()->username.'/'.Auth::user()->profile_photo)}}" class="card-img-top" alt="Profile Picture">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $pendaftar->nama }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $pendaftar->NISN }}</li>
            <li class="list-group-item">{{ $pendaftar->jenis_kelamin }}</li>
            <li class="list-group-item">{{ $pendaftar->asal_sekolah }}</li>
        </ul>
        <div class="card-body">
            <div class="d-flex">
                <button type="button" class="mx-auto btn btn-danger" onclick="location.href='{{ route('logout') }}'">Logout</button>
                <button type="button" class="mx-auto btn btn-primary" href="#">Detail</button>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
@endsection
