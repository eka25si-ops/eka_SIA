@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap mb-3">
        <div>
            <h1 class="h4 fw-bold">Edit User</h1>
            <p class="mb-0 text-muted">Form untuk mengubah data user.</p>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-dark">Kembali</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-body border-0 shadow mb-4">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Password <small class="text-muted">(Kosongkan jika tidak diubah)</small></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-dark">Update</button>
                <a href="{{ route('user.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
