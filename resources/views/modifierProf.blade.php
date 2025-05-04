
    
  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Professeurs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Modifier Professeurs</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('professeur.update', $professeurs->id)}}" method="POST">
                        @csrf
                        {{-- @method('PUT')     methode de la modification --}}

                        {{-- <input type="hidden" name="id" value="1"> <!-- ID de l'étudiant --> --}}
                        <input type="hidden" name="_method" value="PUT">

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="{{$professeurs->nom}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" value="{{$professeurs->prenom}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="sexe" class="form-label">Sexe</label>
                            <select name="sexe" id="sexe" class="form-select" required>
                                <option value="{{$professeurs->sexe}}" selected>Masculin</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">matiere</label>
                            <input type="text" name="matiere" id="matiere" class="form-control" value="{{$professeurs->matiere}}" required>
                        </div>
                         <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" name="age" id="age" class="form-control" value="{{$professeurs->age}}" required>
                        </div>
                         <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{$professeurs->email}}" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit"  name ="modifier" class="btn btn-success">Mettre à jour</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>