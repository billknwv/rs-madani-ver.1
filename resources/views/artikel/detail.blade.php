@extends('layouts.app')

@section('title', $artikel->judul . ' - RSUD Madani Palu')

@section('meta_description', $artikel->ringkasan)

@section('content')
    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-newspaper"></i> {{ $artikel->kategori ?? 'Artikel' }}
                    </span>
                    <h1 class="display-4 fw-bold text-white">{{ $artikel->judul }}</h1>
                    <div class="d-flex align-items-center gap-3 text-white-50">
                        <small><i class="bi bi-person me-1"></i>{{ $artikel->penulis ?? 'Admin' }}</small>
                        <small><i class="bi bi-calendar me-1"></i>{{ \Carbon\Carbon::parse($artikel->tanggal_publish)->format('d F Y') }}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="card border-0 shadow-sm">
                        @if($artikel->thumbnail)
                            <img src="{{ asset('storage/' . $artikel->thumbnail) }}" class="card-img-top" alt="{{ $artikel->judul }}">
                        @endif
                        <div class="card-body p-4">
                            <div class="artikel-content">
                                {!! nl2br(e($artikel->konten)) !!}
                            </div>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <small class="text-muted">
                                        <i class="bi bi-folder me-1"></i>{{ $artikel->kategori ?? 'Umum' }}
                                    </small>
                                </div>
                                <div>
                                    <a href="{{ route('artikel.index') }}" class="btn btn-outline-primary btn-sm rounded-pill">
                                        <i class="bi bi-arrow-left me-1"></i>Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">Artikel Terbaru</h5>
                            @foreach($artikelTerbaru as $item)
                                <a href="{{ route('artikel.detail', $item->slug) }}"
                                   class="d-flex align-items-start gap-3 text-decoration-none mb-3 p-2 rounded-3 hover-bg-light">
                                    <div class="artikel-thumb-sm rounded-2 overflow-hidden flex-shrink-0">
                                        <img src="{{ $item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('assets/img/artikel-placeholder.svg') }}"
                                             width="70" height="70" style="object-fit: cover;" alt="{{ $item->judul }}">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-dark small">{{ Str::limit($item->judul, 50) }}</h6>
                                        <small class="text-muted">{{ \Carbon\Carbon::parse($item->tanggal_publish)->format('d M Y') }}</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
