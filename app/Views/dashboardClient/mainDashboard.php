<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord Client</title>
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
            background-color: #0190BB;
            color: #ecf0f1;
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
            color: white;
            padding: 15px;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar a i {
            margin-right: 10px; /* Space between icon and text */
            font-size: 1.2rem;
        }

        .sidebar a:hover {
            background-color: #34495e;
            color: #ffffff;
        }

        /* Barre de navigation en haut */
        .navbar-custom {
            background-color: #0190BB;
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
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Client</h3>
        <a href="<?= base_url('/dashboardClient') ?>"><i class="bi bi-plus-circle"></i>Welcome</a>
        <a href="<?= base_url('/dashboardClient/profileDisplayer') ?>"><i class="bi bi-person-circle"></i> Profil</a>
        <a href="<?= base_url('/dashboardClient/paiementDisplayer') ?>"><i class="bi bi-wallet2"></i> Paiement</a>
        <a href="<?= base_url('/dashboardClient/convocation') ?>"><i class="bi bi-file-earmark-text"></i> Convocation</a>
        <a href="<?= base_url('/logout') ?>"><i class="bi bi-box-arrow-right"></i> Log Out</a>
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
                <?php  $session = session(); 
                       $username = $session->get('username');
                ?> 
                <span style="" ><?= $username ?></span>
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
