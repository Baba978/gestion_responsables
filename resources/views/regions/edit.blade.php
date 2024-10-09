@extends('layouts.app')
@extends('layouts.admin')
@section('title', 'Modifier une Région')
@section('content')
<div class="container">
    <h1>Modifier la Région</h1>

    <form action="{{ route('regions.update', $region->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $region->nom }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Mettre à jour</button>
    </form>
</div>
@endsection
