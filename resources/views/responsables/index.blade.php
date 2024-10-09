
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Liste des Responsables</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('responsables.create') }}" class="btn btn-primary">Ajouter un Responsable</a>
    <a href="{{ route('responsables.exportPdf') }}" class="btn btn-danger">Exporter en PDF</a>
    <a href="{{ route('responsables.exportExcel') }}" class="btn btn-success">Exporter en Excel</a>



    <table class="table">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Fonction</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($responsables as $responsable)
                <tr>
                    <td>{{ $responsable->prenom }}</td>
                    <td>{{ $responsable->nom }}</td>
                    <td>{{ $responsable->date_naissance }}</td>
                    <td>{{ $responsable->fonction }}</td>
                    <td>
                        <a href="{{ route('responsables.edit', $responsable) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('responsables.destroy', $responsable) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $responsables->links() }} <!-- Pagination -->
</div>
@endsection
