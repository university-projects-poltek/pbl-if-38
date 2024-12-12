@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadCrumb', 'Beranda')

@section('content')
<!-- Card content -->
<div class="mt-4 card-content">
    <div class="p-4" style="border-bottom: 2px solid #125491">
        <h3>Jumlah Akun Petugas</h3>
    </div>
    <div class="p-4" style="border-bottom: 2px solid #125491">
        <h3>Informasi Petugas</h3>
    </div>
    <div class="row" style="border-bottom: 2px solid #125491">
        <div class="col-md-4">
            <div class="text-center p-3">
                <div class="">
                    <span class="iconify card-icon rounded-circle" data-icon="carbon:task-add" data-inline="false"></span>
                </div>
                <h5 class="mt-3">127</h5>
                <p>Pengajuan Baru</p>
            </div>
        </div>
        <div class="col-md-4" style="border-left: 2px solid #125491; border-right: 2px solid #125491;">
            <div class="text-center p-3">
                <div class="">
                    <span class="iconify card-icon rounded-circle" data-icon="tdesign:task-time" data-inline="false"></span>
                </div>
                <h5 class="mt-3">27</h5>
                <p>Proses</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center p-3">
                <div class="">
                    <span class="iconify card-icon rounded-circle" data-icon="carbon:task-complete" data-inline="false"></span>
                </div>
                <h5 class="mt-3">76</h5>
                <p>Selesai</p>
            </div>
        </div>
    </div>
    <!-- Chart -->
    <div class="pb-4">
        <div class="m-4 p-4" style="border-radius: 16px; background-color : #909090;">
            <h5>Tingkat Laporan</h5>
            <div class="chart-container ">
                <canvas id="reportChart"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Chart.js Configuration
        const ctx = document.getElementById('reportChart').getContext('2d');
        const reportChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [{
                    label: 'Tingkat Laporan',
                    data: [250, 500, 750, 1000, 900, 800, 850, 900, 850, 700, 950, 1000],
                    borderColor: '#0d6efd',
                    tension: 0.3,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</div>

@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>

    <h1>Welcome to the Admin Dashboard</h1>
</body>

</html>