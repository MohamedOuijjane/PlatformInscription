<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Couleurs de base et polices */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 17%;
            background-color: #f5f5f5; /* Gris foncé élégant */
            color: #d1d1d1;
            min-height: 100vh;
            padding-top: 20px;
            position: fixed;
          
        }

        .sidebar h3 {
            text-align: center;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 40px;
            
        }

        .sidebar a {
            color: black;
            padding: 20px 20px;
            text-decoration: none;
            display: block;
            font-size: 0.7rem;
            font-weight: bold;
            transition: background 0.3s, color 0.3s;
            border-bottom: 2px solid black;
           
        }

        .sidebar a:hover {
            background-color: #3a3b3d; /* Gris clair pour l'effet de survol */
            color: #ffffff;
        }

        /* Contenu principal */
        .content {
            margin-top: 50px;
            margin-left: 270px;
            min-width: 70%;
            padding: 40px;
            background-color: #ffffff;
            min-height: auto;
            border-top: 3px solid #007bff; /* Ligne de couleur professionnelle */
            box-shadow: 0px 0px 20px gray;
        }

        /* Styles de boutons */
        .btn-custom {
            background-color: #007bff; /* Bleu professionnel */
            color: #ffffff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3; /* Bleu foncé */
        }

        /* Messages et alertes */
        .alert-success {
            background-color: #28a745;
            color: #ffffff;
        }

        .alert-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .alert-danger {
            background-color: #dc3545;
            color: #ffffff;
        }

        /* Barre de navigation */
        .navbar-custom {
            background-color: #343a40;
            color: #ffffff;
        }

        .navbar-custom a {
            color: #ffffff;
            transition: color 0.3s;
        }

        .navbar-custom a:hover {
            color: #adb5bd; /* Gris clair */
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <h3 class="text-center">Admin</h3>
            <a href="<?= base_url('/dashbord/ajouter_exam') ?>">Ajouter Examen</a>
            <a href="<?= base_url('/dashbord/confirmation_paiement') ?>">Confirmation Paiement</a>
            <a href="<?= base_url('/dashbord/liste_examen') ?>">Liste des Examens</a>
            <a href="<?= base_url('/dashbord/liste_clients') ?>">Liste des Clients</a>
            <a href="<?= base_url('/dashbord/rapport') ?>">Charts</a>
            <a href="#">Log Out</a>
        </div>
        <div class="content">
             <?= $this->renderSection('content') ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
