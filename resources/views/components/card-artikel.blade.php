<div class="card card-artikel h-100 border-0 shadow-sm" data-aos="fade-up">
    <div class="card-img-wrapper">
        <img src="{{ $artikel->thumbnail ? asset('storage/' . $artikel->thumbnail) : asset('assets/img/artikel-placeholder.svg') }}"
             class="card-img-top" alt="{{ $artikel->judul }}">
        <div class="card-date">
            <span class="day">{{ \Carbon\Carbon::parse($artikel->tanggal_publish)->format('d') }}</span>
            <span class="month">{{ \Carbon\Carbon::parse($artikel->tanggal_publish)->format('M') }}</span>
        </div>
    </div>
    <div class="card-body">
        @if($artikel->kategori)
            <span class="badge bg-light text-primary mb-2">{{ $artikel->kategori }}</span>
        @endif
        <h5 class="card-title">{{ $artikel->judul }}</h5>
        <p class="card-text text-muted small">{{ Str::limit($artikel->ringkasan, 100) }}</p>
    </div>
    <div class="card-footer bg-transparent border-0 pt-0">
        <div class="d-flex align-items-center justify-content-between">
            <small class="text-muted">
                <i class="bi bi-person me-1"></i>{{ $artikel->penulis ?? 'Admin' }}
            </small>
            <a href="{{ route('artikel.detail', $artikel->slug) }}" class="btn btn-link text-primary p-0">
                Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</div>
