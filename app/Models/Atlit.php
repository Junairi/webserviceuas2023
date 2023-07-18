<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atlit extends Model
{
    use HasFactory;

    protected $table = 'atlit';
    protected $fillable = [
        'nama',
        'alamat',
        'umur',
        'jenis_kelamin',
        'cabang_olahraga',
        'team'
    ];
}
