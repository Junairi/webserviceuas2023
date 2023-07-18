<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;

    protected $table = 'pelatih';
    protected $fillable  = [
        'nama',
        'alamat',
        'nik',
        'jenis_kelamin',
        'kontak',
        'cabang_olahraga',
        'team'
    ];
}
