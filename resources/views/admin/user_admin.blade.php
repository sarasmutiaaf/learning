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
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="text-primary transparent-input form-control"
                            placeholder="Masukkan keyword pencarian.." name="keyword">
                        <button class="btn btn-outline-primary text-dark" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row ">
            <div class="col">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Saras Mutia</td>
                            <td>
                                <form action="/admin/user" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Nadya Urra</td>
                            <td>
                                <form action="/admin/user" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cela Syan</td>
                            <td>
                                <form action="/admin/user" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    @endsection
</body>