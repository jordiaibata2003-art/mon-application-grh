<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contrat;

class ContratSeeder extends Seeder
{
    public function run()
    {
        $contrats = [
            ['employe_id' => 1, 'typeContrat' => 'CDI', 'dateDebut' => '2015-09-01', 'salaire' => 1500000, 'statut' => 'actif'],
            ['employe_id' => 2, 'typeContrat' => 'CDI', 'dateDebut' => '2016-01-15', 'salaire' => 1200000, 'statut' => 'actif'],
            ['employe_id' => 3, 'typeContrat' => 'CDI', 'dateDebut' => '2017-03-10', 'salaire' => 800000, 'statut' => 'actif'],
            ['employe_id' => 4, 'typeContrat' => 'CDI', 'dateDebut' => '2020-01-15', 'salaire' => 600000, 'statut' => 'actif'],
            ['employe_id' => 5, 'typeContrat' => 'CDI', 'dateDebut' => '2020-06-01', 'salaire' => 550000, 'statut' => 'actif'],
            ['employe_id' => 6, 'typeContrat' => 'CDI', 'dateDebut' => '2021-09-01', 'salaire' => 450000, 'statut' => 'actif'],
            ['employe_id' => 7, 'typeContrat' => 'CDI', 'dateDebut' => '2019-11-01', 'salaire' => 350000, 'statut' => 'actif'],
            ['employe_id' => 8, 'typeContrat' => 'CDI', 'dateDebut' => '2020-02-15', 'salaire' => 350000, 'statut' => 'actif'],
        ];

        foreach ($contrats as $contrat) {
            Contrat::create($contrat);
        }
    }
}