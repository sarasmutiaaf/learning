@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Belajar</title>
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
</head>

<style>
p {
    text-align: justify;
}
</style>

<body>
    @extends('layout.navbar')
    <section style="margin-top: 100px;">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <h1 class="text-primary fs-* fw-bold mb-3 text-center">Belajar di E-Learning</h1>
                    <h3 class="fs-6 mb-3 text-center">Belajar pemrograman gratis di E-Learning</h3>
                </div>
                <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
            </div>
    </section>
    <section>
        <div class="d-flex flex-wrap justify-content-center" style="gap: 20px; margin-left: auto; margin-right: auto;">
            @foreach($belajar as $item)
            <div class="card" style="width: calc(27.3% - 20px); min-width: 250px;">
                <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap"
                    style="aspect-ratio: 4 / 2.7; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title fw-bold">{{ $item->judul }}</h4>
                    <p class="card-text flex-grow-1">{{ $item->deskripsi }}</p>
                    <hr style="border: 1px solid #000; width: 100%; margin: 15px auto;">
                    <a href="{{ route('belajar_detail', $item->id) }}" class="btn btn-outline-primary mt-auto w-100">
                        Selengkapnya
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