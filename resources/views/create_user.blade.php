@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h4>Create User</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                                    <div class="invalid-feedback">
                                        Nama harus diisi.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="npm" class="form-label">NPM:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                                    <input type="text" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM Anda" pattern="\d{10}" required>
                                    <div class="invalid-feedback">
                                        NPM harus berupa 10 digit angka.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="kelas_id" class="form-label">Kelas:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-door-open-fill"></i></span>
                                    <select class="form-select" name="kelas_id" id="kelas_id" required>
                                        <option value="" selected disabled>Pilih kelas</option>
                                        @foreach ($kelas as $kelasItem)
                                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Silakan pilih kelas.
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
