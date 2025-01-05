@extends('layouts.auth', ['title' => 'register'])


@section('content')

<div class="login-container fw-bold">
    <div class="text-center">
        <img src="{{ asset('assets/favicon.ico') }}"
            alt="Logo">
        <h1>Buat akun dahulu</h1>
    </div>

    <form method="POST"
        action="">
        @csrf
        <div class="mb-3">
            <input type="text"
                class="form-control"
                placeholder="Username"
                name="username"
                value="{{ old('username') }}">

            @if ($errors->has('username'))
            <p class="text-danger ms-2 mt-1 fw-medium">{{ $errors->first('username') }}</p>
            @endif
        </div>

        <div class="mb-3">
            <input type="email"
                class="form-control"
                placeholder="Email"
                name="email"
                value="{{ old('email') }}">
            @if ($errors->has('email'))
            <p class="text-danger ms-2 mt-1 fw-medium">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="mb-3">
            <input type="password"
                class="form-control"
                placeholder="Password"
                name="password">
        </div>
        <div class="mb-3">

            <input type="password"
                name="password_confirmation"
                class="form-control"
                placeholder="Confirm Password"
                required>
            <!-- <input type="password"
                class="form-control"
                placeholder="Password"
                name="password"> -->

            @if ($errors->has('password'))
            <p class="text-danger ms-2 mt-1 fw-medium">{{ $errors->first('password') }}</p>
            @endif
        </div>


        <button type="submit"
            class="btn btn-primary">Masuk</button>
    </form>
    <p class="mt-3">Sudah punya akun? <a href="{{ route('login') }}"
            class="text-primary">Masuk</a></p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


@endsection