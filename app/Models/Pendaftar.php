<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $guard = 'pendaftar';

    protected $table = 'pendaftar';

    protected $guarded = [
        'id',
        'angkatan',
        'status_siswa',
        'gelombang_pendaftaran',
        'tahun_pendaftaran',
        'created_at',
        'updated_at'
    ];
}
