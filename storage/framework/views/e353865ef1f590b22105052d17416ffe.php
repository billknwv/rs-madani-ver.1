<div class="card card-dokter h-100 border-0 shadow-sm" data-aos="fade-up">
    <div class="card-img-wrapper">
        <img src="<?php echo e($dokter->foto ? asset('storage/' . $dokter->foto) : asset('assets/img/dokter-placeholder.svg')); ?>"
             class="card-img-top" alt="<?php echo e($dokter->nama); ?>">
        <div class="card-img-overlay d-flex align-items-end p-3">
            <span class="badge bg-primary rounded-pill"><?php echo e($dokter->spesialis->nama ?? 'Umum'); ?></span>
        </div>
    </div>
    <div class="card-body text-center">
        <h5 class="card-title mb-1"><?php echo e($dokter->nama); ?></h5>
        <p class="card-text text-muted small mb-3"><?php echo e($dokter->spesialis->nama ?? 'Dokter Umum'); ?></p>
        <a href="<?php echo e(route('dokter.detail', $dokter->id)); ?>" class="btn btn-outline-primary btn-sm rounded-pill">
            Lihat Detail
        </a>
    </div>
</div>
<?php /**PATH C:\laragon\www\rs-madani\resources\views/components/card-dokter.blade.php ENDPATH**/ ?>