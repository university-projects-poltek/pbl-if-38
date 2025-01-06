@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadCrumb', 'Data Laporan')

@section('content')

<!-- Card content -->
<div class="mt-4">
    
    <div class="">
        <div class="row">
            <!-- Form Utama -->
            <div class="col-md me-2 card-content" style="height: fit-content;">
                <div>
                  <h2>
                      Laporan
                  </h2>
                </div>
                <!-- Card Content -->
                <div class="mt-4 mb-4">
                  <ul class="list-group">
                      <li class="list-group-item" style="background-color: #D9D9D9;">Laporan Diterima</li>
                      <li class="list-group-item">a</li>
                      <li class="list-group-item">b</li>
                      <li class="list-group-item">c</li>
                      <li class="list-group-item">d</li>
                    </ul>
                    <br>
                  <ul class="list-group">
                      <li class="list-group-item" style="background-color: #D9D9D9;">Laporan Sedang Ditindak Lanjuti</li>
                      <li class="list-group-item">a</li>
                      <li class="list-group-item">b</li>
                      <li class="list-group-item">c</li>
                      <li class="list-group-item">d</li>
                    </ul>
                    <br>
                  <ul class="list-group">
                      <li class="list-group-item" style="background-color: #D9D9D9;">Laporan Selesai</li>
                      <li class="list-group-item">a</li>
                      <li class="list-group-item">b</li>
                      <li class="list-group-item">c</li>
                      <li class="list-group-item">d</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
</div>

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
</script>
@endsection