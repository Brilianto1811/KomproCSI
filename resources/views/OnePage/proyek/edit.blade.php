@extends('layouts.layoutdashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Proyek: {{ $proyek->judul_proyek }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('proyek.update', $proyek->uid_proyek) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Form method PUT untuk update data -->

            <div class="form-group">
                <label for="judul_proyek">Judul Proyek</label>
                <input type="text" name="judul_proyek" id="judul_proyek" class="form-control"
                    value="{{ old('judul_proyek', $proyek->judul_proyek) }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi_proyek">Deskripsi Proyek</label>
                <textarea name="deskripsi_proyek" id="deskripsi_proyek" class="form-control" required>{{ old('deskripsi_proyek', $proyek->deskripsi_proyek) }}</textarea>
            </div>

            <div class="form-group">
                <label for="file_proyek">File Proyek (Opsional)</label>
                <input type="file" name="file_proyek[]" id="file_proyek" class="form-control" multiple>
                @if ($proyek->file_proyek)
                    <div class="mt-2">
                        <strong>File yang sudah ada:</strong>
                        <a href="{{ Storage::url($proyek->file_proyek) }}" target="_blank">Unduh File Proyek</a>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="bukti_proyek">Bukti Proyek (Opsional)</label>
                <input type="file" name="bukti_proyek[]" id="bukti_proyek" class="form-control" multiple>
                @if ($proyek->bukti_proyek)
                    <div class="mt-2">
                        <strong>Bukti yang sudah ada:</strong>
                        <a href="{{ Storage::url($proyek->bukti_proyek) }}" target="_blank">Lihat Bukti Proyek</a>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="partner_proyek">Partner Proyek (Opsional)</label>
                <input type="text" name="partner_proyek" id="partner_proyek" class="form-control"
                    value="{{ old('partner_proyek', $proyek->partner_proyek) }}">
            </div>

            <div class="form-group">
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"
                    value="{{ old('tgl_mulai', $proyek->tgl_mulai) }}">
            </div>

            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"
                    value="{{ old('tgl_selesai', $proyek->tgl_selesai) }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="P" {{ old('status', $proyek->status) == 'P' ? 'selected' : '' }}>Proses</option>
                    <option value="I" {{ old('status', $proyek->status) == 'I' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('proyek.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

<x-scripts />
<x-head />
