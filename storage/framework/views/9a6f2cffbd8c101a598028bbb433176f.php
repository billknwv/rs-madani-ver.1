<div class="card card-artikel h-100 border-0 shadow-sm" data-aos="fade-up">
    <div class="card-img-wrapper">
        <img src="<?php echo e($artikel->thumbnail ? asset('storage/' . $artikel->thumbnail) : asset('assets/img/artikel-placeholder.svg')); ?>"
             class="card-img-top" alt="<?php echo e($artikel->judul); ?>">
        <div class="card-date">
            <span class="day"><?php echo e(\Carbon\Carbon::parse($artikel->tanggal_publish)->format('d')); ?></span>
            <span class="month"><?php echo e(\Carbon\Carbon::parse($artikel->tanggal_publish)->format('M')); ?></span>
        </div>
    </div>
    <div class="card-body">
        <?php if($artikel->kategori): ?>
            <span class="badge bg-light text-primary mb-2"><?php echo e($artikel->kategori); ?></span>
        <?php endif; ?>
        <h5 class="card-title"><?php echo e($artikel->judul); ?></h5>
        <p class="card-text text-muted small"><?php echo e(Str::limit($artikel->ringkasan, 100)); ?></p>
    </div>
    <div class="card-footer bg-transparent border-0 pt-0">
        <div class="d-flex align-items-center justify-content-between">
            <small class="text-muted">
                <i class="bi bi-person me-1"></i><?php echo e($artikel->penulis ?? 'Admin'); ?>

            </small>
            <a href="<?php echo e(route('artikel.detail', $artikel->slug)); ?>" class="btn btn-link text-primary p-0">
                Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\rs-madani\resources\views/components/card-artikel.blade.php ENDPATH**/ ?>