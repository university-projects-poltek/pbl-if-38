@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadCrumb', 'Beranda')

@section('content')
<!-- Card content -->
<div class="mt-4 card-content">
    <!-- Jumlah Akun Petugas -->
    <div class="p-4" style="border-bottom: 2px solid #125491">
        <h3>Jumlah Akun Petugas</h3>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="p-3 bg-light rounded">
                    <div class="d-flex align-items-center">
                        <span class="iconify me-3" data-icon="carbon:user-role" data-inline="false" style="font-size: 2rem;"></span>
                        <div>
                            <h5>Akun Petugas</h5>
                            <span class="text-muted">Role / Officer</span>
                        </div>
                        <h3 class="ms-auto">5</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-light rounded">
                    <div class="d-flex align-items-center">
                        <span class="iconify me-3" data-icon="carbon:user-role" data-inline="false" style="font-size: 2rem;"></span>
                        <div>
                            <h5>Akun Petugas</h5>
                            <span class="text-muted">Role / Field Officer</span>
                        </div>
                        <h3 class="ms-auto">15</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-light rounded">
                    <div class="d-flex align-items-center">
                        <span class="iconify me-3" data-icon="carbon:user" data-inline="false" style="font-size: 2rem;"></span>
                        <div>
                            <h5>Akun Masyarakat</h5>
                        </div>
                        <h3 class="ms-auto">186</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Petugas -->
    <div class="p-4" style="border-bottom: 2px solid #125491">
        <h3>Informasi Petugas</h3>
    </div>

    <!-- Informasi Laporan -->
    <div class="row" style="border-bottom: 2px solid #125491">
        <div class="col-md-4">
            <div class="text-center p-3">
                <div>
                    <span class="iconify card-icon rounded-circle" data-icon="carbon:task-add" data-inline="false" style="font-size: 2rem;"></span>
                </div>
                <h5 class="mt-3">127</h5>
                <p>Pengajuan Baru</p>
            </div>
        </div>
        <div class="col-md-4" style="border-left: 2px solid #125491; border-right: 2px solid #125491;">
            <div class="text-center p-3">
                <div>
                    <span class="iconify card-icon rounded-circle" data-icon="tdesign:task-time" data-inline="false" style="font-size: 2rem;"></span>
                </div>
                <h5 class="mt-3">27</h5>
                <p>Proses</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center p-3">
                <div>
                    <span class="iconify card-icon rounded-circle" data-icon="carbon:task-complete" data-inline="false" style="font-size: 2rem;"></span>
                </div>
                <h5 class="mt-3">76</h5>
                <p>Selesai</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        
    </script>
</div>
@endsection