@extends('layouts.auth', ['title' => 'login'])


@section('content')

<div class="login-container fw-bold">
    <div class="text-center">
        <img src="{{ asset('assets/favicon.ico') }}"
            alt="Logo">
        <h1>Selamat datang 👋</h1>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST"
        action="{{ route('login.submit') }}">
        @csrf

        <div class="mb-3">
            <input type="text"
                class="form-control"
                placeholder="Username"
                name="username"
                required>
        </div>
        <div class="mb-3">
            <input type="password"
                class="form-control"
                placeholder="Password"
                name="password"
                required>
        </div>

        @if ($errors->has('username'))
        <p class="text-danger ms-2 mt-1 fw-medium">{{ $errors->first('username') }}</p>
        @endif
        <button type="submit"
            class="btn btn-primary">Masuk</button>
    </form>
    <p class="mt-3">Belum punya akun? <a href="{{ route('register') }}"
            class="text-primary">Daftar</a></p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


@endsection