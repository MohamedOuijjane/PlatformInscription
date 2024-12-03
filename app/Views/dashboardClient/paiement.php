<?= $this->extend('dashboardClient/mainDashboard') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* Styles généraux */
    .form-container {
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: 10% auto;
        margin-top: 20%;
    }

    .form-group {
        width: 100%;
        margin-bottom: 20px;
        position: relative;
    }

    .form-group label {
        display: block;
        font-size: 0.9rem;
        color: #8B8E98;
        font-weight: 600;
        margin-bottom: 2px;
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
        padding: 8px 8px 8px 30px; /* Extra left padding for icon space */
        font-size: 16px;
        border: 1px solid #00f2ff;
        border-radius: 9px;
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
    }

    /* Style for the 'Valider' button */
    .submit-button {
        width: 100%;
        padding: 12px;
        margin: 20px 0;
        margin-left: 1px;
        font-size: 18px;
        font-weight: bold;
        outline: none;
        background: #1e88e5;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s ease;
        text-align: center; /* Prevents full-width stretching */
        
    }

    .submit-button:hover {
        background-color: #1565c0;
    }
    
    .profile-message {
        font-size: 25px;
        font-weight: bold;
        font-family: 'Arial', sans-serif;
        text-align: center;
        color: #2c3e50;
        padding: 10px;
        border-bottom: 2px solid #1e88e5;
        margin-bottom: 30px;
        margin-left: -15% ;
        white-space: nowrap;
    }
</style>
<div class="form-container">
<form action="<?= base_url('/dashboardClient/paiement') ?>" method="POST">
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

    <button type="submit" class="submit-button">Valider</button>
</form>
</div>

<?= $this->endSection() ?>
