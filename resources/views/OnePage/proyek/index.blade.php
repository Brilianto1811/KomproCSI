@extends('layouts.layoutdashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Proyek</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Kolom Pencarian -->
        <div class="d-flex justify-content-between mb-4">
            <div style="margin-bottom: 20px">
                <a href="{{ route('proyek.create') }}" class="btn btn-primary">Tambah Proyek Baru</a>
            </div>
            <div>
                <form action="{{ route('proyek.index') }}" method="GET" class="form-inline">
                    <input type="text" name="search" class="input-field"
                        placeholder="Cari berdasarkan Judul/Deskripsi/Partner" value="{{ $searchTerm ?? '' }}"
                        style="width: 300px; height: 25px; border-radius: 5px"> <!-- Ukuran kolom diperbesar -->
                    <button type="submit" class="btn btn-info">Cari</button> <!-- Warna hijau -->
                </form>
            </div>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th>Judul Proyek</th>
                    <th>Deskripsi Proyek</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
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
                        <td>{{ $item->status == 'P' ? 'Publik' : 'Internal' }}</td>
                        <td>{{ $item->partner_proyek }}</td>
                        <td>
                            <a href="{{ route('proyek.show', $item->uid_proyek) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('proyek.edit', $item->uid_proyek) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('proyek.destroy', $item->uid_proyek) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Proyek Kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $proyek->links() }}
    </div>
@endsection
