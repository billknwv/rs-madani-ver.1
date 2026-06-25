<?php $__env->startSection('title', $artikel->judul . ' - RSUD Madani Palu'); ?>

<?php $__env->startSection('meta_description', $artikel->ringkasan); ?>

<?php $__env->startSection('content'); ?>
    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-newspaper"></i> <?php echo e($artikel->kategori ?? 'Artikel'); ?>

                    </span>
                    <h1 class="display-4 fw-bold text-white"><?php echo e($artikel->judul); ?></h1>
                    <div class="d-flex align-items-center gap-3 text-white-50">
                        <small><i class="bi bi-person me-1"></i><?php echo e($artikel->penulis ?? 'Admin'); ?></small>
                        <small><i class="bi bi-calendar me-1"></i><?php echo e(\Carbon\Carbon::parse($artikel->tanggal_publish)->format('d F Y')); ?></small>
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
                        <?php if($artikel->thumbnail): ?>
                            <img src="<?php echo e(asset('storage/' . $artikel->thumbnail)); ?>" class="card-img-top" alt="<?php echo e($artikel->judul); ?>">
                        <?php endif; ?>
                        <div class="card-body p-4">
                            <div class="artikel-content">
                                <?php echo nl2br(e($artikel->konten)); ?>

                            </div>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <small class="text-muted">
                                        <i class="bi bi-folder me-1"></i><?php echo e($artikel->kategori ?? 'Umum'); ?>

                                    </small>
                                </div>
                                <div>
                                    <a href="<?php echo e(route('artikel.index')); ?>" class="btn btn-outline-primary btn-sm rounded-pill">
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
                            <?php $__currentLoopData = $artikelTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('artikel.detail', $item->slug)); ?>"
                                   class="d-flex align-items-start gap-3 text-decoration-none mb-3 p-2 rounded-3 hover-bg-light">
                                    <div class="artikel-thumb-sm rounded-2 overflow-hidden flex-shrink-0">
                                        <img src="<?php echo e($item->thumbnail ? asset('storage/' . $item->thumbnail) : asset('assets/img/artikel-placeholder.svg')); ?>"
                                             width="70" height="70" style="object-fit: cover;" alt="<?php echo e($item->judul); ?>">
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-dark small"><?php echo e(Str::limit($item->judul, 50)); ?></h6>
                                        <small class="text-muted"><?php echo e(\Carbon\Carbon::parse($item->tanggal_publish)->format('d M Y')); ?></small>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rs-madani\resources\views/artikel/detail.blade.php ENDPATH**/ ?>