@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Materi</title>
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
                <a href="{{ route('materi/create') }}" class="btn btn-outline-primary mt-3">Tambah Data Materi</a>
                <h1 class="mt-2" style="color: #6282a3">Daftar Materi</h1>
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
                    @foreach($tbl_materi as $materi)
                    <tr class="">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="{{ Storage::url($materi->gambar) }}" alt="" class="cover"></td>
                        <td>{{ $materi->judul }}</td>
                        <td>{{ $materi->deskripsi }}</td>
                        <td>
                            <a href="{{ route('materi/edit', $materi->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route ('materi/destroy', $materi->id) }}" method="post" class="d-inline">
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