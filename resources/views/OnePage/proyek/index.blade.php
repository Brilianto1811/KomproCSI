@extends('layouts.layoutdashboard')

@section('content')
    <style>
        .btn-group {
            display: flex;
            gap: 5px;
        }

        .table-responsive {
            overflow-x: auto;
            /* Pastikan table bisa di-scroll horizontal di layar kecil */
        }
    </style>
    <div class="container p-4 bg-gray-800 shadow-lg rounded-lg">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Daftar Proyek</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Kolom Pencarian -->
        <div class="d-flex justify-content-between mb-4">
            <div>
                <a href="{{ route('proyek.create') }}" class="btn btn-primary">Tambah Proyek Baru</a>
            </div>
            <div>
                <form action="{{ route('proyek.index') }}" method="GET" class="form-inline">
                    <input type="text" name="search" class="input-field"
                        placeholder="Cari berdasarkan Judul/Deskripsi/Partner" value="{{ $searchTerm ?? '' }}"
                        style="width: 380px; height: 38px; border-radius: 5px; border:1px solid">
                    <!-- Ukuran kolom diperbesar -->
                    <button type="submit" class="btn btn-info">Cari</button> <!-- Warna hijau -->
                </form>
            </div>
        </div>


        <table class="table table-responsive">
            <thead>
                <tr>
                    <th class="text-center">Judul Proyek</th>
                    <th class="text-center">Deskripsi Proyek</th>
                    <th class="text-center">Tanggal Mulai</th>
                    <th class="text-center">Tanggal Selesai</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Partner</th>
                    <th class="text-center">Aksi</th>
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
                            <div class="btn-group">
                                <a href="{{ route('proyek.show', $item->uid_proyek) }}" class="btn btn-info">Lihat</a>
                                <a href="{{ route('proyek.edit', $item->uid_proyek) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('proyek.destroy', $item->uid_proyek) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Data Proyek Kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $proyek->links() }}
    </div>
@endsection

<x-scripts />
<x-head />
