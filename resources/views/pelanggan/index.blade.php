@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <!-- Display Flash Message jika ada success -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 fw-bold">Data Pelanggan</h1>
            <p class="text-muted mb-0">Daftar pelanggan terdaftar dalam sistem.</p>
        </div>
        <!-- Butang Tambah Pelanggan -->
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">+ Tambah Pelanggan</a>
    </div>

    <div class="card border-0 shadow">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                   <thead class="table-dark">
    <tr>
        <th class="ps-4">#</th>
        <th>Nama Lengkap</th>
        <th>Tanggal Lahir</th>
        <th>Gender</th>
        <th>Email</th>
        <th>No. HP</th>
        <th class="pe-4 text-center">Aksi</th> <!-- Tambahkan ini di header -->
    </tr>
                  </thead>
                    <th class="pe-4 text-center">Aksi</th>
                    <tbody>
                        @forelse($pelanggan as $item)
                        <tr>
                            <td class="ps-4 fw-bold">{{ $loop->iteration }}</td>
                            <td class="fw-medium">{{ $item->first_name }} {{ $item->last_name }}</td>
                            <td>{{ $item->birthday }}</td>
                            <td>
                                <span class="badge bg-primary px-3 py-2">
                                    {{ $item->gender }}
                                </span>
                            </td>
                            <td>{{ $item->email }}</td>
                            <td class="pe-4">{{ $item->phone }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Belum ada data pelanggan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                    @forelse($pelanggan as $item)
                        <tr>
                    <td class="ps-4 fw-bold">{{ $loop->iteration }}</td>
                     <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                     <td>{{ $item->birthday }}</td>
                      <td>
                     <span class="badge bg-primary px-3 py-2">
                     {{ $item->gender }}
                    </span>
                </td>
                   <td>{{ $item->email }}</td>
                   <td>{{ $item->phone }}</td>
    <!-- NOMOR 3 DITARUH DI SINI (KOLOM AKSI) -->
                   <td class="pe-4 text-center">
        <a href="{{ route('pelanggan.edit', $item->pelanggan_id ?? $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

        <form action="{{ route('pelanggan.destroy', $item->pelanggan_id ?? $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger text-white">Hapus</button>
                                  </form>
                                    </td>
                                   </tr>
                                 @empty
                                 <tr>
                               <td colspan="7" class="text-center py-4 text-muted">Belum ada data pelanggan.</td>
                                 </tr>
                          @endforelse
                     </td>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
