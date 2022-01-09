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
                    <button class="btn btn-outline-primary" id="modalIdentitasTrigger" type="button" data-bs-toggle="modal" data-bs-target="#modalIdentitas">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        Edit Data Indentitas
                    </button>
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
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalDataPrestasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            Edit Data Prestasi
                        </button>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#modalDataPrestasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Tambah Data Prestasi
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        {{-- Modal Edit Identitas --}}
        <form method="post" action="pendaftar/{{$pendaftar->id}}/{{$pendaftar->user_id}}" enctype="multipart/form-data">@method('patch') @csrf
            <div class="modal fade" id="modalIdentitas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalIdentitasLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalIdentitasLabel">Edit Data Identitas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- Group form 1 --}}
                            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                                <h4 class="mb-3">Administrasi</h4>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name='username' value="{{$user->username}}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label for="email" >Alamat Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="nama@web.com" id="email" name='email' value="{{$user->email}}" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">Kita tidak akan membagikan emailmu kepada siapapun.</div>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Group form 2 --}}
                            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                                <h4 class="mb-3">Identitas Pribadi</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="NISN" class="form-label">NISN</label>
                                            <input type="text" class="form-control @error('NISN') is-invalid @enderror" id="NISN" placeholder="9991*****6" name="NISN" value="{{$pendaftar->NISN}}" aria-describedby="linkNISN">
                                            <a id="linkNISN" class="form-text" href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" target="_blank">Cari nomor NISN disini.</a>
                                            @error('NISN')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="SKHUN" class="form-label">Nomor Seri SKHUN</label>
                                            <input type="text" class="form-control text-uppercase @error('SKHUN') is-invalid @enderror" id="SKHUN" name="SKHUN" value="{{$pendaftar->nomor_seri_SKHUN}}">
                                            @error('SKHUN')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="noUN" class="form-label">Nomor UN</label>
                                            <input type="text" class="form-control @error('noUN') is-invalid @enderror" id="noUN" name="noUN" value="{{$pendaftar->nomor_UN}}">
                                            @error('noUN')
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
                                            <label for="nomor_seri_ijazah" class="form-label">Nomor Seri ijazah</label>
                                            <input type="text" class="form-control text-uppercase @error('nomor_seri_ijazah') is-invalid @enderror" id="nomor_seri_ijazah" name="nomor_seri_ijazah" value="{{$pendaftar->nomor_seri_ijazah}}">
                                            @error('nomor_seri_ijazah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="NIK" class="form-label">NIK</label>
                                            <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK" value="{{$pendaftar->NIK}}">
                                            @error('NIK')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="noRAL" class="form-label">No. Registrasi Akta Lahir</label>
                                            <input type="text" class="form-control @error('noRAL') is-invalid @enderror" id="noRAL" name="noRAL" value="{{$pendaftar->nomor_reg_akta_lahir}}">
                                            @error('noRAL')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-3">
                                        <div class="card position-relative" style="padding-bottom: 226.5px">
                                            <img src="{{asset('Uploads/images/'.Auth::user()->username.'/'.Auth::user()->profile_photo)}}" id="preview_profile_photo" class="card-img-top position-absolute" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                <input type="file" class="form-control @error('profile_photo') is-invalid @enderror" id="profile_photo" name="profile_photo" aria-describedby="profile_photoHelp">
                                            </div>
                                        </div>
                                        @error('profile_photo')
                                            <div class="text-danger">
                                                <small>{{$message}}</small>
                                            </div>
                                        @enderror
                                        <div id="profile_photoHelp" class="form-text">Ketentuan :</br>*Format file : JPG</br>*Latar Photo : Merah / Biru </br>*Rasio : 4 x 6 </br>*Ukuran File : 100-300 Kb</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control text-uppercase @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$pendaftar->nama}}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{$pendaftar->tanggal_lahir}}">
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
                                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{$pendaftar->jenis_kelamin}}" aria-label="Default select example">
                                                <option selected value="">--Pilih jenis kelamin--</option>
                                                <option @if ($pendaftar->jenis_kelamin == "Laki-Laki") selected @endif value="Laki-Laki">Laki-Laki</option>
                                                <option @if ($pendaftar->jenis_kelamin == "Perempuan") selected @endif value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
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
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control text-capitalize @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{$pendaftar->tempat_lahir}}">
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="agama" class="form-label">Agama</label>
                                            <select class="form-select @error('agama') is-invalid @enderror" name="agama" value="{{$pendaftar->agama}}" aria-label="Default select example">
                                                <option selected value="">--Pilih agama--</option>
                                                <option  @if ($pendaftar->agama == "Islam") selected @endif value="Islam">Islam</option>
                                                <option  @if ($pendaftar->agama == "Kristen") selected @endif value="Kristen">Kristen</option>
                                                <option  @if ($pendaftar->agama == "Hindu") selected @endif value="Hindu">Hindu</option>
                                                <option  @if ($pendaftar->agama == "Buddha") selected @endif value="Buddha">Buddha</option>
                                                <option  @if ($pendaftar->agama == "Khonghucu") selected @endif value="Khonghucu">Khonghucu</option>
                                            </select>
                                            @error('agama')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                    <input type="text" class="form-control text-uppercase @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" value="{{$pendaftar->asal_sekolah}}">
                                    @error('asal_sekolah')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="provinsi" class="form-label">Provinsi</label>
                                            <input type="text" class="form-control text-capitalize @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" value="{{$pendaftar->provinsi}}">
                                            @error('provinsi')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="kab_kota" class="form-label">Kabupaten / Kota</label>
                                            <input type="text" class="form-control text-capitalize @error('kab_kota') is-invalid @enderror" id="kab_kota" name="kab_kota" value="{{$pendaftar->kab_kota}}">
                                            @error('kab_kota')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                            <input type="text" class="form-control text-capitalize @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" value="{{$pendaftar->kecamatan}}">
                                            @error('kecamatan')
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
                                            <label for="kel_desa" class="form-label">Kelurahan / Desa</label>
                                            <input type="text" class="form-control text-capitalize @error('kel_desa') is-invalid @enderror" id="kel_desa" name="kel_desa" value="{{$pendaftar->desa}}">
                                            @error('kel_desa')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="dusun" class="form-label">Dusun / Kampung (optional)</label>
                                            <input type="text" class="form-control text-capitalize @error('dusun') is-invalid @enderror" id="dusun" name="dusun" value="{{$pendaftar->dusun}}">
                                            @error('dusun')
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
                                            <label for="alamat_lengkap" class="form-label">Alamat lengkap</label>
                                            <input type="text" class="form-control text-capitalize @error('alamat_lengkap') is-invalid @enderror" id="alamat_lengkap" name="alamat_lengkap" value="{{$pendaftar->alamat}}">
                                            @error('alamat_lengkap')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="mb-3">
                                            <label for="rt" class="form-label">RT</label>
                                            <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{$pendaftar->rt}}">
                                            @error('rt')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="mb-3">
                                            <label for="rw" class="form-label">RW</label>
                                            <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{$pendaftar->rw}}">
                                            @error('rw')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="mb-3">
                                            <label for="kode_pos" class="form-label">Kode POS</label>
                                            <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos" name="kode_pos" value="{{$pendaftar->kode_pos}}">
                                            @error('kode_pos')
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
                                            <label for="jenis_tinggal" class="form-label">Jenis tinggal</label>
                                            <select class="form-select @error('jenis_tinggal') is-invalid @enderror" name="jenis_tinggal" value="{{$pendaftar->jenis_tinggal}}" aria-label="Default select example">
                                                <option selected value="">--Pilih jenis tinggal--</option>
                                                <option @if ($pendaftar->jenis_tinggal == "Bersama orang tua") selected @endif value="Bersama orang tua">Bersama orang tua</option>
                                                <option @if ($pendaftar->jenis_tinggal == "Bersama wali") selected @endif value="Bersama wali">Bersama wali</option>
                                                <option @if ($pendaftar->jenis_tinggal == "Kos") selected @endif value="Kos">Kos</option>
                                            </select>
                                            @error('jenis_tinggal')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="no_telpon_rumah" class="form-label">No. Telepon Rumah (optional)</label>
                                            <input type="text" class="form-control @error('no_telpon_rumah') is-invalid @enderror" id="no_telpon_rumah" name="no_telpon_rumah" value="{{$pendaftar->no_telp_rumah}}">
                                            @error('no_telpon_rumah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="no_hp" class="form-label">No. HP</label>
                                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{$pendaftar->nomor_hp}}">
                                            @error('no_hp')
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
                                            <label for="no_kps" class="form-label">No. KPS (optional)</label>
                                            <input type="text" class="form-control @error('no_kps') is-invalid @enderror" id="no_kps" name="no_kps" value="{{$pendaftar->nomor_KPS}}" aria-describedby="KPSHelp">
                                            <div id="KPSHelp" class="form-text">Isi jika penerima KPS/PKH.</div>
                                            @error('no_kps')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="no_kip" class="form-label">No. KIP (optional)</label>
                                            <input type="text" class="form-control @error('no_kip') is-invalid @enderror" id="no_kip" name="no_kip" value="{{$pendaftar->nomor_KIP}}" aria-describedby="KIPHelp">
                                            <div id="KISHelp" class="form-text">Isi jika penerima KIP.</div>
                                            @error('no_kip')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Group form 3 --}}
                            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                                <h4 class="mb-3">Data Ayah Kandung</h4>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label for="nama_ayah" class="form-label">Nama ayah</label>
                                            <input type="text" class="form-control text-uppercase @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" value="{{$pendaftar->nama_ayah}}">
                                            @error('nama_ayah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="tahun_lahir_ayah" class="form-label">Tahun lahir</label>
                                            <input type="text" class="form-control @error('tahun_lahir_ayah') is-invalid @enderror" id="tahun_lahir_ayah" name="tahun_lahir_ayah" value="{{$pendaftar->tahun_lahir_ayah}}">
                                            @error('tahun_lahir_ayah')
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
                                            <label for="pekerjaan_ayah" class="form-label">Pekerjaan</label>
                                            <select class="form-select @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah" value="{{$pendaftar->pekerjaan_ayah}}" aria-label="Default select example">
                                                <option selected value="">--Pilih pekerjaan--</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "PNS") selected @endif value="PNS">PNS</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "Wiraswasta") selected @endif value="Wiraswasta">Wiraswasta</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "Pedagang") selected @endif value="Pedagang">Pedagang</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "Buruh") selected @endif value="Buruh">Buruh</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "Karyawan Swast") selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "Karyawan BUMN/BUMD") selected @endif value="Karyawan BUMN/BUMD">Karyawan BUMN/BUMD</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "Mengurus Rumah Tangga") selected @endif value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "Dokter") selected @endif value="Dokter">Dokter</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "TNI") selected @endif value="TNI">TNI</option>
                                                <option @if ($pendaftar->pekerjaan_ayah == "POLRI") selected @endif value="POLRI">POLRI</option>
                                            </select>
                                            @error('pekerjaan_ayah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="pendidikan_ayah" class="form-label">Pendidikan</label>
                                            <select class="form-select @error('pendidikan_ayah') is-invalid @enderror" name="pendidikan_ayah" value="{{$pendaftar->pendidikan_ayah}}" aria-label="Default select example">
                                                <option selected value="">--Pilih pendidikan--</option>
                                                <option @if ($pendaftar->pendidikan_ayah == "S2/Sederajat") selected @endif value="S2/Sederajat">S2/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ayah == "S1/Sederajat") selected @endif value="S1/Sederajat">S1/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ayah == "SLTA/Sederajat") selected @endif value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ayah == "SLTP/Sederajat") selected @endif value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ayah == "SD/Sederajat") selected @endif value="SD/Sederajat">SD/Sederajat</option>
                                            </select>
                                            @error('pendidikan_ayah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pendapatan_ayah" class="form-label">Pendapatan ayah</label>
                                    <select class="form-select @error('pendapatan_ayah') is-invalid @enderror" name="pendapatan_ayah" value="{{$pendaftar->penghasilan_ayah}}" aria-label="Default select example">
                                        <option selected value="">--Pilih Pendapatan--</option>
                                        <option @if ($pendaftar->penghasilan_ayah == "< Rp. 1.000.000") selected @endif value="< Rp. 1.000.000">< Rp. 1.000.000</option>
                                        <option @if ($pendaftar->penghasilan_ayah == "Rp. 1.000.000 - Rp. 2.000.000") selected @endif value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ayah == "Rp. 2.000.000 - Rp. 3.000.000") selected @endif value="Rp. 2.000.000 - Rp. 3.000.000">Rp. 2.000.000 - Rp. 3.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ayah == "Rp. 3.000.000 - Rp. 4.000.000") selected @endif value="Rp. 3.000.000 - Rp. 4.000.000">Rp. 3.000.000 - Rp. 4.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ayah == "Rp. 4.000.000 - Rp. 5.000.000") selected @endif value="Rp. 4.000.000 - Rp. 5.000.000">Rp. 4.000.000 - Rp. 5.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ayah == "> Rp. 5.000.000") selected @endif value="> Rp. 5.000.000">> Rp. 5.000.000 </option>
                                    </select>
                                    @error('pendapatan_ayah')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Group form 4 --}}
                            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                                <h4 class="mb-3">Data Ibu Kandung</h4>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label for="nama_ibu" class="form-label">Nama ibu</label>
                                            <input type="text" class="form-control text-uppercase @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" value="{{$pendaftar->nama_ibu}}">
                                            @error('nama_ibu')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="tahun_lahir_ibu" class="form-label">Tahun lahir</label>
                                            <input type="text" class="form-control @error('tahun_lahir_ibu') is-invalid @enderror" id="tahun_lahir_ibu" name="tahun_lahir_ibu" value="{{$pendaftar->tahun_lahir_ibu}}">
                                            @error('tahun_lahir_ibu')
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
                                            <label for="pekerjaan_ibu" class="form-label">Pekerjaan</label>
                                            <select class="form-select @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu" value="{{$pendaftar->pekerjaan_ibu}}" aria-label="Default select example">
                                                <option selected value="">--Pilih pekerjaan--</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "PNS") selected @endif value="PNS">PNS</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "Wiraswasta") selected @endif value="Wiraswasta">Wiraswasta</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "Pedagang") selected @endif value="Pedagang">Pedagang</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "Buruh") selected @endif value="Buruh">Buruh</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "Karyawan Swast") selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "Karyawan BUMN/BUMD") selected @endif value="Karyawan BUMN/BUMD">Karyawan BUMN/BUMD</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "Mengurus Rumah Tangga") selected @endif value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "Dokter") selected @endif value="Dokter">Dokter</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "TNI") selected @endif value="TNI">TNI</option>
                                                <option @if ($pendaftar->pekerjaan_ibu == "POLRI") selected @endif value="POLRI">POLRI</option>
                                            </select>
                                            @error('pekerjaan_ibu')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="pendidikan_ibu" class="form-label">Pendidikan</label>
                                            <select class="form-select @error('pendidikan_ibu') is-invalid @enderror" name="pendidikan_ibu" value="{{$pendaftar->pendidikan_ibu}}" aria-label="Default select example">
                                                <option selected value="">--Pilih pendidikan--</option>
                                                <option @if ($pendaftar->pendidikan_ibu == "S2/Sederajat") selected @endif value="S2/Sederajat">S2/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ibu == "S1/Sederajat") selected @endif value="S1/Sederajat">S1/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ibu == "SLTA/Sederajat") selected @endif value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ibu == "SLTP/Sederajat") selected @endif value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_ibu == "SD/Sederajat") selected @endif value="SD/Sederajat">SD/Sederajat</option>
                                            </select>
                                            @error('pendidikan_ibu')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pendapatan_ibu" class="form-label">Pendapatan ibu</label>
                                    <select class="form-select @error('pendapatan_ibu') is-invalid @enderror" name="pendapatan_ibu" value="{{$pendaftar->penghasilan_ibu}}" aria-label="Default select example">
                                        <option selected value="">--Pilih Pendapatan--</option>
                                        <option @if ($pendaftar->penghasilan_ibu == "< Rp. 1.000.000") selected @endif value="< Rp. 1.000.000">< Rp. 1.000.000</option>
                                        <option @if ($pendaftar->penghasilan_ibu == "Rp. 1.000.000 - Rp. 2.000.000") selected @endif value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ibu == "Rp. 2.000.000 - Rp. 3.000.000") selected @endif value="Rp. 2.000.000 - Rp. 3.000.000">Rp. 2.000.000 - Rp. 3.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ibu == "Rp. 3.000.000 - Rp. 4.000.000") selected @endif value="Rp. 3.000.000 - Rp. 4.000.000">Rp. 3.000.000 - Rp. 4.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ibu == "Rp. 4.000.000 - Rp. 5.000.000") selected @endif value="Rp. 4.000.000 - Rp. 5.000.000">Rp. 4.000.000 - Rp. 5.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_ibu == "> Rp. 5.000.000") selected @endif value="> Rp. 5.000.000">> Rp. 5.000.000 </option>
                                    </select>
                                    @error('pendapatan_ibu')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Group form 5 --}}
                            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                                <h4 class="mb-3">Data Wali (Optional)</h4>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label for="nama_wali" class="form-label">Nama wali</label>
                                            <input type="text" class="form-control text-uppercase @error('nama_wali') is-invalid @enderror" id="nama_wali" name="nama_wali" value="{{$pendaftar->nama_wali}}">
                                            @error('nama_wali')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="tahun_lahir_wali" class="form-label">Tahun lahir</label>
                                            <input type="text" class="form-control @error('tahun_lahir_wali') is-invalid @enderror" id="tahun_lahir_wali" name="tahun_lahir_wali" value="{{$pendaftar->tahun_lahir_wali}}">
                                            @error('tahun_lahir_wali')
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
                                            <label for="pekerjaan_wali" class="form-label">Pekerjaan</label>
                                            <select class="form-select @error('pekerjaan_wali') is-invalid @enderror" name="pekerjaan_wali" value="{{$pendaftar->pekerjaan_wali}}" aria-label="Default select example">
                                                <option selected value="">--Pilih pekerjaan--</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "PNS") selected @endif value="PNS">PNS</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "Wiraswasta") selected @endif value="Wiraswasta">Wiraswasta</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "Pedagang") selected @endif value="Pedagang">Pedagang</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "Buruh") selected @endif value="Buruh">Buruh</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "Karyawan Swast") selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "Karyawan BUMN/BUMD") selected @endif value="Karyawan BUMN/BUMD">Karyawan BUMN/BUMD</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "Mengurus Rumah Tangga") selected @endif value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "Dokter") selected @endif value="Dokter">Dokter</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "TNI") selected @endif value="TNI">TNI</option>
                                                <option @if ($pendaftar->pekerjaan_wali == "POLRI") selected @endif value="POLRI">POLRI</option>
                                            </select>
                                            @error('pekerjaan_wali')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="pendidikan_wali" class="form-label">Pendidikan</label>
                                            <select class="form-select @error('pendidikan_wali') is-invalid @enderror" name="pendidikan_wali" value="{{$pendaftar->pendidikan_wali}}" aria-label="Default select example">
                                                <option selected value="">--Pilih pendidikan--</option>
                                                <option @if ($pendaftar->pendidikan_wali == "S2/Sederajat") selected @endif value="S2/Sederajat">S2/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_wali == "S1/Sederajat") selected @endif value="S1/Sederajat">S1/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_wali == "SLTA/Sederajat") selected @endif value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_wali == "SLTP/Sederajat") selected @endif value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                <option @if ($pendaftar->pendidikan_wali == "SD/Sederajat") selected @endif value="SD/Sederajat">SD/Sederajat</option>
                                            </select>
                                            @error('pendidikan_wali')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pendapatan_wali" class="form-label">Pendapatan wali</label>
                                    <select class="form-select @error('pendapatan_wali') is-invalid @enderror" name="pendapatan_wali" value="{{$pendaftar->penghasilan_wali}}" aria-label="Default select example">
                                        <option selected value="">--Pilih Pendapatan--</option>
                                        <option @if ($pendaftar->penghasilan_wali == "< Rp. 1.000.000") selected @endif value="< Rp. 1.000.000">< Rp. 1.000.000</option>
                                        <option @if ($pendaftar->penghasilan_wali == "Rp. 1.000.000 - Rp. 2.000.000") selected @endif value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_wali == "Rp. 2.000.000 - Rp. 3.000.000") selected @endif value="Rp. 2.000.000 - Rp. 3.000.000">Rp. 2.000.000 - Rp. 3.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_wali == "Rp. 3.000.000 - Rp. 4.000.000") selected @endif value="Rp. 3.000.000 - Rp. 4.000.000">Rp. 3.000.000 - Rp. 4.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_wali == "Rp. 4.000.000 - Rp. 5.000.000") selected @endif value="Rp. 4.000.000 - Rp. 5.000.000">Rp. 4.000.000 - Rp. 5.000.000 </option>
                                        <option @if ($pendaftar->penghasilan_wali == "> Rp. 5.000.000") selected @endif value="> Rp. 5.000.000">> Rp. 5.000.000 </option>
                                    </select>
                                    @error('pendapatan_wali')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Group Form 6 --}}
                            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                                <h4 class="mb-3">Data Periodik</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="tinggi_badan" class="form-label">Tinggi badan (cm)</label>
                                            <input type="number" class="form-control @error('tinggi_badan') is-invalid @enderror" id="tinggi_badan" name="tinggi_badan" value="{{$pendaftar->tinggi_badan}}">
                                            @error('tinggi_badan')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="berat_badan" class="form-label">Berat badan (kg)</label>
                                            <input type="number" class="form-control @error('berat_badan') is-invalid @enderror" id="berat_badan" name="berat_badan" value="{{$pendaftar->berat_badan}}">
                                            @error('berat_badan')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="jumlah_saudara_kandung" class="form-label">Jumlah saudara kandung</label>
                                            <input type="number" class="form-control @error('jumlah_saudara_kandung') is-invalid @enderror" id="jumlah_saudara_kandung" name="jumlah_saudara_kandung" value="{{$pendaftar->jumlah_saudara_kandung}}">
                                            @error('jumlah_saudara_kandung')
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
                                            <label for="jarak_tempat_tinggal_ke_sekolah" class="form-label">Jarak tempat tinggal ke sekolah (km)</label>
                                            <input type="number" class="form-control @error('jarak_tempat_tinggal_ke_sekolah') is-invalid @enderror" id="jarak_tempat_tinggal_ke_sekolah" name="jarak_tempat_tinggal_ke_sekolah" value="{{$pendaftar->jarak_tempuh_sekolah}}" aria-describedby="JarakHelp">
                                            <div id="JarakHelp" class="form-text">Isi jika lebih dari 1 km.</div>
                                            @error('jarak_tempat_tinggal_ke_sekolah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="waktu_tempuh_ke_sekolah" class="form-label">Waktu tempuh ke sekolah (menit)</label>
                                            <input type="number" class="form-control @error('waktu_tempuh_ke_sekolah') is-invalid @enderror" id="waktu_tempuh_ke_sekolah" name="waktu_tempuh_ke_sekolah" value="{{$pendaftar->waktu_tempuh_sekolah}}">
                                            <div id="KPSHelp" class="form-text">Isi jika lebih dari 60 menit.</div>
                                            @error('waktu_tempuh_ke_sekolah')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Group Form 7 --}}
                            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                                <h4 class="mb-3">Pilihan Jurusan</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="jurusan_1" class="form-label">Jurusan Pilihan Ke-1</label>
                                            <select class="form-select @error('jurusan_1') is-invalid @enderror" name="jurusan_1" value="{{$pendaftar->pilihan_jurusan_1}}" aria-label="Default select example">
                                                <option selected value="">--Pilih Jurusan 1--</option>
                                                <option @if ($pendaftar->pilihan_jurusan_1 == "Teknik Komputer Jaringan") selected @endif value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                                <option @if ($pendaftar->pilihan_jurusan_1 == "Perbankan Syari'ah") selected @endif value="Perbankan Syari'ah">Perbankan Syari'ah</option>
                                                <option @if ($pendaftar->pilihan_jurusan_1 == "Teknik dan Bisnis Sepeda Motor") selected @endif value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                            </select>
                                            @error('jurusan_1')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="jurusan_2" class="form-label">Jurusan Pilihan Ke-2 (optional)</label>
                                            <select class="form-select @error('jurusan_2') is-invalid @enderror" name="jurusan_2" value="{{$pendaftar->pilihan_jurusan_2}}" aria-label="Default select example">
                                                <option selected value="">--Pilih Jurusan 2--</option>
                                                <option @if ($pendaftar->pilihan_jurusan_2 == "Teknik Komputer Jaringan") selected @endif value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                                <option @if ($pendaftar->pilihan_jurusan_2 == "Perbankan Syari'ah") selected @endif value="Perbankan Syari'ah">Perbankan Syari'ah</option>
                                                <option @if ($pendaftar->pilihan_jurusan_2 == "Teknik dan Bisnis Sepeda Motor") selected @endif value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                            </select>
                                            @error('jurusan_2')
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- Modal Edit Data Prestasi --}}
        <form action="post" action="pendaftar/prestasi/{{$pendaftar->id}}/">@method('patch') @csrf
            <div class="modal fade" id="modalDataPrestasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDataPrestasiLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDataPrestasiLabel">Edit Data Prestasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
@endsection

@section('additional JS')
    @if (count($errors)>0)
    <script type="text/javascript">
        $(document).ready(function(){
            $('#modalIdentitas').modal('show');
        });
    </script>
    @endif
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
    <script src="{{ asset('Styles/JS/imagepreview.js')}}"></script>
@endsection
