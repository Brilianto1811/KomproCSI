@extends('layouts.layout2')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Proyek</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <a href="{{ route('proyek.create') }}" class="btn btn-primary mb-4">Tambah Proyek Baru</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Judul Proyek</th>
                    <th>Deskripsi Proyek</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyek as $item)
                    <tr>
                        <td>{{ $item->judul_proyek }}</td>
                        <td>{{ Str::limit($item->deskripsi_proyek, 50) }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d-m-Y') }}</td>
                        <td>{{ $item->status == 'P' ? 'Publik' : 'Internal' }}</td>
                        <td>
                            <a href="{{ route('proyek.show', $item->uid_proyek) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('proyek.edit', $item->uid_proyek) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('proyek.destroy', $item->uid_proyek) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
