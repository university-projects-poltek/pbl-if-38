<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LaporPark</title>
        @include('layouts.basic')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-3 col-lg-2 sidebar row">
                    <div class="">
                        <h2 class="text-center"> Dashboard </h2>
                    </div>
                    <div class="">
                        <a href="" class="active">
                            <span class="iconify" data-icon="mdi-light:home" data-inline="false"></span> 
                            Beranda
                        </a>
                        <a href="#">
                            <span class="iconify side-icon" data-icon="codicon:account" data-inline="false"></span> 
                            Profil
                        </a>
                        <a href="#">
                            <span class="iconify side-icon" data-icon="cil:people" data-inline="false"></span>
                            Petugas
                        </a>
                        <a href="#">
                            <span class="iconify side-icon" data-icon="hugeicons:task-01" data-inline="false"></span> 
                            Laporan
                        </a>
                    </div>
                </div>

                <!-- Main content -->
                <div class="col-md-9 col-lg-10 p-4 content">
                    <!-- Header -->
                    <div>
                        <h2>Beranda</h2>
                    </div>
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
                    </div>
                </div>
            </div>
        </div>
        <style>
            body {
                font-family: 'kanit', sans-serif;
                
            }
            .container {
                display: flex;
            }
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                background-color: #125491;
                color: white;
                height: 100vh;
                overflow-y: auto;
            }
            .sidebar a {
                display: flex;
                align-items: center;
                color: white;
                text-decoration: none;
                padding: 5px 5px;
                display: block;
                font-size: 20px; 
            }
            .sidebar a:hover {
                background-color: #0d6efd;
            }
            .sidebar a {
                border-bottom: 2px solid rgba(255, 255, 255, 255);
            }
            .iconify {
                font-size: 30px;  
            }
            .side-icon {
                color: #ffffff;
                font-size: 30px; 
            }
            .card-icon {
                color: #125491;
                font-size: 80px;
                padding: 10px; 
            }
            .content {
                margin-left: 250px; 
                padding: 20px;
                height: 2000px;
                background-color: transparant;
            }
            .dashboard-header {
                font-size: 30px;
                font-weight: bold;
                margin-bottom: 20px;
            }
            .card-content {
                background-color: #D9D9D9;
                border-radius: 16px;
            }
            .rounded-circle {
                background-color: transparent; 
                border: 2px solid #125491;
            }
        </style>
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
                legend: { display: false }
                }
            }
            });
        </script>

    </body>
</html>