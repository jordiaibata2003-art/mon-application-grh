<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paie;

class PaieSeeder extends Seeder
{
    public function run()
    {
        $paies = [
            ['employe_id' => 1, 'mois' => 5, 'annee' => 2025, 'salaireBase' => 1500000, 'prime' => 100000, 'heuresSupplementaires' => 50000, 'retenues' => 150000, 'salaireNet' => 1500000],
            ['employe_id' => 2, 'mois' => 5, 'annee' => 2025, 'salaireBase' => 1200000, 'prime' => 50000, 'heuresSupplementaires' => 30000, 'retenues' => 120000, 'salaireNet' => 1160000],
            ['employe_id' => 3, 'mois' => 5, 'annee' => 2025, 'salaireBase' => 800000, 'prime' => 0, 'heuresSupplementaires' => 0, 'retenues' => 80000, 'salaireNet' => 720000],
            ['employe_id' => 4, 'mois' => 5, 'annee' => 2025, 'salaireBase' => 600000, 'prime' => 20000, 'heuresSupplementaires' => 10000, 'retenues' => 60000, 'salaireNet' => 570000],
            ['employe_id' => 5, 'mois' => 5, 'annee' => 2025, 'salaireBase' => 550000, 'prime' => 15000, 'heuresSupplementaires' => 5000, 'retenues' => 55000, 'salaireNet' => 515000],
        ];

        foreach ($paies as $paie) {
            Paie::create($paie);
        }
    }
}