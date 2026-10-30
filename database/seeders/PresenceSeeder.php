<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Presence;

class PresenceSeeder extends Seeder
{
    public function run()
    {
        $presences = [
            ['employe_id' => 4, 'date' => '2025-06-01', 'heureArrivee' => '08:05:00', 'heureDepart' => '17:00:00', 'statut' => 'present'],
            ['employe_id' => 4, 'date' => '2025-06-02', 'heureArrivee' => '08:10:00', 'heureDepart' => '17:00:00', 'statut' => 'retard'],
            ['employe_id' => 4, 'date' => '2025-06-03', 'heureArrivee' => null, 'heureDepart' => null, 'statut' => 'absent', 'estJustifie' => false],
            ['employe_id' => 5, 'date' => '2025-06-01', 'heureArrivee' => '08:00:00', 'heureDepart' => '17:00:00', 'statut' => 'present'],
            ['employe_id' => 5, 'date' => '2025-06-02', 'heureArrivee' => '08:00:00', 'heureDepart' => '17:00:00', 'statut' => 'present'],
            ['employe_id' => 6, 'date' => '2025-06-01', 'heureArrivee' => '08:00:00', 'heureDepart' => '17:00:00', 'statut' => 'present'],
        ];

        foreach ($presences as $presence) {
            Presence::create($presence);
        }
    }
}