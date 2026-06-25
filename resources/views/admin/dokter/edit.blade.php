@extends('layouts.admin')

@section('title', 'Edit Dokter')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Edit Dokter</h4>
        <a href="{{ route('admin.dokter.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.dokter.update', $dokter->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Dokter <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $dokter->nama) }}" required>
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Spesialis <span class="text-danger">*</span></label>
                        <select name="spesialis_id" class="form-select @error('spesialis_id') is-invalid @enderror" required>
                            <option value="">Pilih Spesialis</option>
                            @foreach($spesialis as $item)
                                <option value="{{ $item->id }}" {{ old('spesialis_id', $dokter->spesialis_id) == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('spesialis_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $dokter->email) }}">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telepon</label>
                        <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ old('telepon', $dokter->telepon) }}">
                        @error('telepon') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">STR</label>
                        <input type="text" name="str" class="form-control @error('str') is-invalid @enderror" value="{{ old('str', $dokter->str) }}">
                        @error('str') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" value="{{ old('pendidikan', $dokter->pendidikan) }}">
                        @error('pendidikan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*" onchange="previewImage(this, 'fotoPreview')">
                        @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="mt-2 d-flex align-items-center gap-3">
                            @if($dokter->foto)
                                <img id="fotoPreview" src="{{ asset('storage/' . $dokter->foto) }}" width="120" height="120" style="object-fit: cover; border-radius: 8px;">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>
                            @else
                                <img id="fotoPreview" src="#" class="img-thumbnail d-none" width="120" height="120" style="object-fit: cover; border-radius: 8px;">
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Tentang Dokter</label>
                        <textarea name="about" rows="4" class="form-control @error('about') is-invalid @enderror">{{ old('about', $dokter->about) }}</textarea>
                        @error('about') <div class="invalid-feedback">{{ $message }}</div> @enderror
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
