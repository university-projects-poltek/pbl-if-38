<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? '' }} | Lapor Park</title>
  @include('layouts.basic')
  <style>
    body {
      margin: 0 auto;
    }
  </style>

</head>

<body>
  <div class="container" style="width: 400px;">
    @yield('content')
    <x-navigation-bar />
  </div>

</html>
