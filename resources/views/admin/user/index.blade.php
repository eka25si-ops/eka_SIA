@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap mb-3">
        <div>
            <h1 class="h4 fw-bold">Data User</h1>
            <p class="mb-0 text-muted">List data seluruh user.</p>
        </div>
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-success text-white">+ Tambah User</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $item)
                        <tr>
                            <td class="fw-bold">{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-truncate" style="max-width: 250px;">{{ $item->password }}</td>
                            <td class="text-center">
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger text-white">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">Belum ada data user.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
