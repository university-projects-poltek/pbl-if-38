@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadCrumb', 'Edit Laporan')

@section('content')

<!-- NOTE : untuk yang di Ctrl / itu valuenya harus dibuat dulu tabel databasenya -->
<!-- kalau sudah ada tabel databasenya tinggal isi sesusai yang di value yang ada si tabelnya -->
<!-- untuk form imputnya tinggan ambil di file INputProfile,txt -->

<div class="mt-4">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <!-- Form Utama -->
    <div class="col-md me-2 card-content" style="height: fit-content;">
        <form action="{{ route('updateReportStatus', ['id' => $reports->id, 'status' => $reports->status]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Gambar -->
            <div class="container px-3 pt-4">
                <div id="imageCarousel" class="carousel position-relative" data-bs-ride="carousel" style="max-width: 600px; margin: 0 auto;">
                    <!-- Gambar Carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ $reports->photo }}" class="d-block w-100" alt="Gambar 1" style="height: 300px; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev" style="top: 50%; transform: translateY(-50%);">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next" style="top: 50%; transform: translateY(-50%);">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Tanggal -->
            <div class="px-3 mb-3">
                <div class="input-group">
                    <input type="date" class="form-control" id="date" name="date"
                    value="{{ $reports->report_date }}">
                </div>
            </div>

            <!-- Lokasi -->
            <div class="px-3 mb-3">
                <div class="input-group">
                <input type="text" class="form-control" id="location" name="location" value="{{ $reports->location }}" readonly>
                    <span class="iconify side-icon normal-icon" data-icon="mynaui:location" data-inline="false"></span>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="px-3 mb-3">
                <div class="input-group">
                    <textarea class="form-control" id="address" name="description" rows="3">{{ $reports->description }}</textarea>
                </div>
            </div>

            <!-- <div class="px-3 mb-3">
                <p>{{ $reports->status }}</p>
            </div> -->

            <div class="px-3 mb-3">
                <div class="input-group">
                    <input 
                        class="stat"
                        type="text" 
                        name="status" 
                        id="status" 
                        value="{{ $reports->status }}">
                </div>
            </div>
            <!-- Edit status -->
            <div class="px-3 mb-3 justify-content-center">
                <label class="form-label">Status Laporan</label>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-warning" onclick="document.getElementById('status').value='Diproses'">Di Proses</button>
                    <button type="button" class="btn btn-success" onclick="document.getElementById('status').value='Selesai'">Selesai</button>
                    <!-- <button type="submit" name="status" value="Diproses" class="btn btn-warning">Di Proses</button>
                    <button type="submit" name="status" value="Selesai" class="btn btn-success">Selesai</button> -->
                </div>
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-end mb-4">
                <button type="reset" class="btn btn-secondary me-2" onclick="window.location.href='{{ route('reportsTable') }}'">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<style>
    .input-group {
        border: 2px solid #125491;
        border-radius: 8px;
    }
    .form-control {
        background-color: #D9D9D9;
    }
    .drop-area {
        border: 2px dashed #125491;
        border-radius: 8px;
        width: 300px;
        height: 165px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 20px auto;
        color: #000000;
        transition: background-color 0.3s;
    }
    .drop-area.hover {
        background-color: #D9D9D9;
    }
    .button-area {
        display: flex;
    }
    .stat {
        background: transparent;
        border: none;
    }
</style>
@endsection