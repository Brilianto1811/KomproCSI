@extends('layouts.layoutdashboard')

@section('content')
    <div class="container p-4 bg-light shadow-lg rounded-lg">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Daftar Pengguna</h2>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Pengguna</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th class="text-center">Actions</th>
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
                            <a href="{{ route('user.editPassword', $user->id_user) }}"><button class="btn btn-warning">
                                    Update Password
                                </button>
                            </a>

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

<x-scripts />
<x-head />
