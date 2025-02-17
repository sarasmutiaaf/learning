@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Materi</title>
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
                    <h1 class="text-primary fs-* fw-bold mb-3 text-center">Materi di E-Learning</h1>
                    <h3 class="fs-6 mb-3 text-center">Baca materi di E-Learning</h3>
                </div>
                <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
            </div>
    </section>
    <section>
        <div class="d-flex" style="gap: 20px; margin-left: 130px;">
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/laptop2.jpg') }}" alt="Card image cap"
                    style="aspect-ratio: 4 / 2.7; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Tips Membuat Website Yang Menarik</h4>
                    <p class="card-text">Sebuah website yang baik adalah website yang dapat menarik minat pengunjung dan
                        menghasilkan banyak trafik. Berikut adalah beberapa tips yang dapat digunakan untuk membuat
                        website yang lebih bermanfaat , responsif, dan memberikan pengalaman terbaik bagi pengunjung.
                    </p>
                    <hr style="border: 1px solid #000; width: 100%; margin: 15px auto;">
                    <a href="{{ asset('./materi_detail') }}" class="btn btn-outline-primary w-100">Selengkapnya</a>
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