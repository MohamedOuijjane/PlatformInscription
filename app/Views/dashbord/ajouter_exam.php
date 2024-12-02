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

<div class="container-ajouter">
    <div class="card">
        <div class="card-header">Ajouter un Examen</div>
        <div class="card-body">

            <!-- Affichage des messages de succès ou d'erreur -->
            <?php if (session()->has('success')): ?>
                <div class="alert alert-success">
                    <?= esc(session('success')) ?>
                </div>
            <?php endif; ?>

            <?php if (session()->has('error')): ?>
                <?php if (is_array(session('error'))): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach (session('error') as $err): ?>
                                <li><?= esc($err) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger"><?= esc(session('error')) ?></div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Formulaire -->
            <form method="post" action="<?= base_url('ExamsController/addExam') ?>">
                <div class="row g-3">
                    <!-- Champ: Niveau -->
                    <div class="col-md-6">
                        <label for="niveauExam" class="form-label">Niveau</label>
                        <select class="form-control" id="niveauExam" name="niveauExam" required>
                            <option value="">Sélectionner le niveau</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                        </select>
                    </div>

                    <!-- Champ: Ville -->
                    <div class="col-md-6">
                        <label for="villeExam" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="villeExam" name="ville" placeholder="Ville de l'examen" required>
                    </div>

                    <!-- Champ: Adresse -->
                    <div class="col-md-12">
                        <label for="lieuExam" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="lieuExam" name="adresse" placeholder="Adresse complète de l'examen" required>
                    </div>

                    <!-- Champ: Date de l'Examen -->
                    <div class="col-md-6">
                        <label for="dateExam" class="form-label">Date de l'Examen</label>
                        <input type="date" class="form-control" id="dateExam" name="dateExam" required>
                    </div>

                    <!-- Champ: Heure -->
                    <div class="col-md-6">
                        <label for="heureExam" class="form-label">Heure</label>
                        <input type="time" class="form-control" id="heureExam" name="heureExam" required>
                    </div>

                    <!-- Champ: Date Début d'Inscription -->
                    <div class="col-md-6">
                        <label for="dateDebut" class="form-label">Début des Inscriptions</label>
                        <input type="date" class="form-control" id="dateDebut" name="dateDebut" required>
                    </div>

                    <!-- Champ: Date Limite -->
                    <div class="col-md-6">
                        <label for="dateLimite" class="form-label">Date Limite</label>
                        <input type="date" class="form-control" id="dateLimite" name="dateLimite" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-4">Ajouter</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
