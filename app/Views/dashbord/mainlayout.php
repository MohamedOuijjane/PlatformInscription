<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .sidebar {
            background-color: #4e73df;
            color: #ecf0f1;
            min-height: 100vh;
            width: 250px;
            position: fixed;
        }

        .sidebar .logo-container {
            text-align: center;
            padding: 20px;
            margin-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .sidebar .logo-container h4 {
            color: white;
            margin-top: 30px;
            font-size: 20px;
            font-weight: bold;
            
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .sidebar a {
            color: white;
            padding: 15px 20px;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 1rem;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #2e59d9;
        }

        .sidebar .section-title {
            text-transform: uppercase;
            font-size: 0.8rem;
            color: #d1d3e2;
            margin: 10px 20px;
        }

        .navbar-custom {
            background-color: #ffffff;
            color: #ffffff;
            width: calc(100% - 250px);
            position: fixed;
            top: 0;
            left: 250px;
            padding: 22px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e3e6f0;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .search-bar {
            display: flex;
    align-items: center;
    background-color: #f9f9f9;
    border-radius: 30px;
    padding: 5px 15px;
    width: 300px;
    box-shadow: 12px 8px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            padding: 5px;
            width: 100%;
            color: black;
        }

        .navbar-custom .search-bar i {
            color: #4e73df;
        }

        .navbar-custom .icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-custom .icons .icon {
            position: relative;
            font-size: 25px;
            color: black;
            cursor: pointer;
        }

        .navbar-custom .icons .icon .badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: red;
            color: white;
            font-size: 12px;
            border-radius: 50%;
            padding: 3px 6px;
        }

        .navbar-custom .profile {
            display: flex;
            align-items: center;
            gap: 20px;
            color: black;
            font-weight: bold;
            justify-content: space-between;
        }

        .profile img {
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #efefef;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container">
            <h4>CERTIFY EASY</h4>
        </div>
        <a href="<?= base_url('/dashbord/rapport') ?>" class="menu-link"><i class="bi bi-speedometer2"></i> Tableau de bord</a>
        <div class="section-title">Interface</div>
        <a href="<?= base_url('/dashbord/ajouter_exam') ?>" class="menu-link"><i class="bi bi-plus-square"></i> Ajouter Examen</a>
        <a href="<?= base_url('/dashbord/confirmation_paiement') ?>" class="menu-link"><i class="bi bi-credit-card"></i> Confirmation Paiement</a>
        <a href="<?= base_url('/dashbord/liste_examen') ?>" class="menu-link"><i class="bi bi-list"></i> Liste des Examens</a>
        <div class="section-title">Addons</div>
        <a href="<?= base_url('/dashbord/liste_clients') ?>" class="menu-link"><i class="bi bi-people"></i> Liste des Clients</a>
        <a href="<?= base_url('/profile') ?>" class="menu-link"><i class="bi bi-person"></i> Modifier Profil</a>
        <a href="<?= base_url('/logout') ?>" class="menu-link"><i class="bi bi-box-arrow-right"></i> Log Out</a>
    </div>

    <!-- Barre de navigation en haut -->
    <div class="navbar-custom">
        <div class="search-bar">
            <input type="text" placeholder="Search for...">
            <i class="bi bi-search"></i>
        </div>
        <div class="icons">
            <div class="icon">
                <i class="bi bi-bell"></i>
                <span class="badge">3+</span>
            </div>
            
            <div class="profile">
            <?php  $session = session();
                 $username = $session->get('username');
                 ?>
                <span><?= 'Admin : ' .$username ?></span>
                <img src="<?= base_url('images/admin-foto.jpg') ?>" alt="Profile">
                
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="content" id="content">
        <?= $this->renderSection('content') ?>
    </div>

    <script>
        // Ajout de la classe active dynamiquement en fonction de l'URL
        const links = document.querySelectorAll('.menu-link');
        const currentUrl = window.location.href;

        links.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
