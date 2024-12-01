<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<h3 class="mb-4 text-primary">Liste des Clients</h3>
<style>
    /* Titre */
    h3 {
        font-weight: bold;
    }

    /* Carte */
    .card {
        margin-top: 70px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #4e73df;
        color: white;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        background-color: #ffffff;
    }

    /* Barre de sélection */
    .select-niveau {
        padding: 8px 12px;
        border-radius: 5px;
        border: 1px solid #d1d3e2;
        font-size: 0.9rem;
        color: #5a5c69;
        transition: border-color 0.3s;
    }

    .select-niveau:focus {
        border-color: #4e73df;
        outline: none;
    }

    /* Table */
    .table {
        border-radius: 10px;
        overflow: hidden;
        width: 100%;
    }

    .table th {
        background-color: #f8f9fc;
        color: #4e73df;
        text-transform: uppercase;
        font-size: 0.9rem;
        font-weight: 600;
        text-align: center;
        padding: 12px;
    }

    .table td {
        text-align: center;
        vertical-align: middle;
        padding: 10px;
        font-size: 0.95rem;
        color: #5a5c69;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }

    /* Badges */
    .badge {
        font-size: 0.85rem;
        padding: 0.4em 0.6em;
        border-radius: 12px;
    }

    .badge.bg-success {
        background-color: #1cc88a !important;
        color: white;
    }

    .badge.bg-danger {
        background-color: #e74a3b !important;
        color: white;
    }

    /* Effet de transition */
    .select-niveau,
    .badge {
        transition: all 0.3s ease-in-out;
    }
</style>

<!-- Carte contenant la liste des clients -->
<div class="card shadow-sm">
    <div class="card-header">
        <span>Clients Inscrits</span>
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
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Niveau</th>
                    <th>Nom de l'Étudiant</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>État du Paiement</th>
                </tr>
            </thead>
            <tbody id="clientsTable">
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?= esc($client['level']) ?></td>
                        <td><?= esc($client['student_name']) ?></td>
                        <td><?= esc($client['email']) ?></td>
                        <td><?= esc($client['phone_number']) ?></td>
                        <td>
                            <span class="badge <?= $client['payment_status'] === 'paid' ? 'bg-success' : 'bg-danger' ?>">
                                <?= $client['payment_status'] === 'paid' ? 'Payé' : 'Non Payé' ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Script pour filtrer les clients par niveau -->
<script>
    function filterByNiveau() {
        const niveau = document.getElementById("niveauSelect").value.toLowerCase();
        const rows = document.querySelectorAll("#clientsTable tr");

        rows.forEach(row => {
            const niveauCell = row.cells[0].innerText.toLowerCase();
            row.style.display = (niveau === "" || niveauCell === niveau) ? "" : "none";
        });
    }
</script>
<?= $this->endSection() ?>
