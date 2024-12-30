@extends('doctors.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="{{ asset('img/doctors.png') }}" alt="Dokter" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                <span>Dr. Ricardo, S.KJ</span>
            </div>
            <div>
                <button class="btn btn-light me-2"><i class="bi bi-camera-video"></i></button>
                <button class="btn btn-light"><i class="bi bi-telephone"></i></button>
            </div>
        </div>
        <div class="card-body chat-room" style="height: 400px; overflow-y: scroll;">
            <!-- Chat bubbles -->
            <div class="d-flex flex-column">
                <!-- Message from doctor -->
                <div class="d-flex align-items-start mb-3">
                    <div class="bg-light p-3 rounded text-dark shadow-sm" style="max-width: 70%;">
                        <p class="mb-0">Hallo, Selamat Malam Ibu. Sesi Chat Akan Otomatis Dimulai Pada Jam Jadwal Konsultasi</p>
                    </div>
                </div>
                <!-- Message from user -->
                <div class="d-flex align-items-end justify-content-end mb-3">
                    <div class="bg-primary text-white p-3 rounded shadow-sm" style="max-width: 70%;">
                        <p class="mb-0">Hallo Dok, Selamat Malam</p>
                    </div>
                </div>
                <!-- Another doctor message -->
                <div class="d-flex align-items-start mb-3">
                    <div class="bg-light p-3 rounded text-dark shadow-sm" style="max-width: 70%;">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                </div>
                <!-- Another user message -->
                <div class="d-flex align-items-end justify-content-end mb-3">
                    <div class="bg-primary text-white p-3 rounded shadow-sm" style="max-width: 70%;">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <form action="" method="POST" class="d-flex">
                @csrf
                <input type="text" name="message" class="form-control me-2" placeholder="Ketik pesan Anda..." required>
                <button type="submit" class="btn btn-primary">Kirim<i class="bi bi-send"></i></button>
            </form>
        </div>
    </div>
</div>
@endsection
