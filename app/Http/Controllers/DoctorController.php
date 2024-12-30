<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
{
    $doctors = [
        [
            'id' => 1,
            'name' => 'Dr. Ricardo',
            'degree' => 'S.Psi',
            'hospital' => 'Rs. Hermina Depok',
            'schedule' => 'Rabu 09 November 2024',
            'rating' => 4.8,
            'reviews' => 3200,
            'image' => 'doctors.png', // Ganti dengan URL gambar dokter
        ],
        [
            'id' => 2,
            'name' => 'Dr. Ricardo',
            'degree' => 'S.Psi',
            'hospital' => 'Rs. Hermina Depok',
            'schedule' => 'Kamis 10 November 2024',
            'rating' => 4.8,
            'reviews' => 3200,
            'image' => 'doctors.png',
        ],
        [
            'id' => 3,
            'name' => 'Dr. Ricardo',
            'degree' => 'S.Psi',
            'hospital' => 'Rs. Hermina Depok',
            'schedule' => 'Jumat 11 November 2024',
            'rating' => 4.8,
            'reviews' => 3200,
            'image' => 'doctors.png',
        ],
    ];

    return view('doctors.index', compact('doctors'));
}


    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.show', compact('doctor'));
    }
}
