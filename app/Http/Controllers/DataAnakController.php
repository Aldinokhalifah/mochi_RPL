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

        return redirect()->route('dashboard')->with('message', 'Data anak berhasil disimpan.');
    }

    /**
     * Menampilkan form edit data anak.
     */
    public function edit($id)
    {
        $user = Auth::user();
        $dataAnak = DataAnak::where('id', $id)->where('user_id', $user->id)->first();

        if (!$dataAnak) {
            return redirect()->route('dashboard')->with('error', 'Data anak tidak ditemukan atau Anda tidak berhak mengaksesnya.');
        }

        return view('profile.edit_form_data_anak', compact('dataAnak'));
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
            return redirect()->route('dashboard')->with('error', 'Data anak tidak ditemukan atau Anda tidak berhak mengaksesnya.');
        }

        // Validasi input
        $request->validate([
            'nama_anak' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'usia' => 'nullable|integer|min:0',
            'berat' => 'nullable|numeric|min:0',
            'tinggi' => 'nullable|numeric|min:0',
            'keluhan' => 'nullable|string',
        ]);

        // Update data anak
        $dataAnak->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Data anak berhasil diperbarui.');
    }

    /**
     * Menghapus data anak.
     */
    public function delete($id)
    {
        $user = Auth::user();

        // Cari data anak berdasarkan ID dan user yang sedang login
        $dataAnak = DataAnak::where('id', $id)->where('user_id', $user->id)->first();

        if (!$dataAnak) {
            return redirect()->route('dashboard')->with('error', 'Data anak tidak ditemukan atau Anda tidak berhak menghapusnya.');
        }

        // Hapus data anak
        $dataAnak->delete();

        return redirect()->route('dashboard')->with('success', 'Data anak berhasil dihapus.');
    }

}
