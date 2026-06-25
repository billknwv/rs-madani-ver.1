@extends('layouts.admin')

@section('title', 'Edit Layanan')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Edit Layanan</h4>
        <a href="{{ route('admin.layanan.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Layanan <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $layanan->nama) }}" required>
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $layanan->slug) }}" placeholder="Auto-generated if empty">
                        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Icon (Bootstrap Icons)</label>
                        <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon', $layanan->icon) }}">
                        @error('icon') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*" onchange="previewImage(this, 'gambarPreview')">
                        @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="mt-2 d-flex align-items-center gap-3">
                            @if($layanan->gambar)
                                <img id="gambarPreview" src="{{ asset('storage/' . $layanan->gambar) }}" width="200" height="120" style="object-fit: cover; border-radius: 6px;">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah</small>
                            @else
                                <img id="gambarPreview" src="#" class="img-thumbnail d-none" width="200" height="120" style="object-fit: cover; border-radius: 6px;">
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Deskripsi Singkat</label>
                        <textarea name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                        @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Konten Lengkap</label>
                        <textarea name="konten" rows="8" class="form-control @error('konten') is-invalid @enderror">{{ old('konten', $layanan->konten) }}</textarea>
                        @error('konten') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('d-none');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
