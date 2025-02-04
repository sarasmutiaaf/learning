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
                    <h1 class="text-primary fs-* fw-bold mb-3 text-center">Belajar di E-Learning</h1>
                    <h3 class="fs-6 mb-3 text-center">Belajar pemrograman gratis di E-Learning</h3>
                </div>
                <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
            </div>
    </section>
    <section>
        <div class="d-flex" style="gap: 20px; margin-left: 130px;">
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/html.png') }}" alt="Card image cap"
                    style="aspect-ratio: 4 / 2.7; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Belajar HTML</h4>
                    <p class="card-text">HyperText Markup Language yang biasa disingkat HTML adalah bahasa markah yang
                        sangat berguna untuk membuat sebuah halaman (kerangka) website. Jika kalian ingin membuat
                        website, maka kalian wajib belajar bahasa markah ini.
                    </p>
                    <a href="{{ asset('./belajar_detail') }}" class="btn btn-outline-primary w-100">Mulai Belajar</a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/css.png') }}" alt="Card image cap"
                    style="aspect-ratio: 4 / 2.7; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Belajar CSS</h4>
                    <p class="card-text">Cascading Style Sheets yang biasa disingkat CSS adalah sekumpulan kode yang
                        digunakan untuk men-design bahasa markup seperti HTML. Cascading Style Sheets (CSS) sangat
                        berguna sekali untuk mengelola dan meningkatkan UI/UX sebuah website.</p>
                    <a href="#" class="btn btn-outline-primary w-100">Mulai Belajar</a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/php.png') }}" alt="Card image cap"
                    style="aspect-ratio: 4 / 2.7; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Belajar PHP</h4>
                    <p class="card-text">PHP umumnya digunakan dalam pengembangan website. PHP merupakan bahasa
                        server-side (Back-END) terpopuler di dunia karena mudah untuk dipelajari, komunitas yang sangat
                        luas dan PHP tersedia di/untuk semua server. Biasanya digunakan bersamaan dengan HTML dan CSS.
                    </p>
                    <a href="#" class="btn btn-outline-primary w-100">Mulai Belajar</a>
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