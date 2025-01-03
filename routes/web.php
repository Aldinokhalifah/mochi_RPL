<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataAnakController;
use App\Http\Controllers\DataDokterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('index');
});

Route::get('/konten_edukasi', function () {
    return view('konten_edukasi');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/dashboard', function () {
    return view('profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route Dokter CRUD
    Route::get('/data-dokter', [DataDokterController::class, 'index'])->name('data-dokter.index');
    Route::get('/data-dokter/{id}', [DataDokterController::class, 'show'])->name('data-dokter.show');
    Route::post('/data-dokter', [DataDokterController::class, 'create'])->name('data-dokter.create');
    Route::put('/data-dokter/{id}', [DataDokterController::class, 'update'])->name('data-dokter.update');
    Route::delete('/data-dokter/{id}', [DataDokterController::class, 'delete'])->name('data-dokter.delete');

    // Route Data Anak CRUD
    Route::get('/data-anak', [DataAnakController::class, 'index'])->name('data-anak.index');
    Route::get('/data-anak/{id}', [DataAnakController::class, 'edit'])->name('data-anak.show');
    Route::post('/data-anak', [DataAnakController::class, 'create'])->name('data-anak.create');
    Route::put('/data-anak/{id}', [DataAnakController::class, 'update'])->name('data-anak.update');
    Route::delete('/data-anak/{id}', [DataAnakController::class, 'delete'])->name('data-anak.delete');

    Route::get('/dashboard/activities', function () {
        return view('profile.tabel_anak');
    })->name('activities');

    Route::get('/dashboard/data_anak', function () {
        return view('profile.form_data_anak');
    })->name('data_anak');

    Route::get('/dashboard/profile', function () {
        return view('profile.profile');
    })->name('profile');

    Route::get('/profile/settings', function () {
        return view('profile.settings');
    })->name('settings');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('logout');

    // Halaman Konsultasi
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/konsultasi', [AppointmentController::class, 'create'])->name('doctors.konsultasi');
    Route::post('/doctors/konsultasi/submit', [AppointmentController::class, 'submitKonsultasi'])->name('konsultasi.submit');
    Route::get('/chat/{doctor_id}', [MessageController::class, 'index']);
    Route::get('/chat1', [MessageController::class, 'index1'])->name('chat.index1');
    Route::get('/chat2', [MessageController::class, 'index2'])->name('chat.index2');
    Route::get('/chat3', [MessageController::class, 'index3'])->name('chat.index3');
});

require __DIR__.'/auth.php';
