@extends('layout.base')

@section('tittle', 'Pendaftaran | Admin')
    
@section('additional CSS')
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset ('/Styles/CSS/print.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
@endsection

@section('content')
    @include('layout.sidebaradmin')
    @include('layout.alert')
    @inject('user', 'App\Models\User')
    <div class="container my-4">
        <h1 class="mt-3">Tabel Pendaftar</h1>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-9">
                {{-- Tabel daftar pendaftar --}}
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftar as $pndftr)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$pndftr->nama}}</td>
                            <td>{{$pndftr->jenis_kelamin}}</td>
                            <td>{{$pndftr->alamat}} RT. {{$pndftr->rt}} RW. {{$pndftr->rw}}</td>
                            <td>
                                <a data-bs-toggle="tooltip" title="Lihat detail" data-bs-placement="Top">
                                    <button id="detail" class="btn btn-outline-info" type="button" data-bs-toggle="modal" data-bs-target="#detailPendaftar{{$pndftr->id}}">
                                        <i class='bx bxs-detail'></i>
                                    </button>
                                </a>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus pendaftar">
                                    <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal" data-bs-target="#konfirmasiHapusPendaftar{{$pndftr->id}}">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                </a>
                                {{-- Modal Konfirmasi Hapus Data Prestasi --}}
                                <form method="post" class="d-inline" action="admin/pendaftar/{{ $pndftr->id }}">@method('delete')@csrf
                                    <div class="modal fade" id="konfirmasiHapusPendaftar{{ $pndftr->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="konfirmasiHapusDataPrestasi{{ $pndftr->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="konfirmasiHapusDataPrestasi{{ $pndftr->id }}Label">Hapus {{ $pndftr->nama }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus {{ $pndftr->nama }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-primary">Yes</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Modal Deatail Pendaftar --}}
                                <div class="modal fade" id="detailPendaftar{{ $pndftr->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="konfirmasiHapusDataPrestasi{{ $pndftr->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="detailPendaftar{{ $pndftr->id }}Label">{{ $pndftr->nama }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="printJS-pendaftar{{$pndftr->id}}">
                                            <div class="row">
                                                <div class="col-4 mt-4">
                                                    <div class="photo rounded overflow-hidden ms-4" style="height:300px; width: 300px;">
                                                        <img src="{{asset('Uploads/images/'.$users[$loop->index]['username'].'/'.$users[$loop->index]['profile_photo'])}}" class=" card-img-top" alt="...">
                                                    </div>
                                                    <div class="mt-4 ps-4">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h5 class="fw-bold">Nama</h5>
                                                                        <p class="ms-2">{{$pndftr->nama}}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h5 class="fw-bold">NISN</h5>
                                                                        <p class="ms-2">{{$pndftr->NISN}}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h5 class="fw-bold">Jenis Kelamin</h5>
                                                                        <p class="ms-2">{{$pndftr->jenis_kelamin}}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h5 class="fw-bold">Agama</h5>
                                                                        <p class="ms-2">{{$pndftr->agama}}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h5 class="fw-bold">Alamat</h5>
                                                                        <p class="ms-2">{{$pndftr->alamat}} RT. {{$pndftr->rt}} RW. {{$pndftr->rw}} Desa {{$pndftr->desa}} Kec. {{$pndftr->kecamatan}} Kota/Kab {{$pndftr->kab_kota}} {{$pndftr->provinsi}}, {{$pndftr->kode_pos}}.</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h5 class="fw-bold">No. Handphone</h5>
                                                                        <p class="ms-2">{{$pndftr->nomor_hp}}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>    
                                                                    <td>
                                                                        <h5 class="fw-bold">Email</h5>
                                                                        <p class="ms-2">{{$users[$loop->index]['email']}}</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        
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
                                                                        <td>: {{$pndftr->nama_ayah}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pekerjaan</td>
                                                                        <td>: {{$pndftr->pekerjaan_ayah}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pendidikan</td>
                                                                        <td>: {{$pndftr->pendidikan_ayah}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Penghasilan</td>
                                                                        <td>: {{$pndftr->penghasilan_ayah}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Tahun lahir</td>
                                                                        <td>: {{$pndftr->tahun_lahir_ayah}}</td>
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
                                                                        <td>: {{$pndftr->nama_ibu}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pekerjaan</td>
                                                                        <td>: {{$pndftr->pekerjaan_ibu}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pendidikan</td>
                                                                        <td>: {{$pndftr->pendidikan_ibu}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Penghasilan</td>
                                                                        <td>: {{$pndftr->penghasilan_ibu}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Tahun lahir</td>
                                                                        <td>: {{$pndftr->tahun_lahir_ibu}}</td>
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
                                                                        <td class="col-10">: {{$pndftr->nama_wali}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pekerjaan</td>
                                                                        <td class="col-10">: {{$pndftr->pekerjaan_wali}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pendidikan</td>
                                                                        <td class="col-10">: {{$pndftr->pendidikan_wali}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Penghasilan</td>
                                                                        <td class="col-10">: {{$pndftr->penghasilan_wali}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Tahun lahir</td>
                                                                        <td class="col-10">: {{$pndftr->tahun_lahir_wali}}</td>
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
                                                                        <td class="col-8">: {{$pndftr->nomor_pendaftaran}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Nomor Seri Ijazah</td>
                                                                        <td class="col-8">: {{$pndftr->nomor_seri_ijazah}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Nomor Seri SKHUN</td>
                                                                        <td class="col-8">: {{$pndftr->nomor_seri_SKHUN}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Nomor Registrasi Akta Lahir </td>
                                                                        <td class="col-8">: {{$pndftr->nomor_reg_akta_lahir}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Nomor UN</td>
                                                                        <td class="col-8">: {{$pndftr->nomor_UN}}</td>
                                                                    </tr>   
                                                                    <tr>
                                                                        <td class="fw-bold">Asal Sekolah</td>
                                                                        <td class="col-8">: {{$pndftr->asal_sekolah}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Nomor KPS</td>
                                                                        <td class="col-8">: {{$pndftr->nomor_KPS}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Nomor KIP</td>
                                                                        <td class="col-8">: {{$pndftr->nomor_KIP}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Gelombang Pendaftaran</td>
                                                                        <td class="col-8">: {{$pndftr->gelombang_pendaftaran}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pilihan Jurusan 1</td>
                                                                        <td class="col-8">: {{$pndftr->pilihan_jurusan_1}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fw-bold">Pilihan Jurusan 2</td>
                                                                        <td class="col-8">: {{$pndftr->pilihan_jurusan_2}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                <i class='bx bx-x'></i>
                                                Close
                                            </button>
                                            <button type="button" class="btn btn-primary" onclick="printJS({
                                                printable: 'printJS-pendaftar{{$pndftr->id}}', 
                                                type: 'html',
                                                css: 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
                                                })">
                                                <i class='bx bxs-printer'></i>
                                                Print Form
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- Tabel daftar pendaftar --}}
                <table class="table table-striped table-bordered border-dark table-responsive position-absolute" id="printJS-pendaftarTable" style="visibility: hidden">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftar as $pndftr)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$pndftr->nama}}</td>
                            <td>{{$pndftr->jenis_kelamin}}</td>
                            <td>{{$pndftr->alamat}} RT. {{$pndftr->rt}} RW. {{$pndftr->rw}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" 
                onclick="printJS({
                    printable: 'printJS-pendaftarTable', 
                    type: 'html',
                    style: '#printJS-pendaftarTable {visibility: visible;!important}',
                    css: ['https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'],
                    })">
                    <i class='bx bxs-printer'></i>
                    Print Form
                </button>
            </div>
        </div>
    </div>
@endsection

@section('additional JS')
    {{-- <script type="text/javascript">
    $('document').ready(function () { 
        $("#printJS-table").click(function(){
            $("#printJS-pendaftarTable").removeClass("d-none");
        });
    });
    </script> --}}
    <script src="{{ asset('Styles/JS/sidebar.js')}}"></script>
    <script src="{{ asset('Styles/JS/print.min.js')}}"></script>
@endsection
