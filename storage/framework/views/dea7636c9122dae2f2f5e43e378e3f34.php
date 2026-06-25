<div class="card card-layanan h-100 border-0 shadow-sm text-center card-hover-premium" data-aos="fade-up">
    <div class="card-body p-4">
        <div class="layanan-icon mb-3">
            <i class="bi <?php echo e($layanan->icon ?? 'bi-heart-pulse'); ?>"></i>
        </div>
        <h5 class="card-title fw-bold" style="font-family: 'Poppins', sans-serif;"><?php echo e($layanan->nama); ?></h5>
        <p class="card-text text-muted small mb-4"><?php echo e(Str::limit($layanan->deskripsi, 90)); ?></p>
        <a href="<?php echo e(route('layanan.detail', $layanan->slug)); ?>" class="btn btn-outline-secondary rounded-pill btn-sm px-3 stretched-link">
            Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>
</div>
<?php /**PATH C:\laragon\www\rs-madani\resources\views/components/card-layanan.blade.php ENDPATH**/ ?>