@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Materi Detail</title>
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
</head>

<style>
p {
    text-align: justify;
}

.container {
    margin-top: 100px;
}

.card {
    width: 75%;
    max-width: 900px;
    margin: auto;
}

.card-body {
    padding: 20px;
}

.card-footer {
    padding: 10px;
    text-align: right;
}
</style>

<body>
    @extends('layout.navbar')

    <section class="container pt-5">
        <div class="row align-items-center justify-content-center">

        </div>
    </section>

    <section>
        <div class="d-flex justify-content-center align-items-start">
            <div class="card h-auto" style="width: 75%; max-width: 900px; margin: auto;">
                <div class="card-body">
                    <h4 class="card-title fw-bold">{{ $materi->judul }}</h4>
                    <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
                    <p class="card-text">{{ $materi->deskripsi }}</p>
                </div>
                <div class="card-footer bg-white text-end" style="position: relative; z-index: 10;">
                    <a href="{{ route('materi') }}" class="btn btn-outline-primary btn-sm">Kembali</a>
                </div>
            </div>
        </div>

    </section>

    <footer style="padding-top: 50px;">
        <p class="fs-5 text-center py-3 text-primary">
            @ 2025 E-Learning
        </p>
    </footer>
</body>

</html>