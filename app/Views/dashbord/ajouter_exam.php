<?= $this->extend('dashbord/mainlayout') ?>



<?= $this->section('content') ?>
<style>
 
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
