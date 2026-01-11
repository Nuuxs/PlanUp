@extends('layouts.app')

@section('content')
<h3 class="mb-4">👤 Profile Saya</h3>

<div class="row g-4">

    {{-- UPDATE PROFILE --}}
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header fw-semibold">
                Informasi Profil
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', auth()->user()->name) }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email', auth()->user()->email) }}"
                               required>
                    </div>

                    <button class="btn btn-primary">
                        💾 Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- UPDATE PASSWORD --}}
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header fw-semibold">
                Ganti Password
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Password Lama</label>
                        <input type="password"
                               name="current_password"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password Baru</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password"
                               name="password_confirmation"
                               class="form-control"
                               required>
                    </div>

                    <button class="btn btn-warning">
                        🔒 Update Password
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- DELETE ACCOUNT --}}
    <div class="col-12">
        <div class="card border-danger shadow-sm">
            <div class="card-header text-danger fw-semibold">
                Hapus Akun
            </div>
            <div class="card-body">
                <p class="text-muted">
                    Tindakan ini <strong>tidak dapat dibatalkan</strong>.
                    Semua data task kamu akan ikut terhapus.
                </p>

                <form method="POST" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('DELETE')

                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               required>
                    </div>

                    <button class="btn btn-danger">
                        🗑️ Hapus Akun Saya
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
