<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Bootstrap 5.3.3 CSS avec integrity et crossorigin -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Ajout de styles pour la navigation */
        .navbar {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre subtile pour la barre de navigation */
        }

        /* Espacement pour le pied de page */
        footer {
            background-color: #f8f9fa; /* Couleur de fond légère */
            border-top: 1px solid #e7e7e7; /* Bordure subtile en haut */
        }

        /* Style global pour le conteneur de la page */
        .page-content {
            min-height: 80vh; /* S'assure que le contenu remplit au moins l'écran */
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ÖSD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Alignement des éléments de navigation à droite -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calendrier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inscription</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Examen
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Examen 1</a></li>
                            <li><a class="dropdown-item" href="#">Examen 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container page-content">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2024 ÖSD. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap 5.3.3 JS Bundle avec integrity et crossorigin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
