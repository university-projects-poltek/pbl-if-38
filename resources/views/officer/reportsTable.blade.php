@extends('layouts.app')

@section('title', 'Laporan')

@section('breadCrumb', 'Data Laporan')

@section('content')

<!-- Card content -->
<div class="mt-4 pt-3 card-content">
  @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
  <!-- Laporan Diterima -->
  <div class="reports">
    <h5>Laporan diterima</h5>
    <ul class="list-group">
    @if($laporanDiterima->isEmpty())
        <li class="list-group-item">Tidak ada laporan diterima.</li>
    @else
        @foreach($laporanDiterima as $laporan)
            <li class="list-group-item">
                <p>{{ $laporan->id }}</p>
                <strong>Lokasi:</strong> {{ $laporan->location }} <br>
                <strong>Status:</strong> {{ $laporan->status }} <br>
                <strong>Tanggal:</strong> {{ $laporan->report_date }} <br>
                <strong>Prioritas:</strong> {{ $laporan->priority }} <br>
                <strong>topsis:</strong>{{$laporan->topsis_score}}
                <a href="{{ route('editReport', $laporan->id) }}" class="btn btn-warning btn-sm float-end">Edit</a>
            </li>
        @endforeach
    @endif
    </ul>
  </div>
  
  <!-- Laporan Diproses -->
  <div class="reports">
    <h5>Laporan diproses</h5>
    <ul class="list-group">
      @if($laporanDiproses->isEmpty())
          <li class="list-group-item">Tidak ada laporan diproses.</li>
      @else
          @foreach($laporanDiproses as $laporan)
              <li class="list-group-item">
                  <p>{{ $laporan->id }}</p>
                  <strong>Lokasi:</strong> {{ $laporan->location }} <br>
                  <strong>Status:</strong> {{ $laporan->status }} <br>
                  <strong>Tanggal:</strong> {{ $laporan->report_date }} <br>
                  <a href="{{ route('editReport', $laporan->id) }}" class="btn btn-warning btn-sm float-end">Edit</a>
              </li>
          @endforeach
      @endif
    </ul>
  </div>
  
  <!-- Laporan Diterima -->
  <div class="reports">
    <h5>Laporan selesai</h5>
    <ul class="list-group">
      @if($laporanSelesai->isEmpty())
          <li class="list-group-item">Tidak ada laporan selesai.</li>
      @else
          @foreach($laporanSelesai as $laporan)
              <li class="list-group-item">
                  <p>{{ $laporan->id }}</p>
                  <strong>Lokasi:</strong> {{ $laporan->location }} <br>
                  <strong>Status:</strong> {{ $laporan->status }} <br>
                  <strong>Tanggal:</strong> {{ $laporan->report_date }} <br>
                  <a href="{{ route('editReport', $laporan->id) }}" class="btn btn-warning btn-sm float-end">Edit</a>
              </li>
          @endforeach
      @endif
    </ul>
  </div>
</div>

<style>
  .reports {
    height: fit-content;
    margin-bottom: 10px;
    margin: 15px;
    padding: 10px;
    border-radius: 12px;
    max-height: 500px;
    background-color: #909090;
  }
  .list-group {
    max-height: 250px;
    overflow-y: auto;
  }
  .list-group-item {
    border: 1px solid;
    background-color: #D9D9D9;
  }
</style>

@endsection