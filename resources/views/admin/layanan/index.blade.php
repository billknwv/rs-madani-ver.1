@extends('layouts.admin')

@section('title', 'Kelola Layanan')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Kelola Layanan</h4>
        <a href="{{ route('admin.layanan.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>Tambah Layanan
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Icon</th>
                            <th>Nama</th>
                            <th>Slug</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($layanan as $item)
                            <tr>
                                <td><i class="bi {{ $item->icon }} fs-5"></i></td>
                                <td class="fw-medium">{{ $item->nama }}</td>
                                <td><code>{{ $item->slug }}</code></td>
                                <td>
                                    <a href="{{ route('admin.layanan.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.layanan.destroy', $item->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin hapus layanan ini?')">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">{{ $layanan->links('pagination::bootstrap-5') }}</div>
@endsection
