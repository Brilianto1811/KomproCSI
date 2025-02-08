@extends('layouts.layoutdashboard')

@section('content')
    <div class="container p-4 bg-light shadow-lg rounded-lg">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Edit Proyek: {{ $proyek->judul_proyek }}</h2>

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
                    @foreach (explode(',', $proyek->file_proyek) as $file)
                        @php
                            $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                        @endphp
                        @if ($fileExtension === 'pdf')
                            <!-- Untuk PDF, kita tampilkan dengan object -->
                            <object data="{{ url('/' . $file) }}" type="application/pdf" width="100%" height="600px">
                                <p>PDF tidak dapat ditampilkan. <a href="{{ url('/' . $file) }}" target="_blank">Unduh
                                        file PDF</a></p>
                            </object>
                        @elseif (in_array($fileExtension, ['jpg', 'jpeg', 'png']))
                            <!-- Untuk gambar, kita tampilkan menggunakan tag img -->
                            <img src="{{ url('/' . $file) }}" alt="File Proyek" class="img-fluid">
                        @elseif (in_array($fileExtension, ['doc', 'docx']))
                            <!-- Untuk dokumen Word, kita tampilkan menggunakan Google Docs Viewer -->
                            <div>
                                <a href="https://docs.google.com/gview?url={{ urlencode(url('/' . $file)) }}&embedded=true"
                                    target="_blank">
                                    Lihat dokumen Word
                                </a>
                            </div>
                        @else
                            <p>Tipe file tidak dikenali.</p>
                        @endif
                    @endforeach
                @else
                    <p>Tidak ada file.</p>
                @endif
            </div>

            <div class="form-group">
                <label for="bukti_proyek">Dokumentasi Proyek (Opsional)</label>
                <input type="file" name="bukti_proyek[]" id="bukti_proyek" class="form-control" multiple>
                @if ($proyek->bukti_proyek)
                    @foreach (explode(',', $proyek->bukti_proyek) as $file)
                        @php
                            $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                        @endphp
                        @if ($fileExtension === 'pdf')
                            <iframe src="{{ asset($file) }}" width="100%" height="600px"></iframe>
                        @elseif (in_array($fileExtension, ['jpg', 'jpeg', 'png']))
                            <img src="{{ asset($file) }}" alt="Dokumentasi Proyek" class="img-fluid">
                        @elseif (in_array($fileExtension, ['doc', 'docx']))
                            <iframe src="https://docs.google.com/gview?url={{ urlencode(asset($file)) }}&embedded=true"
                                width="100%" height="600px">
                            </iframe>
                        @else
                            <p>Tipe file tidak dikenali.</p>
                        @endif
                    @endforeach
                @else
                    <p>Tidak ada bukti file.</p>
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
                    value="{{ old('tgl_mulai', $proyek->tgl_mulai ? date('Y-m-d', strtotime($proyek->tgl_mulai)) : '') }}">
            </div>

            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"
                    value="{{ old('tgl_selesai', $proyek->tgl_selesai ? date('Y-m-d', strtotime($proyek->tgl_selesai)) : '') }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control form-control-lg">
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

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('proyek.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

<x-scripts />
<x-head />
