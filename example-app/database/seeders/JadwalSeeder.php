<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        // Hari disimpan sebagai angka: 1=Senin, 2=Selasa, 3=Rabu, 4=Kamis, 5=Jumat, 6=Sabtu, 7=Minggu
        $jadwals = [
            // Pemrograman Web
            ['subject_name' => 'Pemrograman Web', 'hari' => 1, 'jam_mulai' => '08:00', 'jam_selesai' => '10:30', 'ruangan' => 'Lab Komputer 1'],
            ['subject_name' => 'Pemrograman Web', 'hari' => 4, 'jam_mulai' => '13:00', 'jam_selesai' => '15:30', 'ruangan' => 'Lab Komputer 2'],

            // Database
            ['subject_name' => 'Database', 'hari' => 2, 'jam_mulai' => '09:00', 'jam_selesai' => '11:30', 'ruangan' => 'Ruang 301'],
            ['subject_name' => 'Database', 'hari' => 5, 'jam_mulai' => '08:00', 'jam_selesai' => '10:30', 'ruangan' => 'Lab Komputer 3'],

            // Algoritma
            ['subject_name' => 'Algoritma', 'hari' => 3, 'jam_mulai' => '07:30', 'jam_selesai' => '09:30', 'ruangan' => 'Ruang 202'],

            // Jaringan Komputer
            ['subject_name' => 'Jaringan Komputer', 'hari' => 2, 'jam_mulai' => '13:00', 'jam_selesai' => '15:30', 'ruangan' => 'Lab Jaringan'],
            ['subject_name' => 'Jaringan Komputer', 'hari' => 4, 'jam_mulai' => '08:00', 'jam_selesai' => '10:30', 'ruangan' => 'Ruang 101'],

            // Sistem Operasi
            ['subject_name' => 'Sistem Operasi', 'hari' => 3, 'jam_mulai' => '13:00', 'jam_selesai' => '15:00', 'ruangan' => 'Lab Komputer 2'],
        ];

        foreach ($jadwals as $data) {
            $subject = Subject::where('name', $data['subject_name'])->first();

            if ($subject) {
                Jadwal::firstOrCreate(
                    [
                        'subject_id' => $subject->id,
                        'hari'       => $data['hari'],
                        'jam_mulai'  => $data['jam_mulai'],
                    ],
                    [
                        'jam_selesai' => $data['jam_selesai'],
                        'ruangan'     => $data['ruangan'],
                    ]
                );
            }
        }
    }
}
