<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div>
        <div>
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

            <!-- COntent -->
            <div class="col-md-9 col-lg-10 p-4 content">
                <!-- Header -->
                <div>
                    <h2>Beranda</h2>
                </div>
                <!-- Card content 1 -->
                <div class="mt-4 card-content">

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
</body>
</html>