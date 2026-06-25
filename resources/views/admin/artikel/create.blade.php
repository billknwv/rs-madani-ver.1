@extends('layouts.admin')

@section('title', 'Tambah Artikel')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Tambah Artikel</h4>
        <a href="{{ route('admin.artikel.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Judul Artikel <span class="text-danger">*</span></label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
                        @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Kategori <span class="text-danger">*</span></label>
                        <select name="kategori" class="form-select @error('kategori') is-invalid @enderror" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Kesehatan" {{ old('kategori') == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                            <option value="Anak" {{ old('kategori') == 'Anak' ? 'selected' : '' }}>Anak</option>
                            <option value="Saraf" {{ old('kategori') == 'Saraf' ? 'selected' : '' }}>Saraf</option>
                            <option value="Kandungan" {{ old('kategori') == 'Kandungan' ? 'selected' : '' }}>Kandungan</option>
                            <option value="Mata" {{ old('kategori') == 'Mata' ? 'selected' : '' }}>Mata</option>
                            <option value="Berita" {{ old('kategori') == 'Berita' ? 'selected' : '' }}>Berita</option>
                        </select>
                        @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ old('penulis') }}">
                        @error('penulis') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tanggal Publish</label>
                        <input type="date" name="tanggal_publish" class="form-control @error('tanggal_publish') is-invalid @enderror" value="{{ old('tanggal_publish', date('Y-m-d')) }}">
                        @error('tanggal_publish') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Ringkasan</label>
                        <textarea name="ringkasan" rows="3" class="form-control @error('ringkasan') is-invalid @enderror">{{ old('ringkasan') }}</textarea>
                        @error('ringkasan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" accept="image/*" onchange="previewImage(this, 'thumbnailPreview')">
                        @error('thumbnail') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="mt-2">
                            <img id="thumbnailPreview" src="#" class="img-thumbnail d-none" width="200" height="120" style="object-fit: cover; border-radius: 6px;">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Konten <span class="text-danger">*</span></label>
                        <textarea name="konten" rows="10" class="form-control @error('konten') is-invalid @enderror" required>{{ old('konten') }}</textarea>
                        @error('konten') <div class="invalid-feedback">{{ $message }}</div> @enderror
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
