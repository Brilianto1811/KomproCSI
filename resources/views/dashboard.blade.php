@extends('layouts.layoutdashboard')

{{-- @section('content')
    <div class="container text-center mt-5">
        <h1>Dashboard</h1>
        <div class="row justify-content-center mt-4">
            @if (auth()->user()->id_role == 1)
                <!-- Menu Staff -->
                <div class="col-md-4">
                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-lg btn-block">Staff</a>
                </div>
            @endif

            <!-- Menu Proyek -->
            <div class="col-md-4">
                <a href="{{ route('proyek.index') }}" class="btn btn-success btn-lg btn-block">Proyek</a>
            </div>
        </div>

        <!-- Tombol Logout -->
        <div class="mt-5">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg">Logout</button>
            </form>
        </div>
    </div>
@endsection --}}

@section('content')
    <h1>Selamat Datang di Dashboard</h1>
    <p>Gunakan menu di sidebar untuk navigasi.</p>
@endsection
