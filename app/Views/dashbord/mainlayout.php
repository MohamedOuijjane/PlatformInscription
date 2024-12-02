<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 260px;
            position: fixed;
            transition: all 0.3s ease-in-out;
        }

        .sidebar .logo-container {
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .sidebar .logo-container h4 {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .sidebar a {
            color: white;
            padding: 15px 20px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 1rem;
            border-radius: 10px;
            margin: 5px 10px;
        }

        .sidebar a i {
            font-size: 1.5rem; /* Bigger icon size */
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #2e59d9;
        }

        .sidebar a.active {
            background-color: #224abe;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .sidebar .section-title {
            text-transform: uppercase;
            font-size: 0.9rem;
            color: #d1d3e2;
            margin: 10px 20px;
        }

        .navbar-custom {
            background-color: #ffffff;
            width: calc(100% - 260px);
            position: fixed;
            top: 0;
            left: 260px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e3e6f0;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .search-bar {
            display: flex;
            align-items: center;
            background-color: #f1f1f1;
            border-radius: 30px;
            padding: 5px 15px;
            width: 350px;
            box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            padding: 5px;
            width: 100%;
            color: #555;
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
            font-size: 1.5rem;
            color: #333;
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
            color: #555;
            font-weight: bold;
        }

        .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content {
            margin-left: 260px;
            padding: 20px;
            background-color: #f9f9f9;
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
        <a href="<?= base_url('/dashbord/liste_examen') ?>" class="menu-link"><i class="bi bi-list-task"></i> Liste des Examens</a>
        <a href="<?= base_url('/dashbord/liste_clients') ?>" class="menu-link"><i class="bi bi-people"></i> Liste des Clients</a>
        <div class="section-title">Addons</div>
        <a href="<?= base_url('/profile') ?>" class="menu-link"><i class="bi bi-shield-lock"></i> Changer Mot de passe</a>
        <a href="<?= base_url('/logout') ?>" class="menu-link"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
    </div>

    <!-- Top Navbar -->
    <div class="navbar-custom">
        <div class="search-bar">
            <input type="text" placeholder="Rechercher...">
            <i class="bi bi-search"></i>
        </div>
        <div class="icons">
            <div class="icon">
                <i class="bi bi-bell"></i>
                <span class="badge">3+</span>
            </div>
            <div class="profile">
                <?php $session = session(); ?>
                <span><?= 'Admin : ' . $session->get('username') ?></span>
                <a href="<?= base_url('/profiladmin') ?>"> <img src="<?= base_url('images/profiladmin.png') ?>" alt="Profile"></a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <script>
        // Highlight the active sidebar link
        const links = document.querySelectorAll('.menu-link');
        const currentUrl = window.location.href;

        links.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>
