<?php $__env->startSection('title', 'Rawat Jalan - RSUD Madani Palu'); ?>
<?php $__env->startSection('meta_description', 'Layanan rawat jalan RSUD Madani Palu dengan 14 klinik spesialis siap melayani kebutuhan kesehatan Anda.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="bi bi-house me-1"></i>Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('layanan.index')); ?>">Layanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rawat Jalan</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-hospital"></i> Layanan Medis
                    </span>
                    <h1 class="display-4 fw-bold text-white">Rawat Jalan</h1>
                    <p class="lead text-white-50">Pelayanan rawat jalan profesional dengan dokter spesialis berpengalaman di berbagai bidang</p>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    
    <section class="section-padding pb-0">
        <div class="container">
            <div class="row g-3" data-aos="fade-up">
                <div class="col-lg-3 col-md-6">
                    <div class="service-info-card">
                        <div class="service-info-icon"><i class="bi bi-clock"></i></div>
                        <div class="service-info-content">
                            <h6>Jam Layanan</h6>
                            <p>Sen-Jum, 08:00-16:00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-info-card">
                        <div class="service-info-icon"><i class="bi bi-people"></i></div>
                        <div class="service-info-content">
                            <h6>Dokter Spesialis</h6>
                            <p>14+ Dokter</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-info-card">
                        <div class="service-info-icon"><i class="bi bi-hospital"></i></div>
                        <div class="service-info-content">
                            <h6>Klinik</h6>
                            <p>14 Klinik Spesialis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-info-card">
                        <div class="service-info-icon"><i class="bi bi-telephone"></i></div>
                        <div class="service-info-content">
                            <h6>Informasi</h6>
                            <p>(0451) 491605</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge">Poliklinik</span>
                <h2 class="section-title">Klinik & Poli Rawat Jalan</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Kami menyediakan 14 layanan klinik spesialis untuk memenuhi kebutuhan kesehatan Anda</p>
            </div>
            <div class="row g-4">
                <?php $__currentLoopData = $klinik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index % 3 * 100); ?>">
                    <div class="card klinik-card h-100">
                        <div class="card-img-wrapper">
                            <div class="img-placeholder" style="background: linear-gradient(135deg, <?php echo e($item['gradient_start']); ?>, <?php echo e($item['gradient_end']); ?>);">
                                <i class="bi <?php echo e($item['icon']); ?>"></i>
                            </div>
                            <span class="card-badge"><?php echo e($item['badge']); ?></span>
                        </div>
                        <div class="card-body">
                            <div class="medical-icon-circle">
                                <i class="bi <?php echo e($item['icon']); ?>"></i>
                            </div>
                            <h5 class="card-title mt-2"><?php echo e($item['nama']); ?></h5>
                            <p class="card-text"><?php echo e($item['deskripsi']); ?></p>
                            <div class="card-footer-action">
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i><?php echo e($item['jadwal']); ?>

                                </span>
                                <a href="<?php echo e(route('dokter.index')); ?>?spesialis=<?php echo e($loop->index+1); ?>" class="btn-read-more">
                                    Lihat Dokter <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-badge">Informasi</span>
                    <h2 class="section-title">Butuh Informasi Lebih Lanjut?</h2>
                    <p class="text-muted mb-4">Hubungi kami untuk informasi jadwal praktik dokter, pendaftaran, dan prosedur rawat jalan.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo e(route('kontak.index')); ?>" class="btn btn-secondary rounded-pill px-4 btn-lg">
                            <i class="bi bi-telephone me-2"></i>Hubungi Kami
                        </a>
                        <a href="<?php echo e(route('dokter.index')); ?>" class="btn btn-outline-primary rounded-pill px-4 btn-lg">
                            <i class="bi bi-people me-2"></i>Lihat Dokter
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-people fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">14+</h4>
                                <p class="text-muted small mb-0">Dokter Spesialis</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-clock fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">08:00 - 16:00</h4>
                                <p class="text-muted small mb-0">Jam Layanan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rs-madani\resources\views/layanan/rawat-jalan.blade.php ENDPATH**/ ?>