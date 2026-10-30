<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = ['libelle', 'description'];

    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class);
    }
}