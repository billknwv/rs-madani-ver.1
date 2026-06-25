<div class="search-overlay" id="searchOverlay">
    <button class="search-overlay-close" id="searchOverlayClose" aria-label="Tutup pencarian">
        <i class="bi bi-x-lg"></i>
    </button>
    <div class="search-overlay-content text-center">
        <i class="bi bi-search text-white-50 mb-4 d-block" style="font-size: 3rem;"></i>
        <h4 class="text-white mb-2">Cari Layanan atau Informasi</h4>
        <p class="text-white-50 mb-4">Temukan informasi layanan kesehatan, dokter, dan artikel</p>
        <form action="<?php echo e(route('artikel.index')); ?>" method="GET">
            <div class="position-relative">
                <input type="text" name="search" class="search-input" placeholder="Ketik kata kunci..." autocomplete="off" id="searchOverlayInput">
                <button type="submit" class="btn btn-secondary rounded-pill px-4 mt-3">
                    <i class="bi bi-search me-2"></i>Cari
                </button>
            </div>
        </form>
        <div class="mt-4">
            <span class="text-white-50 small me-2">Pencarian Populer:</span>
            <a href="<?php echo e(route('layanan.rawat-jalan')); ?>" class="text-white text-decoration-none small me-2">Rawat Jalan</a>
            <a href="<?php echo e(route('layanan.rawat-inap')); ?>" class="text-white text-decoration-none small me-2">Rawat Inap</a>
            <a href="<?php echo e(route('dokter.index')); ?>" class="text-white text-decoration-none small">Dokter</a>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\rs-madani\resources\views/components/search-overlay.blade.php ENDPATH**/ ?>