@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Belajar</title>
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
</head>
<style>
.cover {
    width: 100px;
}

.table>tbody>tr>* {
    vertical-align: middle;
}

td {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 200px;
    text-align: justify;
}

td:hover {
    overflow: visible;
    white-space: normal;
}
</style>

<body>
    @extends('admin.side')
    @section('content')
    <div class="container" id="buku">
        <div class=" row">
            <div class="col ">
                <a href="{{ route('belajar/create') }}" class="btn btn-outline-primary mt-3">Tambah Data Pelajaran</a>
                <h1 class="mt-2" style="color: #6282a3">Daftar Pelajaran</h1>
            </div>

            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tbl_belajar as $belajar)
                    <tr class="">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="{{ Storage::url($belajar->gambar) }}" alt="" class="cover"></td>
                        <td>{{ $belajar->judul }}</td>
                        <td>{{ $belajar->deskripsi }}</td>
                        <td>
                            <a href="{{ route('belajar/edit', $belajar->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route ('belajar/destroy', $belajar->id) }}" method="post" class="d-inline">
                                <input type="hidden" name="buku" value="">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger"
                                    onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    @endsection
</body>