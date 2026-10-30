<?php

namespace Database\Seeders;

use App\Models\Utilisateur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    public function run(): void
    {
        Utilisateur::create([
            'nomUtilisateur' => 'admin',
            'email' => 'admin@isisuptech.sn',
            'motDePasse' => Hash::make('password123'),
            'statut' => 'actif',
            'profil_id' => 1,
        ]);

        Utilisateur::create([
            'nomUtilisateur' => 'rh',
            'email' => 'rh@isisuptech.sn',
            'motDePasse' => Hash::make('password123'),
            'statut' => 'actif',
            'profil_id' => 2,
        ]);
    }
}