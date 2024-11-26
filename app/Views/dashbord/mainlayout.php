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
            background-color: #f8f9fa;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #5f5f5f;
            color: #ecf0f1;
            min-height: 100vh;
            padding-top: 20px;
            position: fixed;
            transition: all 0.3s;
        }

        .sidebar .logo-container {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .sidebar .logo-container img {
            width: 200px;
            height: 200px;
        }

        .sidebar a, .sidebar button {
            color: white;
            padding: 15px;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            transition: background 0.3s, color 0.3s;
            cursor: pointer;
        }

        .sidebar a i, .sidebar button i {
            margin-right: 10px;
           
        }

        .sidebar a:hover, .sidebar button:hover {
            background-color: #34495e;
            color: #ffffff;
        }

        /* Barre de navigation en haut */
        .navbar-custom {
            background-color: #5f5f5f;
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
            background-color: white;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .navbar-custom .search-bar i {
            color: #0190BB;
            font-size: 1rem;
            font-weight: 800;
        }

        .navbar-custom .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            padding: 5px;
            width: 200px;
            color: black;
        }

        .navbar-custom .icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-custom .icons i {
            font-size: 20px;
            color: white;
            cursor: pointer;
        }

        .navbar-custom .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-weight: bold;
        }

        .profile img {
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }

        /* Contenu principal */
        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            background-image: url('<?= base_url('images/b.jpg') ?>'); /* Chemin de l'image de fond */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container ">
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo">
        </div>
        <a href="<?= base_url('/dashbord/ajouter_exam') ?>"><i class="bi bi-plus-square"></i> Ajouter Examen</a>
        <a href="<?= base_url('/dashbord/confirmation_paiement') ?>"><i class="bi bi-credit-card"></i> Confirmation Paiement</a>
        <a href="<?= base_url('/dashbord/liste_examen') ?>"><i class="bi bi-list"></i> Liste des Examens</a>
        <a href="<?= base_url('/dashbord/liste_clients') ?>"><i class="bi bi-people"></i> Liste des Clients</a>
        <a href="<?= base_url('/dashbord/rapport') ?>"><i class="bi bi-bar-chart"></i> Charts</a>
        <a href="<?= base_url('/profile') ?>"><i class="bi bi-person"></i> Modifier Profil</a>
        <a href="#"><i class="bi bi-box-arrow-right"></i> Log Out</a>
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
                <img src="<?= base_url('images/admin-foto.jpg') ?>" alt="Profile"> <!-- Chemin de l'image de profil -->
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
