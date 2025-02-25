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
        <form action="{{ route ('belajar/edit', $belajar->id) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="my-3">Edit Data Pelajaran</h2>
                        <button type="submit" class="btn btn-outline-primary ms-auto">Ubah Data</button>
                    </div> @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="judul" name="judul" autofocus
                                value="{{ old('judul', $belajar->judul) }}" required>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                required>{{ old('deskripsi', $belajar->deskripsi) }}</textarea>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row my-3">
                        <label for="gambar" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-2">
                            <img src="{{ Storage::url($belajar->gambar) }}" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <label class="input-group-text btn btn-outline-secondary" for="gambar">Pilih
                                    File</label>
                                <span class="form-control custom-img-label">Nama File</span>
                            </div>
                            <input class="form-control" type="file" id="gambar" name="gambar" value=""
                                onchange="previewImg()" hidden>
                        </div>
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
                            @foreach($details as $item)
                            <tr>
                                <td class="text-center">
                                    <input type="hidden" name="detail_id[]" value="{{ $item->id }}">
                                    <button type="button" class="btn btn-outline-danger btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <input type="checkbox" name="delete_detail[]" value="{{ $item->id }}"
                                        class="d-none delete-checkbox">
                                </td>
                                <td>
                                    <input type="text" name="judul_detail[]" class="form-control"
                                        value="{{ $item->judul_belajar }}">
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="file" name="file[]" class="form-control" accept="application/pdf">
                                        @if($item->file)
                                        <a href="{{ asset('storage/' . $item->file) }}" target="_blank"
                                            class="btn btn-outline-primary d-flex justify-content-center align-items-center">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
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
                const id = event.target.closest(".btn-delete").getAttribute("data-id");
                row.remove();
            }
        });
    });
    </script>
    @endsection
</body>