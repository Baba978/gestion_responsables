@extends('layouts.admin')
@extends('layouts.app')
@section('title', 'Gestion des Régions')
@section('content')
<div class="container">
    <h1>Régions</h1>
    <a href="{{ route('regions.create') }}" class="btn btn-primary">Ajouter une Région</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($regions as $region)
                <tr>
                    <td>{{ $region->id }}</td>
                    <td>{{ $region->nom }}</td>
                    <td>
                        <a href="{{ route('regions.edit', $region->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('regions.destroy', $region->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $regions->links() }}
</div>
@endsection
