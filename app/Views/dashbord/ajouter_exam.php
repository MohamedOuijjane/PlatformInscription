<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Personnalisation de la page Ajouter un Examen */
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #3498db; /* Couleur bleu professionnel */
        color: #ffffff;
        font-weight: bold;
        text-align: center;
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 5px;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        transition: background-color 0.3s;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    /* Pour un alignement plus agréable */
    .mb-3 {
        margin-bottom: 20px;
    }
</style>

<h3 class="mb-4">Ajouter un Examen</h3>
<div class="card">
    <div class="card-header">Nouveau Examen</div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="nomExam" class="form-label">Nom de l'Examen</label>
                <input type="text" class="form-control" id="nomExam" placeholder="Entrer le nom de l'examen">
            </div>
            <div class="mb-3">
                <label for="dateExam" class="form-label">Date</label>
                <input type="date" class="form-control" id="dateExam">
            </div>
            <div class="mb-3">
                <label for="lieuExam" class="form-label">Lieu</label>
                <input type="text" class="form-control" id="lieuExam" placeholder="Entrer le lieu de l'examen">
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
