@extends('layouts.app')
@extends('layouts.admin')

@section('title', 'Gestion des Départements')
@section('content')
<div class="container">
    <h1>Départements</h1>
    <a href="{{ route('departements.create') }}" class="btn btn-primary">Ajouter un Département</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Région</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departements as $departement)
                <tr>
                    <td>{{ $departement->id }}</td>
                    <td>{{ $departement->nom }}</td>
                    <td>{{ $departement->region->nom }}</td>
                    <td>
                        <a href="{{ route('departements.edit', $departement->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('departements.destroy', $departement->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $departements->links() }}
</div>
@endsection
