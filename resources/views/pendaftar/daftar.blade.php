@extends('layout.base')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/yearpicker.css')}}">
@endsection

@section('tittle', 'Pendaftaran | SMK KPG')

@section('content')
    @include('layout.navbar')
    <div class="my-5 container">
        <h1 class="text-center mb-3">FORMULIR PENDAFTARAN</h1>
        <form method="post" enctype="multipart/form-data">@csrf
            {{-- Group form 1 --}}
            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                <h4 class="mb-3">Data User</h4>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="username111" id="username" name='username' value="{{old('username')}}">
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
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="nama@web.com" id="email" name='email' value="{{old('email')}}" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Kita tidak akan membagikan emailmu kepada siapapun.</div>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
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
                            <input type="text" class="form-control @error('NISN') is-invalid @enderror" id="NISN" placeholder="9991*****6" name="NISN" value="{{old('NISN')}}" aria-describedby="linkNISN">
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
                            <input type="text" class="form-control text-uppercase @error('SKHUN') is-invalid @enderror" id="SKHUN" name="SKHUN" value="{{old('SKHUN')}}">
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
                            <input type="text" class="form-control @error('noUN') is-invalid @enderror" id="noUN" name="noUN" value="{{old('noUN')}}">
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
                            <input type="text" class="form-control text-uppercase @error('nomor_seri_ijazah') is-invalid @enderror" id="nomor_seri_ijazah" name="nomor_seri_ijazah" value="{{old('nomor_seri_ijazah')}}">
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
                            <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK" value="{{old('NIK')}}">
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
                            <input type="text" class="form-control @error('noRAL') is-invalid @enderror" id="noRAL" name="noRAL" value="{{old('noRAL')}}">
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
                            <img src="" id="preview_profile_photo" class="card-img-top position-absolute" alt="">
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
                        <div id="profile_photoHelp" class="form-text">Ketentuan :</br>*Format file : JPG</br>*Latar Photo : Merah / Biru </br>*Rasio : 4 x 6 </br>*Ukuran File : 100 Kb-300 Kb</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control text-uppercase @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
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
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
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
                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{old('jenis_kelamin')}}" aria-label="Default select example">
                                <option selected value="">--Pilih jenis kelamin--</option>
                                <option @if (old('jenis_kelamin') == "Laki-Laki") selected @endif value="Laki-Laki">Laki-Laki</option>
                                <option @if (old('jenis_kelamin') == "Perempuan") selected @endif value="Perempuan">Perempuan</option>
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
                            <input type="text" class="form-control text-capitalize @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
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
                            <select class="form-select @error('agama') is-invalid @enderror" name="agama" value="{{old('agama')}}" aria-label="Default select example">
                                <option selected value="">--Pilih agama--</option>
                                <option  @if (old('agama') == "Islam") selected @endif value="Islam">Islam</option>
                                <option  @if (old('agama') == "Kristen") selected @endif value="Kristen">Kristen</option>
                                <option  @if (old('agama') == "Hindu") selected @endif value="Hindu">Hindu</option>
                                <option  @if (old('agama') == "Buddha") selected @endif value="Buddha">Buddha</option>
                                <option  @if (old('agama') == "Khonghucu") selected @endif value="Khonghucu">Khonghucu</option>
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
                    <input type="text" class="form-control text-uppercase @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" value="{{old('asal_sekolah')}}">
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
                            <input type="text" class="form-control text-capitalize @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" value="{{old('provinsi')}}">
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
                            <input type="text" class="form-control text-capitalize @error('kab_kota') is-invalid @enderror" id="kab_kota" name="kab_kota" value="{{old('kab_kota')}}">
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
                            <input type="text" class="form-control text-capitalize @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" value="{{old('kecamatan')}}">
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
                            <input type="text" class="form-control text-capitalize @error('kel_desa') is-invalid @enderror" id="kel_desa" name="kel_desa" value="{{old('kel_desa')}}">
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
                            <input type="text" class="form-control text-capitalize @error('dusun') is-invalid @enderror" id="dusun" name="dusun" value="{{old('dusun')}}">
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
                            <input type="text" class="form-control text-capitalize @error('alamat_lengkap') is-invalid @enderror" id="alamat_lengkap" name="alamat_lengkap" value="{{old('alamat_lengkap')}}">
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
                            <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" value="{{old('rt')}}">
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
                            <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" value="{{old('rw')}}">
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
                            <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos" name="kode_pos" value="{{old('kode_pos')}}">
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
                            <select class="form-select @error('jenis_tinggal') is-invalid @enderror" name="jenis_tinggal" value="{{old('jenis_tinggal')}}" aria-label="Default select example">
                                <option selected value="">--Pilih jenis tinggal--</option>
                                <option @if (old('jenis_tinggal') == "Bersama orang tua") selected @endif value="Bersama orang tua">Bersama orang tua</option>
                                <option @if (old('jenis_tinggal') == "Bersama wali") selected @endif value="Bersama wali">Bersama wali</option>
                                <option @if (old('jenis_tinggal') == "Kos") selected @endif value="Kos">Kos</option>
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
                            <input type="text" class="form-control @error('no_telpon_rumah') is-invalid @enderror" id="no_telpon_rumah" name="no_telpon_rumah" value="{{old('no_telpon_rumah')}}">
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
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{old('no_hp')}}">
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
                            <input type="text" class="form-control @error('no_kps') is-invalid @enderror" id="no_kps" name="no_kps" value="{{old('no_kps')}}" aria-describedby="KPSHelp">
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
                            <input type="text" class="form-control @error('no_kip') is-invalid @enderror" id="no_kip" name="no_kip" value="{{old('no_kip')}}" aria-describedby="KIPHelp">
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
                            <input type="text" class="form-control text-uppercase @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" value="{{old('nama_ayah')}}">
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
                            <input type="text" class="form-control @error('tahun_lahir_ayah') is-invalid @enderror" id="tahun_lahir_ayah" name="tahun_lahir_ayah" value="{{old('tahun_lahir_ayah')}}">
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
                            <select class="form-select @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah" value="{{old('pekerjaan_ayah')}}" aria-label="Default select example">
                                <option selected value="">--Pilih pekerjaan--</option>
                                <option @if (old('pekerjaan_ayah') == "PNS") selected @endif value="PNS">PNS</option>
                                <option @if (old('pekerjaan_ayah') == "Wiraswasta") selected @endif value="Wiraswasta">Wiraswasta</option>
                                <option @if (old('pekerjaan_ayah') == "Pedagang") selected @endif value="Pedagang">Pedagang</option>
                                <option @if (old('pekerjaan_ayah') == "Buruh") selected @endif value="Buruh">Buruh</option>
                                <option @if (old('pekerjaan_ayah') == "Karyawan Swast") selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                <option @if (old('pekerjaan_ayah') == "Karyawan BUMN/BUMD") selected @endif value="Karyawan BUMN/BUMD">Karyawan BUMN/BUMD</option>
                                <option @if (old('pekerjaan_ayah') == "Mengurus Rumah Tangga") selected @endif value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                <option @if (old('pekerjaan_ayah') == "Dokter") selected @endif value="Dokter">Dokter</option>
                                <option @if (old('pekerjaan_ayah') == "TNI") selected @endif value="TNI">TNI</option>
                                <option @if (old('pekerjaan_ayah') == "POLRI") selected @endif value="POLRI">POLRI</option>
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
                            <select class="form-select @error('pendidikan_ayah') is-invalid @enderror" name="pendidikan_ayah" value="{{old('pendidikan_ayah')}}" aria-label="Default select example">
                                <option selected value="">--Pilih pendidikan--</option>
                                <option @if (old('pendidikan_ayah') == "S2/Sederajat") selected @endif value="S2/Sederajat">S2/Sederajat</option>
                                <option @if (old('pendidikan_ayah') == "S1/Sederajat") selected @endif value="S1/Sederajat">S1/Sederajat</option>
                                <option @if (old('pendidikan_ayah') == "SLTA/Sederajat") selected @endif value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option @if (old('pendidikan_ayah') == "SLTP/Sederajat") selected @endif value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option @if (old('pendidikan_ayah') == "SD/Sederajat") selected @endif value="SD/Sederajat">SD/Sederajat</option>
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
                    <select class="form-select @error('pendapatan_ayah') is-invalid @enderror" name="pendapatan_ayah" value="{{old('pendapatan_ayah')}}" aria-label="Default select example">
                        <option selected value="">--Pilih Pendapatan--</option>
                        <option @if (old('pendapatan_ayah') == "< Rp. 1.000.000") selected @endif value="< Rp. 1.000.000">< Rp. 1.000.000</option>
                        <option @if (old('pendapatan_ayah') == "Rp. 1.000.000 - Rp. 2.000.000") selected @endif value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000 </option>
                        <option @if (old('pendapatan_ayah') == "Rp. 2.000.000 - Rp. 3.000.000") selected @endif value="Rp. 2.000.000 - Rp. 3.000.000">Rp. 2.000.000 - Rp. 3.000.000 </option>
                        <option @if (old('pendapatan_ayah') == "Rp. 3.000.000 - Rp. 4.000.000") selected @endif value="Rp. 3.000.000 - Rp. 4.000.000">Rp. 3.000.000 - Rp. 4.000.000 </option>
                        <option @if (old('pendapatan_ayah') == "Rp. 4.000.000 - Rp. 5.000.000") selected @endif value="Rp. 4.000.000 - Rp. 5.000.000">Rp. 4.000.000 - Rp. 5.000.000 </option>
                        <option @if (old('pendapatan_ayah') == "> Rp. 5.000.000") selected @endif value="> Rp. 5.000.000">> Rp. 5.000.000 </option>
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
                            <input type="text" class="form-control text-uppercase @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" value="{{old('nama_ibu')}}">
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
                            <input type="text" class="form-control @error('tahun_lahir_ibu') is-invalid @enderror" id="tahun_lahir_ibu" name="tahun_lahir_ibu" value="{{old('tahun_lahir_ibu')}}">
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
                            <select class="form-select @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu" value="{{old('pekerjaan_ibu')}}" aria-label="Default select example">
                                <option selected value="">--Pilih pekerjaan--</option>
                                <option @if (old('pekerjaan_ibu') == "PNS") selected @endif value="PNS">PNS</option>
                                <option @if (old('pekerjaan_ibu') == "Wiraswasta") selected @endif value="Wiraswasta">Wiraswasta</option>
                                <option @if (old('pekerjaan_ibu') == "Pedagang") selected @endif value="Pedagang">Pedagang</option>
                                <option @if (old('pekerjaan_ibu') == "Buruh") selected @endif value="Buruh">Buruh</option>
                                <option @if (old('pekerjaan_ibu') == "Karyawan Swast") selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                <option @if (old('pekerjaan_ibu') == "Karyawan BUMN/BUMD") selected @endif value="Karyawan BUMN/BUMD">Karyawan BUMN/BUMD</option>
                                <option @if (old('pekerjaan_ibu') == "Mengurus Rumah Tangga") selected @endif value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                <option @if (old('pekerjaan_ibu') == "Dokter") selected @endif value="Dokter">Dokter</option>
                                <option @if (old('pekerjaan_ibu') == "TNI") selected @endif value="TNI">TNI</option>
                                <option @if (old('pekerjaan_ibu') == "POLRI") selected @endif value="POLRI">POLRI</option>
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
                            <select class="form-select @error('pendidikan_ibu') is-invalid @enderror" name="pendidikan_ibu" value="{{old('pendidikan_ibu')}}" aria-label="Default select example">
                                <option selected value="">--Pilih pendidikan--</option>
                                <option @if (old('pendidikan_ibu') == "S2/Sederajat") selected @endif value="S2/Sederajat">S2/Sederajat</option>
                                <option @if (old('pendidikan_ibu') == "S1/Sederajat") selected @endif value="S1/Sederajat">S1/Sederajat</option>
                                <option @if (old('pendidikan_ibu') == "SLTA/Sederajat") selected @endif value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option @if (old('pendidikan_ibu') == "SLTP/Sederajat") selected @endif value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option @if (old('pendidikan_ibu') == "SD/Sederajat") selected @endif value="SD/Sederajat">SD/Sederajat</option>
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
                    <select class="form-select @error('pendapatan_ibu') is-invalid @enderror" name="pendapatan_ibu" value="{{old('pendapatan_ibu')}}" aria-label="Default select example">
                        <option selected value="">--Pilih Pendapatan--</option>
                        <option @if (old('pendapatan_ibu') == "< Rp. 1.000.000") selected @endif value="< Rp. 1.000.000">< Rp. 1.000.000</option>
                        <option @if (old('pendapatan_ibu') == "Rp. 1.000.000 - Rp. 2.000.000") selected @endif value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000 </option>
                        <option @if (old('pendapatan_ibu') == "Rp. 2.000.000 - Rp. 3.000.000") selected @endif value="Rp. 2.000.000 - Rp. 3.000.000">Rp. 2.000.000 - Rp. 3.000.000 </option>
                        <option @if (old('pendapatan_ibu') == "Rp. 3.000.000 - Rp. 4.000.000") selected @endif value="Rp. 3.000.000 - Rp. 4.000.000">Rp. 3.000.000 - Rp. 4.000.000 </option>
                        <option @if (old('pendapatan_ibu') == "Rp. 4.000.000 - Rp. 5.000.000") selected @endif value="Rp. 4.000.000 - Rp. 5.000.000">Rp. 4.000.000 - Rp. 5.000.000 </option>
                        <option @if (old('pendapatan_ibu') == "> Rp. 5.000.000") selected @endif value="> Rp. 5.000.000">> Rp. 5.000.000 </option>
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
                            <input type="text" class="form-control text-uppercase @error('nama_wali') is-invalid @enderror" id="nama_wali" name="nama_wali" value="{{old('nama_wali')}}">
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
                            <input type="text" class="form-control @error('tahun_lahir_wali') is-invalid @enderror" id="tahun_lahir_wali" name="tahun_lahir_wali" value="{{old('tahun_lahir_wali')}}">
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
                            <select class="form-select @error('pekerjaan_wali') is-invalid @enderror" name="pekerjaan_wali" value="{{old('pekerjaan_wali')}}" aria-label="Default select example">
                                <option selected value="">--Pilih pekerjaan--</option>
                                <option @if (old('pekerjaan_wali') == "PNS") selected @endif value="PNS">PNS</option>
                                <option @if (old('pekerjaan_wali') == "Wiraswasta") selected @endif value="Wiraswasta">Wiraswasta</option>
                                <option @if (old('pekerjaan_wali') == "Pedagang") selected @endif value="Pedagang">Pedagang</option>
                                <option @if (old('pekerjaan_wali') == "Buruh") selected @endif value="Buruh">Buruh</option>
                                <option @if (old('pekerjaan_wali') == "Karyawan Swast") selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                <option @if (old('pekerjaan_wali') == "Karyawan BUMN/BUMD") selected @endif value="Karyawan BUMN/BUMD">Karyawan BUMN/BUMD</option>
                                <option @if (old('pekerjaan_wali') == "Mengurus Rumah Tangga") selected @endif value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                <option @if (old('pekerjaan_wali') == "Dokter") selected @endif value="Dokter">Dokter</option>
                                <option @if (old('pekerjaan_wali') == "TNI") selected @endif value="TNI">TNI</option>
                                <option @if (old('pekerjaan_wali') == "POLRI") selected @endif value="POLRI">POLRI</option>
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
                            <select class="form-select @error('pendidikan_wali') is-invalid @enderror" name="pendidikan_wali" value="{{old('pendidikan_wali')}}" aria-label="Default select example">
                                <option selected value="">--Pilih pendidikan--</option>
                                <option @if (old('pendidikan_wali') == "S2/Sederajat") selected @endif value="S2/Sederajat">S2/Sederajat</option>
                                <option @if (old('pendidikan_wali') == "S1/Sederajat") selected @endif value="S1/Sederajat">S1/Sederajat</option>
                                <option @if (old('pendidikan_wali') == "SLTA/Sederajat") selected @endif value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option @if (old('pendidikan_wali') == "SLTP/Sederajat") selected @endif value="SLTP/Sederajat">SLTP/Sederajat</option>
                                <option @if (old('pendidikan_wali') == "SD/Sederajat") selected @endif value="SD/Sederajat">SD/Sederajat</option>
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
                    <select class="form-select @error('pendapatan_wali') is-invalid @enderror" name="pendapatan_wali" value="{{old('pendapatan_wali')}}" aria-label="Default select example">
                        <option selected value="">--Pilih pendidikan--</option>
                        <option selected value="">--Pilih Pendapatan--</option>
                        <option @if (old('pendapatan_wali') == "< Rp. 1.000.000") selected @endif value="< Rp. 1.000.000">< Rp. 1.000.000</option>
                        <option @if (old('pendapatan_wali') == "Rp. 1.000.000 - Rp. 2.000.000") selected @endif value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000 </option>
                        <option @if (old('pendapatan_wali') == "Rp. 2.000.000 - Rp. 3.000.000") selected @endif value="Rp. 2.000.000 - Rp. 3.000.000">Rp. 2.000.000 - Rp. 3.000.000 </option>
                        <option @if (old('pendapatan_wali') == "Rp. 3.000.000 - Rp. 4.000.000") selected @endif value="Rp. 3.000.000 - Rp. 4.000.000">Rp. 3.000.000 - Rp. 4.000.000 </option>
                        <option @if (old('pendapatan_wali') == "Rp. 4.000.000 - Rp. 5.000.000") selected @endif value="Rp. 4.000.000 - Rp. 5.000.000">Rp. 4.000.000 - Rp. 5.000.000 </option>
                        <option @if (old('pendapatan_wali') == "> Rp. 5.000.000") selected @endif value="> Rp. 5.000.000">> Rp. 5.000.000 </option>
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
                            <input type="number" class="form-control @error('tinggi_badan') is-invalid @enderror" id="tinggi_badan" name="tinggi_badan" value="{{old('tinggi_badan')}}">
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
                            <input type="number" class="form-control @error('berat_badan') is-invalid @enderror" id="berat_badan" name="berat_badan" value="{{old('berat_badan')}}">
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
                            <input type="number" class="form-control @error('jumlah_saudara_kandung') is-invalid @enderror" id="jumlah_saudara_kandung" name="jumlah_saudara_kandung" value="{{old('jumlah_saudara_kandung')}}">
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
                            <input type="number" class="form-control @error('jarak_tempat_tinggal_ke_sekolah') is-invalid @enderror" id="jarak_tempat_tinggal_ke_sekolah" name="jarak_tempat_tinggal_ke_sekolah" value="{{old('jarak_tempat_tinggal_ke_sekolah')}}" aria-describedby="JarakHelp">
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
                            <input type="number" class="form-control @error('waktu_tempuh_ke_sekolah') is-invalid @enderror" id="waktu_tempuh_ke_sekolah" name="waktu_tempuh_ke_sekolah" value="{{old('waktu_tempuh_ke_sekolah')}}">
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
                <h4 class="mb-3">Prestasi (optional)</h4>
                <div class="mb-2" id="fields">
                    {{-- form prestasi  --}}
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success btn-sm" id="addRow" type="button">
                        <img src="{{ asset('Styles/IMG/add_white_24dp.svg') }}" alt="add-icon">
                        Tambah Prestasi
                    </button>
                </div>
            </div>

            {{-- Group Form 8 --}}
            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                <h4 class="mb-3">Pilihan Jurusan</h4>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="jurusan_1" class="form-label">Jurusan Pilihan Ke-1</label>
                            <select class="form-select @error('jurusan_1') is-invalid @enderror" name="jurusan_1" value="{{old('jurusan_1')}}" aria-label="Default select example">
                                <option selected value="">--Pilih Jurusan 1--</option>
                                <option @if (old('jurusan_1') == "Teknik Komputer Jaringan") selected @endif value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                <option @if (old('jurusan_1') == "Perbankan Syari'ah") selected @endif value="Perbankan Syari'ah">Perbankan Syari'ah</option>
                                <option @if (old('jurusan_1') == "Teknik dan Bisnis Sepeda Motor") selected @endif value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
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
                            <select class="form-select @error('jurusan_2') is-invalid @enderror" name="jurusan_2" value="{{old('jurusan_2')}}" aria-label="Default select example">
                                <option selected value="">--Pilih Jurusan 2--</option>
                                <option @if (old('jurusan_2') == "Teknik Komputer Jaringan") selected @endif value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                <option @if (old('jurusan_2') == "Perbankan Syari'ah") selected @endif value="Perbankan Syari'ah">Perbankan Syari'ah</option>
                                <option @if (old('jurusan_2') == "Teknik dan Bisnis Sepeda Motor") selected @endif value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
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

            {{-- Button Daftar --}}
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
            </div>
        </form>
    </div>
