<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kriteria::create([
            'kd_kriteria' => 'K1',
            'kriteria' => 'Nilai SKP',
            'nilai' => 0.3,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K2',
            'kriteria' => 'Orientasi Pelayanan',
            'nilai' => 0.05,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K3',
            'kriteria' => 'Komitmen',
            'nilai' => 0.1,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K4',
            'kriteria' => 'Disiplin',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K5',
            'kriteria' => 'Kerjasama',
            'nilai' => 0.1,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K6',
            'kriteria' => 'Kepemimpinan',
            'nilai' => 0.2,
        ]);
        Kriteria::create([
            'kd_kriteria' => 'K7',
            'kriteria' => 'Integritas',
            'nilai' => 0.05,
        ]);
    }
}
