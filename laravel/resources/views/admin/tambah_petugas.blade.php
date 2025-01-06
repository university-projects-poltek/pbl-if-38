@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadCrumb', 'Add Petugas')

@section('content')

<div class="mt-4">
    <div class="">
        <div class="row">
            <!-- Form Utama -->
            <div class="col-md me-2 card-content" style="height: fit-content;">
                <form action="{{ route('admin.create.petugas') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="px-3 pt-4 row">
                        <!-- Nama Lengkap -->
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                <span class="iconify side-icon normal-icon" data-icon="line-md:account" data-inline="false"></span>
                            </div>
                        </div>

                        <!-- Nomor HP -->
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Nomor HP</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                <span class="iconify side-icon normal-icon" data-icon="heroicons:phone-solid" data-inline="false"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Tempat dan Tanggal Lahir -->
                    <div class="px-3 row">
                        <div class="col-md-6 mb-3">
                            <label for="birthplace" class="form-label">Tempat Lahir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="birthplace" name="birthplace" value="{{ old('birthplace') }}">
                                <span class="iconify side-icon normal-icon" data-icon="mynaui:location" data-inline="false"></span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="birthdate" class="form-label">Tanggal Lahir</label>
                            <div class="input-group">
                                <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate') }}">
                            </div>
                        </div>
                    </div>

                    <!-- Kantor dan Kota -->
                    <div class="px-3 row">
                        <div class="col-md-6 mb-3">
                            <label for="office" class="form-label">Kantor</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="office" name="office" value="{{ old('office') }}">
                                <span class="iconify side-icon normal-icon" data-icon="mdi:account-tie-outline" data-inline="false"></span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">Kota</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                                <span class="iconify side-icon normal-icon" data-icon="bxs:city" data-inline="false"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="px-3 mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            <span class="iconify side-icon normal-icon" data-icon="line-md:email-twotone" data-inline="false"></span>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="px-3 mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <div class="input-group">
                            <textarea class="form-control" id="address" name="address" rows="3">{{ old('address') }}</textarea>
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="px-3 mb-3">
                        <label for="role" class="form-label">Role</label>
                        <div class="input-group">
                            <select class="form-control" id="role" name="role">
                                <option value="">Pilih Role</option>
                                <option value="Officer">Officer</option>
                                <option value="Field Officer">Field Officer</option>
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
                <h4 class="pt-3">User Profile</h4>
                <div class="mb-3 row align-items-center">
                    <div class="col">
                    <img src="{{ isset($petugas) && $petugas->photo ? asset('storage/photos/' . basename($petugas->photo)) : asset('default.jpg') }}"     
                    <div class="col text-item-center pe-4 me-3">
                        <div class="row">
                            <h5>User Photo</h5>
                            <p>Update  Delete</p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('admin.upload.photo', ['id' => $petugas->id ?? 0]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="drop-area" id="drop-area">
                        <label for="fileElem" class="file-label">
                            <p>Seret dan lepas file di sini, atau klik untuk memilih file</p>
                            <input type="file" id="fileElem" name="photo" multiple accept="image/*" style="display:none;">
                        </label>
                    </div>
                    <div class="button-area row mb-3">
                        <div class="col-md-5"></div>
                        <div class="col d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1">Update</button>
                            <a href="{{ route('admin.delete.photo', ['id' => $petugas->id ?? 0]) }}" class="btn btn-danger">Delete</a>
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
</div>

@endsection
