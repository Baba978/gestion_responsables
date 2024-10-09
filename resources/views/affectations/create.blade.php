@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une Affectation</h1>

    <form action="{{ route('affectations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="responsable_id" class="form-label">Responsable</label>
            <select class="form-select" id="responsable_id" name="responsable_id" required>
                @foreach($responsables as $responsable)
                    <option value="{{ $responsable->id }}">{{ $responsable->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="departement_id" class="form-label">Département</label>
            <select class="form-select" id="departement_id" name="departement_id" required>
                @foreach($departements as $departement)
                    <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
@endsection
