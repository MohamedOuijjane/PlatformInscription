<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Bootstrap 5.3.3 CSS avec integrity et crossorigin -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    /* Styles de base pour l'ensemble de la page */
    * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            
        }

        /* Conteneur de page principal */
        .page-content {
           
            min-height: 80vh;
            padding-top: 20px;
        }
        .navbar-brand {
            margin-right: 800px; 
            margin-left: 50px;
        }
        /* top nav bar */
        .top-navbar {
            background-color: #0099cc;
            color: white;
            padding: 5px 0;
        }
        .top-navbar .contact-info a, .top-navbar .contact-info span {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }
        /* Footer */
        .footer {
            background-color: #222;
            color: #ddd;
            padding: 40px 0;
            text-align: left;
            position: relative; /* Nécessaire pour positionner le logo en bas à droite */
            padding-bottom: 60px; /* Espace pour éviter que le logo chevauche le texte */
        }
        .footer-logo {
            position: absolute;
            bottom: 20%;
            right: 0;
            height: 163px;
            margin: 12px;
            margin-right: 20px;
        }
        .footer .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            margin: 10px;
            min-width: 250px;
        }

        .footer-section h3 {
            color: #00bcd4;
            margin-bottom: 15px;
            font-size: 2rem;
             font-weight: bold; 
        }

        .footer-section p,
        .footer-section a {
            color: #ddd;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer-section a:hover {
            color: #00bcd4;
        }

        .footer-bottom p{
            text-align: center;
            padding-top: 10px;
            border-top: 1px solid #333;
            font-size: 14px;
            margin-top: 20px;
        }
        /* Navbar hidden and visible classes */
            .navbar-hidden {
                transform: translateY(-100%);
                transition: transform 0.5s ease-in-out;
            }

            .navbar-visible {
                transform: translateY(0);
            }
            /* Center Navbar Links */
            .navbar .navbar-nav {
                margin: 0 auto; /* Center the links in the navbar */
            }

            .navbar .navbar-nav .nav-item {
                position: relative;
                padding: 0 15px;
            }

            .navbar .navbar-nav .nav-link {
                font-size: 1.1em;
                font-weight: 500;
                color: #333;
                padding: 10px 10px;
                text-transform: uppercase;
                transition: color 0.3s ease;
            }

            /* Hover Effects */
            .navbar .navbar-nav .nav-link:hover {
                color: #2596be;
            }

            /* Underline Animation */
            .navbar .navbar-nav .nav-item::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 50%;
                width: 0;
                height: 2px;
                background-color: #2596be;
                transition: width 0.3s ease, left 0.3s ease;
            }

            .navbar .navbar-nav .nav-item:hover::after {
                width: 100%;
                left: 0;
            }
            .navbar-fixed-top {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1030; /* Garder la navbar au-dessus des autres éléments */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optionnel pour une ombre subtile */
                background-color: white; /* Conserver la couleur de fond même si elle était transparente */
                transition: top 0.3s ease-in-out; /* Animation lors de l'apparition/disparition */
            }


    </style>
</head>
<body>
    <!-- Top Navbar -->
        <nav class="top-navbar">
            <div class="container-fluid d-flex justify-content-between">
                <span>Lundi au Jeudi entre 10h et 16h</span>
                <div class="contact-info">
                    <a href="mailto:ouijjane22@gmail.com" class="text-white">
                        <i class="bi bi-envelope"></i> contact@certifyease.ma
                    </a>
                    <span class="mx-3 text-white">|</span>
                    <span class="text-white">
                        <i class="bi bi-telephone"></i> 06 56 70 62 70 / +212 656-706270
                    </span>
                    <span class="mx-3 text-white">|</span>
                    <a href="<?= base_url('/login') ?> " class="text-white">
                        <i class="bi bi-person"></i> Connexion 
                    </a>
                </div>
            </div>
        </nav>
    
<!-- Navbar 2 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Logo aligné à gauche -->
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="<?= base_url('images/logoCertifyEase.png') ?>" alt="Passerelle des langues" height="50px" width="50px" >
        </a>
        <!-- Bouton pour le menu responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu aligné à droite -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/calendrie') ?>">Calendrier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/inscriptionPage') ?>">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">À propos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Contenu principal -->
    <div class="container-page-content">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <footer class="footer" id="footer" style="position: relative;">
  <div class="container">
    <div class="footer-section">
      <div class="footer-logo-text" style="font-size: 2.5rem; font-weight: bold;">
        <span style="color: red;">CERTIFY</span>
        <span style="color: #00bcd4;">EASE</span>
      </div>
      <p>
        En 2024, le Centre CERTIFYEASE a obtenu l'agrément en tant que centre officiel d'examen de langue française, délivré par un organisme central reconnu. Depuis, il organise des examens et attribue des certifications correspondant aux niveaux A1, A2, B1, B2, C1 et C2 du Cadre Européen Commun de Référence pour les Langues (CECRL). Sous la présidence du professeur Dr. Rachid Jai-Mansouri, président de la commission des examens CERTIFYEASE, le centre garantit des évaluations de haute qualité, répondant aux standards internationaux en matière d'apprentissage et de certification linguistique.
      </p>
    </div>
    <div class="footer-section">
      <h3>Adresse</h3>
      <p>Avenue Tilila, Route De Mohammed5 (en face de la Mosquée Elmassi à Derb El faqir)</p>
      <p>30050 AGADIR / Maroc</p>
      <p>Tél: 06 56 70 62 70 / +212 656-706270</p>
      <p>Email: <a href="mailto:contact@cerifyease.ma">contact@cerifyease.ma</a></p>
    </div>
    <div class="footer-section">
      <h3>Liens Rapides</h3>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Préinscription</a></li>
        <li><a href="#">Examen</a></li>
        <li><a href="#">Calendrier</a></li>
        <li><a href="#">Paiement</a></li>
        <li><a href="#">Convocation</a></li>
      </ul>
    </div>
  </div>
  <!-- Ajout du logo en bas à droite -->
  <img src="<?= base_url('images/logoCertifyEase.png') ?>" alt="Logo" class="footer-logo">
  <div class="footer-bottom">
    <p>COPYRIGHT © 2023. ALL RIGHTS RESERVED.</p>
  </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector('.navbar');
    const offsetTrigger = 50; // Seuil en pixels pour activer la classe

    window.addEventListener('scroll', function() {
        if (window.scrollY > offsetTrigger) {
            navbar.classList.add('navbar-fixed-top');
        } else {
            navbar.classList.remove('navbar-fixed-top');
        }
    });
});

</script>
    <!-- Bootstrap 5.3.3 JS Bundle avec integrity et crossorigin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
