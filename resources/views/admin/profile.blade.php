@extends('layout.base')

@section('tittle', 'Profile | Admin')

@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebaradmin')
    @include('layout.alert')
    <div class="container my-4 justify-content-center">
        <div class="row mt-4"></div>
        <div class="row mt-4">
            <div class="col-9 mx-auto text-wrap">
                <div class="photo rounded overflow-hidden mx-auto" style="height:300px; width: 300px;">
                    <img src="{{asset('Uploads/images/'.$user->username.'/'.Auth::user()->profile_photo)}}" class=" card-img-top" alt="...">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mt-4 ps-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="fw-bold">Nama</h5>
                                            <p class="ms-2 text-uppercase">{{$admin->nama}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="fw-bold">Jenis Kelamin</h5>
                                            <p class="ms-2">{{$admin->jenis_kelamin}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="fw-bold">Alamat</h5>
                                            <p class="ms-2">{{$admin->alamat}}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-4 ps-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="fw-bold">Username</h5>
                                            <p class="ms-2">{{$user->username}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="fw-bold">email</h5>
                                            <p class="ms-2">{{$user->email}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="fw-bold">No. Handphone</h5>
                                            <p class="ms-2">{{$admin->nomor_hp}}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-3 d-grid gap-2 mx-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileAdmin">
                    <i class='bx bxs-edit'></i>
                    Edit
                </button>
            </div>
        </div> 
    </div>
    <!-- Modal Edit Profile Admin-->
    <form method="post" action="/admin/{{$admin->id}}/{{$user->id}}" enctype="multipart/form-data">@method('put')@csrf
        <div class="modal fade" id="editProfileAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfileAdminLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProfileAdminLabel">Edit Idenitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
                            <div class="row my-3">
                                {{-- Photo Profile Preview --}}
                                <div class="col-3">
                                    <div class="card position-relative" style="padding-bottom: 226.5px">
                                        <img src="{{asset('Uploads/images/'.Auth::user()->username.'/'.Auth::user()->profile_photo)}}" id="preview_profile_photo" class="card-img-top position-absolute" alt="">
                                    </div>
                                </div>
                                {{-- Photo Profile Form --}}
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
                        </div>
                        <div class="form-group mx-auto border rounded-5 border-1 p-5 mb-3" style="width: 800px;">
                            <div class="row">
                                {{-- Nama  --}}
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control text-uppercase @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{$admin->nama}}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Jenis Kelamin --}}
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
                                        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{$admin->jenis_kelamin}}" aria-label="Default select example">
                                            <option selected value="">--Pilih jenis kelamin--</option>
                                            <option @if ($admin->jenis_kelamin == "Laki-Laki") selected @endif value="Laki-Laki">Laki-Laki</option>
                                            <option @if ($admin->jenis_kelamin == "Perempuan") selected @endif value="Perempuan">Perempuan</option>
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
                                {{-- Nomor Handphone --}}
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No. HP</label>
                                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{$admin->nomor_hp}}">
                                        @error('no_hp')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Alamat Lengkap --}}
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="alamat_lengkap" class="form-label">Alamat lengkap</label>
                                        <input type="text" class="form-control text-capitalize @error('alamat_lengkap') is-invalid @enderror" id="alamat_lengkap" name="alamat_lengkap" value="{{$admin->alamat}}">
                                        @error('alamat_lengkap')
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
@endsection

@section('additional JS')
    @if ($errors->any())
        <script type="text/javascript">
            $(document).ready(function(){
                $('#editProfileAdmin').modal('show');
            });
        </script>
    @endif
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
@endsection
    