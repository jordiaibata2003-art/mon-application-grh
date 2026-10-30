<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conge;

class CongeSeeder extends Seeder
{
    public function run()
    {
        $conges = [
            ['employe_id' => 4, 'type' => 'annuel', 'dateDebut' => '2025-06-01', 'dateFin' => '2025-06-05', 'statut' => 'valide'],
            ['employe_id' => 5, 'type' => 'maladie', 'dateDebut' => '2025-06-10', 'dateFin' => '2025-06-12', 'statut' => 'en_attente'],
            ['employe_id' => 6, 'type' => 'annuel', 'dateDebut' => '2025-07-01', 'dateFin' => '2025-07-10', 'statut' => 'valide'],
            ['employe_id' => 7, 'type' => 'exceptionnel', 'dateDebut' => '2025-06-15', 'dateFin' => '2025-06-15', 'statut' => 'refuse'],
        ];

        foreach ($conges as $conge) {
            Conge::create($conge);
        }
    }
}