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
                    <h3 class="fs-6 mb-3 text-center">Diskusi Bersama di E-Learning</h3>
                </div>
                <hr style="border: 1px solid #000; width: 100%; margin: 20px auto;">
            </div>
    </section>

    <section>
        <div class="d-flex flex-wrap justify-content-center" style="gap: 20px; margin-left: auto; margin-right: auto;">
            <div class="container mt-5">

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- Form untuk menambahkan diskusi --}}
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="fw-bold text-primary mb-3">Mulai Diskusi Baru</h5>
                        <form action="{{ route('diskusi.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="belajar_detail_id" value="1">
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Tulis diskusi</label>
                                <textarea id="pesan" name="pesan" class="form-control" placeholder="Tulis sesuatu..."
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Kirim</button>
                        </form>
                    </div>
                </div>

                {{-- Daftar diskusi --}}
                <div class="mt-4">
                    @foreach($tbl_diskusi as $diskusi)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="fw-bold text-primary">{{ $diskusi->user->name }}</h5>


                            <div id="diskusi-{{ $diskusi->id }}">
                                <p>{{ $diskusi->pesan }}</p>
                            </div>

                            @if(Auth::id() == $diskusi->user_id)
                            <button class="btn btn-sm btn-outline-warning" onclick="editDiskusi({{ $diskusi->id }})">
                                ✏️ Edit
                            </button>
                            <form action="{{ route('diskusi.destroy', $diskusi->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus komentar ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    🗑 Hapus
                                </button>
                            </form>
                            @endif

                            <button class="btn btn-sm btn-outline-primary"
                                onclick="toggleReplyForm({{ $diskusi->id }})">
                                Balas
                            </button>

                            {{-- Form Edit (Sembunyi Default) --}}
                            <form action="{{ route('diskusi.update', $diskusi->id) }}" method="POST" class="mt-2 d-none"
                                id="edit-form-{{ $diskusi->id }}">
                                @csrf
                                @method('PUT')
                                <textarea name="pesan" class="form-control mb-2">{{ $diskusi->pesan }}</textarea>
                                <button type="submit" class="btn btn-sm btn-outline-success">Simpan</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                    onclick="cancelEdit({{ $diskusi->id }})">Batal</button>
                            </form>

                            {{-- Form untuk membalas diskusi --}}
                            <form action="{{ route('diskusi.store') }}" method="POST" class="mt-2 d-none"
                                id="reply-form-{{ $diskusi->id }}">
                                @csrf
                                <input type="hidden" name="belajar_detail_id" value="1">
                                <input type="hidden" name="parent_id" value="{{ $diskusi->id }}">
                                <textarea name="pesan" class="form-control mb-2" placeholder="Tulis balasan..."
                                    required></textarea>
                                <button type="submit" class="btn btn-sm btn-outline-primary">Kirim</button>
                            </form>

                            {{-- Balasan diskusi --}}
                            @if($diskusi->replies->count() > 0)
                            <div class="mt-3 ps-4 border-start">
                                @foreach($diskusi->replies as $reply)
                                <div class="mb-2">
                                    <h6 class="fw-bold text-secondary">{{ $reply->user->name }}</h6>

                                    <div id="reply-{{ $reply->id }}">
                                        <p>{{ $reply->pesan }}</p>
                                    </div>

                                    @if(Auth::id() == $reply->user_id)
                                    <button class="btn btn-sm btn-outline-warning"
                                        onclick="editDiskusi({{ $reply->id }})">
                                        ✏️ Edit
                                    </button>
                                    <form action="{{ route('diskusi.destroy', $reply->id) }}" method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus komentar ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            🗑 Hapus
                                        </button>
                                    </form>
                                    @endif

                                    {{-- Form Edit Balasan --}}
                                    <form action="{{ route('diskusi.update', $reply->id) }}" method="POST"
                                        class="mt-2 d-none" id="edit-form-{{ $reply->id }}">
                                        @csrf
                                        @method('PUT')
                                        <textarea name="pesan" class="form-control mb-2">{{ $reply->pesan }}</textarea>
                                        <button type="submit" class="btn btn-sm btn-outline-success">Simpan</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            onclick="cancelEdit({{ $reply->id }})">Batal</button>
                                    </form>

                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <script>
            function toggleReplyForm(id) {
                let replyForm = document.getElementById('reply-form-' + id);

                if (replyForm.classList.contains('d-none')) {
                    replyForm.classList.remove('d-none');
                } else {
                    replyForm.classList.add('d-none');
                }
            }

            function editDiskusi(id) {
                let diskusiText = document.getElementById('diskusi-' + id);
                let replyText = document.getElementById('reply-' + id);
                let editForm = document.getElementById('edit-form-' + id);

                if (diskusiText) {
                    diskusiText.classList.add('d-none');
                }
                if (replyText) {
                    replyText.classList.add('d-none');
                }
                if (editForm) {
                    editForm.classList.remove('d-none');
                }
            }

            function cancelEdit(id) {
                let diskusiText = document.getElementById('diskusi-' + id);
                let replyText = document.getElementById('reply-' + id);
                let editForm = document.getElementById('edit-form-' + id);

                if (diskusiText) {
                    diskusiText.classList.remove('d-none');
                }
                if (replyText) {
                    replyText.classList.remove('d-none');
                }
                if (editForm) {
                    editForm.classList.add('d-none');
                }
            }
            </script>


        </div>
    </section>

    <footer style="padding-top: 50px;">
        <p class="fs-5 text-center py-3 text-primary">
            @ 2025 E-Learning
        </p>
    </footer>
</body>