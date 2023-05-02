<?php

namespace Database\Seeders;

use App\Models\JabatanPegawai;
use App\Models\Kontrak;
use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontrakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawai = Pegawai::first();
        $jabatan_pegawai = JabatanPegawai::first();

        Kontrak::create([
            'pegawai_id' => $pegawai->id,
            'jabatan_pegawai_id' => $jabatan_pegawai->id,
            'tanggal_mulai' => '2023-01-01',
            'tanggal_selesai' => '2023-12-31',
            'jenis_kontrak' => 'fulltime',
            'gaji' => 15000000,
        ]);
    }
}
