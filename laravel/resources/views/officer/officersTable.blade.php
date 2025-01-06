@extends('layouts.app')

@section('title', 'Petugas')

@section('breadCrumb', 'Data Petugas')

@section('content')
<div class="mt-4 pt-3 card-content">
    <!-- Header Tabel -->
    <div class="table-responsive custom-table">
        <table class="table text-center mb-0">
            <thead>
                <tr>
                    <th>
                        <h5>Nama</h5>
                    </th>
                    <th>
                        <h5>E-mail</h5>
                    </th>
                    <th>
                        <h5>No HP</h5>
                    </th>
                    <th>
                        <h5>Status</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Jika tidak ada data -->
                <tr>
                    <td colspan="4" class="text-muted">
                        Tidak ada data petugas
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<style>
    .custom-table {
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        margin: 15px;
    }
    .table th {
        background-color: #CBCACA;
        font-weight: bold;
        font-size: 1rem;
        font-style: italic;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .table td {
        padding-top: 3rem;
        padding-bottom: 3rem;
        background-color: transparent;
    }
</style>
@endsection