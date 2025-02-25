@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Sidebar</title>
    <link rel="stylesheet" href="{{ asset('css/side.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="wrapper">
        <!-- sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <img src="{{ asset('img/learning.png') }}" class="" width="30" height="24">
                    <a href="#">E-Learning</a>
                </div>
                <!-- sidebar navigasi -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Dashboard
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ asset('./admin') }}" class="sidebar-link nav-link">
                            <i class="fas fa-home fe-2"></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ asset('./belajar_admin') }}" class="sidebar-link nav-link">
                            <i class="fas fa-book fe-2"></i>
                            Belajar
                        </a>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a href="{{ asset('./belajar_detail_admin') }}" class="sidebar-link nav-link">
                            <i class="fas fa-book fe-2"></i>
                            Belajar Detail
                        </a>
                    </li> -->
                    <li class="sidebar-item">
                        <a href="{{ asset('./materi_admin') }}" class="sidebar-link nav-link">
                            <i class="fas fa-scroll fe-2"></i>
                            Materi
                        </a>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-users fe-2"></i>
                            Diskusi
                        </a>
                    </li> -->
                    <li class="sidebar-item">
                        <a href="{{ asset('./user_admin') }}" class="sidebar-link nav-link">
                            <i class="fas fa-user fe-2"></i>
                            User
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg></i>
                            Logout</a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </aside>
        <!-- main componen -->

        <div class=" main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <div class="container-fluid">
                    <button class="btn" type="button" data-bs-theme="light">
                        <i class="fas fa-list fe-2"></i>
                    </button>
                    <li class="nav-item ">
                        <i class="far fa-user-circle me-auto" style="font-size:25px ;"></i>
                        <span class="mr-2 d-none d-lg-inline small"></span>
                    </li>
                </div>
            </nav>
            <main class="content px-3 py-3">
                @yield('content')
            </main>

        </div>
    </div>
    <!--end navbar -->
    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 flex-column">
            <!-- @yield('content') -->
            <!-- <h1>saras mutia arofah</h1> -->
        </div>
    </section>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebar = document.getElementById("sidebar");
        const toggleButton = document.querySelector(".btn[data-bs-theme='light']");

        toggleButton.addEventListener("click", function() {
            sidebar.classList.toggle("hidden");
        });
    });
    </script>

    <style>
    .hidden {
        display: none;
    }
    </style>

</body>

</html>