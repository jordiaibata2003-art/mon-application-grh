<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = [
        'employe_id', 'typeContrat', 'dateDebut', 'dateFin', 'salaire', 'statut'
    ];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}