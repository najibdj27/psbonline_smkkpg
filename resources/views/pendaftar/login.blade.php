@extends('layout.base')

@section('tittle', 'Login | SMK KPG')

@section('additional CSS')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 vh-100">
                <div class="d-flex h-100">
                    <div class="m-auto">
                        <div class="d-flex mb-3">
                            <img class="mx-auto" src="http://s.sim.siap-online.com//upload/sekolah/20268064.150206152145.png" alt="">
                        </div>
                        <h1 class="text-center">PSB Online</br>SMK Komunika Prestasi Gentur</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 vh-100">
                <div class="d-flex h-100">
                    <div class="m-auto">
                        <form method="post" class="needs-validation">@csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{old('email')}}" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Kita tidak akan membagikan emailmu kepada siapapun.</small>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class=" d-flex">
                                <button type="submit" class="mx-auto mt-2 btn btn-primary text-white">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')

@endsection
