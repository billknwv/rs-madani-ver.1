<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-brand d-flex align-items-center mb-3">
                        <div class="brand-icon me-2">
                            <i class="bi bi-heart-pulse fs-3 text-white"></i>
                        </div>
                        <div>
                            <span class="fw-bold fs-5 text-white">RSUD Madani Palu</span>
                            <small class="d-block text-white-50">Jl. Thalua Konchi No.11 Mamboro</small>
                        </div>
                    </div>
                    <p class="text-white-50 mb-4">
                        Rumah Sakit Umum Daerah Madani Palu adalah rumah sakit tipe C yang menyediakan pelayanan kesehatan
                        profesional dan terpercaya dengan teknologi medis terkini, berkomitmen memberikan pelayanan paripurna.
                    </p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/rsmadanipalu/" class="social-link" aria-label="Facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/rsmadanipalu/" class="social-link" aria-label="Instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link" aria-label="Twitter X" target="_blank"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.youtube.com/@rsdmadanipalu650" class="social-link" aria-label="YouTube" target="_blank"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Profil</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('profil.sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ route('profil.visi-misi') }}">Visi & Misi</a></li>
                        <li><a href="{{ route('profil.sambutan') }}">Sambutan Direktur</a></li>
                        <li><a href="{{ route('profil.struktur-organisasi') }}">Struktur Organisasi</a></li>
                        <li><a href="{{ route('profil.akreditasi') }}">Akreditasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Layanan</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('layanan.rawat-jalan') }}">Rawat Jalan</a></li>
                        <li><a href="{{ route('layanan.rawat-inap') }}">Rawat Inap</a></li>
                        <li><a href="{{ route('layanan.detail', 'igd') }}">IGD</a></li>
                        <li><a href="{{ route('layanan.detail', 'radiologi') }}">Radiologi</a></li>
                        <li><a href="{{ route('layanan.detail', 'farmasi') }}">Farmasi</a></li>
                        <li><a href="{{ route('layanan.detail', 'laboratorium') }}">Laboratorium</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Unggulan</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('layanan.detail', 'tms') }}">TMS</a></li>
                        <li><a href="{{ route('layanan.detail', 'layanan-syaraf') }}">Layanan Syaraf</a></li>
                        <li><a href="{{ route('layanan.detail', 'rehabilitasi-narkoba') }}">Rehabilitasi Narkoba</a></li>
                        <li><a href="{{ route('layanan.detail', 'kesehatan-jiwa-anak-remaja') }}">Kesehatan Jiwa Anak & Remaja</a></li>
                    </ul>
                </div>

                <div class="col-lg-2">
                    <h6 class="footer-title">Kontak</h6>
                    <ul class="footer-contact">
                        <li>
                            <i class="bi bi-geo-alt"></i>
                            <span>Jl. Thalua Konchi No.11, Mamboro<br>Palu Utara, Sulawesi Tengah</span>
                        </li>
                        <li>
                            <i class="bi bi-telephone"></i>
                            <span>(0451) 491605</span>
                        </li>
                        <li>
                            <i class="bi bi-whatsapp"></i>
                            <span>+62 811-1234-5678</span>
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <span>rsmadanipalu@gmail.com</span>
                        </li>
                        <li>
                            <i class="bi bi-clock"></i>
                            <span>IGD 24 Jam / 7 Hari</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} RSUD Madani Palu. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <a href="{{ route('profil.index') }}" class="text-white-50 text-decoration-none me-3">Tentang Kami</a>
                    <a href="{{ route('kontak.index') }}" class="text-white-50 text-decoration-none">Kontak</a>
                </div>
            </div>
        </div>
    </div>
</footer>
