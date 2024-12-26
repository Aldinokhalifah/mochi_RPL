<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    protected $table = 'data_anak';
    protected $fillable = [
        'nama_anak',
        'jenis_kelamin',
        'usia',
        'berat',
        'tinggi',
        'keluhan',
        'pertanyaan',
    ];
}