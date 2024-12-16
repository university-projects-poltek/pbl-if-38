<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} | Lapor Park</title>
    @include('layouts.basic')
    <style>
        body {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>

</head>

<body>
    @yield('content')
</body>

</html>