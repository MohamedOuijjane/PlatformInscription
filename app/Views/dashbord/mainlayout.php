<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Couleurs de base et polices */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Fond gris clair pour un look moderne */
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c3e50; /* Gris foncé élégant */
            color: #ecf0f1; /* Texte blanc cassé */
            min-height: 100vh;
            padding-top: 20px;
            position: fixed;
            transition: all 0.3s;
        }

        .sidebar h3 {
            text-align: center;
            font-weight: bold;
            color: #ecf0f1;
            margin-bottom: 30px;
        }

        .sidebar a {
            color: #bdc3c7; /* Texte gris clair */
            padding: 15px;
            text-decoration: none;
            display: block;
            font-size: 0.9rem;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495e; /* Fond gris légèrement plus clair au survol */
            color: #ffffff; /* Texte blanc au survol */
        }

        /* Barre de navigation en haut */
        .navbar-custom {
            background-color: #2c3e50; /* Couleur assortie à la sidebar */
            color: #ffffff;
            width: calc(100% - 250px);
            position: fixed;
            top: 0;
            left: 250px;
            padding: 10px 20px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .search-bar {
            display: flex;
            align-items: center;
            background-color: #34495e; /* Gris sombre assorti */
            border-radius: 5px;
            padding: 5px 10px;
        }

        .navbar-custom .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            padding: 5px;
            width: 200px;
            color: #ecf0f1; /* Texte blanc cassé */
        }

        .navbar-custom .icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-custom .icons i {
            font-size: 20px;
            color: #bdc3c7; /* Icônes gris clair */
            cursor: pointer;
        }

        .navbar-custom .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ecf0f1;
        }

        .profile img {
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }

        /* Contenu principal */
        .content {
            
            margin-left: 250px;
             /* Espace pour la barre de navigation */
            padding: 20px;
            background-color: #ffffff; /* Fond blanc pour le contenu */
           
            
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Ombre douce */
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Admin</h3>
        <a href="<?= base_url('/dashbord/ajouter_exam') ?>">Ajouter Examen</a>
        <a href="<?= base_url('/dashbord/confirmation_paiement') ?>">Confirmation Paiement</a>
        <a href="<?= base_url('/dashbord/liste_examen') ?>">Liste des Examens</a>
        <a href="<?= base_url('/dashbord/liste_clients') ?>">Liste des Clients</a>
        <a href="<?= base_url('/dashbord/rapport') ?>">Charts</a>
        <a href="#">Log Out</a>
    </div>

    <!-- Barre de navigation en haut -->
    <div class="navbar-custom">
        <div class="search-bar">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search...">
        </div>
        <div class="icons">
            <i class="bi bi-envelope"></i>
            <i class="bi bi-bell"></i>
            <i class="bi bi-stack"></i>
            <div class="profile">
                <img src="../images/admin-foto.jpg" alt="Profile">
                <span>Hi, Hizrian</span>
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
