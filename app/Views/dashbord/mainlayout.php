<!-- dashboard/mainlayout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Couleurs de base */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ecf0f1;
            color: #2c3e50;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c3e50; /* Bleu Foncé */
            color: #ecf0f1; /* Gris Clair */
            min-height: 100vh;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar h3 {
            text-align: center;
            padding-bottom: 20px;
            font-weight: bold;
            border-bottom: 1px solid #34495e;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #ecf0f1;
            padding: 12px 20px;
            text-decoration: none;
            display: block;
            font-size: 1rem;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495e; /* Un peu plus clair que le bleu foncé */
            color: #ffffff;
        }

        /* Contenu principal */
        .content {
            margin-left: 250px;
            padding: 40px;
            background-color: #ffffff;
            min-height: 100vh;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        /* Boutons personnalisés */
        .btn-custom {
            background-color: #3498db; /* Bleu Clair */
            color: white;
            border: none;
            transition: background 0.3s;
        }

        .btn-custom:hover {
            background-color: #2980b9; /* Bleu Foncé */
        }

        /* Messages et alertes */
        .alert-success {
            background-color: #2ecc71; /* Vert Vif */
            color: white;
            border: none;
        }

        .alert-warning {
            background-color: #e67e22; /* Orange */
            color: white;
            border: none;
        }

        .alert-danger {
            background-color: #e74c3c; /* Rouge */
            color: white;
            border: none;
        }

        /* Barre de navigation */
        .navbar-custom {
            background-color: #34495e;
            color: white;
        }

        .navbar-custom a {
            color: #ecf0f1;
            transition: color 0.3s;
        }

        .navbar-custom a:hover {
            color: #bdc3c7; /* Gris clair */
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <h3 class="text-center">Admin</h3>
            <a href="/dashbord/ajouter_exam">Ajouter Examen</a>
            <a href="/dashbord/confirmation_paiement">Confirmation Paiement</a>
            <a href="/dashbord/liste_examen">Liste des Examens</a>
            <a href="/dashbord/liste_clients">Liste des Clients</a>
        </div>
        <div class="content">
            <?= $this->renderSection('content') ?> 
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
