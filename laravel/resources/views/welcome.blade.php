@extends('layouts.app') 

@section( 'content')

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<div class="container">
    <h1>Hello, Bootstrap in Laravel 10!</h1>
</div>
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <button type="button" class="btn btn-danger">Left</button>
    <button type="button" class="btn btn-warning">Middle</button>
    <button type="button" class="btn btn-success">Right</button>
</div>

@endsection
