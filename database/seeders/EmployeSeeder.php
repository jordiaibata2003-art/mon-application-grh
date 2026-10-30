<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employe;

class EmployeSeeder extends Seeder
{
    public function run()
    {
        $employes = [
            [
                'matricule' => 'EMP001',
                'nom' => 'SAMBE',
                'prenom' => 'Thierno Birahime',
                'email' => 'sambe.tb@isisuptech.sn',
                'dateEmbauche' => '2015-09-01',
                'poste' => 'Directeur Général',
                'departement' => 'Direction',
                'actif' => true,
            ],
            [
                'matricule' => 'EMP002',
                'nom' => 'SAMBE',
                'prenom' => 'Serigne Modou Kara',
                'email' => 'sambe.smk@isisuptech.sn',
                'dateEmbauche' => '2016-01-15',
                'poste' => 'Responsable de Campus',
                'departement' => 'Pédagogie',
                'actif' => true,
            ],
            [
                'matricule' => 'EMP003',
                'nom' => 'TALL',
                'prenom' => 'Mbene',
                'email' => 'tall.mbene@isisuptech.sn',
                'dateEmbauche' => '2017-03-10',
                'poste' => 'CIAQ',
                'departement' => 'Pédagogie',
                'actif' => true,
            ],
            [
                'matricule' => 'EMP004',
                'nom' => 'OUMOUL',
                'prenom' => 'Amratoul',
                'email' => 'oumoul.a@isisuptech.sn',
                'dateEmbauche' => '2020-01-15',
                'poste' => 'Service Administratif',
                'departement' => 'Administratif',
                'actif' => true,
            ],
            [
                'matricule' => 'EMP005',
                'nom' => 'GAYE',
                'prenom' => 'Khayril',
                'email' => 'gaye.k@isisuptech.sn',
                'dateEmbauche' => '2020-06-01',
                'poste' => 'Comptable',
                'departement' => 'Administratif',
                'actif' => true,
            ],
            [
                'matricule' => 'EMP006',
                'nom' => 'TOUNKARA',
                'prenom' => 'Fatoumata Binetou',
                'email' => 'tounkara.fb@isisuptech.sn',
                'dateEmbauche' => '2021-09-01',
                'poste' => 'Service Scolarité',
                'departement' => 'Scolarité',
                'actif' => true,
            ],
            [
                'matricule' => 'EMP007',
                'nom' => 'NDOUR',
                'prenom' => 'Samba',
                'email' => 'ndour.s@isisuptech.sn',
                'dateEmbauche' => '2019-11-01',
                'poste' => 'Maintenance',
                'departement' => 'Technique',
                'actif' => true,
            ],
            [
                'matricule' => 'EMP008',
                'nom' => 'NDOYE',
                'prenom' => 'El Hadji Idrissa',
                'email' => 'ndoye.ehi@isisuptech.sn',
                'dateEmbauche' => '2020-02-15',
                'poste' => 'Maintenance',
                'departement' => 'Technique',
                'actif' => true,
            ],
        ];

        foreach ($employes as $employe) {
            Employe::create($employe);
        }
    }
}