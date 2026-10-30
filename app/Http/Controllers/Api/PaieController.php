<?php

namespace App\Http\Controllers\Api;

use App\Models\Paie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaieController extends Controller
{
    public function index()
    {
        return response()->json(Paie::with('employe')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employe_id' => 'required|exists:employes,id',
            'mois' => 'required|integer|between:1,12',
            'annee' => 'required|integer',
            'salaireBase' => 'required|numeric',
        ]);
        $paie = Paie::create($validated);
        return response()->json($paie, 201);
    }

    public function show($id)
    {
        $paie = Paie::with('employe')->find($id);
        return $paie ? response()->json($paie) : response()->json(['message' => 'Paie non trouvée'], 404);
    }

    public function update(Request $request, $id)
    {
        $paie = Paie::find($id);
        if (!$paie) return response()->json(['message' => 'Paie non trouvée'], 404);
        $paie->update($request->all());
        return response()->json($paie);
    }

    public function destroy($id)
    {
        $paie = Paie::find($id);
        if ($paie) $paie->delete();
        return response()->json(['message' => 'Paie supprimée']);
    }
}