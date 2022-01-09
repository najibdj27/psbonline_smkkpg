<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi';

    protected $fillable = [
        'pendaftar_id',
        'nama_prestasi',
        'tingkat_prestasi',
        'jenis_prestasi',
        'tahun',
        'penyelenggara',
        'sertifikat_foto',
    ];
}
