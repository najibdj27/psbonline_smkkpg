<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Admin;
use \App\Models\Setting;
use \App\Models\Pendaftar;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftar = Pendaftar::all();
        $data = [
            'pendaftar' => $pendaftar
        ];
        return view('admin.dashboard', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendaftaran()
    {
        $pendaftar = Pendaftar::all();
        foreach ($pendaftar as $pndftr) {
            $users = User::where('id', '=', $pndftr->user_id)->get();
        }
        $data = [
            'pendaftar' => $pendaftar,
            'users' => $users,
        ];
        return view('admin.pendaftaran', $data);
        // return $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $setting = Setting::firstWhere('id', 1);
        $data = [
            'setting' => $setting
        ];
        return view('admin.settings', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings_update(Request $request)
    {
        $request->validate([
            'tahun_pendaftaran' => ['required', 'regex:/^[0-9]+/', 'digits_between:1,4', 'numeric'],
            'gelombang_pendaftaran' => ['required']
        ]);

        Setting::where('id', 1)
            ->update([
                'tahun_pendaftaran' => $request->tahun_pendaftaran,
                'gelombang_pendaftaran' => $request->gelombang_pendaftaran
            ]);
        return redirect()->route('settings_pendaftaran')->with('sukses', 'Setting berhasil diperbaharui!');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email',],
            'password' => ['required'],
            'role' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard_admin');
        }
        return back()->withErrors([
            'email' => 'Email atau password yang anda masukan salah.'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            // User
            'username' => ['required', 'unique:App\Models\User,username'],
            'email' => ['required', 'email', 'unique:App\Models\User,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],

            // Admin
            'nama' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required'],
            'nomor_hp' => ['required', 'regex:/^[0-9]+/', 'size:12'],
        ]);
        $role = 'Admin';

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role' => $role,
            'password' => Hash::make($request->password),
        ]);

        $this_user_id = User::select('id')->where('username', $request->username)->get()->implode('id', ', ');
        $this_user = User::find((int) $this_user_id);
        $admin = new Admin([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
        ]);
        $admin->user()->associate($this_user);
        $admin->save();
        // return $request;
        return redirect()->route('create_admin')->with('sukses', 'Admin berhasil ditambahkan');
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
        $admin = Admin::firstWhere('user_id', (int)$get_user_id);

        $data = [
            'user' => $user,
            'admin' => $admin
        ];
        return view('admin.profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin, User $user)
    {
        $request->validate([
            // Form Group 1
            'username' => ['required', 'unique:App\Models\User,username,' . $user->id],
            'email' => ['required', 'email', 'unique:App\Models\User,email,' . $user->id],
            'profile_photo' => ['image', 'dimensions:ratio=2/3', 'between:100,300', 'mimes:jpg,jpeg'],

            // Form Group 2
            'nama' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat_lengkap' => ['required'],
            'no_hp' => ['required', 'regex:/^[0-9]+/', 'size:12'],
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

        Admin::where('id', $admin->id)
            ->update([
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nomor_hp' => $request->no_hp,
                'alamat' => $request->alamat_lengkap
            ]);
        return redirect()->route('profile_admin')->with('sukses', 'Data berhasil dirubah!');
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
