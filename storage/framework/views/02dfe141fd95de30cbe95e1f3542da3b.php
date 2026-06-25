<?php $__env->startSection('title', 'Sejarah RSUD Madani Palu'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('profil._header', ['title' => 'Sejarah', 'icon' => 'clock-history'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <?php echo $__env->make('profil._sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <div class="col-lg-9" data-aos="fade-left">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-4">Sejarah RSUD Madani Palu</h2>
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-year">1985</div>
                                    <div class="timeline-content">
                                        <h5>Pendirian Rumah Sakit</h5>
                                        <p>RSUD Madani Palu didirikan sebagai rumah sakit umum daerah dengan kapasitas terbatas untuk melayani kebutuhan kesehatan masyarakat Palu dan sekitarnya.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-year">2000</div>
                                    <div class="timeline-content">
                                        <h5>Pengembangan Layanan</h5>
                                        <p>Pengembangan berbagai unit pelayanan spesialis dan peningkatan kapasitas tempat tidur menjadi 100 tempat tidur.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-year">2015</div>
                                    <div class="timeline-content">
                                        <h5>Akreditasi KARS</h5>
                                        <p>RSUD Madani Palu berhasil meraih akreditasi dari Komite Akreditasi Rumah Sakit (KARS) dengan predikat Madya.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-year">2020</div>
                                    <div class="timeline-content">
                                        <h5>Predikat Paripurna</h5>
                                        <p>RSUD Madani Palu berhasil meraih predikat "Paripurna" standar NARS (National Accreditation Rating System), menandakan kualitas pelayanan yang unggul.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-year">2025</div>
                                    <div class="timeline-content">
                                        <h5>Modernisasi & Inovasi</h5>
                                        <p>Implementasi sistem informasi rumah sakit modern, Command Center, rekam medis elektronik, dan pengembangan layanan unggulan seperti TMS Saraf dan Rehabilitasi Narkoba.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rs-madani\resources\views/profil/sejarah.blade.php ENDPATH**/ ?>