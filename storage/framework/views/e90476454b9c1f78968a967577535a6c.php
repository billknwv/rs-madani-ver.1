<?php $__env->startSection('title', 'Dokter RSUD Madani Palu'); ?>
<?php $__env->startSection('meta_description', 'Tim dokter spesialis profesional RSUD Madani Palu yang siap melayani kebutuhan kesehatan Anda.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-people"></i> Dokter
                    </span>
                    <h1 class="display-4 fw-bold text-white">Tim Dokter</h1>
                    <p class="lead text-white-50">Dokter spesialis profesional siap melayani Anda</p>
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
            
            <div class="card filter-card border-0 shadow-sm mb-5" data-aos="fade-up">
                <div class="card-body p-4 p-md-5">
                    <div class="row g-3 align-items-end">
                        <div class="col-lg-5">
                            <label class="form-label small fw-semibold text-uppercase letter-spacing-1">Cari Dokter</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-secondary"></i></span>
                                <input type="text" name="search" class="form-control border-start-0 ps-0" placeholder="Nama dokter..." value="<?php echo e(request('search')); ?>" form="filterForm">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label small fw-semibold text-uppercase letter-spacing-1">Filter Spesialis</label>
                            <select name="spesialis" class="form-select" form="filterForm">
                                <option value="">Semua Spesialis</option>
                                <?php $__currentLoopData = $spesialis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php echo e(request('spesialis') == $item->id ? 'selected' : ''); ?>>
                                        <?php echo e($item->nama); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <form action="<?php echo e(route('dokter.index')); ?>" method="GET" id="filterForm">
                                <input type="hidden" name="search" value="<?php echo e(request('search')); ?>">
                                <input type="hidden" name="spesialis" value="<?php echo e(request('spesialis')); ?>">
                            </form>
                            <div class="d-grid gap-2">
                                <button type="submit" form="filterForm" class="btn btn-primary rounded-pill py-2">
                                    <i class="bi bi-filter me-2"></i>Filter
                                </button>
                                <?php if(request('search') || request('spesialis')): ?>
                                    <a href="<?php echo e(route('dokter.index')); ?>" class="btn btn-outline-secondary rounded-pill py-2 small">
                                        <i class="bi bi-x-circle me-1"></i>Reset Filter
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="d-flex align-items-center justify-content-between mb-4" data-aos="fade-up">
                <div>
                    <span class="fw-semibold text-primary"><?php echo e($dokter->total()); ?></span>
                    <span class="text-muted">Dokter ditemukan</span>
                    <?php if(request('search')): ?>
                        <span class="text-muted ms-2">untuk "<strong><?php echo e(request('search')); ?></strong>"</span>
                    <?php endif; ?>
                </div>
                <?php if($spesialis->count() > 0): ?>
                    <div class="d-none d-md-flex gap-1 flex-wrap">
                        <a href="<?php echo e(route('dokter.index')); ?>" class="btn btn-sm <?php echo e(!request('spesialis') ? 'btn-secondary' : 'btn-outline-secondary'); ?> rounded-pill">Semua</a>
                        <?php $__currentLoopData = $spesialis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('dokter.index', ['spesialis' => $item->id, 'search' => request('search')])); ?>"
                               class="btn btn-sm <?php echo e(request('spesialis') == $item->id ? 'btn-secondary' : 'btn-outline-secondary'); ?> rounded-pill">
                                <?php echo e($item->nama); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>

            
            <div class="row g-4">
                <?php $__empty_1 = true; $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 50); ?>">
                        <div class="card card-dokter h-100 border-0 shadow-sm">
                            <div class="card-img-wrapper">
                                <img src="<?php echo e($item->foto ? asset('storage/' . $item->foto) : asset('assets/img/dokter-placeholder.svg')); ?>"
                                     class="card-img-top" alt="<?php echo e($item->nama); ?>">
                                <div class="card-img-overlay d-flex align-items-end p-3">
                                    <span class="badge bg-secondary rounded-pill"><?php echo e($item->spesialis->nama ?? 'Umum'); ?></span>
                                </div>
                                <div class="dokter-social-hover">
                                    <?php if($item->telepon): ?>
                                        <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $item->telepon)); ?>" target="_blank" title="WhatsApp">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('dokter.detail', $item->id)); ?>" title="Lihat Detail">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1"><?php echo e($item->nama); ?></h5>
                                <p class="card-text text-muted small mb-3"><?php echo e($item->spesialis->nama ?? 'Dokter Umum'); ?></p>
                                <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                                    <small class="text-muted"><i class="bi bi-clock me-1"></i><?php echo e($item->jadwal->where('status', 'aktif')->count()); ?> Jadwal</small>
                                </div>
                                <a href="<?php echo e(route('dokter.detail', $item->id)); ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                    Lihat Detail <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 text-center py-5" data-aos="fade-up">
                        <div class="mb-4">
                            <i class="bi bi-people fs-1 text-muted d-block" style="font-size: 4rem !important;"></i>
                        </div>
                        <h5 class="fw-bold">Tidak ada dokter ditemukan</h5>
                        <p class="text-muted mb-4">Coba ubah kata kunci pencarian atau filter spesialis</p>
                        <a href="<?php echo e(route('dokter.index')); ?>" class="btn btn-primary rounded-pill px-4">
                            <i class="bi bi-arrow-counterclockwise me-2"></i>Reset Pencarian
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            
            <?php if($dokter->hasPages()): ?>
                <div class="mt-5" data-aos="fade-up">
                    <?php echo e($dokter->withQueryString()->links('pagination::bootstrap-5')); ?>

                </div>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rs-madani\resources\views/dokter/index.blade.php ENDPATH**/ ?>