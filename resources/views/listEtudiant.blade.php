
 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <style>
        .table-container {
            display: flex;
            justify-content: center; /* Centre horizontalement */
        }
        .custom-table {
            width: 80%; /* Tableau plus large (80% de la page) */
        }
        th.actions-col, td.actions-col {
            width: 220px; /* Plus grand espace pour la colonne Actions */
            text-align: center;
            white-space: nowrap;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .action-buttons form {
            margin: 0;
        }
    </style> --}}
    
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Liste des Etudiants</h2>

    <table class="table table-bordered table-striped custom-table">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Filière</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           @foreach($etudiant as $etudiants)
            <tr>
                <td>{{$etudiants->nom}}</td>
                <td>{{$etudiants->prenom}}</td>
                <td>{{$etudiants->sexe}}</td>
                <td>{{$etudiants->filiere}}</td>
                <td>
                    <a href="{{ route('swhoUpdate', $etudiants->id)}}" class="btn btn-sm btn-primary">Modifier</a>
                    {{-- <a href="#" class="btn btn-sm btn-danger">Supprimer</a> --}}
                    <form action="{{ route('etudiant.destroy', $etudiants->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Voulez-vous vraiment supprimer cet étudiant ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>