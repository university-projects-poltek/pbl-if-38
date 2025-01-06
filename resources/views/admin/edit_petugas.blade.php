@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadCrumb', 'Edit Petugas')

@section('content')

<div class="mt-4">
    <div class="row">
        <!-- Form Utama -->
        <div class="col-md-8 me-2 card-content" style="height: fit-content;">
            <form action="{{ route('admin.update.petugas', $petugas->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="px-3 pt-4 row">
                    <!-- Nama Lengkap -->
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $petugas->name) }}">
                            <span class="iconify side-icon normal-icon" data-icon="line-md:account" data-inline="false"></span>
                        </div>
                    </div>

                    <!-- Nomor HP -->
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Nomor HP</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $petugas->phone) }}">
                            <span class="iconify side-icon normal-icon" data-icon="heroicons:phone-solid" data-inline="false"></span>
                        </div>
                    </div>
                </div>

                <!-- Tempat dan Tanggal Lahir -->
                <div class="px-3 row">
                    <div class="col-md-6 mb-3">
                        <label for="birthplace" class="form-label">Tempat Lahir</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="birthplace" name="birthplace" value="{{ old('birthplace', $petugas->birthplace) }}">
                            <span class="iconify side-icon normal-icon" data-icon="mynaui:location" data-inline="false"></span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="birthdate" class="form-label">Tanggal Lahir</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate', $petugas->birthdate) }}">
                        </div>
                    </div>
                </div>

                <!-- Kantor dan Kota -->
                <div class="px-3 row">
                    <div class="col-md-6 mb-3">
                        <label for="office" class="form-label">Kantor</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="office" name="office" value="{{ old('office', $petugas->office) }}">
                            <span class="iconify side-icon normal-icon" data-icon="mdi:account-tie-outline" data-inline="false"></span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="city" class="form-label">Kota</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $petugas->city) }}">
                            <span class="iconify side-icon normal-icon" data-icon="bxs:city" data-inline="false"></span>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="px-3 mb-3">
                    <label for="email" class="form-label">E-Mail</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $petugas->email) }}">
                        <span class="iconify side-icon normal-icon" data-icon="line-md:email-twotone" data-inline="false"></span>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="px-3 mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <div class="input-group">
                        <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $petugas->address) }}</textarea>
                    </div>
                </div>

                <!-- Role -->
                <div class="px-3 mb-3">
                    <label for="role" class="form-label">Role</label>
                    <div class="input-group">
                        <select class="form-control" id="role" name="role">
                            <option value="Officer" {{ $petugas->role == 'Officer' ? 'selected' : '' }}>Officer</option>
                            <option value="Field Officer" {{ $petugas->role == 'Field Officer' ? 'selected' : '' }}>Field Officer</option>
                            <!-- Tambahkan opsi lainnya jika ada -->
                        </select>
                        <span class="iconify side-icon normal-icon" data-icon="mdi:account-group" data-inline="false"></span>
                    </div>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end mb-4">
                    <button type="reset" class="btn btn-secondary me-2">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        
        <!-- Foto Profil -->
        <div class="col-md-3 ms-4 card-content" style="height: fit-content; width: 350px;">
            <h4 class="pt-3">Profil Pengguna</h4>
            <div class="mb-3 row align-items-center">
                <div class="col">
                    <!-- Menampilkan Foto Pengguna, jika ada -->
                    @if ($petugas->photo)
                        <img src="{{ asset('storage/' . $petugas->photo) }}" alt="Petugas Photo" class="img-thumbnail rounded-circle" style="width: 100px; height: 100px;">
                    @else
                        <img src="{{ asset('assets/image/default-photo.jpg') }}" alt="Petugas Photo" class="img-thumbnail rounded-circle" style="width: 100px; height: 100px;">
                    @endif
                </div>
                <div class="col text-center pe-4 me-3">
                    <h5>Foto Pengguna</h5>
                    <p>Perbarui / Hapus</p>
                </div>
            </div>

            <!-- Form untuk mengupdate foto -->
            <form action="{{ route('admin.upload.photo', $petugas->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="drop-area" id="drop-area">
                    <label for="fileElem" class="file-label">
                        <p>Seret dan lepas file di sini, atau klik untuk memilih file</p>
                        <input type="file" id="fileElem" name="photo" accept="image/*" style="display:none;">
                    </label>
                </div>
                <div class="button-area row mb-3">
                    <div class="col-md-5"></div>
                    <div class="col d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1">Perbarui</button>
                        <a href="{{ route('admin.delete.photo', $petugas->id) }}" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .input-group {
        border: 2px solid #125491;
        border-radius: 8px;
    }

    .form-control {
        background-color: #D9D9D9;
    }

    .drop-area {
        border: 2px dashed #125491;
        border-radius: 8px;
        width: 300px;
        height: 165px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 20px auto;
        color: #000000;
        transition: background-color 0.3s;
    }

    .drop-area.hover {
        background-color: #D9D9D9;
    }

    .button-area {
        display: flex;
    }
</style>

<script>
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('fileElem');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
        document.body.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, unhighlight, false);
    });

    dropArea.addEventListener('drop', handleDrop, false);

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function highlight() {
        dropArea.classList.add('hover');
    }

    function unhighlight() {
        dropArea.classList.remove('hover');
    }

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        handleFiles(files);
    }

    function handleFiles(files) {
        [...files].forEach(file => {
            console.log(file.name);
        });
    }

    dropArea.addEventListener('click', () => {
        fileInput.click();
    });
</script>

@endsection
