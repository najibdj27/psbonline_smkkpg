@extends('layout.base')

@section('tittle', 'Dashboard | Pendaftar')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebar')
    <h1>Selamat datang {{$pendaftar->nama}}!</h1>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
@endsection
