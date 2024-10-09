@extends('layouts.app')
@extends('layouts.admin')

@section('title', 'Ajouter un Département')
@section('content')
<div class="container">
    <h1>Ajouter un Département</h1>

    <form action="{{ route('departements.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="region_id" class="form-label">Région</label>
            <select class="form-select" id="region_id" name="region_id" required>
                @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
@endsection