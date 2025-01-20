@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Recruitment | Sidebar</title>
    <link rel="stylesheet" href="{{ asset('css/side.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <img src="{{ asset('img/downloadkuc.jpeg') }}" class="" width="30" height="24">
                    <a href="#">E-Recruitment</a>
                </div>
                <!-- sidebar navigasi -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Dashboard
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-home fe-2"></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-user-shield fe-2"></i>
                            Data Pribadi
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-university fe-2"></i>
                            Pendidikan
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-hand-holding-heart fe-2"></i>
                            Pengalaman
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-thumbs-up fe-2"></i>
                            Keahlian
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-search fe-2"></i>
                            Cari Lowongan Kerja
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link nav-link">
                            <i class="fas fa-envelope-open fe-2"></i>
                            Lowongan Anda
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
                    <button class="btn" type="button" data-bs-theme="dark">
                        <i style="color:white;" class="fas fa-list fe-2"></i>
                    </button>
                    <li class="nav-item ">
                        <i class="far fa-user-circle me-auto" style="color:white; font-size:25px ;"></i>
                        <span class="mr-2 d-none d-lg-inline text-light small"></span>
                    </li>
                </div>
            </nav>
            <main class="content px-3 py-3">
            </main>

        </div>
    </div>


</body>

</html>