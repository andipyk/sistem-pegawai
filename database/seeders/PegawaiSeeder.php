<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Budi',
            'email' => 'budi@example.com',
        ]);

        Pegawai::create([
            'nama' => 'Susi',
            'email' => 'susi@example.com',
        ]);
    }
}
