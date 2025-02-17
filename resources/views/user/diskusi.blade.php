@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Diskusi</title>
    <link rel="stylesheet" href="{{ asset('css/belajar.css') }}">
</head>

<body>
    @extends('layout.navbar')
    <section style="margin-top: 100px;">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <h1 class="text-primary fs-* fw-bold mb-3 text-center">Tempat Diskusi di E-Learning</h1>
                    <h3 class="fs-6 mb-3 text-center">Diskusi bersama di E-Learning</h3>
                </div>
                <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
            </div>
    </section>
    <section>
        <div class="d-flex" style="gap: 20px; margin-left: 130px;">
            <div class="card" style="width: 68rem;">
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
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