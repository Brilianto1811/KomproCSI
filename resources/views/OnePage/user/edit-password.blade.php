@extends('layouts.layoutdashboard')

@section('content')
    <div class="container p-4 bg-light rounded shadow-sm">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Update Password Untuk {{ $user->username_user }} </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.updatePassword', $user->id_user) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="confirm_new_password">Confirm New Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

<x-scripts />
<x-head />
