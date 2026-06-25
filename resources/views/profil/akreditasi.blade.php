@extends('layouts.app')

@section('title', 'Akreditasi RSUD Madani Palu')

@section('content')
    @include('profil._header', ['title' => 'Akreditasi', 'icon' => 'patch-check'])

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    @include('profil._sidebar')
                </div>
                <div class="col-lg-9" data-aos="fade-left">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-4">Akreditasi RS Madani</h2>
                            <p class="text-muted mb-4">RSUD Madani Palu telah mendapatkan berbagai akreditasi sebagai bukti komitmen kami dalam memberikan pelayanan kesehatan yang bermutu dan sesuai standar nasional.</p>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card border-0 bg-light h-100">
                                        <div class="card-body text-center p-4">
                                            <div class="akreditasi-icon mb-3">
                                                <i class="bi bi-patch-check-fill text-success fs-1"></i>
                                            </div>
                                            <h5>Akreditasi KARS</h5>
                                            <p class="text-muted small">Komite Akreditasi Rumah Sakit</p>
                                            <span class="badge bg-success rounded-pill">Paripurna</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0 bg-light h-100">
                                        <div class="card-body text-center p-4">
                                            <div class="akreditasi-icon mb-3">
                                                <i class="bi bi-award-fill text-primary fs-1"></i>
                                            </div>
                                            <h5>NARS Paripurna</h5>
                                            <p class="text-muted small">National Accreditation Rating System</p>
                                            <span class="badge bg-primary rounded-pill">Paripurna</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0 bg-light h-100">
                                        <div class="card-body text-center p-4">
                                            <div class="akreditasi-icon mb-3">
                                                <i class="bi bi-building-check text-warning fs-1"></i>
                                            </div>
                                            <h5>BLU</h5>
                                            <p class="text-muted small">Badan Layanan Umum</p>
                                            <span class="badge bg-warning text-dark rounded-pill">Terdaftar</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0 bg-light h-100">
                                        <div class="card-body text-center p-4">
                                            <div class="akreditasi-icon mb-3">
                                                <i class="bi bi-building-check text-warning fs-1"></i>
                                            </div>
                                            <h5>BLU</h5>
                                            <p class="text-muted small">Badan Layanan Umum</p>
                                            <span class="badge bg-warning text-dark rounded-pill">Terdaftar</span>
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
