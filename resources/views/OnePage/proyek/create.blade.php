@extends('layouts.layoutdashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Proyek Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul_proyek">Judul Proyek</label>
                <input type="text" name="judul_proyek" id="judul_proyek" class="form-control"
                    value="{{ old('judul_proyek') }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi_proyek">Deskripsi Proyek</label>
                <textarea name="deskripsi_proyek" id="deskripsi_proyek" class="form-control" required>{{ old('deskripsi_proyek') }}</textarea>
            </div>

            <div class="form-group">
                <label for="file_proyek">File Proyek</label>
                <input type="file" name="file_proyek[]" id="file_proyek" class="form-control" multiple>
            </div>

            <div class="form-group">
                <label for="bukti_proyek">Dokumentasi Proyek</label>
                <input type="file" name="bukti_proyek[]" id="bukti_proyek" class="form-control" multiple>
            </div>

            <div class="form-group">
                <label for="partner_proyek">Partner Proyek (Opsional)</label>
                <input type="text" name="partner_proyek" id="partner_proyek" class="form-control"
                    value="{{ old('partner_proyek') }}">
            </div>

            <div class="form-group">
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" value="{{ old('tgl_mulai') }}">
            </div>

            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"
                    value="{{ old('tgl_selesai') }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    @if (Auth::check() && Auth::user()->id_role == 1)
                        <!-- Jika id_role = 1, tampilkan semua pilihan -->
                        <option value="P" {{ old('status') == 'P' ? 'selected' : '' }}>Publik</option>
                        <option value="I" {{ old('status') == 'I' ? 'selected' : '' }}>Internal</option>
                    @elseif(Auth::check() && Auth::user()->id_role == 2)
                        <!-- Jika id_role = 2, hanya tampilkan 'Internal' -->
                        <option value="I" {{ old('status') == 'I' ? 'selected' : '' }}>Internal</option>
                    @else
                        <!-- Jika tidak ada role, tampilkan pilihan default atau kosong -->
                        <option value="" disabled selected>Pilih Status</option>
                    @endif
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Proyek</button>
        </form>
    </div>
@endsection

<x-scripts />
<x-head />
