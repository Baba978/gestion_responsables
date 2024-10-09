<!-- resources/views/front/responsables/index.blade.php -->
@extends('layouts.front')

@section('title', 'Responsables')

@section('content')
<div class="container">
    <h1>Liste des Responsables</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Fonction</th>
            </tr>
        </thead>
        <tbody>
            @foreach($responsables as $responsable)
                <tr>
                    <td>{{ $responsable->prenom }}</td>
                    <td>{{ $responsable->nom }}</td>
                    <td>{{ $responsable->date_naissance->format('d/m/Y') }}</td>
                    <td>{{ $responsable->fonction }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $responsables->links() }} <!-- Pagination -->
</div>
@endsection
