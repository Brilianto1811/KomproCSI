@extends('layouts.layout2')

@section('content')
<div class="container">
    <h1>Update Password for {{ $user->username_user }}</h1>
    <form action="{{ route('user.updatePassword', $user->id_user) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update Password</button>
    </form>
</div>
@endsection
