@extends('layouts.layout2')

@section('content')
    <div class="container">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-2">Kembali ke Dashboard</a>
        <h1>Add User</h1>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username_user" class="form-label">Username</label>
                <input type="text" name="username_user" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email_user" class="form-label">Email</label>
                <input type="email" name="email_user" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
