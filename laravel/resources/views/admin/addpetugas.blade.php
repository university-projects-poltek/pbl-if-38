@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadCrumb', 'Add Petugas')

@section('content')

<!-- NOTE : untuk yang di Ctrl / itu valuenya harus dibuat dulu tabel databasenya -->
<!-- kalau sudah ada tabel databasenya tinggal isi sesusai yang di value yang ada si tabelnya -->
<!-- untuk form imputnya tinggan ambil di file INputProfile,txt -->

<div class="mt-4">
    <div class="">
        <div class="row">
            <!-- Form Utama -->
            <div class="col-md me-2 card-content" style="height: fit-content;">
                <form action="{{route('admin.create.petugas')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="px-3 pt-4 row">
                        <!-- Nama Lengkap -->
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <input type="text" class="form-control"  id="name" name="name">
                                <span class="iconify side-icon normal-icon" data-icon="line-md:account" data-inline="false"></span>              
                            </div>
                        </div>
    
                        <!-- Nomor HP -->
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Nomor HP</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="phone" name="phone" >
                                <span class="iconify side-icon normal-icon" data-icon="heroicons:phone-solid" data-inline="false"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Tempat dan Tanggal Lahir -->
                    <div class="px-3 row">
                        <div class="col-md-6 mb-3">
                            <label for="birthplace" class="form-label">Tempat Lahir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="birthplace" name="birthplace" >
                                <span class="iconify side-icon normal-icon" data-icon="mynaui:location" data-inline="false"></span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="birthdate" class="form-label">Tanggal Lahir</label>
                            <div class="input-group">
                                <input type="date" placeholder="mm/dd/yy" class="form-control" id="birthdate" name="birthdate" >
                            </div>
                        </div>
                    </div>

                    <!-- Kantor dan Kota -->
                    <div class="px-3 row">
                        <div class="col-md-6 mb-3">
                            <label for="office" class="form-label">Kantor</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="office" name="office" >
                                <span class="iconify side-icon normal-icon" data-icon="mdi:account-tie-outline" data-inline="false"></span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">Kota</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="city" name="city" >
                                <span class="iconify side-icon normal-icon" data-icon="bxs:city" data-inline="false"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="px-3 mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" >
                            <span class="iconify side-icon normal-icon" data-icon="line-md:email-twotone" data-inline="false"></span>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="px-3 mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <div class="input-group">
                            <textarea class="form-control" id="address" name="address" rows="3" ></textarea>
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="d-flex justify-content-end mb-4">
                        <button type="reset" class="btn btn-secondary me-2">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
    <script
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('fileElem');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);    
            document.body.addEventListener(eventName, preventDefaults, false);  
        };

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

        fileInput.addEventListener('change', (e) => {
            const files = e.target.files;
            handleFiles(files);
        });
    </script>
</div>

@endsection