<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles généraux */
    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #f4f6f8, #d9e4ec);
    }

    .container-modifier {
        max-width: 700px;
        margin: 70px auto;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .card {
        border-radius: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: none;
        background: #ffffff;
        border: 1px solid beige;
    }

    .card-header {
        background-color: transparent;
        color: #007bff;
        font-weight: bold;
        text-align: center;
        padding-bottom: 5px;
        font-size: 1.5rem;
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ddd;
        transition: border-color 0.3s, box-shadow 0.3s;
        height: 40px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
    }

    /* Styles des icônes */
    .form-group-icon {
        position: relative;
    }

    .form-group-icon i {
        position: absolute;
        top: 73%;
        left: 15px;
        transform: translateY(-50%);
        color: #007bff;
        font-size: 0.9rem;
    }

    /* Bouton */
    .btn-primary {
        background: linear-gradient(135deg, #4CAF50, #36A764);
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 20px;
        transition: background 0.3s, transform 0.2s;
        width: 100%;
        color: #fff;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        background: linear-gradient(135deg, #36A764, #4CAF50);
    }

    /* Messages d'alerte */
    .alert {
        margin-bottom: 20px;
        border-radius: 5px;
    }
</style>

<div class="container-modifier">
    <div class="card">
        <div class="card-header">Modifier l'Examen</div>
        <div class="card-body">

            <!-- Affichage des messages de succès ou d'erreur -->
            <?php if (session()->has('success')): ?>
                <div class="alert alert-success"><?= session('success') ?></div>
            <?php endif; ?>

            <?php if (session()->has('error')): ?>
                <div class="alert alert-danger"><?= session('error') ?></div>
            <?php endif; ?>

            <!-- Formulaire de modification -->
            <form method="post" action="<?= base_url('ExamsController/updateExam/' . $exam['id']) ?>">
                <div class="row g-3">
                    <!-- Champ: Nom de l'Examen -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-journal-text"></i>
                        <label for="nomExam" class="form-label">Nom de l'Examen</label>
                        <input type="text" class="form-control ps-4" id="nomExam" name="nomExam" value="<?= $exam['name'] ?>" required>
                    </div>

                    <!-- Champ: Niveau -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-bar-chart"></i>
                        <label for="niveauExam" class="form-label">Niveau</label>
                        <select class="form-control ps-4" id="niveauExam" name="niveauExam" required>
                            <option value="">Sélectionner le niveau</option>
                            <option value="A1" <?= $exam['level'] == 'A1' ? 'selected' : '' ?>>A1</option>
                            <option value="A2" <?= $exam['level'] == 'A2' ? 'selected' : '' ?>>A2</option>
                            <option value="B1" <?= $exam['level'] == 'B1' ? 'selected' : '' ?>>B1</option>
                            <option value="B2" <?= $exam['level'] == 'B2' ? 'selected' : '' ?>>B2</option>
                            <option value="C1" <?= $exam['level'] == 'C1' ? 'selected' : '' ?>>C1</option>
                            <option value="C2" <?= $exam['level'] == 'C2' ? 'selected' : '' ?>>C2</option>
                        </select>
                    </div>

                    <!-- Champ: Date de Début -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-calendar-event"></i>
                        <label for="dateDebut" class="form-label">Date de Début</label>
                        <input type="date" class="form-control ps-4" id="dateDebut" name="dateDebut" value="<?= $exam['start_date'] ?>" required>
                    </div>

                    <!-- Champ: Date Limite d'Inscription -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-calendar-x"></i>
                        <label for="dateLimite" class="form-label">Date Limite d'Inscription</label>
                        <input type="date" class="form-control ps-4" id="dateLimite" name="dateLimite" value="<?= $exam['end_date'] ?>" required>
                    </div>

                    <!-- Champ: Date de l'Examen -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-calendar-check"></i>
                        <label for="dateExam" class="form-label">Date de l'Examen</label>
                        <input type="date" class="form-control ps-4" id="dateExam" name="dateExam" value="<?= $exam['exam_date'] ?>" required>
                    </div>

                    <!-- Champ: Heure de l'Examen -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-clock"></i>
                        <label for="heureExam" class="form-label">Heure de l'Examen</label>
                        <input type="time" class="form-control ps-4" id="heureExam" name="heureExam" required>
                    </div>

                    <!-- Champ: Lieu -->
                    <div class="col-md-12 form-group-icon">
                        <i class="bi bi-geo-alt"></i>
                        <label for="lieuExam" class="form-label">Lieu</label>
                        <input type="text" class="form-control ps-4" id="lieuExam" name="lieuExam" value="<?= $exam['location'] ?>" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Sauvegarder les Modifications</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
