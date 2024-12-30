<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        // Logika untuk menampilkan form konsultasi
        return view('doctors.konsultasi');
    }

    public function submitKonsultasi(Request $request)
{
    // Validasi data jika diperlukan
    $request->validate([
        'jadwal' => 'required',
    ]);

    // Simpan data konsultasi ke database jika diperlukan
    // Misal: Konsultasi::create(['jadwal' => $request->jadwal]);

    // Tambahkan flash message
    return redirect()->back()->with('success', 'Booking konsultasi berhasil!');
}
}

