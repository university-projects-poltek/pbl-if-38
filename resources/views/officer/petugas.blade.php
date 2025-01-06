<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title', 'Petugas')</title>
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
                            Petugas  <a href="" class=""> <span class="iconify" data-icon="ic:baseline-add-circle"></span></a>
                        </h2>
                    </div>
                    <!-- Card Content -->
                    <div class="mt-4 card-content">
                        <table>
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>E-mail</th>
                              <th>No HP</th>
                              <th>Bertugas Di</th>
                              <th>Role</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="5" style="text-align: center;">Data tidak tersedia</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    <div>
                        @yield('footer')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.style')
    </body>
</html>