<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour la carte */
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #CCCCCC; /* Couleur gris clair */
        color: white;
        font-weight: bold;
        font-size: large;
        text-align: center;
        border-bottom: none;
    }

    /* Styles pour la table */
    .table-hover tbody tr:hover {
        background-color: #f8f9fa; /* Couleur de survol */
    }

    .table th {
        background-color: #e9ecef;
        font-weight: 600;
        color: black;
    }

    .table td {
        vertical-align: middle;
    }

    /* Styles pour les boutons */
    .btn-success {
        background-color: #21F695;
        border-color: #21F695;
        transition: background-color 0.3s;
    }

    .btn-success:hover {
        background-color: #0C9D2F;
    }

    .btn-warning {
        background-color: #FE4C4C;
        border-color: #FE4C4C;
        color: white;
        transition: background-color 0.3s;
    }

    .btn-warning:hover {
        background-color: #E13700;
        color: #f8f9fa;
    }
</style>

<h3 class="mb-4">Confirmation de Paiement</h3>
<div class="card">
    <div class="card-header">Paiements en Attente</div>
    <div class="card-body">
        <!-- Affichage des messages de succès ou d'erreur -->
        <?php if (session()->has('success')): ?>
            <div class="alert alert-success"><?= session('success') ?></div>
        <?php endif; ?>

        <?php if (session()->has('error')): ?>
            <div class="alert alert-danger"><?= session('error') ?></div>
        <?php endif; ?>

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
                <?php foreach ($payments as $payment): ?>
                    <tr>
                        <td><?= $payment['id'] ?></td>
                        <td><?= $payment['registration_id'] ?></td> <!-- Assurez-vous que le champ 'username' existe dans la base de données -->
                        <td><?= $payment['amount'] ?>€</td>
                        <td><?= $payment['payment_date'] ?></td>
                        <td><?= $payment['status'] ?></td>
                        <td>
                            <a href="<?= base_url('PaymentsController/confirm/' . $payment['id']) ?>" class="btn btn-success btn-sm">Confirmer</a>
                            <a href="<?= base_url('PaymentsController/refuse/' . $payment['id']) ?>" class="btn btn-warning btn-sm">Refuser</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
