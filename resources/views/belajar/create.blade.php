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
            <div class="col-12">
                <form action="/belajar/store" method="post" enctype="multipart/form-data">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="my-3">Tambah Data Pelajaran</h2>
                        <button type="submit" class="btn btn-outline-primary ms-auto">Tambah Data</button>
                    </div>

                    @csrf
                    <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="judul" name="judul" autofocus
                                value="{{ old('judul', $data['judul'] ?? '') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                value="{{ old('deskripsi', $data['deskripsi'] ?? '') }}">
                        </div>
                    </div>
                    <div class="form-group row my-3">
                        <label for="gambar" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-2">
                            <img src="{{ isset($data['gambar']) ? asset('storage/' . $data['gambar']) : asset('img/laptop2.jpg') }}"
                                class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <label class="input-group-text btn btn-outline-secondary" for="gambar">Pilih
                                    File</label>
                                <span class="form-control custom-img-label">Nama File</span>
                            </div>
                            <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImg()"
                                hidden accept="image/*">
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <table class="table table-transparent table-responsive">
                            <thead>
                                <th class="text-center" width="5%">
                                    <button type="button" class="btn btn-outline-success" id="addRow">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </th>
                                <th class="text-center" width="50%">Judul</th>
                                <th class="text-center" width="45%">File</th>
                            </thead>
                            <tbody id="tableBody">
                                <tr>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-outline-danger btn-delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <input type="text" name="judul_detail[]" class="form-control">
                                    </td>
                                    <td>
                                        <input type="file" name="file[]" class="form-control" accept="application/pdf">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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

    document.addEventListener("DOMContentLoaded", function() {
        const tableBody = document.getElementById("tableBody");
        const addButton = document.getElementById("addRow");

        addButton.addEventListener("click", function() {
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td class="text-center">
                    <button type="button" class="btn btn-outline-danger btn-delete">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
                <td>
                    <input type="text" name="judul_detail[]" class="form-control">
                </td>
                <td>
                    <input type="file" name="file[]" class="form-control" accept="application/pdf">
                </td>
            `;
            tableBody.appendChild(newRow);
        });

        tableBody.addEventListener("click", function(event) {
            if (event.target.closest(".btn-delete")) {
                const row = event.target.closest("tr");
                row.remove();
            }
        });
    });
    </script>
    @endsection
</body>