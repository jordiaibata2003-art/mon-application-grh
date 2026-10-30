<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        return response()->json(Profil::all());
    }
}