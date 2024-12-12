<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title', 'Default Title')</title>
        @include('layouts.basic')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- Side Bar -->
                @include('layouts.sidebar')
                <!-- Main Content -->
                <div class="col-md-9 col-lg-10 p-4 content">
                    <!-- Header -->
                    <div>
                        <h2>
                            @yield('breadCrumb','nampePage')
                        </h2>
                    </div>
                    <!-- Card Content -->
                        @yield('content')
                    <div>
                        @yield('footer')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.style')
    </body>
</html>