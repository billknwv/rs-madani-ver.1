@extends('layouts.admin')

@section('title', 'Kelola Testimoni')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Kelola Testimoni</h4>
        <a href="{{ route('admin.testimoni.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>Tambah Testimoni
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama</th>
                            <th>Profesi</th>
                            <th>Rating</th>
                            <th>Testimoni</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimoni as $item)
                            <tr>
                                <td class="fw-medium">{{ $item->nama }}</td>
                                <td>{{ $item->profesi ?? '-' }}</td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="bi bi-star{{ $i <= $item->rating ? '-fill' : '' }} text-warning small"></i>
                                    @endfor
                                </td>
                                <td class="text-muted">{{ Str::limit($item->isi, 60) }}</td>
                                <td>
                                    <span class="badge bg-{{ $item->status ? 'success' : 'danger' }} rounded-pill">
                                        {{ $item->status ? 'Aktif' : 'Tidak Aktif' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.testimoni.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.testimoni.destroy', $item->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin hapus testimoni ini?')">
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

    <div class="mt-3">{{ $testimoni->links('pagination::bootstrap-5') }}</div>
@endsection
