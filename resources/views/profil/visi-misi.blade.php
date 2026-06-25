@extends('layouts.app')

@section('title', 'Visi & Misi RSUD Madani Palu')

@section('content')
    @include('profil._header', ['title' => 'Visi & Misi', 'icon' => 'bullseye'])

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    @include('profil._sidebar')
                </div>
                <div class="col-lg-9" data-aos="fade-left">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-4">Visi & Misi RSUD Madani Palu</h2>

                            <div class="visi-box p-4 rounded-3 mb-4">
                                <h4 class="text-primary mb-3"><i class="bi bi-eye me-2"></i>Visi</h4>
                                <p class="mb-0 fs-5">"Menjadi Rumah Sakit yang Terdepan dalam Pelayanan Kesehatan yang Paripurna dan Terjangkau bagi Masyarakat Sulawesi Tengah."</p>
                            </div>

                            <div class="misi-box p-4 rounded-3 mb-4">
                                <h4 class="text-primary mb-3"><i class="bi bi-rocket-takeoff me-2"></i>Misi</h4>
                                <ul class="misi-list">
                                    <li class="mb-3">
                                        <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                        Menyelenggarakan pelayanan kesehatan yang bermutu, paripurna, dan terjangkau bagi seluruh masyarakat.
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                        Mengembangkan sumber daya manusia yang kompeten, profesional, dan berdedikasi tinggi.
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                        Menerapkan dan mengembangkan teknologi medis terkini untuk meningkatkan mutu pelayanan.
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                        Menjalin kemitraan strategis dengan berbagai pihak dalam pengembangan pelayanan kesehatan.
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-check-circle-fill text-secondary me-2"></i>
                                        Menyelenggarakan tata kelola rumah sakit yang baik, transparan, dan akuntabel.
                                    </li>
                                </ul>
                            </div>

                            <div class="values-box p-4 rounded-3">
                                <h4 class="text-primary mb-3"><i class="bi bi-heart me-2"></i>Nilai-Nilai</h4>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="value-item text-center p-3">
                                            <i class="bi bi-shield-check fs-1 text-secondary mb-2"></i>
                                            <h6>Integritas</h6>
                                            <small class="text-muted">Bekerja dengan jujur dan bertanggung jawab</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="value-item text-center p-3">
                                            <i class="bi bi-people fs-1 text-secondary mb-2"></i>
                                            <h6>Kolaborasi</h6>
                                            <small class="text-muted">Bekerja sama untuk hasil terbaik</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="value-item text-center p-3">
                                            <i class="bi bi-star fs-1 text-secondary mb-2"></i>
                                            <h6>Keunggulan</h6>
                                            <small class="text-muted">Terus berinovasi dan meningkatkan kualitas</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
