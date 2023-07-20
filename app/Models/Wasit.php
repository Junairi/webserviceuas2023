<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wasit extends Model
{
    use HasFactory;

    protected $table = 'wasit';
    protected $fillable = [
        'nama',
        'alamat',
        'nik',
        'jenis_kelamin',
        'cabang_olahraga'
    ];

    function cabang_olahraga() {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga', 'id');
    }
}
