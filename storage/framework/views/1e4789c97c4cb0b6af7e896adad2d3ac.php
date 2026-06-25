<?php $__env->startSection('title', 'Rawat Inap - RSUD Madani Palu'); ?>
<?php $__env->startSection('meta_description', 'Fasilitas rawat inap RSUD Madani Palu dengan 9 ruangan nyaman dari kelas standar hingga VVIP.'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i class="bi bi-house me-1"></i>Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('layanan.index')); ?>">Layanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rawat Inap</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="page-header position-relative overflow-hidden">
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-40">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3">
                        <i class="bi bi-building"></i> Layanan Medis
                    </span>
                    <h1 class="display-4 fw-bold text-white">Rawat Inap</h1>
                    <p class="lead text-white-50">Fasilitas rawat inap yang nyaman dengan berbagai kelas ruangan untuk menunjang proses penyembuhan</p>
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
                            <p>24 Jam / 7 Hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-info-card">
                        <div class="service-info-icon"><i class="bi bi-door-open"></i></div>
                        <div class="service-info-content">
                            <h6>Total Ruangan</h6>
                            <p>9 Ruangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-info-card">
                        <div class="service-info-icon"><i class="bi bi-shield-check"></i></div>
                        <div class="service-info-content">
                            <h6>Pelayanan Medis</h6>
                            <p>24 Jam Siaga</p>
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
                <span class="section-badge">Fasilitas</span>
                <h2 class="section-title">Ruangan Rawat Inap</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Kenyamanan Anda adalah prioritas kami. Beragam pilihan ruangan rawat inap dengan fasilitas terbaik</p>
            </div>
            <div class="row g-4">
                <?php $__currentLoopData = $ruangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index % 3 * 100); ?>">
                    <div class="card inap-card h-100">
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
                                    <i class="bi bi-person-badge me-1"></i><?php echo e($item['kapasitas']); ?>

                                </span>
                                <a href="<?php echo e(route('kontak.index')); ?>" class="btn-read-more">
                                    Hubungi <i class="bi bi-arrow-right"></i>
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
                    <h2 class="section-title">Ketentuan Rawat Inap</h2>
                    <p class="text-muted mb-4">Pasien rawat inap mendapatkan pelayanan medis 24 jam, konsultasi dokter spesialis, serta fasilitas penunjang lainnya untuk kenyamanan selama masa perawatan.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo e(route('kontak.index')); ?>" class="btn btn-primary rounded-pill px-4">
                            <i class="bi bi-telephone me-2"></i>Hubungi Kami
                        </a>
                        <a href="https://wa.me/6281112345678" target="_blank" class="btn btn-success rounded-pill px-4">
                            <i class="bi bi-whatsapp me-2"></i>WhatsApp
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-door-open fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">9 Ruangan</h4>
                                <p class="text-muted small mb-0">Total Ruangan</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-shield-check fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">24 Jam</h4>
                                <p class="text-muted small mb-0">Pelayanan Medis</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-wifi fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">Free WiFi</h4>
                                <p class="text-muted small mb-0">Fasilitas Kamar</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 shadow-sm p-4 text-center">
                                <div class="medical-icon-circle mx-auto mb-3" style="position: static; width: 48px; height: 48px;">
                                    <i class="bi bi-cup-hot fs-5"></i>
                                </div>
                                <h4 class="fw-bold text-primary mb-1">Katering</h4>
                                <p class="text-muted small mb-0">Makanan Sehat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rs-madani\resources\views/layanan/rawat-inap.blade.php ENDPATH**/ ?>