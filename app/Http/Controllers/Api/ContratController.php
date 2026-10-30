<?php

namespace App\Http\Controllers\Api;

use App\Models\Contrat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function index()
    {
        return response()->json(Contrat::with('employe')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employe_id' => 'required|exists:employes,id',
            'typeContrat' => 'required',
            'dateDebut' => 'required|date',
            'salaire' => 'required|numeric',
        ]);
        $contrat = Contrat::create($validated);
        return response()->json($contrat, 201);
    }

    public function show($id)
    {
        $contrat = Contrat::with('employe')->find($id);
        return $contrat ? response()->json($contrat) : response()->json(['message' => 'Contrat non trouvé'], 404);
    }

    public function update(Request $request, $id)
    {
        $contrat = Contrat::find($id);
        if (!$contrat) return response()->json(['message' => 'Contrat non trouvé'], 404);
        $contrat->update($request->all());
        return response()->json($contrat);
    }

    public function destroy($id)
    {
        $contrat = Contrat::find($id);
        if ($contrat) $contrat->delete();
        return response()->json(['message' => 'Contrat supprimé']);
    }
}