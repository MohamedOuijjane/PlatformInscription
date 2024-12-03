<?= $this->extend('dashboardClient/mainDashboard') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* General Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Inter", sans-serif;
    }

    body {
        background-color: #f4f4f9;
    }

    .container {
        margin-top: 5%;
        display: flex;
        justify-content: center;
    }

    .form-container {
        width: 100%;
        max-width: 600px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 20px;
        margin-bottom: 10% ;
    }

    .card-header {
        background-color: #f8f9fa;
        padding: 20px;
        border-bottom: 1px solid #e9ecef;
        text-align: center;
    }

    .card-header h1 {
        font-size: 22px;
        color: #343a40;
        margin-bottom: 5px;
    }

    .card-header h5 {
        font-size: 14px;
        color: #6c757d;
    }

    .highlight-red {
        color: red;
        font-weight: bold;
    }

    .field-label {
        font-weight: bold;
        color: #333;
        margin-right: 10px;
    }

    .field-value {
        color: #555;
    }

    .download-button {
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
        margin-top: 50px;
    }

    .download-button:hover {
        background-color: #1565c0;
    }
</style>


<div class="container">
    <div class="form-container">
        <div class="card-header">
            <img src="<?= base_url('images/logoCertifyEase.png') ?>" width="80px" height="80px" alt="Centre CertifyEase">
            <h1>Bonjour cher(ère) client(e):  <?= esc($username); ?>.</h1>
            <h5>Le : <?= date('d-m-Y'); ?></h5>
        </div>

        <div>
            <p><span class="field-label">Nom:</span><span class="field-value"><?= $nom ?></span></p>
            <p><span class="field-label">Prénom:</span><span class="field-value"><?= $prenom ?></span></p>
            <p><span class="field-label">Email:</span><span class="field-value"><?= $email ?></span></p>
            <p><span class="field-label">Numéro de téléphone:</span><span class="field-value"><?= $telephone ?></span></p>
            <p><span class="field-label">CIN:</span><span class="field-value"><?= $CIN ?></span></p>
            <p><span class="field-label">Adresse:</span><span class="field-value"><?= $adresse ?></span></p>
            <p><span class="field-label">Référence d'inscription:</span><span class="field-value"><?= $reference ?></span></p>
            <p><span class="field-label">Date d'examen:</span><span class="field-value highlight-red"><?= $examDate ?></span></p>
            <p><span class="field-label">Adresse d'examen:</span><span><?= $ville ?>, <?=   $examAddress ?></span></p>
        </div>

        <?php if ($canDownloadConvocation): ?>
            <a href="<?= site_url('dashboardClient/convocationDownloader') ?>" class="btn btn-success">Télécharger la convocation en PDF</a>
        <?php else: ?>
            <div class="alert alert-danger">Votre convocation sera disponible après la confirmation du paiement.</div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
