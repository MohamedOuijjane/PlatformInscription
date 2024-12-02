<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
   /* Styles globaux */
   .content {
     
     margin-left: 258px;
     padding: 80px;
     background-color: #efefef;
     min-height: 100vh;
 }    body {
 
         font-family: 'Roboto', sans-serif;
         background: linear-gradient(135deg, #f9fafc, #dbe2ec);
     }
 
     .container-ajouter {
        margin-top: 50px;
     }
 
     /* En-tête de la carte */
     .card-header {
         background-color: #4e73df;
     color: #fdfdfd;
     font-weight: bold;
     padding: 14px;
     font-size: 1.2rem;
     border-radius: 12px 12px 0 0;
     box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
     }
 
     /* Étiquettes des champs */
     .form-label {
     font-weight: bold;
     color: #343a40;
     font-size: 1rem;
     margin-bottom: 14px;
     }
 
     /* Champs du formulaire */
     .form-control {
         border-radius: 7px;
     border: 2px solid #cbcbcb;
     height: 54px;
     font-size: -1.05rem;
     padding-left: 17px;
     transition: all 0.3s ease-in-out;
     }
 
     .form-control:focus {
         border-color: #2e59d9;
         box-shadow: 0 0 5px rgba(46, 89, 217, 0.3);
     }
 
     .form-control::placeholder {
         color: #b0b3c0;
         font-style: italic;
     }
 
     /* Bouton d'envoi */
     .btn-success {
         background-color: #4e73df;
     border: none;
     padding: 11px 45px;
     font-size: 1rem;
     font-weight: bold;
     border-radius: 8px;
     width: 22%;
     color: white;
     /* text-transform: uppercase; */
     transition: all 0.3s ease-in-out;
     border-radius: 4px ;
     margin-left: 77%;
     }
 
     .btn-success:hover {
         background-color: #4e73df;
     }
 
    /* en Cas error insertion dans le model  */
    .error-message {
        color: red;
        font-size: 0.9rem;
        margin-top: -10px;
        margin-bottom: 10px;
    }

    .btn-success {
        background-color: #4e73df;
        border: none;
        padding: 11px 45px;
        font-size: 1rem;
        font-weight: bold;
        color: white;
        transition: all 0.3s ease-in-out;
        margin-top: 20px;
    }

    .btn-success:hover {
        background-color: #375a9e;
    }

    
    .top-alert {
        position: fixed;
        top: 60px;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 800px;
        border-radius: 8px;
        color: white;
        padding: 15px 20px;
        font-size: 1rem;
        z-index: 1050;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        animation: slideDown 0.5s ease-in-out;
    }

    .top-alert-success {
        background-color: #1cc88a;
    }

    .top-alert-error {
        background-color: #e74a3b;
    }

    .top-alert button {
        background: none;
        border: none;
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
    }
</style>

<!-- Success Alert -->
<?php if (session()->has('success')): ?>
    <div class="top-alert top-alert-success">
        <?= session('success') ?>
        <button onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
<?php endif; ?>

<!-- General Error Alert -->
<?php if (session()->has('error')): ?>
    <div class="top-alert top-alert-error">
        <?= session('error') ?>
        <button onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
<?php endif; ?>

<div class="container-ajouter">
    <div class="card">
        <div class="card-header">Ajouter un Examen</div>
        <div class="card-body">
            <form method="post" action="<?= base_url('ExamsController/addExam') ?>">
                <div class="row g-3">
                    <!-- Niveau Field -->
                    <div class="col-md-6">
                        <label for="niveauExam" class="form-label">Niveau</label>
                        <select class="form-control <?= isset(session('fieldErrors')['niveauExam']) ? 'is-invalid' : '' ?>" id="niveauExam" name="niveauExam">
                            <option value="<?= old('level') ?>">Sélectionner le niveau</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                        </select>
                       
                    </div>

                    <!-- Ville Field -->
                    <div class="col-md-6">
                        <label for="villeExam" class="form-label">Ville</label>
                        <input type="text" class="form-control <?= isset(session('fieldErrors')['ville']) ? 'is-invalid' : '' ?>" id="villeExam" name="ville" value="<?= old('ville') ?>">
                       
                    </div>

                    <!-- Adresse Field -->
                    <div class="col-md-12">
                        <label for="lieuExam" class="form-label">Adresse</label>
                        <input type="text" class="form-control <?= isset(session('fieldErrors')['adresse']) ? 'is-invalid' : '' ?>" id="lieuExam" name="adresse" value="<?= old('adresse') ?>">
                       
                    </div>

                    <!-- Date and Time Fields -->
                    <div class="col-md-6">
                        <label for="dateExam" class="form-label">Date de l'Examen</label>
                        <input type="date" class="form-control <?= isset(session('fieldErrors')['dateExam']) ? 'is-invalid' : '' ?>" id="dateExam" name="dateExam" value="<?= old('dateExam') ?>">
                        
                    </div>
                    <div class="col-md-6">
                        <label for="heureExam" class="form-label">Heure</label>
                        <input type="time" class="form-control <?= isset(session('fieldErrors')['heureExam']) ? 'is-invalid' : '' ?>" id="heureExam" name="heureExam" value="<?= old('heureExam') ?>">
                       
                    </div>

                    <!-- Start and End Dates -->
                    <div class="col-md-6">
                        <label for="dateDebut" class="form-label">Début des Inscriptions</label>
                        <input type="date" class="form-control <?= isset(session('fieldErrors')['dateDebut']) ? 'is-invalid' : '' ?>" id="dateDebut" name="dateDebut" value="<?= old('dateDebut') ?>">
                       
                    </div>
                    <div class="col-md-6">
                        <label for="dateLimite" class="form-label">Date Limite</label>
                        <input type="date" class="form-control <?= isset(session('fieldErrors')['dateLimite']) ? 'is-invalid' : '' ?>" id="dateLimite" name="dateLimite" value="<?= old('dateLimite') ?>">
                       
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-4">Ajouter</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
