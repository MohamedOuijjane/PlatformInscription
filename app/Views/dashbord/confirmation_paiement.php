<?= $this->extend('mainlayout') ?>


<?= $this->section('content') ?>
<h3 class="mb-4">Confirmation de Paiement</h3>
<div class="card">
    <div class="card-header">Paiements en Attente</div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Paiement</th>
                    <th>Nom de l'Étudiant</th>
                    <th>Montant</th>
                    <th>Date de Paiement</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
