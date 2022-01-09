<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use \App\Models\Pendaftar;
use \App\Models\User;
use \App\Models\Prestasi;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('pendaftar.login');
    }

    public function dashboard()
    {
        $get_user_id = Auth::user()->id;
        $pendaftar = Pendaftar::firstWhere('user_id', (int) $get_user_id);

        $data = [
            'pendaftar' => $pendaftar
        ];
        return view('pendaftar.dashboard', $data);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email',],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard_pendaftar');
        }
        return back()->withErrors([
            'email' => 'Email atau password yang anda masukan salah.'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function index($pass)
    {
        $hashedPassword = User::where('username', 'najibdj_')->get()->implode('password', ', ');
        if (Hash::check($pass, $hashedPassword)) {
            return ('Match!');
        } else {
            return ('Not match!');
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftar.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // Form Group 1
            'username' => ['required', 'unique:App\Models\User,username'],
            'email' => ['required', 'email', 'unique:App\Models\User,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
            'profile_photo' => ['required', 'image', 'dimensions:ratio=2/3', 'between:100,300', 'mimes:jpg,jpeg'],
            // Form Group 2
            'NISN' => ['required', 'size:10', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,NISN'],
            'SKHUN' => ['required', 'size:11', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,nomor_seri_SKHUN'],
            'noUN' => ['required', 'size:14', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,nomor_UN'],
            'nomor_seri_ijazah' => ['required', 'unique:App\Models\Pendaftar,nomor_seri_ijazah'],
            'NIK' => ['required', 'size:16', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,NIK'],
            'noRAL' => ['required', 'max:18', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,nomor_reg_akta_lahir'],
            'nama' => ['required'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required'],
            'tempat_lahir' => ['required'],
            'agama' => ['required'],
            'asal_sekolah' => ['required'],
            'provinsi' => ['required'],
            'kab_kota' => ['required'],
            'kecamatan' => ['required'],
            'kel_desa' => ['required'],
            'dusun' => ['nullable'],
            'alamat_lengkap' => ['required'],
            'rt' => ['required', 'regex:/^[0-9]+/', 'size:3'],
            'rw' => ['required', 'regex:/^[0-9]+/', 'size:3'],
            'kode_pos' => ['required', 'size:5', 'regex:/^[0-9]+/'],
            'jenis_tinggal' => ['required'],
            'no_telpon_rumah' => ['nullable', 'regex:/^[0-9]+/'],
            'no_hp' => ['required', 'regex:/^[0-9]+/', 'size:12'],
            'no_kps' => ['nullable', 'regex:/^[0-9]+/', 'size:6'],
            'no_kip' => ['nullable', 'regex:/^[0-9]+/', 'size:6'],
            // Form Group 3
            'nama_ayah' => ['required'],
            'tahun_lahir_ayah' => ['required', 'regex:/^[0-9]+/'],
            'pekerjaan_ayah' => ['required'],
            'pendidikan_ayah' => ['required'],
            'pendapatan_ayah' => ['required'],
            // Form Group 4
            'nama_ibu' => ['required'],
            'tahun_lahir_ibu' => ['required', 'regex:/^[0-9]+/'],
            'pekerjaan_ibu' => ['required'],
            'pendidikan_ibu' => ['required'],
            'pendapatan_ibu' => ['required'],
            // Form Group 5
            'nama_wali' => ['nullable'],
            'tahun_lahir_wali' => ['nullable', 'regex:/^[0-9]+/'],
            'pekerjaan_wali' => ['nullable'],
            'pendidikan_wali' => ['nullable'],
            'pendapatan_wali' => ['nullable'],
            // Form Group 6
            'tinggi_badan' => ['required', 'min:1', 'max:999', 'numeric'],
            'berat_badan' => ['required', 'min:1', 'max:999', 'numeric'],
            'jumlah_saudara_kandung' => ['required', 'min:1', 'max:99', 'numeric'],
            'jarak_tempat_tinggal_ke_sekolah' => ['nullable', 'min:1', 'max:999', 'numeric'],
            'waktu_tempuh_ke_sekolah' => ['nullable', 'min:1', 'max:999', 'numeric'],
        ]);

        $new_image_name = time() . '-' . $request->file('profile_photo')->getClientOriginalName();
        $request->profile_photo->move(public_path('Uploads/images/' . $request->username), $new_image_name);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_photo' => $new_image_name,
        ]);

        $this_user_id = User::select('id')->where('username', $request->username)->get()->implode('id', ', ');
        $this_user = User::find((int) $this_user_id);
        $pendaftar = new Pendaftar([
            'NISN' => $request->NISN,
            'nomor_seri_SKHUN' => $request->SKHUN,
            'nomor_reg_akta_lahir' => $request->noRAL,
            'nomor_seri_ijazah' => $request->nomor_seri_ijazah,
            'NIK' => $request->NIK,
            'nomor_UN' => $request->noUN,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat_lengkap,
            'agama' => $request->agama,
            'asal_sekolah' => $request->asal_sekolah,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->kel_desa,
            'dusun' => $request->dusun,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kode_pos' => $request->kode_pos,
            'jenis_tinggal' => $request->jenis_tinggal,
            'no_telp_rumah' => $request->no_telp_rumah,
            'nomor_hp' => $request->no_hp,
            'nomor_KPS' => $request->no_kps,
            'nomor_KIP' => $request->no_kip,
            // Group Form 3
            'nama_ayah' => $request->nama_ayah,
            'tahun_lahir_ayah' => $request->tahun_lahir_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'penghasilan_ayah' => $request->pendapatan_ayah,
            // Group Form 4
            'nama_ibu' => $request->nama_ibu,
            'tahun_lahir_ibu' => $request->tahun_lahir_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'penghasilan_ibu' => $request->pendapatan_ibu,
            // Group Form 5
            'nama_wali' => $request->nama_wali,
            'tahun_lahir_wali' => $request->tahun_lahir_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'pendidikan_wali' => $request->pendidikan_wali,
            'penghasilan_wali' => $request->pendapatan_wali,
            // Group Form 6
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'jumlah_saudara_kandung' => $request->jumlah_saudara_kandung,
            'jarak_tempuh_sekolah' => $request->jarak_tempat_tinggal_ke_sekolah,
            'waktu_tempuh_sekolah' => $request->waktu_tempuh_sekolah,
        ]);
        $pendaftar->user()->associate($this_user);
        $pendaftar->save();
        return redirect('/')->with('berhasil', 'Pendaftaran Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $get_user_id = Auth::user()->id;
        $user = Auth::user();
        $pendaftar = Pendaftar::firstWhere('user_id', (int) $get_user_id);
        $prestasi = Prestasi::where('pendaftar_id', $pendaftar->id)->get();

        $data = [
            'user' => $user,
            'pendaftar' => $pendaftar,
            'prestasi' => $prestasi
        ];
        return view('pendaftar.profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftar $pendaftar, User $user)
    {
        $request->validate([
            // Form Group 1
            'username' => ['required', 'unique:App\Models\User,username,' . $user->id],
            'email' => ['required', 'email', 'unique:App\Models\User,email,' . $user->id],
            'profile_photo' => ['image', 'dimensions:ratio=2/3', 'between:100,300', 'mimes:jpg,jpeg'],
            // Form Group 2
            'NISN' => ['required', 'size:10', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,NISN,' . $pendaftar->id],
            'SKHUN' => ['required', 'size:11', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,nomor_seri_SKHUN,' . $pendaftar->id],
            'noUN' => ['required', 'size:14', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,nomor_UN,' . $pendaftar->id],
            'nomor_seri_ijazah' => ['required', 'unique:App\Models\Pendaftar,nomor_seri_ijazah,' . $pendaftar->id],
            'NIK' => ['required', 'size:16', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,NIK,' . $pendaftar->id],
            'noRAL' => ['required', 'max:18', 'regex:/^[0-9]+/', 'unique:App\Models\Pendaftar,nomor_reg_akta_lahir,' . $pendaftar->id],
            'nama' => ['required'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required'],
            'tempat_lahir' => ['required'],
            'agama' => ['required'],
            'asal_sekolah' => ['required'],
            'provinsi' => ['required'],
            'kab_kota' => ['required'],
            'kecamatan' => ['required'],
            'kel_desa' => ['required'],
            'dusun' => ['nullable'],
            'alamat_lengkap' => ['required'],
            'rt' => ['required', 'regex:/^[0-9]+/', 'size:3'],
            'rw' => ['required', 'regex:/^[0-9]+/', 'size:3'],
            'kode_pos' => ['required', 'size:5', 'regex:/^[0-9]+/'],
            'jenis_tinggal' => ['required'],
            'no_telpon_rumah' => ['nullable', 'regex:/^[0-9]+/'],
            'no_hp' => ['required', 'regex:/^[0-9]+/', 'size:12'],
            'no_kps' => ['nullable', 'regex:/^[0-9]+/', 'size:6'],
            'no_kip' => ['nullable', 'regex:/^[0-9]+/', 'size:6'],
            // Form Group 3
            'nama_ayah' => ['required'],
            'tahun_lahir_ayah' => ['required', 'regex:/^[0-9]+/'],
            'pekerjaan_ayah' => ['required'],
            'pendidikan_ayah' => ['required'],
            'pendapatan_ayah' => ['required'],
            // Form Group 4
            'nama_ibu' => ['required'],
            'tahun_lahir_ibu' => ['required', 'regex:/^[0-9]+/'],
            'pekerjaan_ibu' => ['required'],
            'pendidikan_ibu' => ['required'],
            'pendapatan_ibu' => ['required'],
            // Form Group 5
            'nama_wali' => ['nullable'],
            'tahun_lahir_wali' => ['nullable', 'regex:/^[0-9]+/'],
            'pekerjaan_wali' => ['nullable'],
            'pendidikan_wali' => ['nullable'],
            'pendapatan_wali' => ['nullable'],
            // Form Group 6
            'tinggi_badan' => ['required', 'min:1', 'max:999', 'numeric'],
            'berat_badan' => ['required', 'min:1', 'max:999', 'numeric'],
            'jumlah_saudara_kandung' => ['required', 'min:1', 'max:99', 'numeric'],
            'jarak_tempat_tinggal_ke_sekolah' => ['nullable', 'min:1', 'max:999', 'numeric'],
            'waktu_tempuh_ke_sekolah' => ['nullable', 'min:1', 'max:999', 'numeric'],
        ]);
        if ($request->profile_photo != null) {
            $new_image_name = time() . '-' . $request->file('profile_photo')->getClientOriginalName();
            $request->profile_photo->move(public_path('Uploads/images/' . $request->username), $new_image_name);
            User::where('id', $user->id)
                ->update([
                    'username' => $request->username,
                    'email' => $request->email,
                    'profile_photo' => $new_image_name,
                ]);
        }
        User::where('id', $user->id)
            ->update([
                'username' => $request->username,
                'email' => $request->email,
            ]);
        Pendaftar::where('id', $pendaftar->id)
            ->update([
                'NISN' => $request->NISN,
                'nomor_seri_SKHUN' => $request->SKHUN,
                'nomor_UN' => $request->noUN,
                'nomor_seri_ijazah' => $request->nomor_seri_ijazah,
                'NIK' => $request->NIK,
                'nomor_reg_akta_lahir' => $request->noRAL,
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'agama' => $request->agama,
                'asal_sekolah' => $request->asal_sekolah,
                'provinsi' => $request->provinsi,
                'kab_kota' => $request->kab_kota,
                'kecamatan' => $request->kecamatan,
                'desa' => $request->kel_desa,
                'dusun' => $request->dusun,
                'alamat' => $request->alamat_lengkap,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kode_pos' => $request->kode_pos,
                'jenis_tinggal' => $request->jenis_tinggal,
                'no_telp_rumah' => $request->no_telpon_rumah,
                'nomor_hp' => $request->no_hp,
                'nomor_KPS' => $request->no_kps,
                'nomor_KIP' => $request->no_kip,
                'nama_ayah' => $request->nama_ayah,
                'tahun_lahir_ayah' => $request->tahun_lahir_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'pendidikan_ayah' => $request->pendidikan_ayah,
                'penghasilan_ayah' => $request->pendapatan_ayah,
                'nama_ibu' => $request->nama_ibu,
                'tahun_lahir_ibu' => $request->tahun_lahir_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'pendidikan_ibu' => $request->pendidikan_ibu,
                'penghasilan_ibu' => $request->pendapatan_ibu,
                'nama_wali' => $request->nama_wali,
                'tahun_lahir_wali' => $request->tahun_lahir_wali,
                'pekerjaan_wali' => $request->pekerjaan_wali,
                'pendidikan_wali' => $request->pendidikan_wali,
                'penghasilan_wali' => $request->pendapatan_wali,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'jumlah_saudara_kandung' => $request->jumlah_saudara_kandung,
                'jarak_tempuh_sekolah' => $request->jarak_tempat_tinggal_ke_sekolah,
                'waktu_tempuh_sekolah' => $request->waktu_tempuh_ke_sekolah,
                'pilihan_jurusan_1' => $request->jurusan_1,
                'pilihan_jurusan_2' => $request->jurusan_2,
            ]);
        return redirect()->route('profile')->with('sukses', 'Data Identitas berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
