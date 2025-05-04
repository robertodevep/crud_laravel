
    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Enregistrer cours</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Formulaire cours</h4>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('create')}}" method="POST">
                              @csrf
                            <div class="mb-3">
                                <label for="nom_prof" class="form-label">Nom</label>
                                <input type="text" name="nom_prof"  class="form-control" id="nom_prof" placeholder="Entrez votre nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="nom_cours"  class="form-label">Cours</label>
                                <input type="text" name="nom_cours" class="form-control" id="nom_cours" placeholder="Entrez nom du cours" required>
                            </div>

                            <div class="mb-3">
                                <label for="nombre_heur"  class="form-label">Nombre Heur</label>
                                <input type="text" name="nombre_heur" class="form-control" id="nombre_heur" placeholder="Entrez le nombre heur" required>
                            </div>
                            <div class="mb-3">
                                <label for="filiere"  class="form-label">filiere</label>
                                <input type="text" name="filiere" class="form-control" id="filiere" placeholder="Entrez la filiere" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" name="save" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-muted">
                        © 2025 Roberto
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>