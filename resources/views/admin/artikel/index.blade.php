@extends('layouts.admin')

@section('title', 'Kelola Artikel')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Kelola Artikel</h4>
        <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>Tambah Artikel
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Thumbnail</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikel as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('assets/img/artikel-placeholder.svg') }}"
                                         width="60" height="40" style="object-fit: cover; border-radius: 4px;">
                                </td>
                                <td class="fw-medium">{{ Str::limit($item->judul, 40) }}</td>
                                <td>{{ $item->kategori ?? '-' }}</td>
                                <td>{{ $item->penulis ?? '-' }}</td>
                                <td>{{ $item->tanggal_publish ? \Carbon\Carbon::parse($item->tanggal_publish)->format('d/m/Y') : '-' }}</td>
                                <td>
                                    <span class="badge bg-{{ $item->status ? 'success' : 'danger' }} rounded-pill">
                                        {{ $item->status ? 'Aktif' : 'Tidak Aktif' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.artikel.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.artikel.destroy', $item->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin hapus artikel ini?')">
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

    <div class="mt-3">{{ $artikel->links('pagination::bootstrap-5') }}</div>
@endsection
