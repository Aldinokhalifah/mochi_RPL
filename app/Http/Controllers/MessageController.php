<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Doctor;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index1(Request $request)
    {
        // Logika jika ada data dari form
        $data = $request->all();

        // Pindah ke halaman `resources/views/chat/index.blade.php`
        return view('chat.index1', compact('data'));
    }
    public function index2(Request $request)
    {
        // Logika jika ada data dari form
        $data = $request->all();

        // Pindah ke halaman `resources/views/chat/index.blade.php`
        return view('chat.index2', compact('data'));
    }
    public function index3(Request $request)
    {
        // Logika jika ada data dari form
        $data = $request->all();

        // Pindah ke halaman `resources/views/chat/index.blade.php`
        return view('chat.index3', compact('data'));
    }
}
