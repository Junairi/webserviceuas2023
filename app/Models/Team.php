<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';
    protected $fillable = [
        'nama',
        'jumlah_atlit',
        'jumlah_pelatih',
        'kedua'
    ];

    function ketua() {
        return $this->belongsTo(Pelatih::class, 'ketua', 'id');
    }
}
