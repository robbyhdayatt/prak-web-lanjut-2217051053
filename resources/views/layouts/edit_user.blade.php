@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="mb-3 mt-2">
                <a href="{{ route('user.list') }}" class="btn btn-success">List User</a>
            </div>

            <!-- Card Container -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Edit Data User</h2>
                </div>
                <div class="card-body">
                    <!-- Form -->
                    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="{{ old('nama', $user->nama) }}" placeholder="Nama anda">
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" class="form-control" name="npm" id="npm"
                                value="{{ old('npm', $user->npm) }}" placeholder="NPM anda">
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" name="kelas_id" id="kelas_id">
                                @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                                    {{ $kelasItem->nama_kelas }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="foto" name="foto">
                            @if ($user->foto)
                            <div class="mt-2">
                                <img src="{{ asset('storage/public/uploads/' . $user->foto) }}" alt="Foto User" width="150" class="rounded">
                            </div>
                            @endif
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('user.list') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Card Container -->
        </div>
    </div>
</div>
@endsection
