<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    .content{
        margin-top: 10px;
            margin-left: 240px;
            min-width: 70%;
            padding: 40px;
            background-color: #ffffff;
            min-height: auto;
            border-top: 3px solid #007bff; /* Ligne de couleur professionnelle */
            box-shadow: 0px 0px 20px gray;
    }
</style>
<h3 class="mb-4 text-primary">Rapport Complet des Examens et Paiements</h3>

<div class="row">
    <!-- Carte des Revenus Totaux -->
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title text-muted">Revenus Totaux</h5>
                <h3 class="text-success">€20,000</h3>
            </div>
        </div>
    </div>

    <!-- Carte du Nombre Total d'Étudiants -->
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title text-muted">Étudiants Inscrits</h5>
                <h3 class="text-primary">500</h3>
            </div>
        </div>
    </div>

    <!-- Carte du Pourcentage de Paiement -->
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title text-muted">Paiements Réalisés</h5>
                <h3 class="text-warning">70%</h3>
            </div>
        </div>
    </div>
</div>

<!-- Tableau des Détails des Examens -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-dark text-white">Détails des Examens</div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nom de l'Examen</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Étudiants Inscrits</th>
                    <th>Revenus (€)</th>
                    <th>Pourcentage de Paiement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Prüfung A1</td>
                    <td>10 novembre 2024</td>
                    <td>Fès</td>
                    <td>120</td>
                    <td>€3,600</td>
                    <td>80%</td>
                </tr>
                <tr>
                    <td>Prüfung B2</td>
                    <td>15 novembre 2024</td>
                    <td>Casablanca</td>
                    <td>150</td>
                    <td>€4,500</td>
                    <td>75%</td>
                </tr>
                <!-- Ajoutez d'autres lignes si nécessaire -->
            </tbody>
        </table>
    </div>
</div>

<!-- Graphique des Statistiques de Paiement -->
<div class="card shadow-sm">
    <div class="card-header bg-danger text-white">Statistiques de Paiement</div>
    <div class="card-body">
        <canvas id="paymentStatisticsChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Données pour le graphique des statistiques de paiement
    const paymentStatsData = {
        labels: ['Payé', 'Non Payé'],
        datasets: [{
            data: [70, 30],
            backgroundColor: ['rgba(39, 174, 96, 0.7)', 'rgba(192, 57, 43, 0.7)']
        }]
    };

    // Configuration du graphique
    new Chart(document.getElementById('paymentStatisticsChart'), {
        type: 'doughnut',
        data: paymentStatsData
    });
</script>

<?= $this->endSection() ?>
