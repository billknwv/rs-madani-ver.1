<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'IGD 24 Jam', 'deskripsi' => 'Instalasi Gawat Darurat yang siap melayani 24 jam non-stop dengan tim medis siaga.', 'icon' => 'bi-ambulance'],
            ['nama' => 'Ruang Operasi Modern', 'deskripsi' => 'Ruang operasi dengan teknologi terkini untuk prosedur bedah yang aman dan steril.', 'icon' => 'bi-hospital'],
            ['nama' => 'Rawat Inap Nyaman', 'deskripsi' => 'Kamar rawat inap berbagai kelas dengan fasilitas lengkap dan nyaman.', 'icon' => 'bi-building'],
            ['nama' => 'Laboratorium Canggih', 'deskripsi' => 'Laboratorium dengan peralatan diagnostik modern untuk hasil pemeriksaan akurat.', 'icon' => 'bi-microscope'],
            ['nama' => 'Radiologi Digital', 'deskripsi' => 'Peralatan radiologi digital seperti MRI, CT Scan, USG, dan X-Ray.', 'icon' => 'bi-radioactive'],
            ['nama' => 'Farmasi Lengkap', 'deskripsi' => 'Unit farmasi yang menyediakan obat-obatan lengkap dan berkualitas.', 'icon' => 'bi-capsule'],
            ['nama' => 'Ambulans 24 Jam', 'deskripsi' => 'Layanan ambulans 24 jam yang siap menjemput dan mengantar pasien.', 'icon' => 'bi-truck'],
            ['nama' => 'Lingkungan Asri', 'deskripsi' => 'Lingkungan rumah sakit yang sejuk, asri, dan mendukung proses penyembuhan.', 'icon' => 'bi-tree'],
        ];

        foreach ($data as $item) {
            Fasilitas::create($item);
        }
    }
}
