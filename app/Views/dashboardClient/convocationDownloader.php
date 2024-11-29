<!DOCTYPE html>
<html>
<head>
    <title>Convocation PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            margin-top: 10px;
        }
        .field-value {
            margin-left: 10px;
        }
        .highlight-red {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Convocation d'examen</h1>
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
    <a href="<?= site_url('dashboardClient/generatePDF') ?>" class="download-button">Télécharger la convocation en PDF</a>

</body>
</html>
