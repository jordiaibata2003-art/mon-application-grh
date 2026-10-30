<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    protected $fillable = [
        'employe_id', 'type', 'dateDebut', 'dateFin', 'motif', 'statut'
    ];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}