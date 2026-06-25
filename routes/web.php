<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DokterController as AdminDokterController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\LayananController as AdminLayananController;
use App\Http\Controllers\Admin\TestimoniController as AdminTestimoniController;
use App\Http\Controllers\Front\ArtikelController;
use App\Http\Controllers\Front\DokterController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\KontakController;
use App\Http\Controllers\Front\LayananController;
use App\Http\Controllers\Front\ProfilController;
use Illuminate\Support\Facades\Route;

// Halaman Front
Route::get('/', [HomeController::class, 'index'])->name('home');

// Profil
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('index');
    Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/sambutan', [ProfilController::class, 'sambutan'])->name('sambutan');
    Route::get('/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
    Route::get('/akreditasi', [ProfilController::class, 'akreditasi'])->name('akreditasi');
});

// Layanan
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/', [LayananController::class, 'index'])->name('index');
    Route::get('/rawat-jalan', [LayananController::class, 'rawatJalan'])->name('rawat-jalan');
    Route::get('/rawat-inap', [LayananController::class, 'rawatInap'])->name('rawat-inap');
    Route::get('/{slug}', [LayananController::class, 'detail'])->name('detail');
});

// Dokter
Route::prefix('dokter')->name('dokter.')->group(function () {
    Route::get('/', [DokterController::class, 'index'])->name('index');
    Route::get('/{id}', [DokterController::class, 'detail'])->name('detail');
});

// Artikel
Route::prefix('artikel')->name('artikel.')->group(function () {
    Route::get('/', [ArtikelController::class, 'index'])->name('index');
    Route::get('/{slug}', [ArtikelController::class, 'detail'])->name('detail');
});

// Kontak
Route::prefix('kontak')->name('kontak.')->group(function () {
    Route::get('/', [KontakController::class, 'index'])->name('index');
    Route::post('/', [KontakController::class, 'store'])->name('store');
});

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('authenticate');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        // CRUD Dokter
        Route::resource('dokter', AdminDokterController::class)->except('show');

        // CRUD Artikel
        Route::resource('artikel', AdminArtikelController::class)->except('show');

        // CRUD Layanan
        Route::resource('layanan', AdminLayananController::class)->except('show');

        // CRUD Banner
        Route::resource('banner', BannerController::class)->except('show');

        // CRUD Jadwal Dokter
        Route::resource('jadwal', JadwalController::class)->except('show');

        // CRUD Testimoni
        Route::resource('testimoni', AdminTestimoniController::class)->except('show');
    });
});
