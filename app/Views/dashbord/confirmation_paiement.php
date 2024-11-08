<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<style>
    /* Styles pour la carte */
    .card {
       
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #CCCCCC ; /* Couleur bleu professionnel */
        color: black;
        font-weight: bold;
        font-size: large;
        text-align: center;
        border-bottom: none;
    }

    /* Styles pour la table */
    .table-hover tbody tr:hover {
        background-color: #f8f9fa; /* Couleur de survol */
    }

    .table th {
        background-color: #e9ecef;
        font-weight: 600;

        
        color: black;
    }

    .table td {
        vertical-align: middle;
    }

    /* Styles pour les boutons */
    .btn-success {
        background-color: #21F695 ;
        border-color: #21F695 ;
        transition: background-color 0.3s;
        font-weight: bold;
    }

    .btn-success:hover {
        background-color: #0C9D2F;
    }

    .btn-warning {
        background-color: #FE4C4C;
        border-color: #FE4C4C;
        font-weight: bold;
        color: white;
        transition: background-color 0.3s;
    }

    .btn-warning:hover {
        background-color: #E13700;
        color: #f8f9fa;
    }
</style>

<h3 class="mb-4">Confirmation de Paiement</h3>
<div class="card">
    <div class="card-header">Paiements en Attente</div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Paiement</th>
                    <th>Nom de l'Étudiant</th>
                    <th>Montant</th>
                    <th>Date de Paiement</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td>
                </tr> <tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td><tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td><tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td><tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td><tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td><tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td><tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td>
                </tr> <tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>100€</td>
                    <td>15 septembre 2024</td>
                    <td>En Attente</td>
                    <td>
                        <button class="btn btn-success btn-sm">Confirmer</button>
                        <button class="btn btn-warning btn-sm">Refuser</button>
                    </td>
                </tr>
                <!-- Ajoutez d'autres lignes ici -->
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
