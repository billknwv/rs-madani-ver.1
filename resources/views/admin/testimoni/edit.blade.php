@extends('layouts.admin')

@section('title', 'Edit Testimoni')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="page-title mb-0">Edit Testimoni</h4>
        <a href="{{ route('admin.testimoni.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>Kembali
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                               value="{{ old('nama', $testimoni->nama) }}" required>
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Profesi</label>
                        <input type="text" name="profesi" class="form-control @error('profesi') is-invalid @enderror"
                               value="{{ old('profesi', $testimoni->profesi) }}" placeholder="Contoh: Wiraswasta, Guru">
                        @error('profesi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Rating <span class="text-danger">*</span></label>
                        <select name="rating" class="form-select @error('rating') is-invalid @enderror" required>
                            <option value="">Pilih Rating</option>
                            @for($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}" {{ old('rating', $testimoni->rating) == $i ? 'selected' : '' }}>{{ $i }} Bintang</option>
                            @endfor
                        </select>
                        @error('rating') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror"
                               accept="image/*" onchange="previewImage(this, 'fotoPreview')">
                        @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="mt-2">
                            @if($testimoni->foto)
                                <img id="fotoPreview" src="{{ asset('storage/' . $testimoni->foto) }}"
                                     class="rounded-circle" width="100" height="100" style="object-fit: cover;">
                            @else
                                <img id="fotoPreview" src="#" alt="Preview" class="rounded-circle d-none"
                                     width="100" height="100" style="object-fit: cover;">
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Testimoni <span class="text-danger">*</span></label>
                        <textarea name="isi" rows="5" class="form-control @error('isi') is-invalid @enderror"
                                  required>{{ old('isi', $testimoni->isi) }}</textarea>
                        @error('isi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input type="checkbox" name="status" class="form-check-input" id="status" value="1"
                                   {{ old('status', $testimoni->status) ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Aktif</label>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-2"></i>Simpan Perubahan
                    </button>
                    <a href="{{ route('admin.testimoni.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function previewImage(input, previewId) {
        var preview = document.getElementById(previewId);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.classList.remove('d-none');
                preview.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
