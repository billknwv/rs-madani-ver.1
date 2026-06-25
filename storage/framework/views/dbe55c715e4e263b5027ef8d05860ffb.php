<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'RSUD Madani Palu - Rumah Sakit Modern dengan Pelayanan Kesehatan Profesional dan Terpercaya di Sulawesi Tengah'); ?>">
    <meta name="keywords" content="rumah sakit, RSUD Madani, RSD Madani, Palu, Sulawesi Tengah, kesehatan, dokter, layanan kesehatan, IGD 24 jam, rawat jalan, rawat inap">
    <meta name="author" content="RSUD Madani Palu">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', 'RSUD Madani Palu - Rumah Sakit Modern & Terpercaya'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'RSUD Madani Palu - Rumah Sakit Modern dengan Pelayanan Kesehatan Profesional dan Terpercaya di Sulawesi Tengah'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('assets/img/og-image.jpg')); ?>">
    <meta property="og:site_name" content="RSUD Madani Palu">
    <meta property="og:locale" content="id_ID">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('og_title', 'RSUD Madani Palu - Rumah Sakit Modern & Terpercaya'); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('meta_description', 'RSUD Madani Palu - Rumah Sakit Modern dengan Pelayanan Kesehatan Profesional dan Terpercaya di Sulawesi Tengah'); ?>">
    <meta name="twitter:image" content="<?php echo $__env->yieldContent('og_image', asset('assets/img/og-image.jpg')); ?>">

    <title><?php echo $__env->yieldContent('title', 'RSUD Madani Palu - Rumah Sakit Modern & Terpercaya'); ?></title>

    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('assets/img/favicon.svg')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <div class="loading-screen" id="loadingScreen">
        <div class="spinner">
            <div class="spinner-icon">
                <i class="bi bi-heart-pulse"></i>
            </div>
            <div class="spinner-text">RSUD Madani Palu</div>
        </div>
    </div>

    <?php echo $__env->make('components.search-overlay', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('components.whatsapp', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <button id="scrollToTop" class="scroll-to-top" aria-label="Scroll to top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\rs-madani\resources\views/layouts/app.blade.php ENDPATH**/ ?>