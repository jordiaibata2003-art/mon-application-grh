<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // GET /api/employes → Liste tous les employés
    public function index()
    {
        $employes = Employe::all();
        return response()->json($employes);
    }

    // GET /api/employes/{id} → Affiche un employé spécifique
    public function show($id)
    {
        $employe = Employe::find($id);
        if (!$employe) {
            return response()->json(['message' => 'Employé non trouvé'], 404);
        }
        return response()->json($employe);
    }

    // POST /api/employes → Créer un employé
    public function store(Request $request)
    {
        $validated = $request->validate([
            'matricule' => 'required|unique:employes',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:employes',
            'dateEmbauche' => 'required|date',
            'poste' => 'required',
        ]);

        $employe = Employe::create($validated);
        return response()->json($employe, 201);
    }

    // PUT /api/employes/{id} → Modifier un employé
    public function update(Request $request, $id)
    {
        $employe = Employe::find($id);
        if (!$employe) {
            return response()->json(['message' => 'Employé non trouvé'], 404);
        }

        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:employes,email,' . $id,
            'poste' => 'required',
        ]);

        $employe->update($validated);
        return response()->json($employe);
    }

    // DELETE /api/employes/{id} → Supprimer un employé
    public function destroy($id)
    {
        $employe = Employe::find($id);
        if (!$employe) {
            return response()->json(['message' => 'Employé non trouvé'], 404);
        }

        $employe->delete();
        return response()->json(['message' => 'Employé supprimé']);
    }
}