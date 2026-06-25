<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Tips Menjaga Kesehatan Jantung di Usia Muda',
                'slug' => 'tips-menjaga-kesehatan-jantung',
                'ringkasan' => 'Pelajari cara menjaga kesehatan jantung sejak dini dengan gaya hidup sehat dan pola makan yang tepat.',
                'konten' => 'Kesehatan jantung merupakan hal yang sangat penting untuk diperhatikan sejak usia muda. Banyak orang mengira bahwa penyakit jantung hanya menyerang lansia, namun faktanya gaya hidup tidak sehat pada usia muda dapat meningkatkan risiko penyakit jantung di kemudian hari. Beberapa tips yang dapat dilakukan antara lain: rutin berolahraga minimal 30 menit sehari, mengonsumsi makanan sehat rendah lemak jenuh, menghindari rokok dan alkohol, serta melakukan pemeriksaan kesehatan secara rutin.',
                'kategori' => 'Kesehatan',
                'penulis' => 'Tim Medis RSUD Madani Palu',
                'tanggal_publish' => '2026-05-15',
            ],
            [
                'judul' => 'Pentingnya Vaksinasi untuk Anak',
                'slug' => 'pentingnya-vaksinasi-untuk-anak',
                'ringkasan' => 'Vaksinasi adalah langkah penting dalam melindungi anak dari berbagai penyakit berbahaya.',
                'konten' => 'Vaksinasi merupakan salah satu cara paling efektif untuk melindungi anak dari berbagai penyakit menular berbahaya. Pemberian vaksin pada anak sesuai jadwal yang ditentukan sangat penting untuk membentuk kekebalan tubuh yang optimal. RSUD Madani Palu menyediakan layanan vaksinasi lengkap untuk anak mulai dari imunisasi dasar hingga lanjutan.',
                'kategori' => 'Anak',
                'penulis' => 'dr. Stevany R. Wulan, Sp.A',
                'tanggal_publish' => '2026-05-10',
            ],
            [
                'judul' => 'Mengenal Gejala dan Penanganan Stroke',
                'slug' => 'mengenal-gejala-dan-penanganan-stroke',
                'ringkasan' => 'Kenali gejala stroke sejak dini dan langkah penanganan yang tepat untuk menyelamatkan nyawa.',
                'konten' => 'Stroke adalah kondisi medis darurat yang terjadi ketika suplai darah ke bagian otak terganggu. Mengenali gejala stroke sejak dini sangat penting untuk penanganan yang cepat dan tepat. Gejala stroke dapat diingat dengan kata FAST: Face (wajah tidak simetris), Arm (lengan lemah), Speech (bicara tidak jelas), Time (waktu adalah otak). Segera hubungi IGD RSUD Madani Palu jika mengalami gejala tersebut.',
                'kategori' => 'Saraf',
                'penulis' => 'dr. Alfrida M. Wara, Sp.S',
                'tanggal_publish' => '2026-04-28',
            ],
            [
                'judul' => 'Panduan Nutrisi untuk Ibu Hamil',
                'slug' => 'panduan-nutrisi-untuk-ibu-hamil',
                'ringkasan' => 'Nutrisi yang tepat selama kehamilan sangat penting untuk kesehatan ibu dan janin.',
                'konten' => 'Masa kehamilan adalah periode krusial yang membutuhkan perhatian khusus terhadap asupan nutrisi. Ibu hamil perlu mengonsumsi makanan bergizi seimbang dengan tambahan asam folat, zat besi, kalsium, dan omega-3. Konsultasikan dengan dokter kandungan di RSUD Madani Palu untuk mendapatkan panduan nutrisi yang sesuai dengan kondisi kehamilan Anda.',
                'kategori' => 'Kandungan',
                'penulis' => 'dr. Sasono Udijanto, Sp.OG',
                'tanggal_publish' => '2026-04-15',
            ],
            [
                'judul' => 'Cara Merawat Kesehatan Mata di Era Digital',
                'slug' => 'cara-merawat-kesehatan-mata',
                'ringkasan' => 'Tips melindungi kesehatan mata dari dampak negatif paparan layar digital yang berlebihan.',
                'konten' => 'Penggunaan perangkat digital dalam kehidupan sehari-hari dapat menyebabkan kelelahan mata digital atau digital eye strain. Gejalanya meliputi mata kering, penglihatan kabur, sakit kepala, dan nyeri leher. Untuk mengurangi risikonya, terapkan aturan 20-20-20: setiap 20 menit, lihat objek sejauh 20 kaki selama 20 detik.',
                'kategori' => 'Mata',
                'penulis' => 'dr. Neni Khristina Parimo, Sp.M',
                'tanggal_publish' => '2026-04-01',
            ],
            [
                'judul' => 'Manfaat Medical Check Up Rutin untuk Deteksi Dini Penyakit',
                'slug' => 'manfaat-medical-check-up-rutin',
                'ringkasan' => 'Pemeriksaan kesehatan rutin dapat mendeteksi penyakit sejak dini dan meningkatkan kualitas hidup.',
                'konten' => 'Medical check up rutin sangat penting untuk mendeteksi penyakit sejak dini sebelum gejala muncul. Dengan deteksi dini, penanganan dapat dilakukan lebih cepat sehingga meningkatkan peluang kesembuhan. RSUD Madani Palu menyediakan berbagai paket medical check up yang dapat disesuaikan dengan usia, jenis kelamin, dan kebutuhan kesehatan Anda.',
                'kategori' => 'Kesehatan',
                'penulis' => 'Tim Medis RSUD Madani Palu',
                'tanggal_publish' => '2026-03-20',
            ],
            [
                'judul' => 'Mengatasi Insomnia dengan Terapi Non-Obat',
                'slug' => 'mengatasi-insomnia-dengan-terapi',
                'ringkasan' => 'Solusi alami mengatasi susah tidur tanpa harus bergantung pada obat-obatan.',
                'konten' => 'Insomnia atau susah tidur dapat mengganggu kualitas hidup dan produktivitas. Sebelum menggunakan obat tidur, ada beberapa terapi non-obat yang bisa dicoba seperti sleep hygiene, relaksasi progresif, cognitive behavioral therapy, dan pengaturan jadwal tidur yang konsisten.',
                'kategori' => 'Kesehatan',
                'penulis' => 'Tim Medis RSUD Madani Palu',
                'tanggal_publish' => '2026-03-05',
            ],
            [
                'judul' => 'Sinergi dan Keceriaan Mewarnai Puncak Perayaan HUT ke-41 RSUD Madani Palu',
                'slug' => 'hut-ke-41-rsud-madani-palu',
                'ringkasan' => 'Kemeriahan menyelimuti kompleks RSUD Madani Palu pada perayaan hari ulang tahun yang ke-41.',
                'konten' => 'PALU - Kemeriahan menyelimuti kompleks RSUD Madani Palu pada Sabtu, 18 April 2026. Meski hari ulang tahun ke-41, semangat kebersamaan dan kekeluargaan sangat terasa dalam setiap rangkaian acara yang digelar. Berbagai kegiatan perlombaan, senam bersama, dan pemotongan tumpeng menjadi puncak acara perayaan HUT RSUD Madani Palu.',
                'kategori' => 'Berita',
                'penulis' => 'Tim Humas RSUD Madani Palu',
                'tanggal_publish' => '2026-04-21',
            ],
        ];

        foreach ($data as $item) {
            Artikel::create($item);
        }
    }
}
