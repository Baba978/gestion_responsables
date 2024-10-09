@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Responsable</h1>

    <form action="{{ route('responsables.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" required>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" required>
        </div>
        <div class="mb-3">
            <label for="date_naissance" class="form-label">Date de Naissance</label>
            <input type="date" name="date_naissance" class="form-control" id="date_naissance" required>
        </div>
        <div class="mb-3">
            <label for="fonction" class="form-label">Fonction</label>
            <input type="text" name="fonction" class="form-control" id="fonction" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection
