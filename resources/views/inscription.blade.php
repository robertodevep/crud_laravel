
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Formulaire d'Inscription</h4>
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
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" name="nom"  class="form-control" id="nom" placeholder="Entrez votre nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="prenom"  class="form-label">Prénom</label>
                                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrez votre prénom" required>
                            </div>

                            <div class="mb-3">
                                <label for="sexe" class="form-label">Sexe</label>
                                <select class="form-select" name="sexe" id="sexe" required>
                                    <option selected disabled>Choisissez votre sexe</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="filiere"  class="form-label">Filière</label>
                                <input type="text" name="filiere" class="form-control" id="filiere" placeholder="Entrez votre filière" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" name="save" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-muted">
                        © 2025 Robert
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>