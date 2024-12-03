<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Conteneur global des statistiques */
    
    .stats-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 40px;
        gap: 20px;
    }

    /* Styles des cartes de statistiques */
    .stats-card {
        margin-top: 50px;
        flex: 1;
        min-width: 220px;
        max-width: 24%;
        background-color: white;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        transition: all 0.3s ease-in-out;
        border-left: 5px solid transparent;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
    }

    /* Bordures latérales de couleur */
    .stats-card.primary {
        border-left-color: #4e73df;
    }

    .stats-card.success {
        border-left-color: #1cc88a;
    }
    .stats-card.info {
        border-left-color: #36b9cc;
    }

    .stats-card.warning {
        border-left-color: #f6c23e;
    }

    /* Contenu de la carte */
    .stats-content {
        flex: 1;
    }

    .stats-content h5 {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 5px;
        text-transform: uppercase;
    }

    .stats-content h3 {
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0;
        color: #333;
    }

    /* Icônes */
    .stats-icon {
        font-size: 2.5rem;
        color: #d1d3e2;
    }

    .stats-icon.primary {
        color: #4e73df;
    }

    .stats-icon.success {
        color: #1cc88a;
    }

    .stats-icon.info {
        color: #36b9cc;
    }

    .stats-icon.warning {
        color: #f6c23e;
    }

    /* Conteneur des graphiques */
    .chart-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 40px;
    }

    .chart-card {
        flex: 1;
        min-width: 45%;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    }

    .chart-card h5 {
        margin-bottom: 33px;
    font-size: 1.4rem;
    color: #21212c;
    font-weight: bold;
        
    }

    canvas {
        max-width: 100%;
        height: 300px;
    }
    .btn-container a {
       
        display: inline-block; 
    background-color: #4e73df;
    color: white;
    padding: 12px 17px;
    border-radius: 24px;
    text-decoration: none;
    font-size: 0.7rem;
    font-weight: bold;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
    }

    .btn-container a:hover {
        background-color: #375a9e;
    }

    .btn-container i {
        margin-right: 8px;
    }
    .content-header{
        position: absolute;
    margin-left: 84%;
    margin-top: 159px;
    }
</style>

<div class="stats-container">
<div class="content-header">
    <div class="btn-container">
        <a href="<?= base_url('/telecharger') ?>" download>
            <i class="bi bi-download"></i> Télécharger
        </a>
    </div> 
    </div>  
    <!-- Carte : Earnings Monthly -->
    <div class="stats-card primary">
        <div class="stats-content">
            <h5>Étudiants Inscrits</h5>
            <h3 id="studentCount">0</h3>
        </div>
        <div class="stats-icon primary">
            <i class="bi bi-people "></i>
        </div>
    </div>

    <!-- Carte : Earnings Annual -->
    <div class="stats-card success">
        <div class="stats-content">
            <h5>Revenus (DH)</h5>
            <h3 id="totalRevenue">0</h3>
        </div>
        <div class="stats-icon success">
            <i class="bi bi-currency-dollar"></i>
        </div>
    </div>

    <!-- Carte : Tasks -->
    <div class="stats-card info">
        <div class="stats-content">
            <h5>Nombre Des Exams</h5>
            <h3 id="examsCompleted">0</h3>
        </div>
        <div class="stats-icon info">
            <i class="bi bi-clipboard-check" ></i>
        </div>
    </div>

    <!-- Carte : Pending Requests -->
    <div class="stats-card warning">
        <div class="stats-content">
            <h5>Pending Confirmation</h5>
            <h3 id="NombrePaymentenattente">0</h3>
        </div>
        <div class="stats-icon warning">
            <i class="bi bi-chat-dots"></i>
        </div>
    </div>
   
</div>


<!-- Conteneur pour les graphiques -->
<div class="chart-container">
    <div class="chart-card">
        <h5>Inscriptions par Mois</h5>
        <canvas id="lineChart"></canvas>
    </div>
    <div class="chart-card">
        <h5>Revenus par Mois (DH)</h5>
        <canvas id="barChart"></canvas>
    </div>
    <div class="chart-card">
        <h5>Répartition des Étudiants</h5>
        <canvas id="pieChart"></canvas>
    </div>
    <div class="chart-card">
        <h5>Statut des Paiements</h5>
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
            document.getElementById('NombrePaymentenattente').innerText = data.NombrePaymentenattente;
            
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
                        label: 'Revenus (DH)',
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
                        backgroundColor: ['#f6c23e', '#e74a3b', '#4e73df', '#1cc88a']
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
                        backgroundColor: ['#1cc88a', '#f6c23e', '#e74a3b']
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
