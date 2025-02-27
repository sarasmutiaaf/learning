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
    <div class="container-fluid">
        <div class="mb-3">
            <h3>Dashboard Admin</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <a class="card border-left-primary shadow h-100 py-2 bg-transparent card-hover"
                href="{{ asset('./belajar_admin') }}">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Belajar</div>
                            <div class="h5 mb-0 font-weight-bold text-primary">{{ \App\Models\Belajar::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <a class="card border-left-warning shadow h-100 py-2 bg-transparent card-hover"
                href="{{ asset('./materi_admin') }}">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Materi</div>
                            <div class="h5 mb-0 font-weight-bold text-warning">{{ \App\Models\Materi::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-scroll fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <a class="card border-left-danger shadow h-100 py-2 bg-transparent card-hover"
                href="{{ asset('./user_admin') }}">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                User</div>
                            <div class="h5 mb-0 font-weight-bold text-danger">{{ \App\Models\User::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    @endsection
</body>