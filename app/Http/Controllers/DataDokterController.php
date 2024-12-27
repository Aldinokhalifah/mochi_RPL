<?php

namespace App\Http\Controllers;

use App\Models\DataDokter;
use Illuminate\Http\Request;

class DataDokterController extends Controller
{
    /**
     * Menampilkan semua data dokter.
     */
    public function index()
    {
        $dataDokter = DataDokter::all();

        return response()->json(['data' => $dataDokter], 200);
    }

    /**
     * Menampilkan data dokter berdasarkan ID.
     */
    public function show($id)
    {
        $dataDokter = DataDokter::find($id);

        if (!$dataDokter) {
            return response()->json(['message' => 'Data dokter tidak ditemukan.'], 404);
        }

        return response()->json(['data' => $dataDokter], 200);
    }

    /**
     * Membuat data dokter baru.
     */
    public function create(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'usia' => 'required|integer|min:0',
            'spesialis' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'setuju_pengolahan_data' => 'required|boolean',
        ]);

        // Simpan data dokter
        $dataDokter = DataDokter::create($request->all());

        return response()->json(['message' => 'Data dokter berhasil disimpan.', 'data' => $dataDokter], 201);
    }

    /**
     * Memperbarui data dokter.
     */
    public function update(Request $request, $id)
    {
        $dataDokter = DataDokter::find($id);

        if (!$dataDokter) {
            return response()->json(['message' => 'Data dokter tidak ditemukan.'], 404);
        }

        // Validasi input
        $request->validate([
            'nama_dokter' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'usia' => 'nullable|integer|min:0',
            'spesialis' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'setuju_pengolahan_data' => 'nullable|boolean',
        ]);

        // Update data dokter
        $dataDokter->update($request->all());

        return response()->json(['message' => 'Data dokter berhasil diperbarui.', 'data' => $dataDokter], 200);
    }

    /**
     * Menghapus data dokter.
     */
    public function delete($id)
    {
        $dataDokter = DataDokter::find($id);

        if (!$dataDokter) {
            return response()->json(['message' => 'Data dokter tidak ditemukan.'], 404);
        }

        $dataDokter->delete();

        return response()->json(['message' => 'Data dokter berhasil dihapus.'], 200);
    }
}

