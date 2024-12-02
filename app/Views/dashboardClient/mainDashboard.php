<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Couleurs de base et polices */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #ffffff; /* Set the sidebar background to white */
            color: #333; /* Text color */
            min-height: 100vh;
            padding-top: 20px;
            position: fixed;
            transition: all 0.3s;
            box-shadow: 1px 0px 1px rgba(0, 0, 0, 0.1); /* Subtle shadow for separation */
        }

        .sidebar h3 {
            text-align: center;
            font-weight: bold;
            color: #007bff; /* Match navbar color */
            margin-bottom: 30px;
        }

        /* Style de base pour les liens dans la sidebar */
        .sidebar a {
            color: #007bff; /* Set link color to match navbar */
            padding: 15px;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            transition: background-color 0.3s, transform 0.2s ease-in-out;
            border-radius: 5px;
        }

        .sidebar a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* Hover Effect */
        .sidebar a:hover {
            background-color: #007bff; /* Hover effect to match navbar */
            color: #ffffff; /* Text color change on hover */
            transform: scale(1.0); /* Slight scale effect for hover */
        }

        /* Focus Effect */
        .sidebar a:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.8); /* Add a glow effect when focused */
        }

        /* Barre de navigation en haut */
        .navbar-custom {
            background-color: #ffffff; /* White background */
            color: #333; /* Text color */
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
            border-radius: 25px;
            padding: 5px 15px;
            border: 1px solid #ddd;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .search-bar i {
            color: #007bff;
            font-size: 1.2rem;
            margin-right: 8px;
        }

        .navbar-custom .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            padding: 5px;
            width: 250px;
            color: #333;
            font-size: 1rem;
        }

        .navbar-custom .search-bar input::placeholder {
            color: #777;
        }

        .navbar-custom .icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-custom .icons i {
            font-size: 20px;
            color: #007bff;
            cursor: pointer;
        }
        /* Profile Button */
        .navbar-custom .profile-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            background-color: #f8f9fa;
            border-radius: 25px;
            border: 1px solid #007bff; /* Border color matching navbar */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s ease-in-out;
        }

        /* Profile Image */
        .navbar-custom .profile-btn img {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            object-fit: cover; /* Ensure the profile image fits well */
        }

        /* Text for the username */
        .navbar-custom .profile-btn span {
            color: #007bff; /* Normal text color */
            font-weight: 600;
            font-size: 1rem;
            transition: color 0.3s; /* Smooth transition for text color change */
        }

        /* Hover Effect */
        .navbar-custom .profile-btn:hover {
            background-color: #007bff;
            transform: scale(1.05); /* Slight scale effect on hover */
        }

        .navbar-custom .profile-btn:hover span {
            color: white; /* Text color turns white on hover */
        }

        /* Focus Effect */
        .navbar-custom .profile-btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.6); /* Blue glow effect on focus */
        }
        a{
            text-decoration: none;
        }

        .logo{
            margin-left: 75px;
        }

        .certify{
            color: red;
        }

        .ease{
            color:#1e88e5;
        }

        h2{
            margin-top: 309px;
            margin-left: 10px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            background-image: url('<?= base_url('images/b.jpg') ?>');
            background-size: cover;
            background-position: center;
        }

    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <span class="logo"><img src="<?= base_url('images/logoCertifyEase.png') ?>" alt="CertifyEase" width="90px" height="90px"></span>
        <a href="<?= base_url('/dashboardClient') ?>"><i class="bi bi-house-door"></i>Bienvenue</a>
        <a href="<?= base_url('/dashboardClient/profileDisplayer') ?>"><i class="bi bi-person-circle"></i> Profil</a>
        <a href="<?= base_url('/dashboardClient/paiementDisplayer') ?>"><i class="bi bi-wallet2"></i> Paiement</a>
        <a href="<?= base_url('/dashboardClient/convocation') ?>"><i class="bi bi-file-earmark-text"></i> Convocation</a>
        <a href="<?= base_url('/logout') ?>"><i class="bi bi-box-arrow-right"></i>se déconnecter</a>
        <h2><span class="certify">CERTIFY</span><span class="ease">EASE</span></h2>
    </div>

    <!-- Barre de navigation en haut -->
    <div class="navbar-custom">
                <div class="search-bar">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="icons">
                    <i class="bi bi-bell"></i>
                            <a href="<?= base_url('/dashboardClient/profileDisplayer') ?>">
                                <div class="profile-btn" tabindex="0"> <!-- Profile button with focus -->
                                    <img src="<?= base_url('images/profileIcon.png') ?>" alt="Profile">
                                    <?php  
                                        $session = session(); 
                                        $username = $session->get('username');
                                    ?> 
                                    <span><?= $username ?></span>
                                </div>
                            </a>
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
