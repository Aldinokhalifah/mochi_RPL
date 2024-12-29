<?php

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

Route::get('/dashboard', function () {
    return view('profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route Dokter CRUD
    Route::get('/data-dokter', [DataDokterController::class, 'index']);
    Route::get('/data-dokter/{id}', [DataDokterController::class, 'show']);
    Route::post('/data-dokter', [DataDokterController::class, 'create']);
    Route::put('/data-dokter/{id}', [DataDokterController::class, 'update']);
    Route::delete('/data-dokter/{id}', [DataDokterController::class, 'delete']);

    // Route Data Anak CRUD
    Route::get('/data-Anak', [DataAnakController::class, 'index']);
    Route::get('/data-Anak/{id}', [DataAnakController::class, 'show']);
    Route::post('/data-Anak', [DataAnakController::class, 'create']);
    Route::put('/data-Anak/{id}', [DataAnakController::class, 'update']);
    Route::delete('/data-Anak/{id}', [DataAnakController::class, 'delete']);

    Route::get('/dashboard/activities', function () {
        return view('profile.tabel_anak');
    })->name('activities');

    Route::get('/dashboard/data_anak', function () {
        return view('profile.form_data_anak');
    })->name('data_anak');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('logout');
});

require __DIR__.'/auth.php';
