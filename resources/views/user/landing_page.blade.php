@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Recruitment | Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/landing_page.css') }}">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div>
                    <img src="{{ asset('img/icon.jpg') }}" width="30" height="30" alt="tech gear vr headset"
                        class="img-fluid">
                </div>
                <a class="navbar-brand fw-bold fs-2" href="#">E-Recruitment</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link active fs-5" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">Products</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white px-4 py-2 ms-2"
                                href="{{ asset('user/login') }}">Gabung</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <section>
            <div class="container pt-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-6">
                        <h1 class="display-4 fw-bold"><span class="text-primary">E- </span>Recruitment</h1>
                        <p class="lead pb-4 pt-2">proses mencari dan menyeleksi calon karyawan untuk mengisi posisi atau
                            jabatan tertentu.</p>
                        <!-- <button class="btn btn-primary px-5 py-3 d-inline-block">Lihat Sekarang</button> -->
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{ asset('img/iconlandingpage.jpg') }}" alt="tech gear vr headset" class="img-fluid">
                    </div>
                </div>
        </section>
    </header>

    <section class="container py-5 mt-5">
        <div class="row g-5">
            <div class="col-12 col-lg-5">
                <img src="{{ asset('img/backg.jpg') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-12 col-lg-7">
                <div class="text-center text-md-start">
                    <h2 class="text-primary fs-1 fw-bold mb-3">Apa Itu Rekrutmen?</h2>
                    <p>Rekrutmen adalah proses mencari, menarik, menyaring, mewawancarai, dan memilih kandidat yang
                        sesuai untuk mengisi posisi atau peran yang sedang dibutuhkan oleh perusahaan atau organisasi.
                    </p>
                    <p>Proses rekrutmen bertujuan memastikan perusahaan mempunyai tenaga kerja dengan kualitas sesuai
                        kebutuhan dalam rangka mencapai tujuan bisnis yang sudah ditentukan.</p>
                    <button class="btn btn-primary px-5 py-3 d-inline-block fs-5 mt-4 fw-bold">Gabung</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="text-primary fs-1 fw-bold mb-3 text-center">Key Features</h2>
            </div>
        </div>
        <div class="row mt-2 g-4">
            <div class="col-12 col-lg-4">
                <div class="card p-3">
                    <ion-icon name="shield-checkmark-outline" class="icons"></ion-icon>
                    <h3>Judul</h3>
                    <p>penjelasan</p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card p-3 blue-bg">
                    <ion-icon name="time-outline" class="icons"></ion-icon>
                    <h3>Judul 2</h3>
                    <p>penjelasan</p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card p-3">
                    <ion-icon name="bulb-outline" class="icons"></ion-icon>
                    <h3>Judul 3</h3>
                    <p>penjelasan</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-primary fs-1 fw-bold mb-3 text-center">Our Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs justify-content-center mt-3 g-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fs-5 me-2 md-4" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-5 me-2 md-4" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">Cat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-5 me-2 md-4" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                            aria-selected="false">Fish</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="row mt-4 g-4">
                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('img/download.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                            </div>
                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('img/downloadkuc.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                            </div>
                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('img/OIP.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="row mt-4 g-4">
                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('img/downloadkuc.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="row mt-4 g-4">
                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('img/download.jpeg') }}" class="img-fluid d-block mx-auto" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container py-5 my-3">
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-3 text-primary fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Gimana Cak Karanya ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item' s accordion body.</strong> It is shown by default,
                                until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-3 text-primary fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Gimana Cak Karanya ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fs-3 text-primary fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Gimana Cak Karanya ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="blue-bg py-5">
        <p class="fs-5 text-center py-3 text-white">
            @ 2024 E-Recruitment.
        </p>
    </footer>

    <!-- icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>