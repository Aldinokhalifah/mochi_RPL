<?php

namespace App\Http\Controllers;

use App\Models\DataAnak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataAnakController extends Controller
{
    /**
     * Menampilkan data anak pengguna yang sedang login.
     */
    public function index()
    {
        $user = Auth::user();

        if (!$user->dataAnak) {
            return response()->json(['message' => 'Anda belum memiliki data anak.'], 404);
        }

        return response()->json($user->dataAnak, 200);
    }

    /**
     * Membuat data anak baru.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        // Cek apakah user sudah memiliki data anak
        if ($user->dataAnak) {
            return response()->json(['message' => 'Anda hanya dapat mengisi data anak satu kali.'], 403);
        }

        // Validasi input
        $request->validate([
            'nama_anak' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'usia' => 'required|integer|min:0',
            'berat' => 'required|numeric|min:0',
            'tinggi' => 'required|numeric|min:0',
            'keluhan' => 'nullable|string',
            'pertanyaan' => 'nullable|string',
        ]);

        // Simpan data anak
        $dataAnak = new DataAnak($request->all());
        $dataAnak->user_id = $user->id; // Hubungkan dengan user yang login
        $dataAnak->save();

        return response()->json(['message' => 'Data anak berhasil disimpan.', 'data' => $dataAnak], 201);
    }

    /**
     * Memperbarui data anak.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        // Pastikan data anak milik user yang login
        $dataAnak = DataAnak::where('id', $id)->where('user_id', $user->id)->first();
        if (!$dataAnak) {
            return response()->json(['message' => 'Data anak tidak ditemukan atau Anda tidak berhak mengaksesnya.'], 404);
        }

        // Validasi input
        $request->validate([
            'nama_anak' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'usia' => 'nullable|integer|min:0',
            'berat' => 'nullable|numeric|min:0',
            'tinggi' => 'nullable|numeric|min:0',
            'keluhan' => 'nullable|string',
            'pertanyaan' => 'nullable|string',
        ]);

        // Update data anak
        $dataAnak->update($request->all());

        return response()->json(['message' => 'Data anak berhasil diperbarui.', 'data' => $dataAnak], 200);
    }

    /**
     * Menghapus data anak.
     */
    public function delete($id)
    {
        $user = Auth::user();

        // Pastikan data anak milik user yang login
        $dataAnak = DataAnak::where('id', $id)->where('user_id', $user->id)->first();
        if (!$dataAnak) {
            return response()->json(['message' => 'Data anak tidak ditemukan atau Anda tidak berhak mengaksesnya.'], 404);
        }

        // Hapus data anak
        $dataAnak->delete();

        return response()->json(['message' => 'Data anak berhasil dihapus.'], 200);
    }
}
