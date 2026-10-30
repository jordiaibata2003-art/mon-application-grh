<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $fillable = [
        'employe_id', 'date', 'heureArrivee', 'heureDepart',
        'statut', 'estJustifie', 'motifAbsence'
    ];
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}