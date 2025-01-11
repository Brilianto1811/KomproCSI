@extends('layouts.layoutdashboard')

@section('content')
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Pengguna</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-2">Kembali ke Dashboard</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->username_user }}</td>
                        <td>{{ $user->email_user }}</td>
                        <td>
                            <!-- Update Password -->
                            <a href="{{ route('user.editPassword', $user->id_user) }}" class="btn btn-warning">Update
                                Password</a>

                            <!-- Delete -->
                            <button class="btn btn-danger"
                                onclick="confirmDelete('{{ $user->id_user }}', '{{ $user->username_user }}')">Delete</button>

                            <!-- Form for delete -->
                            <form id="delete-form-{{ $user->id_user }}" action="{{ route('user.destroy', $user->id_user) }}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(id, username) {
            if (confirm(`Apakah Anda yakin ingin menghapus username ${username}?`)) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        }
    </script>
@endsection
