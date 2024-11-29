<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour rendre les cartes et le contenu attrayant */
    .row {
        margin-top: 88px;
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

<div class="row">
    <!-- Cartes avec des statistiques clés -->
    <div class="col-md-3 mb-4">
        <div class="card card-visitor">
            <div class="card-body">
                <i class="bi bi-people display-4 text-primary"></i>
                <h5 class="card-title">Étudiants Inscrits</h5>
                <h3 class="text-primary" id="studentCount">0</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-subscriber">
            <div class="card-body">
                <i class="bi bi-person-check display-4 text-info"></i>
                <h5 class="card-title">Nouveaux Abonnés</h5>
                <h3 class="text-info">1,303</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-sales">
            <div class="card-body">
                <i class="bi bi-cash-stack display-4 text-success"></i>
                <h5 class="card-title">Revenus (DH)</h5>
                <h3 class="text-success" id="totalRevenue">0dh</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card card-orders">
            <div class="card-body">
                <i class="bi bi-clipboard-check display-4 text-success"></i>
                <h5 class="card-title">Nombre Des Exams</h5>
                <h3 class="text-purple" id="examsCompleted">0</h3>
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
        <h5 class="card-title text-center">Revenus par Mois (DH)</h5>
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
    // Fonction pour charger les données pour les graphiques
    async function loadChartData() {
        try {
            const response = await fetch('<?= base_url('/exams/getChartData') ?>');
            const data = await response.json();

            // Mettre à jour les cartes avec des statistiques clés
            document.getElementById('studentCount').innerText = data.studentCount;
            document.getElementById('totalRevenue').innerText = `${data.totalRevenue}DH`;
            document.getElementById('examsCompleted').innerText = data.examsCompleted;

            // Graphique Linéaire : Inscriptions par Mois
            new Chart(document.getElementById('lineChart'), {
                type: 'line',
                data: {
                    labels: data.months,
                    datasets: [{
                        label: 'Inscriptions',
                        data: data.monthlyInscriptions,
                        borderColor: '#007bff',
                        fill: false
                    }]
                }
            });

            // Graphique en Barres : Revenus par Mois
            new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: data.months,
                    datasets: [{
                        label: 'Revenus (€)',
                        data: data.monthlyRevenue,
                        backgroundColor: '#2ecc71'
                    }]
                }
            });

            // Graphique en Secteurs : Répartition des Étudiants
            new Chart(document.getElementById('pieChart'), {
                type: 'pie',
                data: {
                    labels: data.studentDistribution.labels,
                    datasets: [{
                        data: data.studentDistribution.values,
                        backgroundColor: ['#f2eb63', '#eb2009 ', '#B8B8B8','#18C7F7']
                    }]
                }
            });

            // Graphique en Anneaux : Statut des Paiements
            new Chart(document.getElementById('doughnutChart'), {
                type: 'doughnut',
                data: {
                    labels: ['Payé', 'En Attente', 'Non Payé'],
                    datasets: [{
                        data: data.paymentStatus,
                        backgroundColor: ['#28a745', '#f1c40f', '#e74c3c']
                    }]
                }
            });
        } catch (error) {
            console.error('Erreur lors du chargement des données:', error);
        }
    }

    // Charger les données des graphiques
    loadChartData();
</script>

<?= $this->endSection() ?>
