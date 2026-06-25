@extends('layouts.admin')

@section('title', 'Jadwal Dokter')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Jadwal Dokter</h4>
        <a href="{{ route('admin.jadwal.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>Tambah Jadwal
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Dokter</th>
                            <th>Hari</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwal as $item)
                            <tr>
                                <td class="fw-medium">{{ $item->dokter->nama ?? '-' }}</td>
                                <td>{{ $item->hari }}</td>
                                <td>{{ substr($item->jam_mulai, 0, 5) }}</td>
                                <td>{{ substr($item->jam_selesai, 0, 5) }}</td>
                                <td>
                                    <span class="badge bg-{{ $item->status == 'aktif' ? 'success' : 'danger' }} rounded-pill">
                                        {{ $item->status }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.jadwal.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.jadwal.destroy', $item->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin hapus jadwal ini?')">
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

    <div class="mt-3">{{ $jadwal->links('pagination::bootstrap-5') }}</div>
@endsection
