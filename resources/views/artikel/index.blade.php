@extends('layouts.app')

@section('title', 'Artikel Kesehatan - RSUD Madani Palu')

@section('content')
    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-newspaper"></i> Artikel
                    </span>
                    <h1 class="display-4 fw-bold text-white">Artikel & Berita Kesehatan</h1>
                    <p class="lead text-white-50">Informasi kesehatan terkini dari tim medis RSUD Madani Palu</p>
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
            {{-- Search & Filter --}}
            <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                <div class="card-body p-4">
                    <form action="{{ route('artikel.index') }}" method="GET" class="row g-3 align-items-end">
                        <div class="col-lg-6">
                            <label class="form-label small fw-semibold">Cari Artikel</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                                <input type="text" name="search" class="form-control" placeholder="Cari artikel..." value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label small fw-semibold">Kategori</label>
                            <select name="kategori" class="form-select">
                                <option value="">Semua Kategori</option>
                                @foreach($kategori as $kat)
                                    <option value="{{ $kat }}" {{ request('kategori') == $kat ? 'selected' : '' }}>
                                        {{ $kat }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-search me-2"></i>Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Artikel Grid --}}
            <div class="row g-4">
                @forelse($artikel as $item)
                    <div class="col-lg-4 col-md-6">
                        @include('components.card-artikel', ['artikel' => $item])
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-newspaper fs-1 text-muted mb-3 d-block"></i>
                        <h5>Tidak ada artikel ditemukan</h5>
                        <p class="text-muted">Coba kata kunci pencarian yang berbeda</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $artikel->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection
