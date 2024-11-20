<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LaporPark</title>
        <link
            rel="icon"
            type="image/x-icon"
            href="{{ asset('../../../../assets/favicon.ico') }}"
        />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <nav>
                <h1>saidi</h1>
            </nav>
        </header>

        <main>@yield('content')</main>

        <footer>
            <!-- Your footer content -->
        </footer>
    </body>
</html>
