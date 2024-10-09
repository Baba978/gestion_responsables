@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Affectations</h1>
    <a href="{{ route('affectations.create') }}" class="btn btn-primary">Ajouter une Affectation</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Responsable</th>
                <th>Département</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($affectations as $affectation)
                <tr>
                    <td>{{ $affectation->id }}</td>
                    <td>{{ $affectation->responsable->nom }}</td>
                    <td>{{ $affectation->departement->nom }}</td>
                    <td>
                        <a href="{{ route('affectations.edit', $affectation->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('affectations.destroy', $affectation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $affectations->links() }}
</div>
@endsection
