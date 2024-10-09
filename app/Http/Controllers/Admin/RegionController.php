<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{public function index()
    {
        $regions = Region::paginate(10);
        return view('regions.index', compact('regions'));
    }

    public function create()
    {
        return view('regions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        Region::create($request->all());
        return redirect()->route('regions.index')->with('success', 'Région créée avec succès.');
    }

    public function edit(Region $region)
    {
        return view('regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $region->update($request->all());
        return redirect()->route('regions.index')->with('success', 'Région mise à jour avec succès.');
    }

    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('regions.index')->with('success', 'Région supprimée avec succès.');
    }
}
