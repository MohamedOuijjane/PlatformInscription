<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour les titres */
    h3 {
        font-weight: bold;
        color: #333;
    }

    /* Styles pour la carte */
    .card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #aeaeaf;
        color: #fff;
        font-weight: bold;
        font-size: large;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
    }

    /* Styles pour la sélection de niveau */
    .select-niveau {
        border-radius: 5px;
        padding: 5px;
        border: 1px solid #ddd;
        font-size: 0.9rem;
    }

    /* Styles pour les badges de paiement */
    .badge {
        font-size: 0.85rem;
        padding: 0.4em 0.6em;
        border-radius: 12px;
    }

    .badge.bg-success {
        background-color: #28a745;
        color: #fff;
    }

    .badge.bg-danger {
        background-color: #dc3545;
        color: #fff;
    }

    /* Effet de survol pour les lignes du tableau */
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.3s;
    }

    /* Styles pour les cellules du tableau */
    .table th {
        background-color: #f0f0f0;
        color: #333;
        font-weight: 600;
    }

    .table td {
        vertical-align: middle;
    }
</style>

<h3 class="mb-4">Liste des Clients</h3>

<!-- Carte pour afficher les clients inscrits -->
<div class="card shadow-sm">
    <div class="card-header">
        <span>Clients Inscrits</span>
        <!-- Déplacement de la sélection de niveau vers la gauche -->
        <select class="select-niveau" id="niveauSelect" onchange="filterByNiveau()">
            <option value="">Tous les niveaux</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
        </select>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered" id="clientsTable">
            <thead>
                <tr>
                    <th>Niveau</th>
                    <th>Nom de l'Étudiant</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>État du Paiement</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?= esc($client['level']) ?></td>
                        <td><?= esc($client['student_name']) ?></td>
                        <td><?= esc($client['email']) ?></td>
                        <td><?= esc($client['phone_number']) ?></td>
                        <td>
                            <span class="badge <?= $client['payment_status'] === 'paid' ? 'bg-success' : 'bg-danger' ?>">
                                <?= esc(ucfirst($client['payment_status'])) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Script JavaScript pour la recherche et le filtrage -->
<script>
    function filterByNiveau() {
        var niveau = document.getElementById("niveauSelect").value.toLowerCase();
        var table = document.getElementById("clientsTable");
        var rows = table.getElementsByTagName("tr");

        for (var i = 1; i < rows.length; i++) {
            var niveauCell = rows[i].getElementsByTagName("td")[0];
            var niveauValue = niveauCell.innerText.toLowerCase();

            if (niveau === "" || niveauValue.includes(niveau)) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
</script>

<?= $this->endSection() ?>
