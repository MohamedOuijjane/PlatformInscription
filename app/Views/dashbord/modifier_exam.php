<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles globaux */
    .content {
     
    margin-left: 258px;
    padding: 80px;
    background-color: #efefef;
    min-height: 100vh;
} 
   body {

        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #f9fafc, #dbe2ec);
    }
    .container-modifier{
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
        color: black;
        font-weight: bold;
    }

    /* Bouton d'envoi */
    #sv {
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

    /* Styles des alertes */
    .alert {
        margin-bottom: 20px;
        font-size: 0.9rem;
    }

    .alert ul {
        margin: 0;
        padding-left: 20px;
    }
</style>

<div class="container-modifier">
    <div class="card">
        <div class="card-header">Modifier l'Examen</div>
        <div class="card-body">

            
           

            <!-- Formulaire de modification -->
            <form method="post" action="<?= base_url('ExamsController/updateExam/' . $exam['id']) ?>">
                <div class="row g-3">
                    <!-- Champ: Niveau -->
                    <div class="col-md-6">
                        <label for="niveauExam" class="form-label">Niveau</label>
                        <select class="form-control" id="niveauExam" name="niveauExam" required>
                            <option value="">Sélectionner le niveau</option>
                            <option value="A1" <?= $exam['level'] == 'A1' ? 'selected' : '' ?>>A1</option>
                            <option value="A2" <?= $exam['level'] == 'A2' ? 'selected' : '' ?>>A2</option>
                            <option value="B1" <?= $exam['level'] == 'B1' ? 'selected' : '' ?>>B1</option>
                            <option value="B2" <?= $exam['level'] == 'B2' ? 'selected' : '' ?>>B2</option>
                        </select>
                    </div>

                    <!-- Champ: Ville -->
                    <div class="col-md-6">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" value="<?= esc($exam['ville']) ?>" required>
                    </div>

                    <!-- Champ: Adresse -->
                    <div class="col-md-12">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="<?= esc($exam['adresse']) ?>" required>
                    </div>

                    <!-- Champ: Date de l'Examen -->
                    <div class="col-md-6">
                        <label for="dateExam" class="form-label">Date de l'Examen</label>
                        <input type="date" class="form-control" id="dateExam" name="dateExam" value="<?= esc($exam['exam_date']) ?>" required>
                    </div>

                    <!-- Champ: Heure -->
                    <div class="col-md-6">
                        <label for="heureExam" class="form-label">Heure</label>
                        <input type="time" class="form-control" id="heureExam" name="heureExam" value="<?= esc($exam['heure']) ?>" required>
                    </div>

                    <!-- Champ: Date Début -->
                    <div class="col-md-6">
                        <label for="dateDebut" class="form-label">Début des Inscriptions</label>
                        <input type="date" class="form-control" id="dateDebut" name="dateDebut" value="<?= esc($exam['start_date']) ?>" required>
                    </div>

                    <!-- Champ: Date Limite -->
                    <div class="col-md-6">
                        <label for="dateLimite" class="form-label">Date Limite</label>
                        <input type="date" class="form-control" id="dateLimite" name="dateLimite" value="<?= esc($exam['end_date']) ?>" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4" id="sv">Sauvegarder </button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>