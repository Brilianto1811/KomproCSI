@extends('layouts.layout2')

@php
    $bodyClass = 'onepage';
@endphp

@section('content')
    <div class="container p-4 bg-light rounded shadow-sm">
        <h1 class="mb-4 text-center bg-success text-white p-3 rounded">Detail Proyek: {{ $proyek->judul_proyek }}</h1>
        <table class="table table-bordered">
            <tr>
                <th>Deskripsi Proyek</th>
                <td style="text-align: justify;">{{ $proyek->deskripsi_proyek }}</td>
            </tr>
            <tr>
                <th>Partner Proyek</th>
                <td>{{ $proyek->partner_proyek ?? 'Tidak ada' }}</td>
            </tr>
            <tr>
                <th>Tanggal Mulai:</th>
                <td>{{ \Carbon\Carbon::parse($proyek->tgl_mulai)->translatedFormat('d F Y') }}</td>
            </tr>
            <tr>
                <th>Tanggal Selesai:</th>
                <td>{{ \Carbon\Carbon::parse($proyek->tgl_selesai)->translatedFormat('d F Y') }}</td>
            </tr>
        </table>

        <h3 class="mt-4">Dokumentasi Proyek</h3>
        <hr>
        <div class="row">
            @if ($proyek->bukti_proyek)
                @foreach (explode(',', $proyek->bukti_proyek) as $file)
                    @php
                        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                    @endphp
                    <div class="col-md-6 mb-3">
                        <div class="border p-3 shadow-sm">
                            @if ($fileExtension === 'pdf')
                                <iframe src="{{ asset($file) }}" width="100%" height="300px"></iframe>
                            @elseif (in_array($fileExtension, ['jpg', 'jpeg', 'png']))
                                <img src="{{ asset($file) }}" alt="Dokumentasi Proyek" class="img-fluid shadow">
                            @elseif (in_array($fileExtension, ['doc', 'docx']))
                                <iframe src="https://docs.google.com/gview?url={{ urlencode(asset($file)) }}&embedded=true"
                                    width="100%" height="300px"></iframe>
                            @else
                                <p>Tipe file tidak dikenali.</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">Tidak ada bukti file.</p>
            @endif
        </div>

        <div class="d-flex justify-content-center mt-4 mb-4">
            <a href="{{ route('onepage-eight') }}" class="btn btn-secondary btn-lg px-5 py-3 fw-bold">Kembali</a>
        </div>
    </div>
@endsection
