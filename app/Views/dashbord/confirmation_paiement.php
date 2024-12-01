<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour la carte */
    .card {
        margin-top: 50px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #4e73df; /* Couleur bleue similaire à la sidebar */
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
        padding: 15px;
        border-bottom: none;
    }

    /* Styles pour la table */
    .table {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fc; /* Couleur de survol */
    }

    .table th {
        background-color: #f8f9fc;
        font-weight: 600;
        color: #4e73df;
        text-transform: uppercase;
        font-size: 0.9rem;
        padding: 15px;
        text-align: center;
    }

    .table td {
        text-align: center;
        vertical-align: middle;
        padding: 12px;
        font-size: 0.95rem;
        color: #5a5c69;
    }

    /* Icônes pour les actions */
    .action-icon {
        font-size: 1.2rem;
        cursor: pointer;
        margin: 0 5px;
    }

    .action-icon.confirm {
        color: #1cc88a; /* Vert pour confirmer */
        font-size: 26px;
    }

    .action-icon.confirm:hover {
        color: #17a673;
    }

    .action-icon.reject {
        color: #e74a3b; /* Rouge pour refuser */
        font-size: 26px;
    }

    .action-icon.reject:hover {
        color: #c82333;
    }

    /* Badge pour le statut */
    #enattente {
        color: white;
        background-color: #f6c23e;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.9rem;
        font-weight: bold;
    }

    /* Style pour les messages */
    .alert {
        font-size: 0.9rem;
        margin-top: 10px;
    }

    /* Style pour le titre et description */
    .section-title {
        font-size: 1.5rem;
        color: #4e73df;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .section-description {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }
</style>

<div class="boxi">
    <!-- Titre principal -->
    <h2 class="section-title">Gestion des Paiements</h2>
    <p class="section-description">
        Consultez et gérez les paiements en attente pour une validation ou un refus. Cliquez sur les icônes pour prendre des actions.
    </p>

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

            <!-- Table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID Paiement</th>
                        <th>ID Registration</th>
                        <th>Montant</th>
                        <th>Référence</th>
                        <th>Date de Paiement</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $payment): ?>
                        <tr>
                            <td><?= $payment['id'] ?></td>
                            <td><?= $payment['registration_id'] ?></td>
                            <td><?= $payment['amount'] ?> DH</td>
                            <td><?= $payment['reference'] ?></td>
                            <td><?= $payment['payment_date'] ?></td>
                            <td>
                                <span class="badge" id="enattente">En Attente</span>
                            </td>
                            <td>
                                <a href="<?= base_url('PaymentsController/confirm/' . $payment['id']) ?>">
                                    <i class="bi bi-check-circle action-icon confirm"></i>
                                </a>
                                <a href="<?= base_url('PaymentsController/refuse/' . $payment['id']) ?>">
                                    <i class="bi bi-x-circle action-icon reject"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
