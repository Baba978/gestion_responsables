<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Affectation;
use App\Models\Responsable;
use App\Models\Departement;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $affectations = Affectation::with('responsable', 'departement')->paginate(10);
        return view('affectations.index', compact('affectations'));
    }

    public function create()
    {
        $responsables = Responsable::all();
        $departements = Departement::all();
        return view('affectations.create', compact('responsables', 'departements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'responsable_id' => 'required|exists:responsables,id',
            'departement_id' => 'required|exists:departements,id',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after:date_debut',
        ]);

        Affectation::create($request->all());
        return redirect()->route('affectations.index')->with('success', 'Affectation créée avec succès.');
    }

    public function edit(Affectation $affectation)
    {
        $responsables = Responsable::all();
        $departements = Departement::all();
        return view('affectations.edit', compact('affectation', 'responsables', 'departements'));
    }

    public function update(Request $request, Affectation $affectation)
    {
        $request->validate([
            'responsable_id' => 'required|exists:responsables,id',
            'departement_id' => 'required|exists:departements,id',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after:date_debut',
        ]);

        $affectation->update($request->all());
        return redirect()->route('affectations.index')->with('success', 'Affectation mise à jour avec succès.');
    }

    public function destroy(Affectation $affectation)
    {
        $affectation->delete();
        return redirect()->route('affectations.index')->with('success', 'Affectation supprimée avec succès.');
    }
}
