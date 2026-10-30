<?php

namespace App\Http\Controllers\Api;

use App\Models\Conge;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CongeController extends Controller
{
    public function index()
    {
        return response()->json(Conge::with('employe')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employe_id' => 'required|exists:employes,id',
            'type' => 'required',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after_or_equal:dateDebut',
        ]);
        $conge = Conge::create($validated);
        return response()->json($conge, 201);
    }

    public function show($id)
    {
        $conge = Conge::with('employe')->find($id);
        return $conge ? response()->json($conge) : response()->json(['message' => 'Congé non trouvé'], 404);
    }

    public function update(Request $request, $id)
    {
        $conge = Conge::find($id);
        if (!$conge) return response()->json(['message' => 'Congé non trouvé'], 404);
        $conge->update($request->all());
        return response()->json($conge);
    }

    public function destroy($id)
    {
        $conge = Conge::find($id);
        if ($conge) $conge->delete();
        return response()->json(['message' => 'Congé supprimé']);
    }
}