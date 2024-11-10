<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour rendre les cartes et le contenu attrayant */
    .row {
        margin-top: 20px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: none;
    }

    .card-body {
        text-align: center;
    }

    .card-title {
        font-weight: bold;
        color: #6c757d;
    }

    h3 {
        font-weight: bold;
        margin-top: 10px;
    }

    .text-primary {
        color: #007bff;
    }

    .text-success {
        color: #28a745;
    }

    .text-warning {
        color: #ffc107;
    }

    /* Styles pour les graphiques */
    .chart-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .chart-card {
        flex: 1;
        margin: 15px;
        padding: 20px;
        max-width: 45%;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    canvas {
        max-width: 100%;
    }

    
</style>

<h3 class="mb-4 text-primary">Statistiques d'Inscriptions et Examens</h3>

<div class="row">
    <!-- Cartes avec des statistiques clés -->
    <div class="col-md-3 mb-4">
        <div class="card card-visitor">
            <div class="card-body">
                <i class="bi bi-people"></i>
                <h5 class="card-title">Étudiants Inscrits</h5>
                <h3 class="text-primary">1,294</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-subscriber">
            <div class="card-body">
                <i class="bi bi-person-check"></i>
                <h5 class="card-title">Nouveaux Abonnés</h5>
                <h3 class="text-info">1,303</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-sales">
            <div class="card-body">
                <i class="bi bi-cash-stack"></i>
                <h5 class="card-title">Revenus (€)</h5>
                <h3 class="text-success">€1,345</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-orders">
            <div class="card-body">
                <i class="bi bi-cart-check"></i>
                <h5 class="card-title">Examens Réalisés</h5>
                <h3 class="text-purple">576</h3>
            </div>
        </div>
    </div>
</div>

<!-- Conteneur pour les graphiques -->
<div class="chart-container">
    <div class="chart-card">
        <h5 class="card-title text-center">Inscriptions par Mois</h5>
        <canvas id="lineChart"></canvas>
    </div>
    <div class="chart-card">
        <h5 class="card-title text-center">Revenus par Mois (€)</h5>
        <canvas id="barChart"></canvas>
    </div>
</div>
<div class="chart-container">
    <div class="chart-card">
        <h5 class="card-title text-center">Répartition des Étudiants</h5>
        <canvas id="pieChart"></canvas>
    </div>
    <div class="chart-card">
        <h5 class="card-title text-center">Statut des Paiements</h5>
        <canvas id="doughnutChart"></canvas>
    </div>
</div>

<!-- Scripts pour les graphiques -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Graphique Linéaire : Inscriptions par Mois
    new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
            datasets: [{
                label: 'Inscriptions',
                data: [50, 45, 60, 55, 70, 40, 30, 35, 50, 65, 75, 90],
                borderColor: '#007bff',
                fill: false
            }]
        }
    });

    // Graphique en Barres : Revenus par Mois
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
            datasets: [{
                label: 'Revenus (€)',
                data: [200, 300, 500, 700, 400, 600, 800, 700, 600, 900, 800, 500],
                backgroundColor: '#2ecc71'
            }]
        }
    });

    // Graphique en Secteurs : Répartition des Étudiants
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: ['Nouveaux Étudiants', 'Étudiants Réinscrits', 'Étudiants Internationaux'],
            datasets: [{
                data: [40, 35, 25],
                backgroundColor: ['#007bff', '#e74c3c', '#f1c40f']
            }]
        }
    });

    // Graphique en Anneaux : Statut des Paiements
    new Chart(document.getElementById('doughnutChart'), {
        type: 'doughnut',
        data: {
            labels: ['Payé', 'En Attente', 'Non Payé'],
            datasets: [{
                data: [60, 25, 15],
                backgroundColor: ['#28a745', '#f1c40f', '#e74c3c']
            }]
        }
    });
</script>

<?= $this->endSection() ?>
