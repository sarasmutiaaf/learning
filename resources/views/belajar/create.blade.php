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
                <h2 class="my-3">Tambah Data Pelajaran</h2>
                <form action="/buku/save" method="post" enctype="multipart/form-data">
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
                        <label for="gambar" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-2">
                            <img src="{{ asset('img/backg.jpg') }" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <label class="input-group-text btn btn-outline-secondary" for="gambar">Pilih
                                    File</label>
                                <label class="form-control custom-img-label" for="gambar">Nama File</label>
                            </div>
                            <input class="form-control invisible" type="file" id="gambar" name="gambar" value=""
                                onchange="">
                        </div>
                    </div>
                    <div class="form-group row my-3">
                        <label for="file" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <label class="input-group-text btn btn-outline-secondary" for="file">Pilih
                                    File</label>
                                <label class="form-control custom-file-label" for="file">Nama File</label>
                            </div>
                            <input class="form-control invisible" type="file" id="file" name="file" value=""
                                onchange="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImg() {
    const gambar = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');
    const gambarLabel = document.querySelector('.custom-img-label');

    if (gambar.files.length > 0) {
        gambarLabel.textContent = gambar.files[0].name;
        const fileReader = new FileReader();
        fileReader.readAsDataURL(gambar.files[0]);
        fileReader.onload = function(e) {
            imgPreview.src = e.target.result;
        };
    }
}

function previewFile() {
    const file = document.querySelector('#file');
    const fileLabel = document.querySelector('.custom-file-label');

    if (file.files.length > 0) {
        fileLabel.textContent = file.files[0].name;
    }
}

export { previewImg, previewFile };
    </script>
    @endsection
</body>