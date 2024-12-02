<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convocation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            margin-bottom: 10%;
            margin-left: 10%;
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
            display: inline-block;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .download-button:hover {
            background-color: #218838;
        }

        .footer {
            background-color: #f8f9fa;
            border-top: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #6c757d;
            margin-top: 50px;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        h5 {
            margin-left: 85%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="card-header">
                <img src="<?= base_url('images/logo.png') ?>" width="80px" height="80px" alt="Centre CertifyEase" class="img-fluid rounded-circle mb-3">
                <h1>Bonjour cher(ère) client(e): <?= esc($username); ?></h1>
            </div>

            <div class="mt-4">
                <p class="mb-2"><span class="field-label">Nom:</span><span class="field-value"><?= $nom ?></span></p><br>
                <p class="mb-2"><span class="field-label">Prénom:</span><span class="field-value"><?= $prenom ?></span></p><br>
                <p class="mb-2"><span class="field-label">Email:</span><span class="field-value"><?= $email ?></span></p><br>
                <p class="mb-2"><span class="field-label">Numéro de téléphone:</span><span class="field-value"><?= $telephone ?></span></p><br>
                <p class="mb-2"><span class="field-label">CIN:</span><span class="field-value"><?= $CIN ?></span></p><br>
                <p class="mb-2"><span class="field-label">Adresse:</span><span class="field-value"><?= $adresse ?></span></p><br>
                <p class="mb-2"><span class="field-label">Référence d'inscription:</span><span class="field-value"><?= $reference ?></span></p><br>
                <p class="mb-2"><span class="field-label">Date d'examen:</span><span class="field-value highlight-red"><?= $examDate ?></span></p><br>
                <p class="mb-2"><span class="field-label">Adresse d'examen:</span><span class="field-value"><?= $ville ?>, <?= $examAddress ?></span></p><br>
            </div>
            <div class="footer">
                <h5>Le : <?= date('d-m-Y'); ?></h5>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
