<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangOlahraga extends Model
{
    use HasFactory;

    protected $table = 'cabang_olahraga';
    protected $fillable = [
        'nama',
        'kategori',
        'penanggung_jawab',
        'wasit'
    ];
}
