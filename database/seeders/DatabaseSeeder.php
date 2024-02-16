<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Student::factory(20)->create();

        //  \App\Models\User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        // ]);

        Kelas::create([
            'nama' => '11 PPLG 1'
        ]);

        Kelas::create([
            'nama' => '11 PPLG 2'
        ]);

        Kelas::create([
            'nama' => '11 ANIMASI 1'
        ]);

        Kelas::create([
            'nama' => '11 ANIMASI 2'
        ]);

        Kelas::create([
            'nama' => '11 ANIMASI 3'
        ]);

        Kelas::create([
            'nama' => '11 ANIMASI 4'
        ]);

        Kelas::create([
            'nama' => '11 ANIMASI 5'
        ]);

        Kelas::create([
            'nama' => '11 DKV 1'
        ]);

        Kelas::create([
            'nama' => '11 DKV 2'
        ]);

        Kelas::create([
            'nama' => '11 DKV 3'
        ]);
    }
}
