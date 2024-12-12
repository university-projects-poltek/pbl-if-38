@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadCrumb', 'Data Petugas')

@section('content')
<!-- Card content -->
<div class="mt-4">
  <div>
    <h2>
        Petugas  <a href="{{route('admin.add.petugas')}}" class=""> <span class="iconify" data-icon="ic:baseline-add-circle"></span></a>
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
          <th style="text-align: center;background-color: #D9D9D9;">Bertugas Di</th>
          <th style="text-align: center;background-color: #D9D9D9;">Role</th>
          <th style="text-align: center;background-color: #D9D9D9;border-radius:  0 25em 0 0 ;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['Nama']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['Email']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['nohp']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['location']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item['Role']}}</td>
          <td style="text-align: center;background-color: #D9D9D9;"><a href="{{route('admin.edit.petugas',['id'=>1])}}" class="btn btn-warning">Edit</button></td>
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