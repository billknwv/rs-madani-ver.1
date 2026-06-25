<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Hasan Basri',
                'isi' => 'Pelayanan di RSUD Madani Palu sangat memuaskan. Dokter dan perawatnya ramah dan profesional. Ruang rawat inapnya nyaman dan bersih.',
                'profesi' => 'Wiraswasta',
                'rating' => 5,
            ],
            [
                'nama' => 'Ratna Dewi',
                'isi' => 'Terima kasih RSUD Madani Palu, proses persalinan saya berjalan lancar. Dokter kandungannya sangat berpengalaman dan supportif. Suasana rumah sakit yang asri membuat nyaman.',
                'profesi' => 'Guru',
                'rating' => 5,
            ],
            [
                'nama' => 'Ahmad Fauzi',
                'isi' => 'IGD RSUD Madani sangat cepat tanggap saat saya datang dalam kondisi darurat. Pelayanan 24 jam sangat membantu masyarakat Palu.',
                'profesi' => 'Karyawan Swasta',
                'rating' => 4,
            ],
            [
                'nama' => 'Dewi Sartika',
                'isi' => 'Fasilitas medical check up lengkap, hasilnya akurat dan dijelaskan dengan detail oleh dokternya. Sangat recommended untuk yang peduli kesehatan.',
                'profesi' => 'Pengusaha',
                'rating' => 5,
            ],
            [
                'nama' => 'Hendra Gunawan',
                'isi' => 'Anak saya dirawat di klinik anak, pelayanan dokter spesialis anaknya sangat baik. Perawat juga perhatian pada pasien kecil.',
                'profesi' => 'Dosen',
                'rating' => 4,
            ],
        ];

        foreach ($data as $item) {
            Testimoni::create($item);
        }
    }
}
