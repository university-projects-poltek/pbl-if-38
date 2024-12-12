@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadCrumb', 'Data Laporan')

@section('content')
<!-- Card content -->
<div class="mt-4">
  <div>
    <h2>
        Laporan
    </h2>
  </div>
  <!-- Card Content -->
  <div class="mt-4">
    <table class="table">
      <thead>
        <tr>
          <th style="text-align: center;background-color: #D9D9D9;border-radius: 25em 0 0;">ID Laporan</th>
          <th style="text-align: center;background-color: #D9D9D9;">Lokasi Laporan</th>
          <th style="text-align: center;background-color: #D9D9D9;">Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['IDLaporan']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['location']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['Deskripsi']}}</td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
   
</div>

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
</script>
@endsection