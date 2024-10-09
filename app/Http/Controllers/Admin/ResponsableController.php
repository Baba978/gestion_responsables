<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Responsable;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ResponsableController extends Controller
{
    // Afficher la liste des responsables
    public function index()
    {
        $responsables = Responsable::paginate(10); // Pagination de 10 responsables par page
        return view('responsables.index', compact('responsables'));
    }

    // Afficher le formulaire pour créer un nouveau responsable
    public function create()
    {
        return view('responsables.create');
    }

    // Enregistrer un nouveau responsable
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'fonction' => 'required|string|max:255',
        ]);

        Responsable::create($request->all());

        return redirect()->route('responsables.index')->with('success', 'Responsable créé avec succès.');
    }

    // Afficher le formulaire pour modifier un responsable
    public function edit(Responsable $responsable)
    {
        return view('responsables.edit', compact('responsable'));
    }

    // Mettre à jour un responsable existant
    public function update(Request $request, Responsable $responsable)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'fonction' => 'required|string|max:255',
        ]);

        $responsable->update($request->all());

        return redirect()->route('responsables.index')->with('success', 'Responsable mis à jour avec succès.');
    }

    // Supprimer un responsable
    public function destroy(Responsable $responsable)
    {
        $responsable->delete();

        return redirect()->route('responsables.index')->with('success', 'Responsable supprimé avec succès.');
    }

    public function exportPdf()
{
    $responsables = Responsable::all();
    $pdf = Pdf::loadView('responsables.pdf', compact('responsables'));

    return $pdf->download('responsables.pdf');
}
}