@endsection

@section('additional JS')
    <script src="{{ asset('Styles/JS/yearpicker.js')}}"></script>
    <script src="{{ asset('Styles/JS/imagepreview.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
        // add row
        var room = 0;
        $("#addRow").click(function () {
            room++;
            var obj = document.getElementById('fields');
            var html = '';
            html += '<div class="mb-2">';
            html += '<h5>Prestasi '+room+'</h5>';
            html += '<div class="row">';
            html += '<div class="col-3">';
            html += '<div class="mb-3">';
            html += '<label for="jenis_prestasi_'+room+'" class="form-label">Jenis Prestasi</label>';
            html += '<select class="form-select @error('jenis_prestasi_+room') is-invalid @enderror" name="jenis_prestasi_'+room+'" value="{{old('jenis_prestasi_+room')}}" aria-label="Default select example">';
            html += '<option selected value="">--Jenis Prestasi--</option>';
            html += '<option @if (old('jenis_prestasi_+room') == "Kelompok") selected @endif value="Kelompok">Kelompok</option>';
            html += '<option @if (old('jenis_prestasi_+room') == "Individu") selected @endif value="Individu">Individu</option>';
            html += '</select>';
            html += '@error('jenis_prestasi_+room')';
            html += '<div class="invalid-feedback">';
            html += '{{$message}}';
            html += '</div>';
            html += '@enderror';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-4">';
            html += '<div class="mb-3">';
            html += '<label for="tingkat_prestasi_'+room+'" class="form-label">Tingkat</label>';
            html += '<select class="form-select @error('tingkat_prestasi_+room') is-invalid @enderror" name="tingkat_prestasi_'+room+'" value="{{old('tingkat_prestasi_+room')}}" aria-label="Default select example">';
            html += '<option selected value="">--Pilih Tingkat Prestasi--</option>';
            html += '<option @if (old('tingkat_prestasi_+room') == "Sekolah") selected @endif value="Sekolah">Sekolah</option>';
            html += '<option @if (old('tingkat_prestasi_+room') == "Wilayah") selected @endif value="Wilayah">Wilayah</option>';
            html += '<option @if (old('tingkat_prestasi_+room') == "Kabupaten/kota") selected @endif value="Kabupaten/kota">Kabupaten/kota</option>';
            html += '<option @if (old('tingkat_prestasi_+room') == "Provinsi") selected @endif value="Provinsi">Provinsi</option>';
            html += '<option @if (old('tingkat_prestasi_+room') == "Nasional") selected @endif value="Nasional">Nasional</option>';
            html += '<option @if (old('tingkat_prestasi_+room') == "Internasional") selected @endif value="Internasional">Internasional</option>';
            html += '<option @if (old('tingkat_prestasi_+room') == "Lainnya") selected @endif value="Lainnya">Lainnya</option>';
            html += '</select>';
            html += '@error('tingkat_prestasi_+room')';
            html += '<div class="invalid-feedback">';
            html += '{{$message}}';
            html += '</div>';
            html += '@enderror';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-5">';
            html += '<div class="mb-3">';
            html += '<label for="nama_prestasi_'+room+'" class="form-label">Nama Prestasi</label>';
            html += '<input type="text" class="form-control text-capitelize @error('nama_prestasi_+room') is-invalid @enderror" id="nama_prestasi_'+room+'" placeholder="E.g Olimpiade Matematika" name="nama_prestasi_'+room+'" value="{{old('nama_prestasi_+room')}}">';
            html += '@error('nama_prestasi_+room')';
            html += '<div class="invalid-feedback">';
            html += '{{$message}}';
            html += '</div>';
            html += '@enderror';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="row">';
            html += '<div class="col">';
            html += '<div class="mb-3">';
            html += '<label for="tahun_prestasi_'+room+'" class="form-label">Tahun</label>';
            html += '<input type="text" class="form-control @error('tahun_prestasi_+room') is-invalid @enderror" id="tahun_prestasi_'+room+'" placeholder="E.g 1960" name="tahun_prestasi_'+room+'" value="{{old('tahun_prestasi_+room')}}">';
            html += '@error('tahun_prestasi_+room')';
            html += '<div class="invalid-feedback">';
            html += '{{$message}}';
            html += '</div>';
            html += '@enderror';
            html += '</div>';
            html += '</div>';
            html += '<div class="col">';
            html += '<div class="mb-3">';
            html += '<label for="penyelenggara_prestasi_'+room+'" class="form-label">Penyelenggara</label>';
            html += '<input type="text" class="form-control text-capitelize @error('penyelenggara_prestasi_+room') is-invalid @enderror" id="penyelenggara_prestasi_'+room+'" placeholder="E.g Pemerintah Kab. Tasikmalaya" name="penyelenggara_prestasi_'+room+'" value="{{old('penyelenggara_prestasi_+room')}}">';
            html += '@error('penyelenggara_prestasi_+room')';
            html += '<div class="invalid-feedback">';
            html += '{{$message}}';
            html += '</div>';
            html += '@enderror';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            // ini
            html += '<div class="row my-3">';
            html += '<div class="col">';
            html += '<div class="input-group">';
            html += '<div class="custom-file">';
            html += '<label for="penyelenggara_prestasi_'+room+'" class="form-label">Sertifikat</label>';
            html += '<input type="file" class="form-control @error('sertifikat_+room') is-invalid @enderror" id="sertifikat_'+room+'" name="sertifikat_'+room+'" aria-describedby="sertifikatHelp">';
            html += '</div>';
            html += '</div>';
            html += '@error('sertifikat_+room')';
            html += '<div class="text-danger">';
            html += '<small>{{$message}}</small>';
            html += '</div>';
            html += '@enderror';
            html += '<div id="sertifikatHelp" class="form-text">Ketentuan :</br>*Format file : JPG</br>*Ukuran File : 100 Kb-3000 Kb</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            // ini
            html += '</div>';
            html += '<button class="btn btn-danger btn-sm mb-3" onclick="remove_fields('+room+');" type="button">';
            html += '<img src="{{ asset('Styles/IMG/delete_white_24dp.svg') }}" alt="add-icon">';
            html += '</button>';

            var divtest = document.createElement("div");
            divtest.setAttribute("class", "removeclass"+room);
            divtest.innerHTML = html;
            var rid = 'removeclass'+room;

            obj.appendChild(divtest);
        });

        // remove row
        function remove_fields(rid) {
            $('.removeclass'+rid).remove();
            room = rid-1;
        }
    </script>
    {{-- <script>
        $(document).ready(function(){
            var rooms = [1];
            // Add row
            $("#addRow").click(function () {
                var len = rooms.length;
                if (len < 1 ){
                    var last = 0;
                    var value = last + 1;
                }else if (len >= 1){
                    var value = len;
                }
                rooms.push(value);
                generateNewForm(value);
            });

            // Remove row
            function remove_fields(rid) {
                $('.removeclass'+rid).remove();
            };
            
            function generateNewForm(value){
                var obj = document.getElementById('fields');
                var html = '';
                html += '<div class="mb-2">';
                html += '<h5>Prestasi '+value+'</h5>';
                html += '<div class="row">';
                html += '<div class="col-3">';
                html += '<div class="mb-3">';
                html += '<label for="jenis_prestasi_'+value+'" class="form-label">Jenis Prestasi</label>';
                html += '<select class="form-select @error('jenis_prestasi_+value') is-invalid @enderror" name="jenis_prestasi_'+value+'" value="{{old('jenis_prestasi_+value')}}" aria-label="Default select example">';
                html += '<option selected value="">--Jenis Prestasi--</option>';
                html += '<option @if (old('jenis_prestasi_+value') == "Kelompok") selected @endif value="Kelompok">Kelompok</option>';
                html += '<option @if (old('jenis_prestasi_+value') == "Individu") selected @endif value="Individu">Individu</option>';
                html += '</select>';
                html += '@error('jenis_prestasi_+value')';
                html += '<div class="invalid-feedback">';
                html += '{{$message}}';
                html += '</div>';
                html += '@enderror';
                html += '</div>';
                html += '</div>';
                html += '<div class="col-4">';
                html += '<div class="mb-3">';
                html += '<label for="tingkat_prestasi_'+value+'" class="form-label">Tingkat</label>';
                html += '<select class="form-select @error('tingkat_prestasi_+value') is-invalid @enderror" name="tingkat_prestasi_'+value+'" value="{{old('tingkat_prestasi_+value')}}" aria-label="Default select example">';
                html += '<option selected value="">--Pilih Tingkat Prestasi--</option>';
                html += '<option @if (old('tingkat_prestasi_+value') == "Sekolah") selected @endif value="Sekolah">Sekolah</option>';
                html += '<option @if (old('tingkat_prestasi_+value') == "Wilayah") selected @endif value="Wilayah">Wilayah</option>';
                html += '<option @if (old('tingkat_prestasi_+value') == "Kabupaten/kota") selected @endif value="Kabupaten/kota">Kabupaten/kota</option>';
                html += '<option @if (old('tingkat_prestasi_+value') == "Provinsi") selected @endif value="Provinsi">Provinsi</option>';
                html += '<option @if (old('tingkat_prestasi_+value') == "Nasional") selected @endif value="Nasional">Nasional</option>';
                html += '<option @if (old('tingkat_prestasi_+value') == "Internasional") selected @endif value="Internasional">Internasional</option>';
                html += '<option @if (old('tingkat_prestasi_+value') == "Lainnya") selected @endif value="Lainnya">Lainnya</option>';
                html += '</select>';
                html += '@error('tingkat_prestasi_+value')';
                html += '<div class="invalid-feedback">';
                html += '{{$message}}';
                html += '</div>';
                html += '@enderror';
                html += '</div>';
                html += '</div>';
                html += '<div class="col-5">';
                html += '<div class="mb-3">';
                html += '<label for="nama_prestasi_'+value+'" class="form-label">Nama Prestasi</label>';
                html += '<input type="text" class="form-control text-capitelize @error('nama_prestasi_+value') is-invalid @enderror" id="nama_prestasi_'+value+'" placeholder="E.g Olimpiade Matematika" name="nama_prestasi_'+value+'" value="{{old('nama_prestasi_+value')}}">';
                html += '@error('nama_prestasi_+value')';
                html += '<div class="invalid-feedback">';
                html += '{{$message}}';
                html += '</div>';
                html += '@enderror';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '<div class="row">';
                html += '<div class="col">';
                html += '<div class="mb-3">';
                html += '<label for="tahun_prestasi_'+value+'" class="form-label">Tahun</label>';
                html += '<input type="text" class="form-control @error('tahun_prestasi_+value') is-invalid @enderror" id="tahun_prestasi_'+value+'" placeholder="E.g 1960" name="tahun_prestasi_'+value+'" value="{{old('tahun_prestasi_+value')}}">';
                html += '@error('tahun_prestasi_+value')';
                html += '<div class="invalid-feedback">';
                html += '{{$message}}';
                html += '</div>';
                html += '@enderror';
                html += '</div>';
                html += '</div>';
                html += '<div class="col">';
                html += '<div class="mb-3">';
                html += '<label for="penyelenggara_prestasi_'+value+'" class="form-label">Penyelenggara</label>';
                html += '<input type="text" class="form-control text-capitelize @error('penyelenggara_prestasi_+value') is-invalid @enderror" id="penyelenggara_prestasi_'+value+'" placeholder="E.g Pemerintah Kab. Tasikmalaya" name="penyelenggara_prestasi_'+value+'" value="{{old('penyelenggara_prestasi_+value')}}">';
                html += '@error('penyelenggara_prestasi_+value')';
                html += '<div class="invalid-feedback">';
                html += '{{$message}}';
                html += '</div>';
                html += '@enderror';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                // ini
                html += '<div class="row my-3">';
                html += '<div class="col">';
                html += '<div class="input-group">';
                html += '<div class="custom-file">';
                html += '<label for="penyelenggara_prestasi_'+value+'" class="form-label">Sertifikat</label>';
                html += '<input type="file" class="form-control @error('sertifikat_+value') is-invalid @enderror" id="sertifikat_'+value+'" name="sertifikat_'+value+'" aria-describedby="sertifikatHelp">';
                html += '</div>';
                html += '</div>';
                html += '@error('sertifikat_+value')';
                html += '<div class="text-danger">';
                html += '<small>{{$message}}</small>';
                html += '</div>';
                html += '@enderror';
                html += '<div id="sertifikatHelp" class="form-text">Ketentuan :</br>*Format file : JPG</br>*Ukuran File : 100 Kb-3000 Kb</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                // ini
                html += '</div>';
                html += '<button class="btn btn-danger btn-sm mb-3" onclick="remove_fields('+value+');" type="button">';
                html += '<img src="{{ asset('Styles/IMG/delete_white_24dp.svg') }}" alt="add-icon">';
                html += '</button>';

                var divtest = document.createElement("div");
                divtest.setAttribute("class", "removeclass"+value);
                divtest.innerHTML = html;
                var rid = 'removeclass'+value;

                obj.appendChild(divtest);
            };
        });
    </script> --}}
@endsection

