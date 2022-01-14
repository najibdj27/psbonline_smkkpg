<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'user_id',
        'nama',
        'jenis_kelamin',
        'alamat',
        'role',
        'nomor_hp'
    ];
}
