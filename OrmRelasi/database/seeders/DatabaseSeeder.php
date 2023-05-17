<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Mahasiswa::factory(20)->create();
        // $this->call([
        //     PostSeeder::class,
        // ]);
        // $this->call([UserSeeder::class,]);
        // Post::factory(100)->create();

        // langsung seeding userbaru, kelas seeder
      $this->call([
        UserBaruSeeder::class,
        kelasSeeder::class,
        MahasiswaSeeder::class,
        UpdateMahasiswaSeeder::class,
      ]);
    }
}
