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
    /* Global Alert Styles */
    .top-alert {
        position: fixed;
        top: 61px;
        left: 78%;
    transform: translateX(-50%);
    width: 36%;
    max-width: 800px;
    border-radius: 8px;
    color: white;
    padding: 11px 20px;
    font-size: 1rem;
    z-index: 1050;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    animation: slideDown 0.5s ease-in-out;
    }

    .top-alert-success {
        background-color: #1cc88a; /* Green for success */
    }

    .top-alert-error {
        background-color: red; /* Red for error */
    }

    .top-alert i {
        font-size: 1.5rem;
        margin-right: 10px;
    }

    .top-alert button {
        background: none;
        border: none;
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
    }

    /* Slide down animation */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<!-- Top Alerts -->
<?php if (session()->has('success')): ?>
    <div class="top-alert top-alert-success">
        <div>
            <i class="bi bi-check-circle"></i>
            <?= session('success') ?>
        </div>
        <button onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
<?php endif; ?>

<?php if (session()->has('error')): ?>
    <div class="top-alert top-alert-error">
        <div>
            <i class="bi bi-x-circle"></i>
            <?= session('error') ?>
        </div>
        <button onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
<?php endif; ?>

<div class="boxi">
    <!-- Titre principal -->
    <h2 class="section-title">Gestion des Paiements</h2>
    <p class="section-description">
        Consultez et gérez les paiements en attente pour une validation ou un refus. Cliquez sur les icônes pour prendre des actions.
    </p>

    <div class="card">
        <div class="card-header">Paiements en Attente</div>
        <div class="card-body">
           
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
