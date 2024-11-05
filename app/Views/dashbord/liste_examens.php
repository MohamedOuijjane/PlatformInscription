<?= $this->extend('dashbord/mainlayout') ?>

<?= $this->section('content') ?>
<h3 class="mb-4">Liste des Examens</h3>

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

<script>
    // Script JavaScript pour la recherche et le filtrage
    document.getElementById('searchBar').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#examTable tr');
        rows.forEach(row => {
            const examName = row.cells[1].textContent.toLowerCase();
            row.style.display = examName.includes(searchValue) ? '' : 'none';
        });
    });

    document.getElementById('filterType').addEventListener('change', function() {
        const filterValue = this.value;
        const rows = document.querySelectorAll('#examTable tr');
        rows.forEach(row => {
            const examType = row.cells[1].textContent;
            row.style.display = filterValue === '' || examType.includes(filterValue) ? '' : 'none';
        });
    });
</script>

<?= $this->endSection() ?>
