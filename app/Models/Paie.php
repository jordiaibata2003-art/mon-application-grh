<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paie extends Model
{
    protected $fillable = [
        'employe_id', 'mois', 'annee', 'salaireBase', 'prime',
        'heuresSupplementaires', 'retenues', 'salaireNet', 'statut'
    ];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}