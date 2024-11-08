<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour les titres */
    h3 {
        font-weight: bold;
        color: #0056b3; /* Bleu foncé cohérent */
    }

    /* Styles pour la carte */
    .card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Ombre douce */
    }

    .card-header {
        background-color: #aeaeaf; /* Bleu foncé professionnel */
        color: #ffffff;
        font-weight: 500;
    }

    /* Styles pour les badges de paiement */
    .badge {
        font-size: 0.85rem;
        padding: 0.4em 0.6em;
        border-radius: 12px;
    }

    .badge.bg-success {
        background-color: #28a745; /* Vert pour Payé */
        color: #fff;
    }

    .badge.bg-danger {
        background-color: #dc3545; /* Rouge pour Non payé */
        color: #fff;
    }

    /* Effet de survol pour les lignes du tableau */
    .table-hover tbody tr:hover {
        background-color: #f1f1f1; /* Arrière-plan gris clair au survol */
        transition: background-color 0.3s;
    }

    /* Ombre pour la barre de recherche */
    .input-group {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Styles pour les boutons */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Bleu foncé au survol */
    }
</style>

<h3 class="mb-4 text-primary">Liste des Clients par Examen</h3>

<!-- Barre de recherche -->
<div class="mb-4 d-flex justify-content-between">
    <div class="input-group" style="max-width: 400px;">
        <input type="text" class="form-control" id="searchInput" placeholder="Rechercher par nom ou type d'examen">
        <button class="btn btn-primary" onclick="searchTable()">Rechercher</button>
    </div>
</div>

<!-- Carte pour afficher les clients inscrits -->
<div class="card shadow-sm">
    <div class="card-header text-white">Clients Inscrits</div>
    <div class="card-body">
        <table class="table table-hover table-bordered" id="clientsTable">
            <thead class="table">
                <tr>
                    <th>Nom de l'Examen</th>
                    <th>Nom de l'Étudiant</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>État du Paiement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Prüfung A1</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>+1234567890</td>
                    <td><span class="badge bg-success">Payé</span></td>
                </tr>
                <tr>
                    <td>Prüfung B2</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>+0987654321</td>
                    <td><span class="badge bg-danger">Non payé</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Script JavaScript pour la recherche -->
<script>
    function searchTable() {
        var input = document.getElementById("searchInput").value.toLowerCase();
        var table = document.getElementById("clientsTable");
        var rows = table.getElementsByTagName("tr");

        for (var i = 1; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName("td");
            var match = false;

            for (var j = 0; j < cells.length - 1; j++) {
                if (cells[j].innerText.toLowerCase().includes(input)) {
                    match = true;
                    break;
                }
            }
            rows[i].style.display = match ? "" : "none";
        }
    }
</script>

<?= $this->endSection() ?>
