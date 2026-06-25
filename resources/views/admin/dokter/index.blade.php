@extends('layouts.admin')

@section('title', 'Kelola Dokter')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Kelola Dokter</h4>
        <a href="{{ route('admin.dokter.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>Tambah Dokter
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokter as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('assets/img/dokter-placeholder.svg') }}"
                                         width="50" height="50" class="rounded-circle" style="object-fit: cover;">
                                </td>
                                <td class="fw-medium">{{ $item->nama }}</td>
                                <td>{{ $item->spesialis->nama ?? '-' }}</td>
                                <td>{{ $item->telepon ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('admin.dokter.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.dokter.destroy', $item->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin hapus dokter ini?')">
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

    <div class="mt-3">{{ $dokter->links('pagination::bootstrap-5') }}</div>
@endsection
