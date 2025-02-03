@extends('layouts.layoutdashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Proyek Publik</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div>
            <form action="{{ route('proyek.indexPublik') }}" method="GET" class="form-inline">
                <input type="text" name="search" class="input-field" placeholder="Cari berdasarkan Judul/Deskripsi/Partner"
                    value="{{ $searchTerm ?? '' }}" style="width: 300px; height: 25px; border-radius: 5px">
                <button type="submit" class="btn btn-info ml-2">Cari</button>
            </form>
        </div>

        {{-- <a href="{{ route('proyek.create') }}" class="btn btn-primary mb-6">Tambah Proyek Baru</a> --}}

        <table class="table">
            <thead>
                <tr>
                    <th>Judul Proyek</th>
                    <th>Deskripsi Proyek</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Partner</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($proyek as $item)
                    <tr>
                        <td>{{ $item->judul_proyek }}</td>
                        <td>{{ Str::limit($item->deskripsi_proyek, 50) }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d-m-Y') }}</td>
                        <td>{{ $item->partner_proyek }}</td>
                        <td>
                            <a href="{{ route('proyek.show', $item->uid_proyek) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('proyek.edit', $item->uid_proyek) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('proyek.destroy', $item->uid_proyek) }}" method="POST"
                                style="display: inline-block;">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Proyek Publik Kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
