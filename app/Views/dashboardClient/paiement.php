<?= $this->extend('dashboardClient/mainDashboard') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* Styles généraux */
    .form-container {
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: 10% auto 0;
    }

    .form-group {
        width: 100%;
        margin-bottom: 20px;
        position: relative;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group .input-icon {
        position: absolute;
        left: 10px;
        top: 70%;
        transform: translateY(-50%);
        color: #666;
    }

    .form-group input {
        width: 100%;
        padding: 10px 10px 10px 35px; /* Extra left padding for icon */
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Style for the 'Valider' button */
    .submit-button {
        padding: 8px 40px; /* Adjust padding for a smaller button */
        font-size: 16px;
        font-weight: bold;
        margin-left: 45%;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        display: inline-flex; /* Prevents full-width stretching */
        
    }

    .submit-button:hover {
        background-color: #45a049;
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
        margin-left: -15% ;
        white-space: nowrap;
    }
</style>
<form action="<?= base_url('/dashboardClient/paiement') ?>" method="POST">
    <div class="form-container">
        <p class="profile-message">Nous vous prions de bien vouloir poursuivre le paiement</p>
        <div class="form-group">
            <label for="reference">Veuillez entrer le numéro de référence du paiement</label>
            <i class="fa fa-hashtag input-icon"></i>
            <input type="text" id="reference" name="reference" placeholder="Numéro de référence" required>
        </div>

        <div class="form-group">
            <label for="payment_date">La date du paiement</label>
            <i class="fa fa-calendar input-icon"></i>
            <input type="date" id="payment_date" name="payment_date" required>
        </div>
    </div>
    <button type="submit" class="submit-button">Valider</button>
</form>
<?= $this->endSection() ?>
