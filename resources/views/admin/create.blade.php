@extends('layout.base')

@section('tittle', 'Create | Admin')

@section('additional CSS')
    @include('layout.alert')
    <div class="container my-3">
        <form method="post" enctype="multipart/form-data">@csrf
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

            <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                <h4 class="mb-3">Data Admin</h4>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="username" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Admin" id="nama" name='nama' value="{{old('nama')}}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
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
                <div class="row">
                    <div class="col-8 mb-3">
                        <label for="alamat" class="form-label">Alamat lengkap</label>
                        <input type="text" class="form-control text-capitalize @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{old('alamat')}}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-4 mb-3">
                        <label for="nomor_hp" class="form-label">No. HP</label>
                        <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" id="nomor_hp" name="nomor_hp" value="{{old('nomor_hp')}}">
                        @error('nomor_hp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Button Daftar --}}
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Buat</button>
            </div>
        </form>
    </div>
@endsection

@section('content')

@endsection

@section('additional JS')

@endsection
