@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | User</title>
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
</head>
<style>
input.transparent-input {
    background-color: transparent !important;
    border: none !important;
}
</style>

<body>
    @extends('admin.side')
    @section('content')
    <div class="container text-primary">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-2" style="color: #6282a3">Daftar Orang</h1>
                <form action="{{ route('user_admin/index') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="text-primary transparent-input form-control"
                            placeholder="Masukkan keyword pencarian.." name="keyword" value="{{ request('keyword') }}">
                        <button class="btn btn-outline-primary text-dark" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('Apakah anda yakin?');">Delete</button>
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