@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning</title>
</head>

<style>
p {
    text-align: justify;
}
</style>

<body>
    @extends('layout.navbar')
    <section style="margin-top: 50px;">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <h2 class="text-primary fs-1 fw-bold mb-3">E - Learning</h2>
                    <p>E-learning pemrograman adalah metode pembelajaran berbasis digital yang memungkinkan seseorang
                        untuk mempelajari berbagai bahasa pemrograman, konsep coding, dan keterampilan pengembangan
                        perangkat lunak melalui platform online. Dengan e-learning, pembelajaran menjadi lebih
                        fleksibel, dapat diakses kapan saja dan di mana saja, sehingga sangat cocok bagi pelajar,
                        mahasiswa, maupun profesional yang ingin meningkatkan keterampilan mereka di bidang pemrograman.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('img/learning.png') }}" alt="tech gear vr headset" class="img-fluid">
                </div>
            </div>
    </section>

    <section class="container py-5 mt-5 mb-5">
        <div class="row g-5">
            <div class="col-12 col-lg-5">
                <img src="{{ asset('img/belajar.png') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-12 col-lg-7">
                <div class="text-center text-md-start">
                    <h2 class="text-primary fs-1 fw-bold mb-3">Ayo Belajar Bahasa Pemrograman!</h2>
                    <p>Belajar pemrograman bukan sekadar memahami sintaks dan kode, tetapi tentang melatih pola pikir
                        yang kreatif, logis, dan inovatif. Setiap baris kode yang kita tulis adalah langkah kecil menuju
                        perubahan besar, bukan hanya untuk diri sendiri, tetapi juga untuk dunia di sekitar kita. Jangan
                        takut akan kesalahan, karena dalam dunia pemrograman, setiap error adalah kesempatan untuk
                        belajar dan berkembang. Teruslah mencoba, eksplorasi tanpa batas, dan percayalah bahwa setiap
                        usaha yang dilakukan hari ini akan menjadi fondasi kesuksesan di masa depan. Ingat, semua
                        programmer hebat pernah menjadi pemula. Kuncinya adalah konsistensi, semangat, dan kemauan untuk
                        terus belajar dari setiap tantangan yang dihadapi.
                    </p>
                    <a href="{{ asset('./belajar') }}" class="btn btn-outline-primary">Saya mau belajar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <h2 class="text-primary fs-1 fw-bold mb-3">Baca Materi</h2>
                    <p>Setiap kata yang kamu baca adalah jendela baru menuju wawasan yang lebih
                        luas dan pemahaman yang lebih dalam. Membaca bukan sekadar mengisi waktu luang, tetapi sebuah
                        investasi berharga untuk masa depanmu. Dengan membaca, kamu bisa memperkaya pengetahuan,
                        mengasah pola pikir, dan menemukan inspirasi di setiap paragrafnya. Jangan lewatkan kesempatan
                        untuk terus belajar dan berkembang, karena setiap informasi yang kamu serap hari ini bisa
                        menjadi langkah kecil menuju perubahan besar dalam hidupmu. Mari mulai membaca dan temukan
                        hal-hal baru yang menakjubkan!</p>
                    <a href="{{ asset('./materi') }}" class="btn btn-outline-primary">Saya mau baca materi</a>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('img/iconlandingpage.jpg') }}" alt="tech gear vr headset" class="img-fluid">
                </div>
            </div>
    </section>
    <section class="container py-5 mt-5 mb-5">
        <div class="row g-5">
            <div class="col-12 col-lg-5">
                <img src="{{ asset('img/diskusi.png') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-12 col-lg-7">
                <div class="text-center text-md-start">
                    <h2 class="text-primary fs-1 fw-bold mb-3">Yuk Berdiskusi</h2>
                    <p>Ayo berdiskusi! Diskusi bukan sekadar ajang berbagi pendapat, tetapi merupakan jembatan untuk
                        memperluas wawasan, memahami sudut pandang yang berbeda, dan menemukan solusi dari berbagai
                        perspektif. Dengan berdiskusi, kita belajar untuk berpikir kritis, saling menghormati, dan terus
                        menggali ide-ide baru yang dapat membawa perubahan positif. Jangan takut untuk mengutarakan
                        pendapat, karena setiap gagasan memiliki nilai dan bisa menjadi inspirasi bagi orang lain. Mari
                        kita ciptakan lingkungan yang penuh dengan dialog produktif, di mana setiap suara didengar dan
                        setiap pikiran dihargai. Bersama, kita bisa tumbuh, berkembang, dan menemukan jawaban terbaik
                        untuk setiap tantangan yang kita hadapi. Jadi, mari kita mulai diskusi dan wujudkan perubahan
                        dari percakapan yang bermakna!
                    </p>
                    <a href="{{ asset('./diskusi') }}" class="btn btn-outline-primary">Saya mau diskusi</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5 my-3">
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <h1 class="display-4 fw-bold text-center"><span class="text-primary">Motivasi </span></h1>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-3 text-primary fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Bill Gates
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Anda tidak harus menjadi jenius untuk bisa coding. Pertambahan, pengurangan. itu sudah
                                cukup!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-3 text-primary fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Jack Ma
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Hari ini sulit dan hari esok akan lebih sulit, tetapi hari lusa akan menjadi sinar
                                matahari!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-3 text-primary fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Steve Jobs
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Saya pikir semua orang harus belajar koding, karena koding mengajarkan orang berpikir!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p class="fs-5 text-center py-3 text-primary">
            @ 2025 E-Learning
        </p>
    </footer>
</body>