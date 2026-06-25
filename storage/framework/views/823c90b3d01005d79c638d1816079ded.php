<div class="row g-4">
    <?php $__currentLoopData = $fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index % 3 * 100); ?>">
        <div class="gallery-item card-hover-premium">
            <div class="position-relative overflow-hidden rounded-4 shadow-sm" style="aspect-ratio: 4/3;">
                <div class="gallery-badge"><?php echo e($item['badge'] ?? 'Fasilitas'); ?></div>
                <?php if(isset($item['image']) && $item['image']): ?>
                <img src="<?php echo e(asset($item['image'])); ?>" alt="<?php echo e($item['nama']); ?>" class="gallery-img" loading="lazy">
                <?php else: ?>
                <div class="service-img-placeholder" style="background: linear-gradient(135deg, <?php echo e($item['gradient_start'] ?? '#0D1B3D'); ?>, <?php echo e($item['gradient_end'] ?? '#1a2d5e'); ?>);">
                    <i class="bi <?php echo e($item['icon'] ?? 'bi-building'); ?>"></i>
                </div>
                <?php endif; ?>
                <div class="gallery-overlay">
                    <h6 class="gallery-title"><?php echo e($item['nama']); ?></h6>
                    <p class="gallery-desc"><?php echo e($item['deskripsi']); ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\laragon\www\rs-madani\resources\views/components/gallery-fasilitas.blade.php ENDPATH**/ ?>