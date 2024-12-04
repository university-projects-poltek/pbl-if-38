@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadCrumb', 'Data Masyarakat')

@section('content')
<!-- Card content -->
<div class="mt-4">
  <div>
    <h2>
        Masyarakat
    </h2>
  </div>
  <!-- Card Content -->
  <div class="mt-4">
    <table class="table">
      <thead>
        <tr>
          <th style="text-align: center;background-color: #D9D9D9;border-radius: 25em 0 0;">Nama</th>
          <th style="text-align: center;background-color: #D9D9D9;">E-mail</th>
          <th style="text-align: center;background-color: #D9D9D9;">No HP</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['Nama']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['Email']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['nohp']}}</td>
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