@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadCrumb', 'Edit Laporan')

@section('content')

<!-- NOTE : untuk yang di Ctrl / itu valuenya harus dibuat dulu tabel databasenya -->
<!-- kalau sudah ada tabel databasenya tinggal isi sesusai yang di value yang ada si tabelnya -->
<!-- untuk form imputnya tinggan ambil di file INputProfile,txt -->

<div class="mt-4">
    <div class="">
        <div class="row">
            <!-- Form Utama -->
            <div class="col-md me-2 card-content" style="height: fit-content;">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="px-3 pt-4 row">
                        <div class="drop-area" id="drop-area">
                            <label for="fileElem" class="file-label">
                                <p>Seret dan lepas file di sini, atau klik untuk memilih file</p>
                                <input type="file" id="fileElem" multiple accept="image/*" style="display:none;">
                            </label>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="px-3 mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="email" name="email" >
                            <span class="iconify side-icon normal-icon" data-icon="mynaui:location" data-inline="false"></span>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="px-3 mb-3">
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