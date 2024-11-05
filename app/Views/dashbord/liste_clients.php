<?= $this->extend('mainlayout') ?>

<?= $this->section('content') ?>
<h3 class="mb-4 text-primary">Liste des Clients par Examen</h3>

<!-- Barre de recherche -->
<div class="mb-4 d-flex justify-content-between">
    <div class="input-group" style="max-width: 400px;">
        <input type="text" class="form-control" id="searchInput" placeholder="Rechercher par nom ou type d'examen">
        <button class="btn btn-primary" onclick="searchTable()">Rechercher</button>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-header bg-dark text-white">Clients Inscrits</div>
    <div class="card-body">
        <table class="table table-hover table-bordered" id="clientsTable">
            <thead class="table-dark">
                <tr>
                    <th>Nom de l'Examen</th>
                    <th>Nom de l'Étudiant</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>État du Paiement</th> <!-- Nouvelle colonne pour l'état du paiement -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Prüfung A1</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>+1234567890</td>
                    <td><span class="badge bg-success">Payé</span></td> <!-- Indicateur de paiement -->
                </tr>
                <tr>
                    <td>Prüfung B2</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>+0987654321</td>
                    <td><span class="badge bg-danger">Non payé</span></td> <!-- Indicateur de paiement -->
                </tr>
                <!-- Ajoutez d'autres lignes si nécessaire -->
            </tbody>
        </table>
    </div>
</div>

<!-- CSS personnalisé pour améliorer l'apparence -->
<style>
    h3 {
        font-weight: bold;
    }

    .card {
        border-radius: 10px;
        overflow: hidden;
    }

    .badge {
        font-size: 0.9rem;
        padding: 0.5em;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
</style>

<!-- Script JavaScript pour la recherche -->
<script>
    function searchTable() {
        // Obtenez la valeur de recherche
        var input = document.getElementById("searchInput").value.toLowerCase();
        var table = document.getElementById("clientsTable");
        var rows = table.getElementsByTagName("tr");

        // Parcourez les lignes du tableau
        for (var i = 1; i < rows.length; i++) {
            var cells = rows[i].getElementsByTagName("td");
            var match = false;

            // Parcourez les cellules de chaque ligne
            for (var j = 0; j < cells.length - 1; j++) {
                if (cells[j].innerText.toLowerCase().includes(input)) {
                    match = true;
                    break;
                }
            }

            // Affichez ou masquez la ligne en fonction de la correspondance
            rows[i].style.display = match ? "" : "none";
        }
    }
</script>

<!-- Bootstrap CSS inclusion -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?= $this->endSection() ?>
