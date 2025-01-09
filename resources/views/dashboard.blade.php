@extends('layouts.layout2')

@section('content')
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
    </div>
@endsection
