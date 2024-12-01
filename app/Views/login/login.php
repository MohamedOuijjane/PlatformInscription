<?= $this->extend('mainLayoutForm/mainForm') ?>
<?= $this->section('title') ?>
Se Connecter
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
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

        /* Navbar Styles */
        .navbar {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #ffffff;
            z-index: 1030;
            margin-top: 36px
        }

        .navbar .navbar-nav {
            margin-left: 100px ;
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

          .navbar .navbar-nav .nav-link:hover {
              color: #2596be;
          }
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
            .text-white{
              --bs-text-opacity: 1;
              color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
            }
            .form_container {
            font-family: "Inter", sans-serif;
            width: fit-content;
            height: fit-content;
            display: flex;
            margin: 80px auto;
            margin-top: 120px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 50px 40px 20px 40px;
            background-color: #ffffff;
            box-shadow: 
                    0px 50px 20px rgba(0, 0, 0, 0.01),
                    0px 10px 15px rgba(0, 0, 0, 0.03),
                    0px 5px 15px rgba(0, 0, 0, 0.06),
                    0px 5px 8px rgba(0, 0, 0, 0.08),
                    0px 3px 0px rgba(49, 185, 247);
            border-radius: 31px;
            }
            .logo_container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
            }
            .title {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 700;
            color: #212121;
            }
            .logo_title {
                font-size: 1.5rem;
                color: #212121;
            }
            .subtitle {
            font-size: 0.725rem;
            max-width: 80%;
            text-align: center;
            line-height: 1.1rem;
            color: #8B8E98
            }

            .input_container {
            width: 100%;
            height: fit-content;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 3px;
            
            }
            .icon {
            width: 20px;
            position: absolute;
            z-index: 99;
            left: 12px;
            bottom: 9px;
            }
            .input_label {
            font-size: 0.75rem;
            color: #8B8E98;
            font-weight: 600;
            }
            .input_field {
            width: 350px;
            height: 40px;
            padding: 0 0 0 40px;
            border-radius: 7px;
            outline: none;
            border: 1px solid #00f2ff;
            filter: drop-shadow(0px 1px 0px #efefef)
                drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
            }
            .input_field:focus {
            border: 1px solid transparent;
            box-shadow: 0px 0px 0px 1px #1e88e5;
            background-color: transparent;
            }
            .sign-in_btn {
            width: 100%;
            height: 40px;
            border: none;
            background: #1e88e5;
            border-radius: 7px;
            outline: none;
            margin-bottom: -30px;
            margin-top: 10px;
            color: #ffffff;
            cursor: pointer;
            transition: background 0.3s ease;
            }
            .sign-in_btn:hover {
            background: #1565c0;
            }
        /* Navbar link styling */
            a {
                font-size: 0.85rem;
                color: #1e88e5;
                text-decoration: none;
                font-weight: 600;
            }

            a:hover {
                color: #1565c0;
            }
            .navbar-brand{
              margin-left: 50px;
            }
    </style>

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

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <img src="<?= base_url('images/logoCertifyEase.png') ?>" alt="Passerelle des langues" height="50px" width="50px"  >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Form -->
    <form class="form_container"  action="<?= base_url('login/authenticate') ?>" method="POST">

<div class="input_container">
<div class="logo_container">

  <h1 class="logo_title display-4 font-weight-bold">Connectez-vous</h1>
</div>
        <label class="input_label" for="username_field">Nom d'utilisateur</label>
    <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" class="icon">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" stroke="#141B34" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z"></path>
    </svg>
    <input placeholder="Entrer votre nom d'utilisateur" title="Username input" name="username" type="text" class="input_field" id="username_field">
</div>
<div class="input_container">
  <label class="input_label" for="password_field">Mot de passe</label>
  <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" class="icon">
    <path stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M18 11.0041C17.4166 9.91704 16.273 9.15775 14.9519 9.0993C13.477 9.03404 11.9788 9 10.329 9C8.67911 9 7.18091 9.03404 5.70604 9.0993C3.95328 9.17685 2.51295 10.4881 2.27882 12.1618C2.12602 13.2541 2 14.3734 2 15.5134C2 16.6534 2.12602 17.7727 2.27882 18.865C2.51295 20.5387 3.95328 21.8499 5.70604 21.9275C6.42013 21.9591 7.26041 21.9834 8 22"></path>
    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M6 9V6.5C6 4.01472 8.01472 2 10.5 2C12.9853 2 15 4.01472 15 6.5V9"></path>
    <path fill="#141B34" d="M21.2046 15.1045L20.6242 15.6956V15.6956L21.2046 15.1045ZM21.4196 16.4767C21.7461 16.7972 22.2706 16.7924 22.5911 16.466C22.9116 16.1395 22.9068 15.615 22.5804 15.2945L21.4196 16.4767ZM18.0228 15.1045L17.4424 14.5134V14.5134L18.0228 15.1045ZM18.2379 18.0387C18.5643 18.3593 19.0888 18.3545 19.4094 18.028C19.7299 17.7016 19.7251 17.1771 19.3987 16.8565L18.2379 18.0387ZM14.2603 20.7619C13.7039 21.3082 12.7957 21.3082 12.2394 20.7619L11.0786 21.9441C12.2794 23.1232 14.2202 23.1232 15.4211 21.9441L14.2603 20.7619ZM12.2394 20.7619C11.6914 20.2239 11.6914 19.358 12.2394 18.82L11.0786 17.6378C9.86927 18.8252 9.86927 20.7567 11.0786 21.9441L12.2394 20.7619ZM12.2394 18.82C12.7957 18.2737 13.7039 18.2737 14.2603 18.82L15.4211 17.6378C14.2202 16.4587 12.2794 16.4587 11.0786 17.6378L12.2394 18.82ZM14.2603 18.82C14.8082 19.358 14.8082 20.2239 14.2603 20.7619L15.4211 21.9441C16.6304 20.7567 16.6304 18.8252 15.4211 17.6378L14.2603 18.82ZM20.6242 15.6956L21.4196 16.4767L22.5804 15.2945L21.785 14.5134L20.6242 15.6956ZM15.4211 18.82L17.8078 16.4767L16.647 15.2944L14.2603 17.6377L15.4211 18.82ZM17.8078 16.4767L18.6032 15.6956L17.4424 14.5134L16.647 15.2945L17.8078 16.4767ZM16.647 16.4767L18.2379 18.0387L19.3987 16.8565L17.8078 15.2945L16.647 16.4767ZM21.785 14.5134C21.4266 14.1616 21.0998 13.8383 20.7993 13.6131C20.4791 13.3732 20.096 13.1716 19.6137 13.1716V14.8284C19.6145 14.8284 19.619 14.8273 19.6395 14.8357C19.6663 14.8466 19.7183 14.8735 19.806 14.9391C19.9969 15.0822 20.2326 15.3112 20.6242 15.6956L21.785 14.5134ZM18.6032 15.6956C18.9948 15.3112 19.2305 15.0822 19.4215 14.9391C19.5091 14.8735 19.5611 14.8466 19.5879 14.8357C19.6084 14.8273 19.6129 14.8284 19.6137 14.8284V13.1716C19.1314 13.1716 18.7483 13.3732 18.4281 13.6131C18.1276 13.8383 17.8008 14.1616 17.4424 14.5134L18.6032 15.6956Z"></path>
  </svg>
  <input placeholder="Entrer votre mot de passe" title="Inpit title" name="password" type="password" class="input_field" id="password_field">
</div>
<button title="Sign In" type="submit" class="btn btn-primary sign-in_btn">
  <span>Se connecter</span>
</button>
<br>
<a href="/">Mot de passe oublié?</a>

<?php if (session()->get('error')): ?>
          <div class="alert alert-danger"><?= session()->get('error') ?></div>
        <?php endif; ?>         
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?= $this->endSection() ?>
