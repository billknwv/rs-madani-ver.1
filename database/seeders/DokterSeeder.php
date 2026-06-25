<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'dr. Gina Medika P Sunusi, Sp.PD',
                'spesialis_id' => 1,
                'about' => 'Dokter spesialis penyakit dalam dengan pengalaman lebih dari 12 tahun. Lulusan Fakultas Kedokteran Universitas Hasanuddin. Berkomitmen memberikan pelayanan paripurna berbasis bukti ilmiah terkini.',
                'email' => 'gina.medika@rsudmadanipalu.com',
                'telepon' => '081234560001',
                'str' => 'STR.451.001',
                'pendidikan' => 'FK Universitas Hasanuddin',
            ],
            [
                'nama' => 'dr. Stevany R. Wulan, Sp.A',
                'spesialis_id' => 2,
                'about' => 'Dokter spesialis anak yang ramah dan berpengalaman. Lulusan FK Universitas Sam Ratulangi. Ahli dalam tumbuh kembang anak dan imunisasi.',
                'email' => 'stevany.wulan@rsudmadanipalu.com',
                'telepon' => '081234560002',
                'str' => 'STR.451.002',
                'pendidikan' => 'FK Universitas Sam Ratulangi',
            ],
            [
                'nama' => 'dr. Praise Jeremiah, Sp.JP',
                'spesialis_id' => 3,
                'about' => 'Dokter spesialis jantung yang berdedikasi tinggi. Lulusan FK Universitas Gadjah Mada. Ahli dalam penanganan penyakit kardiovaskular dan rehabilitasi jantung.',
                'email' => 'praise.jeremiah@rsudmadanipalu.com',
                'telepon' => '081234560003',
                'str' => 'STR.451.003',
                'pendidikan' => 'FK Universitas Gadjah Mada',
            ],
            [
                'nama' => 'dr. Nyoman Sumiati, Sp.KJ',
                'spesialis_id' => 4,
                'about' => 'Dokter spesialis jiwa yang berpengalaman dalam penanganan gangguan mental dan konseling. Lulusan FK Universitas Udayana.',
                'email' => 'nyoman.sumiati@rsudmadanipalu.com',
                'telepon' => '081234560004',
                'str' => 'STR.451.004',
                'pendidikan' => 'FK Universitas Udayana',
            ],
            [
                'nama' => 'dr. Neni Khristina Parimo, Sp.M',
                'spesialis_id' => 5,
                'about' => 'Dokter spesialis mata yang ahli dalam penanganan katarak, glaukoma, dan gangguan refraksi. Lulusan FK Universitas Sam Ratulangi.',
                'email' => 'neni.parimo@rsudmadanipalu.com',
                'telepon' => '081234560005',
                'str' => 'STR.451.005',
                'pendidikan' => 'FK Universitas Sam Ratulangi',
            ],
            [
                'nama' => 'dr. Sasono Udijanto, Sp.OG',
                'spesialis_id' => 6,
                'about' => 'Dokter spesialis kandungan dengan pengalaman luas dalam penanganan kehamilan risiko tinggi, persalinan, dan kesehatan reproduksi wanita.',
                'email' => 'sasono.udijanto@rsudmadanipalu.com',
                'telepon' => '081234560006',
                'str' => 'STR.451.006',
                'pendidikan' => 'FK Universitas Airlangga',
            ],
            [
                'nama' => 'dr. Alfrida M. Wara, Sp.S',
                'spesialis_id' => 7,
                'about' => 'Dokter spesialis saraf dengan keahlian dalam penanganan stroke, epilepsi, migrain, dan gangguan neurologis lainnya.',
                'email' => 'alfrida.wara@rsudmadanipalu.com',
                'telepon' => '081234560007',
                'str' => 'STR.451.007',
                'pendidikan' => 'FK Universitas Hasanuddin',
            ],
            [
                'nama' => 'drg. Herman Susilo, Sp.BM',
                'spesialis_id' => 8,
                'about' => 'Dokter gigi spesialis bedah mulut dengan pelayanan profesional dan ramah. Lulusan FK Universitas Hasanuddin.',
                'email' => 'herman.susilo@rsudmadanipalu.com',
                'telepon' => '081234560008',
                'str' => 'STR.451.008',
                'pendidikan' => 'FK Universitas Hasanuddin',
            ],
            [
                'nama' => 'dr. Muhammad Faisal, Sp.THT-KL',
                'spesialis_id' => 9,
                'about' => 'Dokter spesialis THT yang ahli dalam penanganan gangguan telinga, hidung, tenggorokan, kepala dan leher.',
                'email' => 'muhammad.faisal@rsudmadanipalu.com',
                'telepon' => '081234560009',
                'str' => 'STR.451.009',
                'pendidikan' => 'FK Universitas Diponegoro',
            ],
            [
                'nama' => 'dr. Ahmad Zulkifli, Sp.B',
                'spesialis_id' => 10,
                'about' => 'Dokter umum yang siap melayani konsultasi kesehatan dan penanganan medis dasar. Lulusan FK Universitas Tadulako.',
                'email' => 'ahmad.zulkifli@rsudmadanipalu.com',
                'telepon' => '081234560010',
                'str' => 'STR.451.010',
                'pendidikan' => 'FK Universitas Tadulako',
            ],
        ];

        foreach ($data as $item) {
            Dokter::create($item);
        }
    }
}
