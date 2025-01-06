<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- SweetAlert2 CDN for custom pop-ups -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
        }
        .login-container img {
            width: 60px;
            margin-bottom: 1rem;
        }
        .login-container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .btn-wide {
            width: 100%; 
        }
        /* Additional Custom Styling */
        .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo Icon -->
        <img src="{{ asset('assets/favicon.ico') }}" alt="Logo" width="150" height="75">
        
        <h2>Selamat datang 👋</h2>
        
        <!-- Login Form -->
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <button type="submit" class="btn btn-primary btn-wide" style="margin-top: 10px;">Masuk</button>
        </form>
    </div>
<!-- SweetAlert2 pop-up for successful and failed login -->
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                showConfirmButton: true,
                confirmButtonText: 'OK',
                timer: 3000
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ $errors->first() }}",
                showConfirmButton: true,
                confirmButtonText: 'Coba Lagi',
                timer: 3000
            });
        </script>
    @endif

</body>
</html>
