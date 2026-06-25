@extends('layouts.admin')

@section('title', 'Tambah Banner')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Tambah Banner</h4>
        <a href="{{ route('admin.banner.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Judul <span class="text-danger">*</span></label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
                        @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Subjudul</label>
                        <input type="text" name="subjudul" class="form-control @error('subjudul') is-invalid @enderror" value="{{ old('subjudul') }}">
                        @error('subjudul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tombol Text</label>
                        <input type="text" name="tombol_text" class="form-control @error('tombol_text') is-invalid @enderror" value="{{ old('tombol_text') }}">
                        @error('tombol_text') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tombol Link</label>
                        <input type="text" name="tombol_link" class="form-control @error('tombol_link') is-invalid @enderror" value="{{ old('tombol_link') }}">
                        @error('tombol_link') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Urutan</label>
                        <input type="number" name="urutan" class="form-control @error('urutan') is-invalid @enderror" value="{{ old('urutan', 0) }}">
                        @error('urutan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Gambar <span class="text-danger">*</span></label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*" onchange="previewImage(this, 'gambarPreview')" required>
                        @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="mt-2">
                            <img id="gambarPreview" src="#" class="img-thumbnail d-none" width="300" height="150" style="object-fit: cover; border-radius: 6px;">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input type="checkbox" name="status" class="form-check-input @error('status') is-invalid @enderror" value="1" id="statusCheck" {{ old('status') ? 'checked' : '' }}>
                            <label class="form-check-label" for="statusCheck">Aktif</label>
                        </div>
                        @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Simpan</button>
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
