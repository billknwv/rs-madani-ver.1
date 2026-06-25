<div class="card border-0 shadow-sm" data-aos="fade-right">
    <div class="card-body p-0">
        <div class="nav flex-column nav-pills profil-nav">
            <a href="<?php echo e(route('profil.index')); ?>" class="nav-link <?php echo e(request()->routeIs('profil.index') ? 'active' : ''); ?>">
                <i class="bi bi-info-circle me-2"></i>Tentang Kami
            </a>
            <a href="<?php echo e(route('profil.sejarah')); ?>" class="nav-link <?php echo e(request()->routeIs('profil.sejarah') ? 'active' : ''); ?>">
                <i class="bi bi-clock-history me-2"></i>Sejarah
            </a>
            <a href="<?php echo e(route('profil.visi-misi')); ?>" class="nav-link <?php echo e(request()->routeIs('profil.visi-misi') ? 'active' : ''); ?>">
                <i class="bi bi-bullseye me-2"></i>Visi & Misi
            </a>
            <a href="<?php echo e(route('profil.sambutan')); ?>" class="nav-link <?php echo e(request()->routeIs('profil.sambutan') ? 'active' : ''); ?>">
                <i class="bi bi-person me-2"></i>Sambutan Direktur
            </a>
            <a href="<?php echo e(route('profil.struktur-organisasi')); ?>" class="nav-link <?php echo e(request()->routeIs('profil.struktur-organisasi') ? 'active' : ''); ?>">
                <i class="bi bi-diagram-3 me-2"></i>Struktur Organisasi
            </a>
            <a href="<?php echo e(route('profil.akreditasi')); ?>" class="nav-link <?php echo e(request()->routeIs('profil.akreditasi') ? 'active' : ''); ?>">
                <i class="bi bi-patch-check me-2"></i>Akreditasi
            </a>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\rs-madani\resources\views/profil/_sidebar.blade.php ENDPATH**/ ?>