@extends('layout.base')

@section('tittle', 'Dashboard | Pendaftar')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebar')
    <div class="container my-4">
        <div class="row">
            <div class="col-4 mt-4">
                <div class="photo rounded overflow-hidden ms-4" style="height:300px; width: 300px;">
                    <img src="{{asset('Uploads/images/'.Auth::user()->username.'/'.Auth::user()->profile_photo)}}" class=" card-img-top" alt="...">
                </div>
                <div class="mt-4 ps-4">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="fw-bold">Nama</h5>
                                    <p class="ms-2">{{$pendaftar->nama}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fw-bold">NISN</h5>
                                    <p class="ms-2">{{$pendaftar->NISN}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fw-bold">Jenis Kelamin</h5>
                                    <p class="ms-2">{{$pendaftar->jenis_kelamin}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fw-bold">Agama</h5>
                                    <p class="ms-2">{{$pendaftar->agama}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fw-bold">Alamat</h5>
                                    <p class="ms-2">{{$pendaftar->alamat}} RT. {{$pendaftar->rt}} RW. {{$pendaftar->rw}} Desa {{$pendaftar->desa}} Kec. {{$pendaftar->kecamatan}} Kota/Kab {{$pendaftar->kab_kota}} {{$pendaftar->provinsi}}, {{$pendaftar->kode_pos}}.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fw-bold">No. Handphone</h5>
                                    <p class="ms-2">{{$pendaftar->nomor_hp}}</p>
                                </td>
                            </tr>
                            <tr>    
                                <td>
                                    <h5 class="fw-bold">Email</h5>
                                    <p class="ms-2">{{$user->email}}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-success" type="button">Edit</button>
                </div>
            </div>
            <div class="col-8 mt-4">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold">Data Ayah</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nama</td>
                                    <td>: {{$pendaftar->nama_ayah}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pekerjaan</td>
                                    <td>: {{$pendaftar->pekerjaan_ayah}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pendidikan</td>
                                    <td>: {{$pendaftar->pendidikan_ayah}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Penghasilan</td>
                                    <td>: {{$pendaftar->penghasilan_ayah}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Tahun lahir</td>
                                    <td>: {{$pendaftar->tahun_lahir_ayah}}</td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <h3 class="fw-bold">Data Ibu</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nama</td>
                                    <td>: {{$pendaftar->nama_ibu}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pekerjaan</td>
                                    <td>: {{$pendaftar->pekerjaan_ibu}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pendidikan</td>
                                    <td>: {{$pendaftar->pendidikan_ibu}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Penghasilan</td>
                                    <td>: {{$pendaftar->penghasilan_ibu}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Tahun lahir</td>
                                    <td>: {{$pendaftar->tahun_lahir_ibu}}</td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12">
                        <h3 class="fw-bold">Data Wali (Optional)</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nama</td>
                                    <td class="col-10">: {{$pendaftar->nama_wali}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pekerjaan</td>
                                    <td class="col-10">: {{$pendaftar->pekerjaan_wali}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pendidikan</td>
                                    <td class="col-10">: {{$pendaftar->pendidikan_wali}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Penghasilan</td>
                                    <td class="col-10">: {{$pendaftar->penghasilan_wali}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Tahun lahir</td>
                                    <td class="col-10">: {{$pendaftar->tahun_lahir_wali}}</td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12">
                        <h3 class="fw-bold">Data Pendaftaran</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nomor Pendaftaran</td>
                                    <td class="col-8">: {{$pendaftar->nomor_pendaftaran}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor Seri Ijazah</td>
                                    <td class="col-8">: {{$pendaftar->nomor_seri_ijazah}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor Seri SKHUN</td>
                                    <td class="col-8">: {{$pendaftar->nomor_seri_SKHUN}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor Registrasi Akta Lahir </td>
                                    <td class="col-8">: {{$pendaftar->nomor_reg_akta_lahir}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Nomor UN</td>
                                    <td class="col-8">: {{$pendaftar->nomor_UN}}</td>
                                </tr>   
                                <tr>
                                    <td class="fw-bold">Asal Sekolah</td>
                                    <td class="col-8">: {{$pendaftar->asal_sekolah}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor KPS</td>
                                    <td class="col-8">: {{$pendaftar->nomor_KPS}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor KIP</td>
                                    <td class="col-8">: {{$pendaftar->nomor_KIP}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Gelombang Pendaftaran</td>
                                    <td class="col-8">: {{$pendaftar->gelombang_pendaftaran}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pilihan Jurusan 1</td>
                                    <td class="col-8">: {{$pendaftar->pilihan_jurusan_1}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pilihan Jurusan 2</td>
                                    <td class="col-8">: {{$pendaftar->pilihan_jurusan_2}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <h3 class="fw-bold">Data Prestasi</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Tingkat</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Penyelenggara</th>
                                    <th scope="col">File Sertifikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>EDSAFEST Debate Competition</td>
                                    <td>Kelompok</td>
                                    <td>Priangan Timur</td>
                                    <td>2018</td>
                                    <td>Universitas Siliwangi</td>
                                    <td><a href="">abcdefgh</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>EDSAFEST Debate Competition</td>
                                    <td>Kelompok</td>
                                    <td>Priangan Timur</td>
                                    <td>2018</td>
                                    <td>Universitas Siliwangi</td>
                                    <td><a href="">abcdefgh</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>EDSAFEST Debate Competition</td>
                                    <td>Kelompok</td>
                                    <td>Priangan Timur</td>
                                    <td>2018</td>
                                    <td>Universitas Siliwangi</td>
                                    <td><a href="">abcdefgh</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="button">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
@endsection
