<?php

namespace App\Http\Controllers\Api;

use App\Models\Presence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index()
    {
        return response()->json(Presence::with('employe')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employe_id' => 'required|exists:employes,id',
            'date' => 'required|date',
        ]);
        $presence = Presence::create($validated);
        return response()->json($presence, 201);
    }

    public function show($id)
    {
        $presence = Presence::with('employe')->find($id);
        return $presence ? response()->json($presence) : response()->json(['message' => 'Présence non trouvée'], 404);
    }

    public function update(Request $request, $id)
    {
        $presence = Presence::find($id);
        if (!$presence) return response()->json(['message' => 'Présence non trouvée'], 404);
        $presence->update($request->all());
        return response()->json($presence);
    }

    public function destroy($id)
    {
        $presence = Presence::find($id);
        if ($presence) $presence->delete();
        return response()->json(['message' => 'Présence supprimée']);
    }
}