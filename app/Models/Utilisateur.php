<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Utilisateur extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nomUtilisateur', 'email', 'motDePasse', 'statut', 'profil_id', 'employe_id'
    ];

    protected $hidden = [
        'motDePasse', 'remember_token',
    ];

    protected $appends = ['role'];

    public function getAuthPassword()
    {
        return $this->motDePasse;
    }

    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    /** Rôle normalisé : admin | rh | manager | employe */
    public function getRoleAttribute(): string
    {
        $l = Str::lower(Str::ascii((string) ($this->profil?->libelle ?? '')));

        if (str_contains($l, 'admin')) return 'admin';
        if (preg_match('/\brh\b|humain/', $l)) return 'rh';
        if (preg_match('/manager|responsable|chef/', $l)) return 'manager';
        return 'employe';
    }
}