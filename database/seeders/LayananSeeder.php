<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'IGD 24 Jam',
                'slug' => 'igd',
                'deskripsi' => 'Pelayanan gawat darurat 24 jam non-stop dengan tim dokter, perawat profesional, dan ambulans yang siap melayani setiap saat.',
                'icon' => 'bi-ambulance',
                'konten' => '<p>Instalasi Gawat Darurat (IGD) RSUD Madani Palu siap melayani Anda 24 jam sehari, 7 hari seminggu. Dilengkapi dengan peralatan medis modern dan tim tenaga kesehatan yang berpengalaman.</p><ul><li>Pelayanan 24 Jam Non-Stop</li><li>Tim Dokter Spesialis Siaga</li><li>Peralatan Medis Modern</li><li>Ambulans 24 Jam</li><li>Respon Cepat dan Tepat</li></ul>',
            ],
            [
                'nama' => 'Rawat Jalan',
                'slug' => 'rawat-jalan',
                'deskripsi' => 'Pelayanan rawat jalan dengan berbagai poliklinik spesialis yang dapat diakses dengan mudah, cepat, dan nyaman.',
                'icon' => 'bi-person-walking',
                'konten' => '<p>Poliklinik RSUD Madani Palu menyediakan layanan konsultasi dengan dokter spesialis berbagai bidang. Pendaftaran dapat dilakukan secara online melalui e-Pasien maupun datang langsung.</p><p><strong>Jam Pelayanan Poliklinik:</strong></p><ul><li>Senin - Kamis: 07:30 - 16:00</li><li>Jumat: 07:30 - 16:30</li></ul>',
            ],
            [
                'nama' => 'Rawat Inap',
                'slug' => 'rawat-inap',
                'deskripsi' => 'Fasilitas rawat inap dengan kamar nyaman, perawatan maksimal, dan didukung tenaga medis profesional untuk kesembuhan pasien.',
                'icon' => 'bi-house-heart',
                'konten' => '<p>Ruang rawat inap RSUD Madani Palu dirancang untuk memberikan kenyamanan maksimal bagi pasien. Tersedia berbagai kelas kamar yang dapat disesuaikan dengan kebutuhan pasien.</p><ul><li>Ruang Perawatan Kelas 1, 2, 3</li><li>Kamar VIP dan VVIP</li><li>Ruangan Ber-AC</li><li>Makanan Pasien Bergizi</li><li>Perawatan 24 Jam oleh Perawat Profesional</li></ul>',
            ],
            [
                'nama' => 'ICU',
                'slug' => 'icu',
                'deskripsi' => 'Unit perawatan intensif untuk pasien kritis dengan pengawasan ketat 24 jam dan peralatan medis canggih.',
                'icon' => 'bi-heart-pulse',
                'konten' => '<p>Intensive Care Unit (ICU) RSUD Madani Palu dilengkapi dengan ventilator modern, monitor jantung, dan peralatan life support lainnya. Ditangani oleh tim dokter intensivis dan perawat ICU yang berpengalaman.</p>',
            ],
            [
                'nama' => 'Radiologi',
                'slug' => 'radiologi',
                'deskripsi' => 'Pelayanan radiologi dengan peralatan pencitraan modern untuk diagnosis yang akurat dan tepat.',
                'icon' => 'bi-radioactive',
                'konten' => '<p>Unit Radiologi RSUD Madani Palu dilengkapi dengan peralatan pencitraan diagnostik modern untuk mendukung diagnosis yang tepat dan akurat.</p><ul><li>X-Ray Digital</li><li>USG (Ultrasonografi)</li><li>CT Scan</li><li>MRI</li></ul>',
            ],
            [
                'nama' => 'Laboratorium',
                'slug' => 'laboratorium',
                'deskripsi' => 'Pelayanan pemeriksaan laboratorium lengkap dengan hasil yang akurat, cepat, dan terpercaya.',
                'icon' => 'bi-microscope',
                'konten' => '<p>Laboratorium RSUD Madani Palu menyediakan berbagai pemeriksaan diagnostik dengan teknologi mutakhir dan standar kualitas terkini.</p><ul><li>Pemeriksaan Darah Lengkap</li><li>Pemeriksaan Urine</li><li>Pemeriksaan Kimia Klinik</li><li>Pemeriksaan Mikrobiologi</li><li>Pemeriksaan Patologi Anatomi</li></ul>',
            ],
            [
                'nama' => 'Farmasi',
                'slug' => 'farmasi',
                'deskripsi' => 'Apotek rumah sakit yang menyediakan obat-obatan lengkap, berkualitas, dan pelayanan resep yang cepat.',
                'icon' => 'bi-capsule',
                'konten' => '<p>Unit Farmasi RSUD Madani Palu menyediakan obat-obatan berkualitas dengan harga terjangkau. Pelayanan resep cepat dan akurat oleh apoteker profesional.</p>',
            ],
            [
                'nama' => 'Klinik Jantung',
                'slug' => 'klinik-jantung',
                'deskripsi' => 'Pelayanan khusus untuk diagnosis, pengobatan, dan rehabilitasi penyakit jantung dan pembuluh darah.',
                'icon' => 'bi-activity',
                'konten' => '<p>Klinik Jantung RSUD Madani Palu menyediakan layanan lengkap untuk penanganan penyakit kardiovaskular. Ditangani oleh dokter Spesialis Jantung dan Pembuluh Darah (Sp.JP).</p>',
            ],
            [
                'nama' => 'Klinik Anak',
                'slug' => 'klinik-anak',
                'deskripsi' => 'Pelayanan kesehatan khusus anak-anak dengan dokter spesialis anak yang ramah dan berpengalaman.',
                'icon' => 'bi-emoji-smile',
                'konten' => '<p>Klinik Anak RSUD Madani Palu memberikan pelayanan kesehatan menyeluruh untuk anak, mulai dari imunisasi, pemeriksaan tumbuh kembang, hingga penanganan penyakit anak.</p>',
            ],
            [
                'nama' => 'Klinik Gigi',
                'slug' => 'klinik-gigi',
                'deskripsi' => 'Pelayanan kesehatan gigi dan mulut dengan penanganan profesional dan alat-alat modern.',
                'icon' => 'bi-teeth',
                'konten' => '<p>Klinik Gigi RSUD Madani Palu melayani pemeriksaan, perawatan, dan tindakan bedah mulut dengan tenaga dokter gigi spesialis yang berpengalaman.</p>',
            ],
            [
                'nama' => 'Klinik Jiwa',
                'slug' => 'klinik-jiwa',
                'deskripsi' => 'Pelayanan konsultasi dan penanganan gangguan jiwa serta kesehatan mental oleh psikiater berpengalaman.',
                'icon' => 'bi-brain',
                'konten' => '<p>Klinik Jiwa RSUD Madani Palu menyediakan layanan konsultasi dan terapi untuk berbagai gangguan mental dan emosional. Termasuk layanan rehabilitasi narkoba dan tumbuh kembang jiwa anak dan remaja.</p>',
            ],
            [
                'nama' => 'Klinik Mata',
                'slug' => 'klinik-mata',
                'deskripsi' => 'Pelayanan kesehatan mata lengkap dengan peralatan diagnostik modern untuk penanganan gangguan penglihatan.',
                'icon' => 'bi-eye',
                'konten' => '<p>Klinik Mata RSUD Madani Palu melayani pemeriksaan dan penanganan berbagai gangguan mata seperti katarak, glaukoma, dan gangguan refraksi.</p>',
            ],
            [
                'nama' => 'Klinik THT',
                'slug' => 'klinik-tht',
                'deskripsi' => 'Pelayanan kesehatan untuk telinga, hidung, tenggorokan, kepala, dan leher.',
                'icon' => 'bi-ear',
                'konten' => '<p>Klinik THT RSUD Madani Palu menangani berbagai keluhan terkait telinga, hidung, tenggorokan, serta bedah kepala dan leher.</p>',
            ],
            [
                'nama' => 'Klinik Saraf',
                'slug' => 'klinik-saraf',
                'deskripsi' => 'Pelayanan khusus untuk diagnosis dan penanganan gangguan sistem saraf dan neurologi.',
                'icon' => 'bi-nervous',
                'konten' => '<p>Klinik Saraf RSUD Madani Palu merupakan layanan unggulan yang menangani berbagai gangguan neurologis termasuk stroke, epilepsi, dan nyeri kepala.</p>',
            ],
            [
                'nama' => 'Ambulans',
                'slug' => 'ambulans',
                'deskripsi' => 'Layanan ambulans 24 jam yang siap menjemput dan mengantar pasien dengan cepat, aman, dan nyaman.',
                'icon' => 'bi-truck',
                'konten' => '<p>Layanan Ambulans RSUD Madani Palu beroperasi 24 jam untuk melayani pengantaran dan penjemputan pasien dengan sopir yang berpengalaman dan peralatan medis darurat lengkap.</p>',
            ],
        ];

        foreach ($data as $item) {
            Layanan::create($item);
        }
    }
}
