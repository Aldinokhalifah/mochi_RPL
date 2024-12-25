<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataDokter extends Model
{
    protected $table = 'data_dokter';
    protected $fillable = [
        'nama_dokter',
        'jenis_kelamin',
        'usia',
        'spesialis',
        'no_hp',
        'alamat',
        'setuju_pengolahan_data',
    ];
}
