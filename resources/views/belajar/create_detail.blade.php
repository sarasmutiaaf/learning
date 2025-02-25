@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Belajar</title>
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
</head>

<body>
    @extends('admin.side')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <h2 class="my-3">Tambah Data Pelajaran</h2>
                <form action="/belajar/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="judul" name="judul" autofocus value="">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row my-3">
                        <label for="file" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <label class="input-group-text btn btn-outline-secondary" for="file">Pilih File</label>
                                <input class="form-control" type="file" id="file" name="file"
                                    onchange="updateFileName()">
                            </div>
                            <span class="form-text text-muted" id="file-name">Tidak ada file yang dipilih</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    <script>
    function updateFileName() {
        const fileInput = document.querySelector('#file');
        const fileName = document.querySelector('#file-name');

        if (fileInput.files.length > 0) {
            fileName.textContent = fileInput.files[0].name;
        } else {
            fileName.textContent = "Tidak ada file yang dipilih";
        }
    }
    </script>
    @endsection
</body>