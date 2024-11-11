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
        font-weight: bold;
        margin-bottom: 5px;
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
        border: 1px solid #ccc;
        border-radius: 4px;
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
        background-color: #4CAF50; /* Green background */
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
    }

    .submit-button:hover {
        background-color: #45a049; /* Darker green */
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
    border-bottom: 2px solid #4CAF50; /* Adds a stylish underline */
    }

</style>

<div class="form-container">
        <p class="profile-message">Merci de bien vouloir mettre à jour les informations de votre profil, cher(e) client(e).</p>

    <div class="form-group">
        <label for="nom">Nom</label>
        <i class="fa fa-user input-icon"></i>
        <input type="text" id="nom" placeholder="Entrer le nom">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <i class="fa fa-user input-icon"></i>
        <input type="text" id="prenom" placeholder="Entrer le prénom">
    </div>
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <i class="fa fa-user input-icon"></i>
        <input type="text" id="username" value="Mohamed123" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <i class="fa fa-envelope input-icon"></i>
        <input type="email" id="email" value="ouijjane22@admin.com" readonly>
    </div>
    <div class="form-group">
        <label for="date-naissance">Date de Naissance</label>
        <i class="fa fa-calendar input-icon"></i>
        <input type="date" id="date-naissance">
    </div>
    <div class="form-group">
        <label for="telephone">Numéro de Téléphone</label>
        <i class="fa fa-phone input-icon"></i>
        <input type="tel" id="telephone" placeholder="Entrer le numéro de téléphone">
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <i class="fa fa-map-marker input-icon"></i>
        <input type="text" id="adresse" placeholder="Entrer l'adresse">
    </div>
</div>

<!-- Enregister button -->
<button type="button" class="submit-button">Enregister</button>

<?= $this->endSection() ?>
