<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';

    protected $fillable = [
        'pendaftar_id',
        'jenis_pesan',
        'judul',
        'konten',
    ];

    protected $attributes = [
        'is_read' => false,
    ];
}
