<?php

namespace Database\Seeders;

use App\Models\Profil;
use App\Models\Utilisateur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccesSeeder extends Seeder
{
    public function run(): void
    {
        $defs = [
            'admin'    => 'Accès complet et gestion des utilisateurs',
            'rh'       => 'Gestion des employés, contrats, congés, paies et présences',
            'manager'  => 'Consultation et validation des congés',
            'employe'  => 'Accès personnel',
        ];
        $profils = [];
        foreach ($defs as $libelle => $desc) {
            $profils[$libelle] = Profil::firstOrCreate(['libelle' => $libelle], ['description' => $desc]);
        }

        $email = getenv('ADMIN_EMAIL');
        $pwd   = getenv('ADMIN_PASSWORD');
        if ($email && $pwd) {
            $u = Utilisateur::firstOrNew(['email' => $email]);
            $u->nomUtilisateur = $u->nomUtilisateur ?: 'Administrateur';
            $u->motDePasse = Hash::make($pwd);
            $u->statut = 'actif';
            $u->profil_id = $profils['admin']->id;
            $u->save();
            $this->command->info("Compte administrateur prêt : $email");
        }
    }
}