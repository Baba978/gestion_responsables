@extends('layouts.app')
@extends('layouts.admin')

@section('title', 'Modifier un Département')
@section('content')
<div class="container">
    <h1>Modifier le Département</h1>

    <form action="{{ route('departements.update', $departement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $departement->nom }}" required>
        </div>
        <div class="mb-3">
            <label for="region_id" class="form-label">Région</label>
            <select class="form-select" id="region_id" name="region_id" required>
                @foreach($regions as $region)
                    <option value="{{ $region->id }}" {{ $departement->region_id == $region->id ? 'selected' : '' }}>
                        {{ $region->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Mettre à jour</button>
    </form>
</div>
@endsection
