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
</style>

<body>
    @extends('layout.navbar')
    <section style="margin-top: 100px;">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
            </div>
    </section>
    <section>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card w-75 h-auto">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Tips Membuat Website Yang Menarik</h4>
                    <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
                    <p class="card-text">Sebuah website yang baik adalah website yang dapat menarik minat pengunjung dan
                        menghasilkan banyak trafik. Berikut adalah beberapa tips yang dapat digunakan untuk membuat
                        website yang lebih bermanfaat, responsif, dan memberikan pengalaman terbaik bagi pengunjung.
                    </p>
                    <p>1. Gunakan Font yang Mudah Dibaca</p>
                    <p>Meskipun gaya yang rumit bisa menjadi lebih menarik, menggunakan font yang lebih dikenal dan
                        mudah dibaca adalah keputusan yang lebih baik. Perlu diingat bahwa San Serif Font adalah yang
                        paling banyak diterima untuk desain online, dan Font Serif paling tepat untuk desain cetak. Saat
                        Anda menggunakan terlalu banyak font yang berbeda dalam desain yang sama akan membuat konten
                        yang kurang scannable. Jangan ragu untuk menggaris-bawahi dan menebalkan kata kunci atau link
                        untuk membuat mereka lebih menonjol dan menarik</p>
                    <p>2. Adaptif / Responsif Desain</p>
                    <p>Di dunia sekarang ini pendekatan yang paling penting untuk website adalah desain yang responsif.
                        Hal ini akan memungkinkan website Anda untuk terlihat dan berfungsi dengan baik pada perangkat
                        mobile, tablet, dan berbagai jenis komputer. Pendekatan mendasarnya terbatas pada 2 versi dari
                        situs yang sama, yaitu mobile dan desktop, sedangkan fitur adaptif yang baru ini secara otomatis
                        bisa sesuai dengan ukuran layar dan fungsi pada perangkat apapun.</p>
                    <p>3. Gunakan Navigasi yang Intuitif</p>
                    <p>Intuitif disini berarti artinya mudah digunakan. Sebuah navigasi di dalam website biasanya berada
                        di atas sebuah halaman. Biasanya halaman-halaman yang penting diletakkan di navigasi atas. Untuk
                        halaman atau tautan (link) yang tidak terlalu penting, biasanya diletakkan di bagian bawah
                        (footer). Mengapa navigasi yang intuitif sangat diperlukan? Coba Anda bayangkan sebagai pengguna
                        sebuah website. Apabila Anda membutuhkan informasi dengan waktu yang terbatas, tentunya Anda
                        sendiri akan kesal apabila sebuah website tidak bekerja sebagaimana seharusnya, dan navigasi
                        yang ada di website tersebut sulit untuk digunakan. Untuk itu, navigasi yang intuitif sangat
                        diperlukan untuk menarik minat pengunjung ke website Anda.</p>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ asset('./materi') }}" class="btn btn-outline-primary btn-sm">Kembali</a>
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