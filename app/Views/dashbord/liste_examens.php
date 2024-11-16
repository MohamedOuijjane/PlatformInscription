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
        background-color: #CCCCCC;
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
            <input type="text" class="form-control" placeholder="Rechercher par ville..." id="searchBar" style="width: 300px;">
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
                <!-- Contenu rempli via AJAX -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function fetchExams() {
            const searchQuery = $('#searchBar').val();
            const filterType = $('#filterType').val();

            $.ajax({
                url: `<?= base_url('ExamsController/fetchExams') ?>`,
                method: 'GET',
                data: {
                    search: searchQuery,
                    type: filterType
                },
                success: function(response) {
                    $('#examTable').html(response);
                },
                error: function() {
                    alert('Erreur lors de la récupération des examens.');
                }
            });
        }

        // Appel initial pour charger les examens
        fetchExams();

        // Mettre à jour la liste des examens lors de la recherche ou du filtrage
        $('#searchBar').on('input', fetchExams);
        $('#filterType').on('change', fetchExams);

        // Supprimer l'examen
        $(document).on('click', '.delete-btn', function() {
            const id = $(this).data('id');
            if (confirm('Êtes-vous sûr de vouloir supprimer cet examen ?')) {
                $.ajax({
                    url: `<?= base_url('ExamsController/deleteExam') ?>/${id}`,
                    method: 'DELETE',
                    success: function(response) {
                        alert(response.message);
                        fetchExams(); // Recharger les examens
                    },
                    error: function() {
                        alert('Erreur lors de la suppression de l\'examen.');
                    }
                });
            }
        });

        // Modifier l'examen
        $(document).on('click', '.edit-btn', function() {
            const id = $(this).data('id');
            window.location.href = `<?= base_url('ExamsController/editExam') ?>/${id}`;
        });
    });
</script>
<?= $this->endSection() ?>
