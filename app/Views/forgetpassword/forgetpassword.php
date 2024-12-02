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
            background-image: url('<?= base_url('images/b.jpg') ?>'); /* Chemin de l'image de fond */
            background-size: cover;
            background-position: center;
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
            
            color: #ffffff;
            margin-bottom: 20px;
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

    
    <!-- Login Form -->
    <form class="form_container"  action="<?= base_url('') ?>" method="POST">

<div class="input_container">
    <div class="logo_container">
    <h1 class="logo_title display-4 font-weight-bold">Entrer votre adresse Email:</h1>
    <div class="input_container">
            <label class="input_label" for="email_field">Email</label>
            <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" class="icon">
            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#141B34" d="M7 8.5L9.94202 10.2394C11.6572 11.2535 12.3428 11.2535 14.058 10.2394L17 8.5"></path>
            <path stroke-linejoin="round" stroke-width="1.5" stroke="#141B34" d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z"></path>
            </svg>
            <input placeholder="Veuillez entrer votre email" title="email" name="email" type="text" class="input_field" id="email_field" value="<?= old('email') ?>" required>
     </div>
</div>

</div>
<button title="Sign In" type="submit" class="btn btn-primary sign-in_btn">
  <span>Envoyer</span>
</button>
    
</form>

<?= $this->endSection() ?>
