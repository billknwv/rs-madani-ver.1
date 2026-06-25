@extends('layouts.app')

@section('title', $dokter->nama . ' - RSUD Madani Palu')
@section('meta_description', 'Profil dokter ' . $dokter->nama . ', ' . ($dokter->spesialis->nama ?? 'Dokter Umum') . ' di RSUD Madani Palu.')
@section('og_title', $dokter->nama . ' - Dokter RSUD Madani Palu')

@section('content')
    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house me-1"></i>Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dokter.index') }}">Dokter</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $dokter->nama }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-person-badge"></i> Profil Dokter
                    </span>
                    <h1 class="display-4 fw-bold text-white">{{ $dokter->nama }}</h1>
                    <p class="lead text-white-50">{{ $dokter->spesialis->nama ?? 'Dokter Umum' }}</p>
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
                {{-- Profil Card --}}
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden">
                        <div class="position-relative" style="height: 120px; background: linear-gradient(135deg, var(--primary), var(--primary-light));">
                            <div class="position-absolute" style="bottom: -60px; left: 50%; transform: translateX(-50%);">
                                <img src="{{ $dokter->foto ? asset('storage/' . $dokter->foto) : asset('assets/img/dokter-placeholder.svg') }}"
                                     class="rounded-circle border border-4 border-white shadow"
                                     width="120" height="120"
                                     style="object-fit: cover;" alt="{{ $dokter->nama }}">
                            </div>
                        </div>
                        <div class="card-body text-center pt-5 mt-4">
                            <h4 class="fw-bold mb-1">{{ $dokter->nama }}</h4>
                            <span class="badge bg-secondary rounded-pill mb-3 px-3 py-1">{{ $dokter->spesialis->nama ?? 'Dokter Umum' }}</span>
                            <hr>
                            <div class="text-start">
                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                    <small class="text-muted"><i class="bi bi-file-text me-2"></i>STR</small>
                                    <span class="fw-medium small">{{ $dokter->str ?? '-' }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                    <small class="text-muted"><i class="bi bi-mortarboard me-2"></i>Pendidikan</small>
                                    <span class="fw-medium small">{{ $dokter->pendidikan ?? '-' }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                    <small class="text-muted"><i class="bi bi-envelope me-2"></i>Email</small>
                                    <span class="fw-medium small">{{ $dokter->email ?? '-' }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center py-2">
                                    <small class="text-muted"><i class="bi bi-telephone me-2"></i>Telepon</small>
                                    <span class="fw-medium small">{{ $dokter->telepon ?? '-' }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $dokter->telepon ?? '6281112345678') }}" target="_blank" class="btn btn-success btn-sm rounded-pill px-3">
                                    <i class="bi bi-whatsapp me-1"></i>WhatsApp
                                </a>
                                <a href="{{ route('kontak.index') }}" class="btn btn-secondary btn-sm rounded-pill px-3">
                                    <i class="bi bi-telephone me-1"></i>Hubungi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Detail & Jadwal --}}
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <div class="medical-icon-circle" style="width: 40px; height: 40px;">
                                    <i class="bi bi-person fs-6"></i>
                                </div>
                                <h4 class="fw-bold mb-0">Tentang Dokter</h4>
                            </div>
                            <p class="text-muted" style="line-height: 1.8;">{{ $dokter->about ?? 'Belum ada informasi tentang dokter ini.' }}</p>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <div class="medical-icon-circle" style="width: 40px; height: 40px;">
                                    <i class="bi bi-clock fs-6"></i>
                                </div>
                                <h4 class="fw-bold mb-0">Jadwal Praktik</h4>
                            </div>
                            @if($dokter->jadwal->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>Hari</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dokter->jadwal as $jd)
                                                <tr>
                                                    <td class="fw-medium">
                                                        <i class="bi bi-calendar3 me-2 text-primary"></i>{{ $jd->hari }}
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-light text-dark rounded-pill px-3 py-1">
                                                            <i class="bi bi-clock me-1"></i>{{ \Carbon\Carbon::parse($jd->jam_mulai)->format('H:i') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-light text-dark rounded-pill px-3 py-1">
                                                            <i class="bi bi-clock me-1"></i>{{ \Carbon\Carbon::parse($jd->jam_selesai)->format('H:i') }}
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge {{ $jd->status == 'aktif' ? 'bg-success' : 'bg-danger' }} rounded-pill px-3 py-1">
                                                            <i class="bi {{ $jd->status == 'aktif' ? 'bi-check-circle' : 'bi-x-circle' }} me-1"></i>
                                                            {{ $jd->status == 'aktif' ? 'Tersedia' : 'Tidak Tersedia' }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="text-center py-4">
                                    <i class="bi bi-calendar-x text-muted fs-1 d-block mb-2"></i>
                                    <p class="text-muted mb-0">Belum ada jadwal praktik.</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-4 p-4 rounded-4" style="background: linear-gradient(135deg, rgba(245,51,87,0.05), rgba(245,51,87,0.02)); border: 1px solid rgba(245,51,87,0.1);">
                        <div class="row align-items-center">
                            <div class="col-lg-8 mb-3 mb-lg-0">
                                <h5 class="fw-bold mb-1">Butuh Informasi Lebih Lanjut?</h5>
                                <p class="text-muted small mb-0">Hubungi kami untuk konsultasi dan informasi jadwal praktik dokter.</p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <a href="{{ route('kontak.index') }}" class="btn btn-secondary rounded-pill px-4">
                                    <i class="bi bi-telephone me-2"></i>Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
