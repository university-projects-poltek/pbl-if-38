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
          <td style="text-align: center;background-color: #D9D9D9;">{{$item->name}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item->email}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item->phone}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item->office}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">{{$item->role}}</td>
          <td style="text-align: center;background-color: #D9D9D9;">
            <a href="{{route('admin.edit.petugas',['id' => $item->id])}}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.delete.petugas', ['id' => $item->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
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
