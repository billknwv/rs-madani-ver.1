@extends('layouts.app')

@section('title', 'Profil RSUD Madani Palu - Rumah Sakit Modern & Terpercaya')

@section('meta_description', 'Profil lengkap RSUD Madani Palu, rumah sakit tipe C dengan pelayanan kesehatan profesional dan terpercaya di Sulawesi Tengah.')

@section('content')
    {{-- Page Header --}}
    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-info-circle"></i> Profil
                    </span>
                    <h1 class="display-4 fw-bold text-white">Profil RSUD Madani Palu</h1>
                    <p class="lead text-white-50">Mengenal lebih dekat Rumah Sakit Umum Daerah Madani Palu</p>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    {{-- Hero Stats --}}
    <section class="section-padding py-4 position-relative" style="margin-top: -60px; z-index: 2;">
        <div class="container">
            <div class="profil-hero-stats" data-aos="fade-up">
                <div class="row g-2 justify-content-center">
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <span class="stat-number">41+</span>
                            <span class="stat-label">Tahun Pengalaman</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">Tenaga Medis</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <span class="stat-number">250+</span>
                            <span class="stat-label">Kamar Tersedia</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-box">
                            <span class="stat-number">15K+</span>
                            <span class="stat-label">Pasien Puas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Profil Content --}}
    <section class="section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm" data-aos="fade-right">
                        <div class="card-body p-0">
                            <div class="nav flex-column nav-pills profil-nav">
                                <a href="{{ route('profil.index') }}" class="nav-link active">
                                    <i class="bi bi-info-circle me-2"></i>Tentang Kami
                                </a>
                                <a href="{{ route('profil.sejarah') }}" class="nav-link">
                                    <i class="bi bi-clock-history me-2"></i>Sejarah
                                </a>
                                <a href="{{ route('profil.visi-misi') }}" class="nav-link">
                                    <i class="bi bi-bullseye me-2"></i>Visi & Misi
                                </a>
                                <a href="{{ route('profil.sambutan') }}" class="nav-link">
                                    <i class="bi bi-person me-2"></i>Sambutan Direktur
                                </a>
                                <a href="{{ route('profil.struktur-organisasi') }}" class="nav-link">
                                    <i class="bi bi-diagram-3 me-2"></i>Struktur Organisasi
                                </a>
                                <a href="{{ route('profil.akreditasi') }}" class="nav-link">
                                    <i class="bi bi-patch-check me-2"></i>Akreditasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" data-aos="fade-left">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <div class="medical-icon-circle" style="width: 44px; height: 44px;">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <h2 class="fw-bold mb-0">Tentang RSUD Madani Palu</h2>
                            </div>
                            <div class="profil-content">
                                <div class="position-relative mb-4 rounded-4 overflow-hidden">
                                    <img src="https://placehold.co/800x400/0D1B3D/FFFFFF?text=RSUD+Madani+Palu" alt="RSUD Madani Palu" class="w-100">
                                    <div class="position-absolute bottom-0 start-0 end-0 p-4" style="background: linear-gradient(to top, rgba(13,27,61,0.8), transparent);">
                                        <h4 class="text-white fw-bold mb-0">RSUD Madani Palu</h4>
                                        <small class="text-white-50">Jl. Thalua Konchi No.11, Mamboro, Palu Utara</small>
                                    </div>
                                </div>

                                <div class="row g-4 mb-4">
                                    <div class="col-md-6">
                                        <div class="p-4 rounded-4 h-100" style="background: linear-gradient(135deg, rgba(13,27,61,0.03), rgba(13,27,61,0.06)); border-left: 4px solid var(--primary);">
                                            <h5 class="fw-bold mb-2"><i class="bi bi-building text-primary me-2"></i>Sekilas</h5>
                                            <p class="text-muted small mb-0">RSUD Madani Palu adalah rumah sakit tipe C yang terletak di Jl. Thalua Konchi No.11 Mamboro, Palu Utara, Sulawesi Tengah. Dengan pengalaman lebih dari 41 tahun, RSUD Madani Palu telah menjadi salah satu rumah sakit terpercaya di Sulawesi Tengah.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-4 rounded-4 h-100" style="background: linear-gradient(135deg, rgba(245,51,87,0.03), rgba(245,51,87,0.06)); border-left: 4px solid var(--secondary);">
                                            <h5 class="fw-bold mb-2"><i class="bi bi-award text-secondary me-2"></i>Akreditasi</h5>
                                            <p class="text-muted small mb-0">RSUD Madani Palu telah mendapat predikat "Paripurna" standar NARS (National Accreditation Rating System) dan terus berinovasi untuk meningkatkan kualitas pelayanan kesehatan masyarakat.</p>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-muted">Didukung oleh tenaga medis profesional dan peralatan medis terkini, RSUD Madani Palu berkomitmen untuk memberikan pelayanan kesehatan yang paripurna, mulai dari pencegahan, diagnosis, pengobatan, hingga rehabilitasi.</p>

                                <div class="row g-3 mt-4">
                                    <div class="col-md-4">
                                        <div class="card bg-light border-0 text-center p-4 h-100">
                                            <div class="why-icon mx-auto mb-3">
                                                <i class="bi bi-people fs-3"></i>
                                            </div>
                                            <h5 class="fw-bold mb-1">100+</h5>
                                            <small class="text-muted">Tenaga Medis Profesional</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-light border-0 text-center p-4 h-100">
                                            <div class="why-icon mx-auto mb-3">
                                                <i class="bi bi-building fs-3"></i>
                                            </div>
                                            <h5 class="fw-bold mb-1">250+</h5>
                                            <small class="text-muted">Kamar Tersedia</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card bg-light border-0 text-center p-4 h-100">
                                            <div class="why-icon mx-auto mb-3">
                                                <i class="bi bi-star fs-3"></i>
                                            </div>
                                            <h5 class="fw-bold mb-1">15K+</h5>
                                            <small class="text-muted">Pasien Puas</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="{{ route('layanan.index') }}" class="btn btn-primary rounded-pill px-4">
                                        Lihat Layanan Kami <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
