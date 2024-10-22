@extends('layouts.app')
@section ('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Daftar User</h2>
            <a href="{{ route('user.create') }}" class="btn btn-success">Tambah Pengguna Baru</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['nama'] }}</td>
                        <td>{{ $user['npm'] }}</td>
                        <td>{{ $user['nama_kelas'] }}</td>
                        <td>
                            <img src="{{ asset('storage/public/uploads/' . $user->foto) }}" alt="Foto User" width="100">
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Aksi">
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('user.destroy', $user->id)}}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
