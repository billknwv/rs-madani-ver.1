<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">

            <img src="{{ asset('logo/logo.svg') }}"
                alt="Logo RS Madani"
                height="50"
                class="me-2">

            <div>
                <h6 class="mb-0 fw-bold">RSUD Madani</h6>
                <small class="text-muted">
                    Provinsi Sulawesi Tengah
                </small>
            </div>

        </a>

        <div class="d-flex align-items-center gap-2 order-lg-last">
            <button class="search-nav-btn d-none d-lg-flex" id="searchToggle" aria-label="Cari">
                <i class="bi bi-search"></i>
            </button>
            <button class="nav-link dark-mode-toggle" id="darkModeToggle" aria-label="Toggle dark mode">
                <i class="bi bi-moon-stars"></i>
            </button>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house d-lg-none me-2"></i>Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('profil.*') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="bi bi-info-circle d-lg-none me-2"></i>Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profil.index') }}"><i class="bi bi-info-circle me-2"></i>Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.sejarah') }}"><i class="bi bi-clock-history me-2"></i>Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.visi-misi') }}"><i class="bi bi-bullseye me-2"></i>Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.sambutan') }}"><i class="bi bi-person me-2"></i>Sambutan Direktur</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.struktur-organisasi') }}"><i class="bi bi-diagram-3 me-2"></i>Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profil.akreditasi') }}"><i class="bi bi-patch-check me-2"></i>Akreditasi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('layanan.*') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="bi bi-clipboard2-pulse d-lg-none me-2"></i>Layanan
                    </a>
                    <div class="dropdown-menu dropdown-mega-menu">
                        <div class="mega-menu-container">
                            <div class="row g-0">
                                <div class="col-lg-4 mega-col">
                                    <div class="mega-section">
                                        <div class="mega-section-title">
                                            <i class="bi bi-heart-pulse"></i>
                                            <span>Layanan Medis</span>
                                        </div>
                                        <ul class="mega-links">
                                            <li>
                                                <a href="{{ route('layanan.detail', 'igd') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-ambulance"></i></span>
                                                    <span class="mega-link-text">IGD</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('layanan.rawat-jalan') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-hospital"></i></span>
                                                    <span class="mega-link-text">Rawat Jalan</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('layanan.rawat-inap') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-building"></i></span>
                                                    <span class="mega-link-text">Rawat Inap</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 mega-col">
                                    <div class="mega-section">
                                        <div class="mega-section-title">
                                            <i class="bi bi-tools"></i>
                                            <span>Layanan Penunjang</span>
                                        </div>
                                        <ul class="mega-links">
                                            <li>
                                                <a href="{{ route('layanan.detail', 'radiologi') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-x-ray"></i></span>
                                                    <span class="mega-link-text">Radiologi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('layanan.detail', 'farmasi') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-capsule"></i></span>
                                                    <span class="mega-link-text">Farmasi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('layanan.detail', 'laboratorium') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-microscope"></i></span>
                                                    <span class="mega-link-text">Laboratorium</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 mega-col">
                                    <div class="mega-section">
                                        <div class="mega-section-title">
                                            <i class="bi bi-star"></i>
                                            <span>Layanan Unggulan</span>
                                        </div>
                                        <ul class="mega-links">
                                            <li>
                                                <a href="{{ route('layanan.detail', 'tms') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-braces"></i></span>
                                                    <span class="mega-link-text">TMS</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('layanan.detail', 'layanan-syaraf') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-brain"></i></span>
                                                    <span class="mega-link-text">Layanan Syaraf</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('layanan.detail', 'rehabilitasi-narkoba') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-arrow-repeat"></i></span>
                                                    <span class="mega-link-text">Rehabilitasi Narkoba</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('layanan.detail', 'kesehatan-jiwa-anak-remaja') }}" class="mega-link">
                                                    <span class="mega-link-icon"><i class="bi bi-emoji-smile"></i></span>
                                                    <span class="mega-link-text">Kesehatan Jiwa Anak & Remaja</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mega-footer">
                                <a href="{{ route('layanan.index') }}" class="mega-footer-link">
                                    Lihat Semua Layanan <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dokter.*') ? 'active' : '' }}" href="{{ route('dokter.index') }}">
                        <i class="bi bi-people d-lg-none me-2"></i>Dokter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('artikel.*') ? 'active' : '' }}" href="{{ route('artikel.index') }}">
                        <i class="bi bi-newspaper d-lg-none me-2"></i>Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak.*') ? 'active' : '' }}" href="{{ route('kontak.index') }}">
                        <i class="bi bi-envelope d-lg-none me-2"></i>Kontak
                    </a>
                </li>
                <li class="nav-item d-lg-none">
                    <button class="nav-link w-100 text-start" id="searchToggleMobile">
                        <i class="bi bi-search me-2"></i>Cari
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
