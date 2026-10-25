@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-2">
            <li class="breadcrumb-item">
                <a href="#"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg></a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Pelanggan</li>
        </ol>
    </nav>

    <!-- Header & Tombol Kembali -->
    <div class="d-flex justify-content-between w-100 flex-wrap mb-3">
        <div>
            <h1 class="h4">Tambah Pelanggan</h1>
            <p class="mb-0">Form untuk menambahkan data pelanggan baru.</p>
        </div>
        <div>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-gray-800 d-inline-flex align-items-center">
                Kembali
            </a>
        </div>
    </div>

    <!-- Form Container -->
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body border-0 shadow mb-4">
                <form action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- First Name -->
                        <div class="col-md-4 mb-3">
                            <label for="first_name">First name</label>
                            <input class="form-control" id="first_name" name="first_name" type="text" required>
                        </div>
                        <!-- Birthday -->
                        <div class="col-md-4 mb-3">
                            <label for="birthday">Birthday</label>
                            <input class="form-control" id="birthday" name="birthday" type="date">
                        </div>
                        <!-- Email -->
                        <div class="col-md-4 mb-3">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Last Name -->
                        <div class="col-md-4 mb-3">
                            <label for="last_name">Last name</label>
                            <input class="form-control" id="last_name" name="last_name" type="text" required>
                        </div>
                        <!-- Gender -->
                        <div class="col-md-4 mb-3">
                            <label for="gender">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="">-- Pilih --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <!-- Phone -->
                        <div class="col-md-4 mb-3">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" name="phone" type="text">
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2" type="submit">Simpan</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-gray-500 mt-2 ms-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
