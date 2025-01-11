@extends('layouts.layoutdashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Detail Proyek: {{ $proyek->judul_proyek }}</h1>

        <div class="mb-4">
            <strong>Deskripsi Proyek:</strong>
            <p style="text-align: justify;">{{ $proyek->deskripsi_proyek }}</p>
        </div>

        <div class="mb-4">
            <strong>Partner Proyek:</strong>
            <p>{{ $proyek->partner_proyek ?? 'Tidak ada' }}</p>
        </div>

        <div class="mb-4">
            <strong>Tanggal Mulai:</strong>
            <p>{{ \Carbon\Carbon::parse($proyek->tgl_mulai)->format('d-m-Y') }}</p>
        </div>

        <div class="mb-4">
            <strong>Tanggal Selesai:</strong>
            <p>{{ \Carbon\Carbon::parse($proyek->tgl_selesai)->format('d-m-Y') }}</p>
        </div>

        <div class="mb-4">
            <strong>Status:</strong>
            <p>{{ $proyek->status == 'P' ? 'Publik' : 'Internal' }}</p>
        </div>

        <div class="mb-4">
            <strong>File Proyek:</strong>
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
            <strong>Bukti Proyek:</strong>
            @if ($proyek->bukti_proyek)
                @foreach (explode(',', $proyek->bukti_proyek) as $file)
                    @php
                        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                    @endphp
                    @if ($fileExtension === 'pdf')
                        <iframe src="{{ asset($file) }}" width="100%" height="600px"></iframe>
                    @elseif (in_array($fileExtension, ['jpg', 'jpeg', 'png']))
                        <img src="{{ asset($file) }}" alt="Bukti Proyek" class="img-fluid">
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

        <a href="{{ route('proyek.index') }}" class="btn btn-secondary">Kembali ke Daftar Proyek</a>
    </div>
@endsection
