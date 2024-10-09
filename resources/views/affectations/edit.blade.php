@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Affectation</h1>

    <form action="{{ route('affectations.update', $affectation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="responsable_id" class="form-label">Responsable</label>
            <select class="form-select" id="responsable_id" name="responsable_id" required>
                @foreach($responsables as $responsable)
                    <option value="{{ $responsable->id }}" {{ $affectation->responsable_id == $responsable->id ? 'selected' : '' }}>
                        {{ $responsable->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="departement_id" class="form-label">Département</label>
            <select class="form-select" id="departement_id" name="departement_id" required>
                @foreach($departements as $departement)
                    <option value="{{ $departement->id }}" {{ $affectation->departement_id == $departement->id ? 'selected' : '' }}>
                        {{ $departement->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Mettre à jour</button>
    </form>
</div>
@endsection
