@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Navbar</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> -->
    <style>
    .navbar {
        background-color: #fff;
        height: 80px;
        margin: 20px;
        border-radius: 16px;
        padding: 0.5rem;
        box-shadow: 0 4px 8px rgb(149, 164, 180);
        /* Menambahkan bayangan */
    }

    .navbar-brand {
        font-weight: 500;
        color: rgb(103, 148, 199);
        font-size: 24px;
        transition: 0.3s color;
    }

    .login-button {
        background-color: rgb(103, 148, 199);
        color: #fff;
        font-size: 14px;
        padding: 8px 20px;
        border-radius: 50px;
        text-decoration: none;
        transition: 0.3s background-color;
    }

    .login-button:hover {
        background-color: rgb(60, 85, 114);
    }

    .navbar-toggler {
        border: none;
        font-size: 1.25rem;
    }

    .navbar-toggler:focus,
    .btn-close:focus {
        box-shadow: none;
        outline: none;
    }

    .nav-link {
        color: #666777;
        font-weight: 500;
        position: relative;
    }

    .nav-link:hover,
    .nav-link.active {
        color: #000;
    }

    @media (min-width: 991px) {
        .nav-link::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: rgb(103, 148, 199);
            visibility: hidden;
            transition: 0.3s ease-in-out;
        }

        .nav-link:hover::before,
        .nav-link:active::before {
            width: 100%;
            visibility: visible;
        }
    }

    .hero-section {
        /* background: url("/img/backg.jpg") no-repeat center; */
        /* background-color: #ba7499; */
        background-size: cover;
        width: 100%;
        /* height: 100vh; */
    }

    .hero-section::before {
        /* background-color: rgba(0, 0, 0, 0.6); */
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .hero-section .container {
        /* height: 100vh; */
        z-index: 1;
        position: relative;
    }

    .hero-section h1 {
        font-size: 1.5em;
    }
    </style>
</head>

@yield('content')

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">E-Learning</a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-Learning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('/') ? 'active text-primary fw-bold' : '' }}"
                                href="
                                {{ asset('./') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('belajar') ? 'active text-primary fw-bold' : '' }}"
                                href="{{ asset('./belajar') }}">Belajar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('materi') ? 'active text-primary fw-bold' : '' }}"
                                href="{{ asset('./materi') }}">Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 {{ Request::is('diskusi') ? 'active text-primary fw-bold' : '' }}"
                                href="{{ asset('./diskusi') }}">Diskusi</a>
                        </li>
                    </ul>
                </div>
            </div>
            @if(Auth::check())
            <div class="dropdown">
                <a class="login-button dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->nama }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @else
            <a href="{{ url('/register') }}" class="login-button">Daftar</a>
            <a href="{{ url('/login') }}" class="login-button ms-2">Masuk</a>
            @endif
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!--end navbar -->
    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
            @yield('content')
            <!-- <h1>saras mutia arofah</h1> -->
        </div>
    </section>
    <!-- hero section -->

    <!--end  -->

</body>

</html>