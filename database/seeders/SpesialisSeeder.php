<?php

namespace Database\Seeders;

use App\Models\Spesialis;
use Illuminate\Database\Seeder;

class SpesialisSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Penyakit Dalam', 'deskripsi' => 'Pelayanan kesehatan untuk diagnosis dan penanganan penyakit dalam pada orang dewasa', 'icon' => 'bi-heart-pulse'],
            ['nama' => 'Anak', 'deskripsi' => 'Pelayanan kesehatan khusus anak-anak', 'icon' => 'bi-emoji-smile'],
            ['nama' => 'Jantung', 'deskripsi' => 'Pelayanan kesehatan jantung dan pembuluh darah', 'icon' => 'bi-activity'],
            ['nama' => 'Jiwa', 'deskripsi' => 'Pelayanan kesehatan jiwa dan konsultasi psikiatri', 'icon' => 'bi-brain'],
            ['nama' => 'Mata', 'deskripsi' => 'Pelayanan kesehatan mata', 'icon' => 'bi-eye'],
            ['nama' => 'Kandungan', 'deskripsi' => 'Pelayanan kesehatan ibu dan kandungan', 'icon' => 'bi-gender-female'],
            ['nama' => 'Saraf', 'deskripsi' => 'Pelayanan kesehatan sistem saraf dan neurologi', 'icon' => 'bi-nervous'],
            ['nama' => 'Gigi', 'deskripsi' => 'Pelayanan kesehatan gigi dan mulut', 'icon' => 'bi-teeth'],
            ['nama' => 'THT', 'deskripsi' => 'Pelayanan kesehatan telinga, hidung, dan tenggorokan', 'icon' => 'bi-ear'],
            ['nama' => 'Umum', 'deskripsi' => 'Pelayanan kesehatan umum untuk semua kalangan', 'icon' => 'bi-person-plus'],
        ];

        foreach ($data as $item) {
            Spesialis::create($item);
        }
    }
}
