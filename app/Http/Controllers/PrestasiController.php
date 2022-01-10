<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pendaftar;
use \App\Models\User;
use \App\Models\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pendaftar $pendaftar)
    {
        $new_image_name = time() . '-' . $request->file('sertifikat')->getClientOriginalName();
        $request->sertifikat->move(public_path('Uploads/images/' . $request->username), $new_image_name);
        Prestasi::create([
            'pendaftar_id' => $pendaftar->id,
            'jenis_prestasi' => $request->jenis_prestasi,
            'tingkat_prestasi' => $request->tingkat_prestasi,
            'nama_prestasi' => $request->nama_prestasi,
            'tahun' => $request->tahun_prestasi,
            'penyelenggara' => $request->penyelenggara_prestasi,
            'sertifikat_photo' => $new_image_name,
        ]);
        return redirect()->route('profile')->with('sukses', 'Data Prestasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, Prestasi $prestasi)
    {
        if ($request->sertifikat != null) {
            $new_image_name = time() . '-' . $request->file('sertifikat')->getClientOriginalName();
            $request->sertifikat->move(public_path('Uploads/images/' . $request->username), $new_image_name);
            Prestasi::where('id', $prestasi->id)
                ->update([
                    'jenis_prestasi' => $request->jenis_prestasi,
                    'tingkat_prestasi' => $request->tingkat_prestasi,
                    'nama_prestasi' => $request->nama_prestasi,
                    'penyelenggara' => $request->penyelenggara_prestasi,
                    'tahun' => $request->tahun_prestasi,
                    'seritifkat_photo' => $new_image_name,
                ]);
        }
        Prestasi::where('id', $prestasi->id)
            ->update([
                'jenis_prestasi' => $request->jenis_prestasi,
                'tingkat_prestasi' => $request->tingkat_prestasi,
                'nama_prestasi' => $request->nama_prestasi,
                'penyelenggara' => $request->penyelenggara_prestasi,
                'tahun' => $request->tahun_prestasi,
            ]);
        return redirect()->route('profile')->with('sukses', 'Data Prestasi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        Prestasi::destroy($prestasi->id);
        return redirect()->route('profile')->with('sukses', 'Data Prestasi berhasil dihapus!');
    }
}
