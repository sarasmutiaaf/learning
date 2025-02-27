@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="color:#eee;">
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg" style="width: 22rem; margin-top: 80px; margin-bottom: 100px; border-radius: 15px;">
            <div class="card-body text-dark text-center">
                <!-- Ikon Profil -->
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 448 512" fill="#007bff">
                        <path
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                </div>

                <!-- Flash Message -->
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- Form Update -->
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Username</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ $user->nama }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}"
                            required>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>