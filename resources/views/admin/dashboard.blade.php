@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="bi bi-person-badge fs-4 text-primary"></i>
                        </div>
                        <div>
                            <small class="text-muted">Total Dokter</small>
                            <h4 class="fw-bold mb-0">{{ $totalDokter }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-success bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="bi bi-clipboard2-pulse fs-4 text-success"></i>
                        </div>
                        <div>
                            <small class="text-muted">Total Layanan</small>
                            <h4 class="fw-bold mb-0">{{ $totalLayanan }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-info bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="bi bi-newspaper fs-4 text-info"></i>
                        </div>
                        <div>
                            <small class="text-muted">Total Artikel</small>
                            <h4 class="fw-bold mb-0">{{ $totalArtikel }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-warning bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="bi bi-chat-quote fs-4 text-warning"></i>
                        </div>
                        <div>
                            <small class="text-muted">Total Testimoni</small>
                            <h4 class="fw-bold mb-0">{{ $totalTestimoni ?? 0 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="fw-bold mb-0">Menu Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <a href="{{ route('admin.dokter.index') }}" class="btn btn-outline-primary w-100 p-3 d-flex flex-column align-items-center gap-2">
                                <i class="bi bi-person-badge fs-3"></i>
                                <span>Kelola Dokter</span>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.artikel.index') }}" class="btn btn-outline-info w-100 p-3 d-flex flex-column align-items-center gap-2">
                                <i class="bi bi-newspaper fs-3"></i>
                                <span>Kelola Artikel</span>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.layanan.index') }}" class="btn btn-outline-success w-100 p-3 d-flex flex-column align-items-center gap-2">
                                <i class="bi bi-clipboard2-pulse fs-3"></i>
                                <span>Kelola Layanan</span>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.testimoni.index') }}" class="btn btn-outline-warning w-100 p-3 d-flex flex-column align-items-center gap-2">
                                <i class="bi bi-chat-quote fs-3"></i>
                                <span>Kelola Testimoni</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
