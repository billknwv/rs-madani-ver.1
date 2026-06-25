@extends('layouts.app')

@section('title', $layanan->nama . ' - RSUD Madani Palu')

@php
    $fasilitasList = [
        'igd' => [
            ['nama' => 'Ambulans 24 Jam', 'deskripsi' => 'Armada ambulans siap siaga 24 jam untuk penjemputan dan rujukan pasien darurat.', 'icon' => 'bi-truck', 'gradient_start' => '#dc3545', 'gradient_end' => '#b91c1c', 'badge' => 'Siaga'],
            ['nama' => 'Ruang Emergency', 'deskripsi' => 'Ruangan darurat dengan peralatan resusitasi lengkap untuk penanganan awal pasien kritis.', 'icon' => 'bi-hospital', 'gradient_start' => '#dc3545', 'gradient_end' => '#b91c1c', 'badge' => '24 Jam'],
            ['nama' => 'Ruang Tindakan', 'deskripsi' => 'Ruang tindakan cepat untuk prosedur medis darurat termasuk jahit luka dan pemasangan infus.', 'icon' => 'bi-scissors', 'gradient_start' => '#dc3545', 'gradient_end' => '#b91c1c', 'badge' => 'Cepat'],
            ['nama' => 'Peralatan Medis Darurat', 'deskripsi' => 'Defibrillator, ventilator, dan monitor jantung siap digunakan kapan saja.', 'icon' => 'bi-activity', 'gradient_start' => '#dc3545', 'gradient_end' => '#b91c1c', 'badge' => 'Modern'],
        ],
        'rawat-jalan' => [
            ['nama' => 'Ruang Konsultasi', 'deskripsi' => 'Ruang konsultasi nyaman untuk diskusi dokter-pasien dengan privasi terjaga.', 'icon' => 'bi-chat-dots', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Nyaman'],
            ['nama' => 'Ruang Tunggu Pasien', 'deskripsi' => 'Area tunggu luas ber-AC dengan kursi ergonomis dan hiburan televisi.', 'icon' => 'bi-people', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Nyaman'],
            ['nama' => 'Klinik Spesialis', 'deskripsi' => '14 klinik spesialis dengan dokter berpengalaman di berbagai bidang.', 'icon' => 'bi-hospital', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Lengkap'],
            ['nama' => 'Area Pemeriksaan', 'deskripsi' => 'Ruang pemeriksaan diagnostik dengan peralatan medis modern dan akurat.', 'icon' => 'bi-stethoscope', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Modern'],
        ],
        'rawat-inap' => [
            ['nama' => 'Kamar Pasien', 'deskripsi' => 'Kamar perawatan bersih dan nyaman dengan fasilitas lengkap untuk pemulihan.', 'icon' => 'bi-house-door', 'gradient_start' => '#11998e', 'gradient_end' => '#38ef7d', 'badge' => 'Nyaman'],
            ['nama' => 'Ruang VIP', 'deskripsi' => 'Suite premium dengan ruang tamu, kamar mandi dalam, dan layanan butler.', 'icon' => 'bi-star', 'gradient_start' => '#fccb90', 'gradient_end' => '#d57eeb', 'badge' => 'Premium'],
            ['nama' => 'ICU', 'deskripsi' => 'Unit perawatan intensif dengan monitor 24 jam dan ventilator canggih.', 'icon' => 'bi-activity', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Intensif'],
            ['nama' => 'Nurse Station', 'deskripsi' => 'Pos perawat siap siaga 24 jam dengan sistem panggilan pasien terintegrasi.', 'icon' => 'bi-people', 'gradient_start' => '#4facfe', 'gradient_end' => '#00f2fe', 'badge' => 'Siaga'],
        ],
        'radiologi' => [
            ['nama' => 'CT Scan', 'deskripsi' => 'Pemindaian tomografi komputer untuk diagnosis detail organ dan jaringan tubuh.', 'icon' => 'bi-cpu', 'gradient_start' => '#7F00FF', 'gradient_end' => '#E100FF', 'badge' => 'Canggih'],
            ['nama' => 'MRI', 'deskripsi' => 'Magnetic Resonance Imaging untuk pencitraan jaringan lunak berkualitas tinggi.', 'icon' => 'bi-motherboard', 'gradient_start' => '#7F00FF', 'gradient_end' => '#E100FF', 'badge' => 'Modern'],
            ['nama' => 'Rontgen', 'deskripsi' => 'Pemeriksaan radiologi konvensional untuk diagnosis tulang dan organ dada.', 'icon' => 'bi-x-ray', 'gradient_start' => '#7F00FF', 'gradient_end' => '#E100FF', 'badge' => 'Cepat'],
            ['nama' => 'USG', 'deskripsi' => 'Ultrasonografi untuk pemeriksaan organ dalam dan kehamilan secara non-invasif.', 'icon' => 'bi-ear', 'gradient_start' => '#7F00FF', 'gradient_end' => '#E100FF', 'badge' => 'Aman'],
        ],
        'laboratorium' => [
            ['nama' => 'Alat Laboratorium', 'deskripsi' => 'Peralatan analisis modern untuk pemeriksaan darah, urine, dan sampel biologis.', 'icon' => 'bi-cpu', 'gradient_start' => '#314755', 'gradient_end' => '#26a0da', 'badge' => 'Modern'],
            ['nama' => 'Ruang Pemeriksaan Sampel', 'deskripsi' => 'Laboratorium steril dengan sistem manajemen sampel terintegrasi.', 'icon' => 'bi-biotech', 'gradient_start' => '#314755', 'gradient_end' => '#26a0da', 'badge' => 'Steril'],
            ['nama' => 'Area Analisis Darah', 'deskripsi' => 'Mesin hematologi dan kimia klinik otomatis untuk hasil cepat dan akurat.', 'icon' => 'bi-droplet', 'gradient_start' => '#314755', 'gradient_end' => '#26a0da', 'badge' => 'Akurat'],
        ],
        'farmasi' => [
            ['nama' => 'Area Pelayanan Obat', 'deskripsi' => 'Farmasi rumah sakit dengan sistem dispensing obat modern dan aman.', 'icon' => 'bi-capsule', 'gradient_start' => '#11998e', 'gradient_end' => '#38ef7d', 'badge' => 'Pelayanan'],
            ['nama' => 'Rak Obat', 'deskripsi' => 'Penyimpanan obat terorganisir dengan sistem kontrol suhu dan kelembaban.', 'icon' => 'bi-boxes', 'gradient_start' => '#11998e', 'gradient_end' => '#38ef7d', 'badge' => 'Teratur'],
            ['nama' => 'Area Konsultasi Farmasi', 'deskripsi' => 'Konsultasi penggunaan obat oleh apoteker profesional.', 'icon' => 'bi-chat-dots', 'gradient_start' => '#11998e', 'gradient_end' => '#38ef7d', 'badge' => 'Konsultasi'],
        ],
        'tms' => [
            ['nama' => 'Ruang Terapi TMS', 'deskripsi' => 'Ruangan khusus terapi Transcranial Magnetic Stimulation yang nyaman dan tenang.', 'icon' => 'bi-braces', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Terapi'],
            ['nama' => 'Alat Terapi TMS', 'deskripsi' => 'Mesin TMS terkini untuk stimulasi magnetik transkranial non-invasif.', 'icon' => 'bi-cpu', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Canggih'],
            ['nama' => 'Ruang Konsultasi Neurologi', 'deskripsi' => 'Konsultasi dengan dokter spesialis saraf untuk diagnosis dan rencana terapi.', 'icon' => 'bi-brain', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Konsultasi'],
        ],
        'layanan-syaraf' => [
            ['nama' => 'Ruang Terapi TMS', 'deskripsi' => 'Ruangan khusus terapi Transcranial Magnetic Stimulation yang nyaman dan tenang.', 'icon' => 'bi-braces', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Terapi'],
            ['nama' => 'Alat Terapi', 'deskripsi' => 'Peralatan diagnostik dan terapi neurologi modern untuk penanganan optimal.', 'icon' => 'bi-cpu', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Modern'],
            ['nama' => 'Ruang Konsultasi Neurologi', 'deskripsi' => 'Konsultasi dengan dokter spesialis saraf untuk diagnosis dan rencana terapi.', 'icon' => 'bi-brain', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Konsultasi'],
        ],
        'rehabilitasi-narkoba' => [
            ['nama' => 'Ruang Terapi', 'deskripsi' => 'Ruangan terapi individual dan kelompok untuk program rehabilitasi narkoba.', 'icon' => 'bi-arrow-repeat', 'gradient_start' => '#834d9b', 'gradient_end' => '#d04ed6', 'badge' => 'Terapi'],
            ['nama' => 'Ruang Konseling', 'deskripsi' => 'Ruang konseling psikologis yang nyaman untuk proses pemulihan mental.', 'icon' => 'bi-chat-dots', 'gradient_start' => '#834d9b', 'gradient_end' => '#d04ed6', 'badge' => 'Konseling'],
            ['nama' => 'Area Rawat Inap', 'deskripsi' => 'Fasilitas rawat inap khusus dengan pengawasan medis 24 jam.', 'icon' => 'bi-building', 'gradient_start' => '#834d9b', 'gradient_end' => '#d04ed6', 'badge' => 'Inap'],
        ],
        'kesehatan-jiwa-anak-remaja' => [
            ['nama' => 'Ruang Terapi', 'deskripsi' => 'Ruangan terapi ramah anak dengan pendekatan bermain dan seni.', 'icon' => 'bi-emoji-smile', 'gradient_start' => '#56ab2f', 'gradient_end' => '#a8e063', 'badge' => 'Ramah'],
            ['nama' => 'Ruang Konseling', 'deskripsi' => 'Ruang konseling yang aman dan nyaman untuk anak dan remaja.', 'icon' => 'bi-chat-dots', 'gradient_start' => '#56ab2f', 'gradient_end' => '#a8e063', 'badge' => 'Aman'],
            ['nama' => 'Area Bermain', 'deskripsi' => 'Play therapy area dengan berbagai alat permainan edukatif dan interaktif.', 'icon' => 'bi-controller', 'gradient_start' => '#56ab2f', 'gradient_end' => '#a8e063', 'badge' => 'Edukatif'],
        ],
    ];

    $slugKey = $layanan->slug;
    $fasilitas = $fasilitasList[$slugKey] ?? [
        ['nama' => 'Fasilitas Unggulan', 'deskripsi' => 'Fasilitas modern untuk menunjang pelayanan kesehatan.', 'icon' => 'bi-building', 'gradient_start' => '#0D1B3D', 'gradient_end' => '#1a2d5e', 'badge' => 'Modern'],
    ];

    $infoLayanan = [
        'igd' => ['schedule' => '24 Jam / 7 Hari', 'phone' => '(0451) 491605', 'doctor' => 'Dokter Spesialis Emergency', 'bed' => '5 Tempat Tidur'],
        'rawat-jalan' => ['schedule' => 'Sen-Jum 08:00-16:00', 'phone' => '(0451) 491605', 'doctor' => '14+ Dokter Spesialis', 'bed' => 'Semua Klinik'],
        'rawat-inap' => ['schedule' => '24 Jam / 7 Hari', 'phone' => '(0451) 491605', 'doctor' => 'Dokter Spesialis', 'bed' => '9 Ruangan'],
        'radiologi' => ['schedule' => 'Sen-Sab 07:00-20:00', 'phone' => '(0451) 491605', 'doctor' => 'Dokter Spesialis Radiologi', 'bed' => '4 Alat Utama'],
        'laboratorium' => ['schedule' => 'Sen-Minggu 07:00-20:00', 'phone' => '(0451) 491605', 'doctor' => 'Analis Kesehatan', 'bed' => 'Hasil Cepat'],
        'farmasi' => ['schedule' => 'Sen-Minggu 07:00-21:00', 'phone' => '(0451) 491605', 'doctor' => 'Apoteker Klinik', 'bed' => 'Obat Lengkap'],
        'tms' => ['schedule' => 'Sen-Jum 08:00-16:00', 'phone' => '(0451) 491605', 'doctor' => 'Spesialis Neurologi', 'bed' => 'Terjadwal'],
        'layanan-syaraf' => ['schedule' => 'Sen-Jum 08:00-16:00', 'phone' => '(0451) 491605', 'doctor' => 'Spesialis Neurologi', 'bed' => 'Terjadwal'],
        'rehabilitasi-narkoba' => ['schedule' => 'Sen-Jum 08:00-16:00', 'phone' => '(0451) 491605', 'doctor' => 'Spesialis Jiwa', 'bed' => 'Program 3 Bulan'],
        'kesehatan-jiwa-anak-remaja' => ['schedule' => 'Sen-Jum 08:00-15:00', 'phone' => '(0451) 491605', 'doctor' => 'Spesialis Jiwa Anak', 'bed' => 'Terjadwal'],
    ];
    $info = $infoLayanan[$slugKey] ?? ['schedule' => 'Hubungi Kami', 'phone' => '(0451) 491605', 'doctor' => 'Dokter Spesialis', 'bed' => 'Tersedia'];
@endphp

@section('content')
    {{-- Service Hero Section --}}
    <section class="service-hero">
        <div class="service-hero-pattern"></div>
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi {{ $layanan->icon ?? 'bi-heart-pulse' }}"></i> {{ ucfirst($layanan->kategori ?? 'Layanan') }}
                    </span>
                    <h1 class="display-4 fw-bold text-white">{{ $layanan->nama }}</h1>
                    <p class="lead text-white-50">{{ Str::limit($layanan->deskripsi, 120) }}</p>
                </div>
            </div>
        </div>
        <div class="service-hero-wave">
            <svg viewBox="0 0 1440 120" fill="none">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    {{-- Service Information Cards --}}
    <section class="section-padding pb-0">
        <div class="container">
            <div class="row g-4" data-aos="fade-up">
                <div class="col-lg-8">
                    <div class="service-info-grid">
                        <div class="service-info-card">
                            <div class="service-info-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="service-info-content">
                                <h6>Jam Layanan</h6>
                                <p>{{ $info['schedule'] }}</p>
                            </div>
                        </div>
                        <div class="service-info-card">
                            <div class="service-info-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="service-info-content">
                                <h6>Telepon</h6>
                                <p>{{ $info['phone'] }}</p>
                            </div>
                        </div>
                        <div class="service-info-card">
                            <div class="service-info-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="service-info-content">
                                <h6>Dokter</h6>
                                <p>{{ $info['doctor'] }}</p>
                            </div>
                        </div>
                        <div class="service-info-card">
                            <div class="service-info-icon">
                                <i class="bi bi-door-open"></i>
                            </div>
                            <div class="service-info-content">
                                <h6>Ketersediaan</h6>
                                <p>{{ $info['bed'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm bg-primary text-white h-100">
                        <div class="card-body p-4 d-flex flex-column align-items-center justify-content-center text-center">
                            <i class="bi bi-telephone-fill fs-1 mb-3"></i>
                            <h5>Butuh Bantuan?</h5>
                            <p class="small text-white-50 mb-3">Hubungi kami untuk informasi lebih lanjut</p>
                            <a href="tel:0451491605" class="btn btn-light rounded-pill px-4 fw-bold">(0451) 491605</a>
                            <a href="https://wa.me/6281112345678" target="_blank" class="btn btn-outline-light rounded-pill px-4 mt-2">
                                <i class="bi bi-whatsapp me-2"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Content + Sidebar --}}
    <section class="section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="service-content">
                        <h2>Tentang {{ $layanan->nama }}</h2>
                        <p>{{ $layanan->deskripsi }}</p>
                        {!! $layanan->konten !!}
                    </div>
                    <div class="mt-4 d-flex flex-wrap gap-3">
                        <a href="{{ route('kontak.index') }}" class="btn btn-secondary rounded-pill px-4">
                            <i class="bi bi-calendar-check me-2"></i>Buat Janji
                        </a>
                        <a href="{{ route('dokter.index') }}" class="btn btn-outline-primary rounded-pill px-4">
                            <i class="bi bi-people me-2"></i>Lihat Dokter
                        </a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="sidebar-service-card">
                        <div class="p-3 border-bottom">
                            <h5 class="fw-bold mb-0" style="font-family: 'Poppins', sans-serif; font-size: 1rem;">
                                <i class="bi bi-list-check text-secondary me-2"></i>Layanan Lainnya
                            </h5>
                        </div>
                        <div class="list-group list-group-flush p-2">
                            @foreach($allLayanan as $item)
                                <a href="{{ route('layanan.detail', $item->slug) }}"
                                   class="list-group-item list-group-item-action d-flex align-items-center gap-3">
                                    <i class="bi {{ $item->icon ?? 'bi-heart-pulse' }} fs-5 text-primary"></i>
                                    <span>{{ $item->nama }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm mt-4 rounded-4 overflow-hidden">
                        <div class="card-body p-4 text-center" style="background: linear-gradient(135deg, var(--primary), #0a142e);">
                            <i class="bi bi-headset fs-1 mb-3 d-block text-secondary"></i>
                            <h5 class="text-white">Informasi & Pendaftaran</h5>
                            <p class="small text-white-50 mb-3">Hubungi kami untuk informasi jadwal dan pendaftaran</p>
                            <a href="tel:0451491605" class="btn btn-secondary rounded-pill px-4 w-100">(0451) 491605</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fasilitas Layanan Section --}}
    <section class="section-padding facility-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge">Fasilitas</span>
                <h2 class="section-title">Fasilitas {{ $layanan->nama }}</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Fasilitas modern dan lengkap untuk menunjang pelayanan kesehatan yang optimal</p>
            </div>
            @include('components.gallery-fasilitas', ['fasilitas' => $fasilitas])
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-badge">Layanan</span>
                    <h2 class="section-title">Siap Membantu Anda</h2>
                    <p class="text-muted mb-4">Tim medis profesional kami siap memberikan pelayanan terbaik untuk kesehatan Anda dan keluarga.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('kontak.index') }}" class="btn btn-secondary rounded-pill px-4 btn-lg">
                            <i class="bi bi-telephone me-2"></i>Hubungi Kami
                        </a>
                        <a href="{{ route('layanan.index') }}" class="btn btn-outline-primary rounded-pill px-4 btn-lg">
                            <i class="bi bi-arrow-left me-2"></i>Semua Layanan
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-shield-check fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">Terakreditasi</h4>
                                <p class="text-muted small mb-0">Standar NARS</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-heart fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">Ramah</h4>
                                <p class="text-muted small mb-0">Pelayanan Santun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
