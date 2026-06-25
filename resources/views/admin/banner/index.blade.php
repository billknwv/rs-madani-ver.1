@extends('layouts.admin')

@section('title', 'Kelola Banner')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Kelola Banner</h4>
        <a href="{{ route('admin.banner.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg me-1"></i>Tambah Banner
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Urutan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $item)
                            <tr>
                                <td>
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" width="80" height="40" style="object-fit: cover; border-radius: 4px;">
                                    @else
                                        <span class="text-muted">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td class="fw-medium">{{ $item->judul }}</td>
                                <td>{{ $item->urutan }}</td>
                                <td>
                                    <span class="badge bg-{{ $item->status ? 'success' : 'danger' }} rounded-pill">
                                        {{ $item->status ? 'Aktif' : 'Tidak Aktif' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.banner.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.banner.destroy', $item->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Yakin hapus banner ini?')">
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

    <div class="mt-3">{{ $banners->links('pagination::bootstrap-5') }}</div>
@endsection
