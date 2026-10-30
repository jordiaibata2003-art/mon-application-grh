<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfilSeeder extends Seeder
{
    public function run()
    {
        $profils = [
            ['libelle' => 'Administrateur', 'description' => 'Accès total au système'],
            ['libelle' => 'Directeur Général', 'description' => 'Gestion et validation des opérations'],
            ['libelle' => 'Responsable de Campus', 'description' => 'Gestion pédagogique'],
            ['libelle' => 'Service Administratif', 'description' => 'Gestion RH et paie'],
            ['libelle' => 'Employé', 'description' => 'Accès restreint à son espace'],
        ];

        foreach ($profils as $profil) {
            Profil::create($profil);
        }
    }
}