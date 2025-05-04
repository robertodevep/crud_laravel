
    
 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
    
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Liste des Etudiants</h2>

    <table class="table table-bordered table-striped custom-table">
        <thead class="table-dark">
            <tr>
                <th>Nom professeur</th>
                <th>matiere</th>
                <th>nombre heur</th>
                <th>Filière</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           @foreach($cours as $data)
            <tr>
                <td>{{$data->nom_prof}}</td>
                <td>{{$data->nom_cours}}</td>
                <td>{{$data->nombre_heur}}</td>
                <td>{{$data->filiere}}</td>
                <td>
                    <a href="{{ route('swhoUpdatecour', $data->id)}}" class="btn btn-sm btn-primary">Modifier</a>
                    {{-- <a href="#" class="btn btn-sm btn-danger">Supprimer</a> --}}
                    <form action="{{ route('cours.destroy', $data->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Voulez-vous vraiment supprimer cet étudiant ?');">
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