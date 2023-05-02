<?php

namespace Database\Seeders;

use App\Models\JabatanPegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JabatanPegawai::create([
            'jabatan' => 'Manager',
        ]);

        JabatanPegawai::create([
            'jabatan' => 'HR',
        ]);
    }
}