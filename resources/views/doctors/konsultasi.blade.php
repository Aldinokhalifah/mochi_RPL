@extends('doctors.app')

@section('content')
<div class="container mt-5">
  <!-- Flash Message -->
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <!-- Header Dokter -->
  <div class="d-flex align-items-center mb-5">
    <!-- Gambar Dokter -->
    <img src="{{ asset('img/doctors.png') }}" alt="Doctor" class="rounded-circle" style="width: 120px; height: 100px;">

    <!-- Informasi Dokter -->
    <div class="ms-4">
      <h2 class="mb-1">Dr. Ricardo, S.KJ</h2>
      <p class="text-muted mb-2">Dokter Psikiater</p>
      <p class="fw-bold mb-0">
        <i class="bi bi-star-fill text-warning"></i> 4.8 
        <span class="text-muted">(3200 Pasien Selesai)</span>
      </p>
    </div>
  </div>

  <!-- Profil Dokter -->
  <div class="card mb-4">
    <div class="card-body">
      <h4 class="card-title mb-3">Profil Dokter</h4>
      <p>
        Dr. Ricardo, S.KJ adalah seorang Dokter Keluarga. Beliau dapat membantu
        dalam menangani masalah psikologi dan kesehatan jiwa.
      </p>
      <p>
        Dr. Ricardo merupakan lulusan dari Dokter Spesialis Kedokteran Jiwa di
        Universitas Indonesia. Beliau adalah anggota organisasi Perhimpunan Dokter
        Spesialis Kedokteran Jiwa Indonesia (PDSKJI).
      </p>
    </div>
  </div>

  <!-- Jadwal Konsultasi -->
  <div class="card">
    <div class="card-body">
      <h4 class="card-title mb-3">Jadwal Konsultasi</h4>
      <form action="{{ route('konsultasi.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="jadwal" class="form-label">Pilih Jadwal Konsultasi</label>
          <select id="jadwal" name="jadwal" class="form-select w-50">
            <option value="" disabled selected>Pilih Jadwal Konsultasi</option>
            <optgroup label="Siang, Rabu">
              <option value="13:00-14:00">13:00 - 14:00</option>
              <option value="14:00-15:00">14:00 - 15:00</option>
            </optgroup>
            <optgroup label="Malam, Rabu">
              <option value="19:00-20:00">19:00 - 20:00</option>
            </optgroup>
          </select>
        </div>
        <button type="submit" class="btn btn-primary w-50">Konsultasi</button>
      </form>
    </div>
  </div>
</div>
@endsection
