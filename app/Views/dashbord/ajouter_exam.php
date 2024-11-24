<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #f4f6f8, #d9e4ec);
    }

    .container-ajouter {
        max-width: 700px;
        margin: 70px auto;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: none;
        background: #ffffff;
    }

    .card-header {
        background-color: #007bff;
        color: #ffffff;
        font-weight: bold;
        text-align: center;
        padding: 10px 0;
        font-size: 1.5rem;
        border-radius: 10px 10px 0 0;
    }

    .form-label {
        font-weight: bold;
        color: #555;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ddd;
        height: 40px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-success {
        background: #28a745;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 5px;
        width: 100%;
        color: #ffffff;
    }

    .btn-success:hover {
        background: #218838;
    }

    .alert {
        margin-bottom: 20px;
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
