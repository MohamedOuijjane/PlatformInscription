<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>

<h3 class="mb-4">Liste des Examens</h3>
<style>
    /* Styles de base pour la carte */
    .card {
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #3498db;
        color: #ffffff;
        font-weight: bold;
        padding: 15px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    /* Styles pour la barre de recherche et le filtre */
    #searchBar,
    #filterType {
        border-radius: 5px;
        transition: box-shadow 0.3s;
    }

    #searchBar:focus,
    #filterType:focus {
        box-shadow: 0 0 10px rgba(52, 152, 219, 0.5);
    }

    /* Styles pour la table */
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    .table-striped tbody tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s;
    }

    /* Styles pour les boutons */
    .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    .btn-danger {
        background-color: #e74c3c;
        border-color: #e74c3c;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }
</style>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <input type="text" class="form-control" placeholder="Rechercher un examen..." id="searchBar" style="width: 300px;">
        </div>
        <div>
            <select class="form-select" id="filterType" style="width: 200px;">
                <option value="">Tous les Types</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
            </select>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de l'Examen</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="examTable">
                <tr>
                    <td>1</td>
                    <td>Prüfung A1</td>
                    <td>10 novembre 2024</td>
                    <td>Fès</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Modifier</button>
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
                <!-- Ajoutez d'autres lignes ici -->
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection() ?>
