@extends('doctors.app')

@section('content')

    <!-- Main Content -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Cari Jadwal Dokter</h3>

        <!-- Filters -->
        <div class="row mb-4">
            <div class="col-md-6">
                <select id="hariSelect" class="form-select" onchange="updateHari()">
                    <option value="" selected disabled>Pilih Hari</option>
                    @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $hari)
                        <option value="{{ $hari }}">{{ $hari }}</option>
                    @endforeach
                </select>
                <p id="selectedHari" class="mt-2 text-secondary">Hari yang dipilih: -</p>
            </div>

            <div class="col-md-6">
                <select id="jamSelect" class="form-select" onchange="updateJam()">
                    <option value="" selected disabled>Pilih Jam</option>
                    @foreach(['08:00 - 09:00', '09:00 - 10:00', '10:00 - 11:00', '11:00 - 12:00', '13:00 - 14:00', '14:00 - 15:00'] as $jam)
                        <option value="{{ $jam }}">{{ $jam }}</option>
                    @endforeach
                </select>
                <p id="selectedJam" class="mt-2 text-secondary">Jam yang dipilih: -</p>
            </div>
        </div>

        <!-- List of Doctors -->
        <div class="row">
            @foreach ($doctors as $doctor)
            <div class="col-12 mb-4">
                <div class="card shadow-sm p-3">
                    <div class="d-flex align-items-start">
                        <!-- Image Section -->
                        <img src="{{ asset('img/doctors.png') }}" alt="Doctor Image" class="img-fluid rounded" style="width: 100px; height: 100px;">

                        <!-- Text Section -->
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title mb-1">{{ $doctor['name'] }}, {{ $doctor['degree'] }}</h5>
                            <p class="card-text">
                                <strong>Rumah Sakit:</strong> {{ $doctor['hospital'] }}<br>
                                <strong>Jadwal:</strong> {{ $doctor['schedule'] }}
                            </p>
                        </div>

                        <!-- Rating and Button Section -->
                        <div class="text-end">
                            <div class="mb-2">
                                <span class="text-warning">
                                    <i class="fas fa-star"></i> {{ $doctor['rating'] }}
                                    <small class="text-muted">({{ $doctor['reviews'] }})</small>
                                </span>
                            </div>
                            <a href="{{ route('doctors.konsultasi') }}" class="btn btn-primary btn-sm">Buat Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
