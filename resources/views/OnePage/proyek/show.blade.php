@extends('layouts.layoutdashboard')

@section('content')
    <div class="container p-4 bg-light shadow-lg rounded-lg">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Detail Proyek: {{ $proyek->judul_proyek }}</h2>
        <div class="text-left mb-4">
            <a href="{{ route('proyek.index') }}" class="btn btn-secondary align-content-center">Kembali ke Daftar
                Proyek</a>
        </div>
        <div class="mb-4">
            <h4>Deskripsi Proyek:</h4>
            <p style="text-align: justify;">{{ $proyek->deskripsi_proyek }}</p>
        </div>

        <div class="mb-4">
            <h4>Partner Proyek:</h4>
            <p>{{ $proyek->partner_proyek ?? 'Tidak ada' }}</p>
        </div>

        <div class="mb-4">
            <h4>Tanggal Mulai:</h4>
            <p>{{ \Carbon\Carbon::parse($proyek->tgl_mulai)->translatedFormat('d F Y') }}</p>
        </div>

        <div class="mb-4">
            <h4>Tanggal Selesai:</h4>
            <p>{{ \Carbon\Carbon::parse($proyek->tgl_selesai)->translatedFormat('d F Y') }}</p>
        </div>

        <div class="mb-4">
            <h4>Status:</h4>
            <p>{{ $proyek->status == 'P' ? 'Publik' : 'Internal' }}</p>
        </div>

        <div class="mb-4">
            <h4>File Proyek:</h4>
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

        <div class="mb-4">
            <h4>Dokumentasi Proyek:</h4>
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
    </div>
@endsection

<x-scripts />
<x-head />
