<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Dokter;
use App\Models\Fasilitas;
use App\Models\Layanan;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status', true)->orderBy('urutan')->get();
        $layanan = Layanan::all();
        $dokter = Dokter::with('spesialis')->take(4)->get();
        $fasilitas = Fasilitas::all();
        $artikel = Artikel::where('status', true)->latest('tanggal_publish')->take(3)->get();
        $testimoni = Testimoni::where('status', true)->get();

        $statistik = [
            ['label' => 'Pasien Ditangani', 'nilai' => 15230, 'icon' => 'bi-people', 'prefix' => '', 'suffix' => '+'],
            ['label' => 'Dokter Spesialis', 'nilai' => 10, 'icon' => 'bi-person-badge', 'prefix' => '', 'suffix' => ''],
            ['label' => 'Kamar Tersedia', 'nilai' => 250, 'icon' => 'bi-building', 'prefix' => '', 'suffix' => '+'],
            ['label' => 'Tahun Pengalaman', 'nilai' => 25, 'icon' => 'bi-calendar-check', 'prefix' => '', 'suffix' => '+'],
        ];

        return view('home.index', compact(
            'banners', 'layanan', 'dokter', 'fasilitas',
            'artikel', 'testimoni', 'statistik'
        ));
    }
}
