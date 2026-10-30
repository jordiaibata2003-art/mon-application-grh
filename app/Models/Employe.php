<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'matricule', 'nom', 'prenom', 'dateNaissance', 'adresse',
        'telephone', 'email', 'dateEmbauche', 'departement', 'poste', 'actif'
    ];

    public function utilisateur()
    {
        return $this->hasOne(Utilisateur::class);
    }

    public function contrat()
    {
        return $this->hasOne(Contrat::class)->where('statut', 'actif');
    }

    public function contrats()
    {
        return $this->hasMany(Contrat::class);
    }

    public function conges()
    {
        return $this->hasMany(Conge::class);
    }

    public function paies()
    {
        return $this->hasMany(Paie::class);
    }

    public function presences()
    {
        return $this->hasMany(Presence::class);
    }
}