<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('layouts.basic')

</head>

<style>
  .nav-link {
    text-align: center;
    padding: 10px;
  }

  .nav-link.active {
    border-bottom: 2px solid white;
  }
</style>

<body>
  <div
    class="position-sticky bottom-0 bg-primary text-white py-2 d-flex justify-content-around align-items-center border-top">
    <a href="{{ route('home') }}" class="nav-link {{ $isActive('home') }}">
      <span class="iconify" data-icon="material-symbols:home" data-inline="false"></span>
    </a>
    <a href="{{ route('location') }}" class="text-white text-decoration-none {{ $isActive('location') }}">
      <span class="iconify" data-icon="mdi:map-marker" data-inline="false"></span>
    </a>
    <a href="{{ route('camera') }}" class="text-white text-decoration-none {{ $isActive('camera') }}">
      <span class="iconify" data-icon="mdi:camera" data-inline="false"></span>
    </a>
    <a href="{{ route('history') }}" class="text-white text-decoration-none {{ $isActive('history') }}">
      <span class="iconify" data-icon="mdi:history" data-inline="false"></span>
    </a>
    <a href="{{ route('profile') }}" class="text-white text-decoration-none {{ $isActive('profile') }}">
      <span class="iconify" data-icon="mdi:account" data-inline="false"></span>
    </a>
  </div>


</body>

</html>
