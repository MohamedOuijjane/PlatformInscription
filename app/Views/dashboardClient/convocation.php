<?= $this->extend('dashboardClient/mainDashboard') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* Styles généraux */
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        margin: 10% auto 0;
    }

    .profile-message {
        font-size: 25px;
        font-weight: bold;
        font-family: 'Arial', sans-serif;
        text-align: center;
        color: #2c3e50;
        padding: 10px;
        border-bottom: 2px solid #4CAF50;
        margin-bottom: 30px;
        white-space: nowrap;
    }

    /* Style for the 'Télécharger' button */
    .download-button {
        padding: 8px 40px;
        font-size: 16px;
        font-weight: bold;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }

    .download-button:hover {
        background-color: #45a049;
    }
</style>

<div class="form-container">
    <p class="profile-message">Veuillez télécharger votre convocation </p>

    <!-- Convocation PDF Download Link -->
    <a href="/path/to/convocation.pdf" class="download-button" download>Télécharger</a>
</div>

<?= $this->endSection() ?>
