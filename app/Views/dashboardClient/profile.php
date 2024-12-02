<?= $this->extend('dashboardClient/mainDashboard') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* Styles généraux */
    .form-container {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10%;
    }

    .form-group {
        flex: 0 0 48%; /* Adjusts width of each input */
        margin: 1%;
        position: relative;
    }

    .form-group label {
        display: block;
        font-size: 0.85rem;
            color: #8B8E98;
            font-weight: 600;
        margin-bottom: 2px;
    }

    .form-group .input-icon {
        position: absolute;
        left: 9px;
        top: 71%;
        transform: translateY(-50%);
        color: #666;
    }

    .form-group input {
        width: 100%;
        padding: 8px 8px 8px 30px; /* Extra left padding for icon space */
        font-size: 16px;
        border: 1px solid #00f2ff;
        border-radius: 9px;
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);

    }


    input[readonly] {
        background-color: #f9f9f9;
        color: #666;
    }

    /* Style for the 'Enregister' button */
    .submit-button {
        width: 100%;
        padding: 12px;
        margin: 20px 0;
        font-size: 18px;
        font-weight: bold;
        outline: none;
        background: #1e88e5;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s ease;
        text-align: center;
    }

    .submit-button:hover {
        background: #1565c0;
    }
    .profile-message {
    font-size: 24px;
    font-weight: bold;
    font-family: 'Arial', sans-serif; /* Change to a preferred font family */
    text-align: center;
    margin-left: 10%;
    margin-bottom: 30px;
    color: #2c3e50; /* A nice dark blue-gray color */
    padding: 10px;
    border-bottom: 2px solid #1e88e5; /* Adds a stylish underline */
    }

</style>

<div class="container">
    <form action="<?= base_url('dashboardClient/profile') ?>" method="POST">
        <div class="form-container">
            <p class="profile-message">Merci de bien vouloir mettre à jour les informations de votre profil, cher(e) client(e).</p>

            <!-- Messages d'erreur -->
            <?php if (session()->get('errors')): ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->get('errors') as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Messages de succès -->
           

            <!-- Champs du formulaire -->
            <div class="form-group">
                <label for="nom">Nom</label>
                <i class="fa fa-user input-icon"></i>
                <input type="text" id="nom" name="nom" placeholder="Entrer le nom" value="<?= esc($user['lastname'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <i class="fa fa-user input-icon"></i>
                <input type="text" id="prenom" name="prenom" placeholder="Entrer le prénom" value="<?= esc($user['firstname'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <i class="fa fa-user input-icon"></i>
                <input type="text" id="username" name="username" value="<?= esc($user['username'] ?? '') ?>" readonly>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <i class="fa fa-envelope input-icon"></i>
                <input type="email" id="email" name="email" value="<?= esc($user['email'] ?? '') ?>" readonly>
            </div>

            <div class="form-group">
                <label for="date_naissance">Date de Naissance</label>
                <i class="fa fa-calendar input-icon"></i>
                <input type="date" id="date_naissance" name="date_naissance" value="<?= esc($user['birth_date'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="telephone">Numéro de Téléphone</label>
                <i class="fa fa-phone input-icon"></i>
                <input type="tel" id="telephone" name="telephone" placeholder="Entrer le numéro de téléphone" value="<?= esc($user['phone_number'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <i class="fa fa-map-marker input-icon"></i>
                <input type="text" id="adresse" name="adresse" placeholder="Entrer l'adresse" value="<?= esc($user['address'] ?? '') ?>" required>
            </div>
            <?php if (session()->get('success')): ?>
                <div class="alert alert-success">
                    <p><?= session('success') ?></p>
                </div>
            <?php endif; ?>
            <!-- Bouton Enregistrer -->
            <button type="submit" class="submit-button">Enregister</button>
        </div>
    </form>
</div>
    



<?= $this->endSection() ?>
