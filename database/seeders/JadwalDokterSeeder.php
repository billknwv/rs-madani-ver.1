<?php

namespace Database\Seeders;

use App\Models\JadwalDokter;
use Illuminate\Database\Seeder;

class JadwalDokterSeeder extends Seeder
{
    public function run(): void
    {
        $jadwal = [
            // Dr. Gina Medika - Penyakit Dalam
            ['dokter_id' => 1, 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 1, 'hari' => 'Rabu', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 1, 'hari' => 'Kamis', 'jam_mulai' => '08:00', 'jam_selesai' => '12:00'],
            // Dr. Stevany R. Wulan - Anak
            ['dokter_id' => 2, 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 2, 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 2, 'hari' => 'Kamis', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 2, 'hari' => 'Jumat', 'jam_mulai' => '08:00', 'jam_selesai' => '12:00'],
            // Dr. Praise Jeremiah - Jantung
            ['dokter_id' => 3, 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 3, 'hari' => 'Kamis', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 3, 'hari' => 'Jumat', 'jam_mulai' => '08:00', 'jam_selesai' => '12:00'],
            // Dr. Nyoman Sumiati - Jiwa
            ['dokter_id' => 4, 'hari' => 'Senin', 'jam_mulai' => '09:00', 'jam_selesai' => '15:00'],
            ['dokter_id' => 4, 'hari' => 'Rabu', 'jam_mulai' => '09:00', 'jam_selesai' => '15:00'],
            ['dokter_id' => 4, 'hari' => 'Jumat', 'jam_mulai' => '09:00', 'jam_selesai' => '14:00'],
            // Dr. Neni Khristina - Mata
            ['dokter_id' => 5, 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 5, 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 5, 'hari' => 'Rabu', 'jam_mulai' => '08:00', 'jam_selesai' => '12:00'],
            // Dr. Sasono Udijanto - Kandungan
            ['dokter_id' => 6, 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 6, 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 6, 'hari' => 'Rabu', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 6, 'hari' => 'Kamis', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            // Dr. Alfrida M. Wara - Saraf
            ['dokter_id' => 7, 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 7, 'hari' => 'Kamis', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 7, 'hari' => 'Sabtu', 'jam_mulai' => '08:00', 'jam_selesai' => '12:00'],
            // Drg. Herman Susilo - Gigi
            ['dokter_id' => 8, 'hari' => 'Senin', 'jam_mulai' => '09:00', 'jam_selesai' => '15:00'],
            ['dokter_id' => 8, 'hari' => 'Rabu', 'jam_mulai' => '09:00', 'jam_selesai' => '15:00'],
            ['dokter_id' => 8, 'hari' => 'Jumat', 'jam_mulai' => '09:00', 'jam_selesai' => '14:00'],
            // Dr. Muhammad Faisal - THT
            ['dokter_id' => 9, 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 9, 'hari' => 'Kamis', 'jam_mulai' => '08:00', 'jam_selesai' => '14:00'],
            // Dr. Ahmad Zulkifli - Umum
            ['dokter_id' => 10, 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' => '16:00'],
            ['dokter_id' => 10, 'hari' => 'Selasa', 'jam_mulai' => '08:00', 'jam_selesai' => '16:00'],
            ['dokter_id' => 10, 'hari' => 'Rabu', 'jam_mulai' => '08:00', 'jam_selesai' => '16:00'],
            ['dokter_id' => 10, 'hari' => 'Kamis', 'jam_mulai' => '08:00', 'jam_selesai' => '16:00'],
            ['dokter_id' => 10, 'hari' => 'Jumat', 'jam_mulai' => '08:00', 'jam_selesai' => '16:30'],
        ];

        foreach ($jadwal as $item) {
            JadwalDokter::create($item);
        }
    }
}
