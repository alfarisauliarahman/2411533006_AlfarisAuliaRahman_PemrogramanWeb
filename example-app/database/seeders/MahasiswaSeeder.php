<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim' => '2411533006',
            'nama' => 'Alfaris Aulia Rahman',
            'jurusan' => 'Informatika',
            'universitas' => 'Universitas Andalas',
        ]);
    }
}
