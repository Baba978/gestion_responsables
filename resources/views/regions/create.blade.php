@extends('layouts.admin')
@extends('layouts.app')
@section('title', 'Ajouter une Région')
@section('content')
<div class="container">
    <h1>Ajouter une Région</h1>

    <form action="{{ route('regions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
@endsection
