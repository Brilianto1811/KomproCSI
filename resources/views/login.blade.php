@extends('layouts.layout2')

@section('content')
    <div class="login-container"
        style="max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #cccccc; border-radius: 10px;">
        <h2 style="text-align: center;">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email_user">Email</label>
                <input type="email" id="email_user" name="email_user" placeholder="Masukkan Email" required>
                @error('email_user')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                @error('password')
                    <span style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
@endsection
