<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<h3 class="mb-4 text-primary">Liste des Examens</h3>
<style>
    /* Styles de base pour la carte */
    .card {

        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-top: 70px;
    }

    .card-header {
        background-color: #4e73df;
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
        padding: 15px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    /* Barre de recherche et filtre */
    .search-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        background-color: #f8f9fc;
        border-bottom: 1px solid #e3e6f0;
    }

    .search-container input,
    .search-container select {
        border-radius: 5px;
        padding: 10px;
        width: 300px;
        border: 1px solid #d1d3e2;
        transition: all 0.3s;
    }

    .search-container input:focus,
    .search-container select:focus {
        box-shadow: 0 0 10px rgba(78, 115, 223, 0.25);
        outline: none;
    }

    /* Tableau */
    .table {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fc;
    }

    .table-striped tbody tr:hover {
        background-color: #e9ecef;
        transition: background-color 0.3s;
    }

    .table th {
        background-color: #f8f9fc;
        font-weight: bold;
        color: #4e73df;
        text-transform: uppercase;
        font-size: 0.9rem;
        padding: 15px;
        text-align: center;
    }

    .table td {
        text-align: center;
        vertical-align: middle;
        padding: 12px;
        color: #5a5c69;
        font-size: 0.95rem;
    }

    /* Boutons */
    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        background-color: #2e59d9;
    }

    .btn-danger {
        background-color: #e74a3b;
        border-color: #e74a3b;
        transition: all 0.3s;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    /* Icônes */
    .action-icon {
        font-size: 1.2rem;
        cursor: pointer;
        margin: 0 5px;
    }

    .action-icon.edit {
        color: #4e73df;
    }

    .action-icon.edit:hover {
        color: #2e59d9;
    }

    .action-icon.delete {
        color: #e74a3b;
    }

    .action-icon.delete:hover {
        color: #c82333;
    }
</style>

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Examens Disponibles</span>
    </div>
    <div class="search-container">
        <input type="text" id="searchBar" class="form-control" placeholder="Rechercher par ville...">
        <select id="filterType" class="form-control">
            <option value="">Tous les Types</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
        </select>
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
                <!-- Contenu AJAX -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
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
                success: function (response) {
                    $('#examTable').html(response);
                },
                error: function () {
                    alert('Erreur lors de la récupération des examens.');
                }
            });
        }

        // Chargement initial
        fetchExams();

        // Recherche et filtrage
        $('#searchBar').on('input', fetchExams);
        $('#filterType').on('change', fetchExams);

        // Supprimer un examen
        $(document).on('click', '.delete-btn', function () {
            const id = $(this).data('id');
            if (confirm('Êtes-vous sûr de vouloir supprimer cet examen ?')) {
                $.ajax({
                    url: `<?= base_url('ExamsController/deleteExam') ?>/${id}`,
                    method: 'DELETE',
                    success: function (response) {
                        alert(response.message);
                        fetchExams();
                    },
                    error: function () {
                        alert('Erreur lors de la suppression de l’examen.');
                    }
                });
            }
        });

        // Modifier un examen
        $(document).on('click', '.edit-btn', function () {
            const id = $(this).data('id');
            window.location.href = `<?= base_url('ExamsController/editExam') ?>/${id}`;
        });
    });
</script>
<?= $this->endSection() ?>
