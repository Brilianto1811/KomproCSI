@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Tambah User Baru</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email_user">Email</label>
                <input type="email" name="email_user" id="email_user"
                    class="form-control @error('email_user') is-invalid @enderror" placeholder="Masukkan email"
                    value="{{ old('email_user') }}" required>
                @error('email_user')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
