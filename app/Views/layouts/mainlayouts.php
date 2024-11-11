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

        .footer-bottom {
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
                padding: 10px 15px;
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

    </style>
</head>
<body>
    <!-- Top Navbar -->
        <nav class="top-navbar">
            <div class="container-fluid d-flex justify-content-between">
                <span>Lundi au Jeudi entre 10h et 16h</span>
                <div class="contact-info">
                    <a href="mailto:contact@osd.ma" class="text-white">
                        <i class="bi bi-envelope"></i> contact@pdl.ma
                    </a>
                    <span class="mx-3 text-white">|</span>
                    <span class="text-white">
                        <i class="bi bi-telephone"></i> 06 56 70 62 70 / +212 656-706270
                    </span>
                    <span class="mx-3 text-white">|</span>
                    <a href="<?= base_url('/login') ?> " class="text-white">
                        <i class="bi bi-person"></i> Login
                    </a>
                </div>
            </div>
        </nav>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-hidden">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/')?> ">
            <img src="<?= base_url('images/logo.png') ?>" alt="Passerelle des langues" style="height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/calendrie') ?>">Calendrier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/inscription') ?>">Inscription</a>
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
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/')?> ">
            <img src="<?= base_url('images/logo.png') ?>" alt="Passerelle des langues" style="height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/calendrie') ?>">Calendrier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/inscription') ?>">Inscription</a>
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
    <footer class="footer">
  <div class="container">
    <div class="footer-section">
      <h3>PDL</h3>
      <p>
        En 2001, Le Centre ÖSD est devenu un centre d'examen d'allemand agréé par le bureau central du
        « Diplôme autrichien de langue allemande ». Il organise les examens et délivre les diplômes A1, A2,
        B1, B2, C1 et C2. Le professeur Dr. Rachid Jai-Mansouri est le président de la commission des
        examens PDL.
      </p>
    </div>
    <div class="footer-section">
      <h3>Adresse</h3>
      <p>Avenue Tilila, Route De Mohammed5 (en face de la Mosquée Elmassi à Derb El faqir)</p>
      <p>30050 AGADIR / Maroc</p>
      <p>Tél: 06 56 70 62 70 / +212 656-706270</p>
      <p>Email: <a href="mailto:contact@PDL.ma">contact@PDL.ma</a></p>
    </div>
    <div class="footer-section">
      <h3>Liens Rapides</h3>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Salle & Table</a></li>
        <li><a href="#">Inscription</a></li>
        <li><a href="#">Préinscription</a></li>
        <li><a href="#">Examen</a></li>
        <li><a href="#">Calendrier</a></li>
        <li><a href="#">Paiement</a></li>
        <li><a href="#">Convocation</a></li>
        <li><a href="#">Résultat</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>COPYRIGHT © 2023. ALL RIGHTS RESERVED.</p>
  </div>
</footer>
        <script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector('.navbar-hidden');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop && scrollTop > 50) {
            // Show navbar when scrolling down and away from the top
            navbar.classList.add('navbar-visible');
            navbar.classList.remove('navbar-hidden');
        } else if (scrollTop <= lastScrollTop || scrollTop <= 50) {
            // Hide navbar when scrolling up or near the top
            navbar.classList.remove('navbar-visible');
            navbar.classList.add('navbar-hidden');
        }

        lastScrollTop = scrollTop;
    });
});
</script>
    <!-- Bootstrap 5.3.3 JS Bundle avec integrity et crossorigin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
