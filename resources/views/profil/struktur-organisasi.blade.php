@extends('layouts.app')

@section('title', 'Struktur Organisasi RSUD Madani Palu')

@section('content')
    @include('profil._header', ['title' => 'Struktur Organisasi', 'icon' => 'diagram-3'])

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    @include('profil._sidebar')
                </div>
                <div class="col-lg-9" data-aos="fade-left">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-4">Struktur Organisasi</h2>
                            <p class="text-muted mb-4">Berikut adalah struktur organisasi RSUD Madani Palu yang menunjukkan hierarki dan hubungan kerja antar bagian.</p>

                            <div class="org-chart text-center">
                                <div class="org-level org-top mb-4">
                                    <div class="org-box p-3 bg-primary text-white rounded-3 d-inline-block">
                                        <h6 class="mb-1">Dewan Direksi</h6>
                                        <small>Direktur RSUD Madani Palu</small>
                                    </div>
                                </div>

                                <div class="org-connector mb-3">
                                    <div class="line-vertical mx-auto"></div>
                                </div>

                                <div class="org-level org-mid mb-4">
                                    <div class="row g-3 justify-content-center">
                                        <div class="col-md-4">
                                            <div class="org-box p-3 bg-secondary text-white rounded-3">
                                                <h6 class="mb-1">Direktur Medis</h6>
                                                <small>Bidang Pelayanan</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="org-box p-3 bg-secondary text-white rounded-3">
                                                <h6 class="mb-1">Direktur Keuangan</h6>
                                                <small>Bidang Keuangan</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="org-box p-3 bg-secondary text-white rounded-3">
                                                <h6 class="mb-1">Direktur SDM</h6>
                                                <small>Bidang SDM & Umum</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="org-connector mb-3">
                                    <div class="line-vertical mx-auto"></div>
                                </div>

                                <div class="org-level org-bottom">
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <div class="org-box p-3 border rounded-3">
                                                <h6 class="mb-1">IGD</h6>
                                                <small class="text-muted">Unit Gawat Darurat</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="org-box p-3 border rounded-3">
                                                <h6 class="mb-1">Rawat Inap</h6>
                                                <small class="text-muted">Unit Rawat Inap</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="org-box p-3 border rounded-3">
                                                <h6 class="mb-1">Rawat Jalan</h6>
                                                <small class="text-muted">Unit Rawat Jalan</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="org-box p-3 border rounded-3">
                                                <h6 class="mb-1">Penunjang</h6>
                                                <small class="text-muted">Unit Penunjang Medis</small>
                                            </div>
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
