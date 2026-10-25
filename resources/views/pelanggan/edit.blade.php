@extends('admin.dashboard')

@section('content')
<div class="py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-2">
            <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
        </ol>
    </nav>

    <!-- Header & Tombol Kembali -->
    <div class="d-flex justify-content-between w-100 flex-wrap mb-3">
        <div>
            <h1 class="h4 fw-bold">Edit Pelanggan</h1>
            <p class="mb-0 text-muted">Form untuk mengedit data pelanggan.</p>
        </div>
        <div>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-dark">Kembali</a>
        </div>
    </div>

    <!-- Form Container -->
    <div class="row">
        <div class="col-12">
            <div class="card card-body border-0 shadow mb-4">
                <form action="{{ route('pelanggan.update', $pelanggan->pelanggan_id ?? $pelanggan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="first_name" class="form-label">First name</label>
                            <input class="form-control" id="first_name" name="first_name" type="text" value="{{ $pelanggan->first_name }}" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input class="form-control" id="birthday" name="birthday" type="date" value="{{ $pelanggan->birthday }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{ $pelanggan->email }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="last_name" class="form-label">Last name</label>
                            <input class="form-control" id="last_name" name="last_name" type="text" value="{{ $pelanggan->last_name }}" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="">-- Pilih --</option>
                                <option value="Male" {{ $pelanggan->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $pelanggan->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ $pelanggan->gender == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input class="form-control" id="phone" name="phone" type="text" value="{{ $pelanggan->phone }}">
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-dark mt-2" type="submit">Update</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary mt-2 ms-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
