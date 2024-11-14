<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles généraux */
    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #f4f6f8, #d9e4ec);
    }
    
    .container-ajouter {
    max-width: 700px;
    margin: 70px auto;
    height: auto;
    
    box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
    padding: 30px;
   
}

    .card {
        margin-top: 10px;
        width: 700px;
        height: 550px;
        border-radius: 10px;
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
        padding-bottom: 40px;
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
    .btn-success {
        background: linear-gradient(135deg, #4CAF50, #36A764);
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 20px;
        transition: background 0.3s, transform 0.2s;
        width: 100%;
        color: #fff;
    }

    .btn-success:hover {
        transform: translateY(-3px);
        background: linear-gradient(135deg, #36A764, #4CAF50);
    }
</style>

<div class="container-ajouter">
    <div class="card">
        <div class="card-header">Ajouter un Examen</div>
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <!-- Champ: Nom de l'Examen -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-journal-text"></i>
                        <label for="nomExam" class="form-label">Nom de l'Examen</label>
                        <input type="text" class="form-control ps-4" id="nomExam" placeholder="Entrer le nom de l'examen">
                    </div>

                    <!-- Champ: Niveau -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-bar-chart"></i>
                        <label for="niveauExam" class="form-label">Niveau</label>
                        <select class="form-control ps-4" id="niveauExam">
                            <option value="">Sélectionner le niveau</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                        </select>
                    </div>

                    <!-- Champ: Date de Début -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-calendar-event"></i>
                        <label for="dateDebut" class="form-label">Date de Début</label>
                        <input type="date" class="form-control ps-4" id="dateDebut">
                    </div>

                    <!-- Champ: Date Limite d'Inscription -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-calendar-x"></i>
                        <label for="dateLimite" class="form-label">Date Limite d'Inscription</label>
                        <input type="date" class="form-control ps-4" id="dateLimite">
                    </div>

                    <!-- Champ: Date de l'Examen -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-calendar-check"></i>
                        <label for="dateExam" class="form-label">Date de l'Examen</label>
                        <input type="date" class="form-control ps-4" id="dateExam">
                    </div>

                    <!-- Champ: Heure de l'Examen -->
                    <div class="col-md-6 form-group-icon">
                        <i class="bi bi-clock"></i>
                        <label for="heureExam" class="form-label">Heure de l'Examen</label>
                        <input type="time" class="form-control ps-4" id="heureExam">
                    </div>

                    <!-- Champ: Lieu -->
                    <div class="col-md-12 form-group-icon">
                        <i class="bi bi-geo-alt"></i>
                        <label for="lieuExam" class="form-label">Lieu</label>
                        <input type="text" class="form-control ps-4" id="lieuExam" placeholder="Entrer le lieu de l'examen">
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-4">Ajouter</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
