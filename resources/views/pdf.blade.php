<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Responsables</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Liste des Responsables</h1>
    <table>
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
</body>
</html>
