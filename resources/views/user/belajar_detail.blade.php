@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Belajar</title>
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
</head>

<body>
    @extends('layout.navbar')
    <section style="margin-top: 100px;">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <h1 class="text-primary fs-* fw-bold mb-3 text-center">Belajar HTML</h1>
                    <h3 class="fs-6 mb-3 text-center">Belajar HTML gratis di E-Learning</h3>
                </div>
                <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
            </div>
    </section>
    <section>
        <div class="d-flex" style="gap: 20px; margin-left: 130px;">
            @foreach($belajar as $item)
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                    <h5 lass="card-title fw-bold">{{ $item['judul_belajar'] }}</h5>
                </div>
                <img class="card-img-top" src="{{ asset('img/pers.png') }}" alt="Card image cap"
                    style="aspect-ratio: 4 / 2.7; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title fw-bold">
                        <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
                    </h4>
                    <a href="{{ asset('storage/' . $item->file) }}" target="_blank"
                        class="btn btn-outline-primary w-100">
                        Mulai Belajar
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <footer style="padding-top: 50px;">
        <p class="fs-5 text-center py-3 text-primary">
            @ 2025 E-Learning
        </p>
    </footer>
</body>