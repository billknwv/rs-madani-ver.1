<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SpesialisSeeder::class,
            DokterSeeder::class,
            JadwalDokterSeeder::class,
            LayananSeeder::class,
            FasilitasSeeder::class,
            ArtikelSeeder::class,
            TestimoniSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
